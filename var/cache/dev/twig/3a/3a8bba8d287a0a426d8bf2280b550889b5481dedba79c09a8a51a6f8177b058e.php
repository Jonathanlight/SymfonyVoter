<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_df6483baef0bce4128deb7eb4d11a397309abc1100bd8092807769a686eb4c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de92e27872d010f4469c4297c2c450d3df8ddc7a26321755620e36fc6cd1cba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de92e27872d010f4469c4297c2c450d3df8ddc7a26321755620e36fc6cd1cba9->enter($__internal_de92e27872d010f4469c4297c2c450d3df8ddc7a26321755620e36fc6cd1cba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7e71f461e6de23c95b735e858c53ba52cd58d397eed2e4507169d16c481ebb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e71f461e6de23c95b735e858c53ba52cd58d397eed2e4507169d16c481ebb71->enter($__internal_7e71f461e6de23c95b735e858c53ba52cd58d397eed2e4507169d16c481ebb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_de92e27872d010f4469c4297c2c450d3df8ddc7a26321755620e36fc6cd1cba9->leave($__internal_de92e27872d010f4469c4297c2c450d3df8ddc7a26321755620e36fc6cd1cba9_prof);

        
        $__internal_7e71f461e6de23c95b735e858c53ba52cd58d397eed2e4507169d16c481ebb71->leave($__internal_7e71f461e6de23c95b735e858c53ba52cd58d397eed2e4507169d16c481ebb71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_081ee015520f2a4934255ba5fa85f8230704a566fc4fc4fc4b7ac94620f41238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081ee015520f2a4934255ba5fa85f8230704a566fc4fc4fc4b7ac94620f41238->enter($__internal_081ee015520f2a4934255ba5fa85f8230704a566fc4fc4fc4b7ac94620f41238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2c23baaece866b1d726256e3db54aa8f22f8b9a7a50be19ff7ecd236d8d2172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c23baaece866b1d726256e3db54aa8f22f8b9a7a50be19ff7ecd236d8d2172->enter($__internal_c2c23baaece866b1d726256e3db54aa8f22f8b9a7a50be19ff7ecd236d8d2172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c2c23baaece866b1d726256e3db54aa8f22f8b9a7a50be19ff7ecd236d8d2172->leave($__internal_c2c23baaece866b1d726256e3db54aa8f22f8b9a7a50be19ff7ecd236d8d2172_prof);

        
        $__internal_081ee015520f2a4934255ba5fa85f8230704a566fc4fc4fc4b7ac94620f41238->leave($__internal_081ee015520f2a4934255ba5fa85f8230704a566fc4fc4fc4b7ac94620f41238_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2579fef1a6415d34df01619293e36da93d76390eba5a3e89ef1429dcda0418aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2579fef1a6415d34df01619293e36da93d76390eba5a3e89ef1429dcda0418aa->enter($__internal_2579fef1a6415d34df01619293e36da93d76390eba5a3e89ef1429dcda0418aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bcbc35936d28b7d48cf4f68123ce8cf9759bfe92cac86428fb8223117ef096b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbc35936d28b7d48cf4f68123ce8cf9759bfe92cac86428fb8223117ef096b5->enter($__internal_bcbc35936d28b7d48cf4f68123ce8cf9759bfe92cac86428fb8223117ef096b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bcbc35936d28b7d48cf4f68123ce8cf9759bfe92cac86428fb8223117ef096b5->leave($__internal_bcbc35936d28b7d48cf4f68123ce8cf9759bfe92cac86428fb8223117ef096b5_prof);

        
        $__internal_2579fef1a6415d34df01619293e36da93d76390eba5a3e89ef1429dcda0418aa->leave($__internal_2579fef1a6415d34df01619293e36da93d76390eba5a3e89ef1429dcda0418aa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3943df0b3b155ae305a0db528deff07c5d7070db224631463e75fc43d92ec01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3943df0b3b155ae305a0db528deff07c5d7070db224631463e75fc43d92ec01c->enter($__internal_3943df0b3b155ae305a0db528deff07c5d7070db224631463e75fc43d92ec01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1d5028d91d086262467dd885a96f5764e7f8a137046c7912cc6b39b00bd94fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d5028d91d086262467dd885a96f5764e7f8a137046c7912cc6b39b00bd94fa->enter($__internal_d1d5028d91d086262467dd885a96f5764e7f8a137046c7912cc6b39b00bd94fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d1d5028d91d086262467dd885a96f5764e7f8a137046c7912cc6b39b00bd94fa->leave($__internal_d1d5028d91d086262467dd885a96f5764e7f8a137046c7912cc6b39b00bd94fa_prof);

        
        $__internal_3943df0b3b155ae305a0db528deff07c5d7070db224631463e75fc43d92ec01c->leave($__internal_3943df0b3b155ae305a0db528deff07c5d7070db224631463e75fc43d92ec01c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
