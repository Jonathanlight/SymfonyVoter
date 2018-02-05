<?php

namespace AppBundle\Security;

use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class UtilisateurVoter implements  VoterInterface{

    public function vote(TokenInterface $token, $subject, array $attributes)
    {
        if (!$subject instanceof User){
            return self::ACCESS_ABSTAIN;
        }

        if (!in_array('EDIT', $attributes)){
            return self::ACCESS_ABSTAIN;
        }

        $user = $token->getUser();

        if (!$user instanceof User){
            return self::ACCESS_DENIED;
        }

        if ($user->getActive() === 0){
            return self::ACCESS_DENIED;
        }

        return self::ACCESS_GRANTED;
    }
}