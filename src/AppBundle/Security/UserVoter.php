<?php

namespace AppBundle\Security;

use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class UserVoter extends Voter
{
    const USER_VIEW_EDIT = 'user_view_edit';
    const USER_EDIT_CURRENT = 'user_edit_current';
    const USER_EDIT_PASSWORD = 'user_edit_password';
    const USER_EDIT_OTHER = 'user_edit_other';
    const USER_IMPORT_CSV = 'user_import_csv';

    protected $attributes = [
        self::USER_VIEW_EDIT,
        self::USER_EDIT_CURRENT,
        self::USER_EDIT_PASSWORD,
        self::USER_EDIT_OTHER,
        self::USER_IMPORT_CSV,
    ];

    /**
     * @param string $attribute
     * @param mixed $subject
     * @return bool
     */
    protected function supports($attribute, $subject)
    {
        if (!in_array($attribute, $this->attributes)) {
            return false;
        }
        return $subject instanceof User;
    }

    /**
     * @param string $attribute
     * @param mixed $subject
     * @param TokenInterface $token
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        switch ($attribute) {
            case self::USER_VIEW_EDIT:
                return self::canViewAndEdit($user, $subject);
            case self::USER_EDIT_CURRENT:
                return self::canEditCurrent($user);
            case self::USER_EDIT_PASSWORD:
                return self::canEditPassword($user);
            case self::USER_EDIT_OTHER:
                return $this->canEditOtherUser($user, $subject);
            case self::USER_IMPORT_CSV:
                return self::canImportUserCsv($user);
            default:
                return false;
        }
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function canViewAndEdit(User $user, User $subject = null)
    {
        if ($user->hasRole('ROLE_ADMIN')) {
            return true;
        }

        if (!$user->getCompany()) {
            return false;
        }

        if ($subject !== null && $subject->hasRole('ROLE_BAIL_OP')) {
            return $user->hasRole('ROLE_BAIL_ADMIN');
        }

        if ($subject !== null && $subject->hasRole('ROLE_DIAG_OP')) {
            return $user->hasRole('ROLE_DIAG_ADMIN');
        }

        return $user->hasRole('ROLE_DIAG_ADMIN')
            || $user->hasRole('ROLE_BAIL_ADMIN');
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function canEditCurrent(User $user)
    {
        return $user->hasRole('ROLE_ADMIN')
            || $user->hasRole('ROLE_DIAG_ADMIN')
            || $user->hasRole('ROLE_BAIL_ADMIN');
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function canEditPassword(User $user)
    {
        return $user->hasRole('ROLE_ADMIN')
            || $user->hasRole('ROLE_BAIL_ADMIN')
            || $user->hasRole('ROLE_DIAG_ADMIN')
            || $user->hasRole('ROLE_BAIL_OP')
            || $user->hasRole('ROLE_DIAG_OP');
    }

    /**
     * @param User $user
     * @param User $subject
     * @return bool
     */
    private function canEditOtherUser(User $user, User $subject)
    {
        if ($user->getId() === $subject->getId()) {
            return true;
        }

        if ($user->hasRole('ROLE_ADMIN')) {
            return true;
        }

        $lessorOk = !$user->getCompany() || !$subject->getCompany() || $user->getCompany()->getId() === $subject->getCompany()->getId();
        $rightsOk = $user->hasRole('ROLE_BAIL_ADMIN') && $subject->hasRole('ROLE_BAIL_OP') || $user->hasRole('ROLE_DIAG_ADMIN') && $subject->hasRole('ROLE_DIAG_OP');

        return $lessorOk && $rightsOk;
    }

    /**
     * @param User $user
     * @return bool
     */
    public static function canImportUserCsv(User $user)
    {
        return $user->hasRole('ROLE_ADMIN');
    }
}
