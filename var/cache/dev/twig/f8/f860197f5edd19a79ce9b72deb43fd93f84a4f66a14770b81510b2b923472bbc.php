<?php

/* security/login.html.twig */
class __TwigTemplate_3de6b26ed3467befa18d5179fc542b89b6e4f985891b57e6b4e62af63a520b04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0151842e61c0c76cde68b04ed2b22367e6a01c9b89a37599c3975762a8795bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0151842e61c0c76cde68b04ed2b22367e6a01c9b89a37599c3975762a8795bf1->enter($__internal_0151842e61c0c76cde68b04ed2b22367e6a01c9b89a37599c3975762a8795bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_311898716f94a56e449c6fdeb63c7b74870de21743c89294de9201b4a0654484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311898716f94a56e449c6fdeb63c7b74870de21743c89294de9201b4a0654484->enter($__internal_311898716f94a56e449c6fdeb63c7b74870de21743c89294de9201b4a0654484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0151842e61c0c76cde68b04ed2b22367e6a01c9b89a37599c3975762a8795bf1->leave($__internal_0151842e61c0c76cde68b04ed2b22367e6a01c9b89a37599c3975762a8795bf1_prof);

        
        $__internal_311898716f94a56e449c6fdeb63c7b74870de21743c89294de9201b4a0654484->leave($__internal_311898716f94a56e449c6fdeb63c7b74870de21743c89294de9201b4a0654484_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d822d18eca8eaf37d127a2d2351494c9f4701c7d5de8a3b8f27235616dc1f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d822d18eca8eaf37d127a2d2351494c9f4701c7d5de8a3b8f27235616dc1f2e->enter($__internal_5d822d18eca8eaf37d127a2d2351494c9f4701c7d5de8a3b8f27235616dc1f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d173ac703dbb0fb34cb809904e156722f36ba24e55c5edb8d33308885262242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d173ac703dbb0fb34cb809904e156722f36ba24e55c5edb8d33308885262242->enter($__internal_8d173ac703dbb0fb34cb809904e156722f36ba24e55c5edb8d33308885262242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"section\">

            <!--   Icon Section   -->
            <div class=\"row\">

                ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_slice($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login"), 0, 6));
        echo "

                <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login"), 0, 6), "html", null, true);
        echo "\" method=\"post\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                    <label for=\"password\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                    <button type=\"submit\">login</button>
                </form>
            </div>

        </div>
        <br><br>
    </div>
";
        
        $__internal_8d173ac703dbb0fb34cb809904e156722f36ba24e55c5edb8d33308885262242->leave($__internal_8d173ac703dbb0fb34cb809904e156722f36ba24e55c5edb8d33308885262242_prof);

        
        $__internal_5d822d18eca8eaf37d127a2d2351494c9f4701c7d5de8a3b8f27235616dc1f2e->leave($__internal_5d822d18eca8eaf37d127a2d2351494c9f4701c7d5de8a3b8f27235616dc1f2e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  73 => 16,  68 => 14,  65 => 13,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"section\">

            <!--   Icon Section   -->
            <div class=\"row\">

                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                {{ dump(path('login')|slice(0,6)) }}

                <form action=\"{{ path('login')|slice(0,6) }}\" method=\"post\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                    <label for=\"password\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                    <button type=\"submit\">login</button>
                </form>
            </div>

        </div>
        <br><br>
    </div>
{% endblock %}
", "security/login.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/app/Resources/views/security/login.html.twig");
    }
}
