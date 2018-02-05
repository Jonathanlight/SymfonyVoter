<?php

/* security/register.html.twig */
class __TwigTemplate_29e7d18fb025bb67696064cac35dac7fa55bd0a55e4f35f960867b2fc682d95b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
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
        $__internal_dcf12c96392bdc035cfcc9d06a2cfdc6562743f882a608a320a15015741b13a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf12c96392bdc035cfcc9d06a2cfdc6562743f882a608a320a15015741b13a9->enter($__internal_dcf12c96392bdc035cfcc9d06a2cfdc6562743f882a608a320a15015741b13a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_1b32030bf8c801ee2bb9233029ca0c3d1e2680d84a4be8b5633001c7dcf82837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b32030bf8c801ee2bb9233029ca0c3d1e2680d84a4be8b5633001c7dcf82837->enter($__internal_1b32030bf8c801ee2bb9233029ca0c3d1e2680d84a4be8b5633001c7dcf82837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcf12c96392bdc035cfcc9d06a2cfdc6562743f882a608a320a15015741b13a9->leave($__internal_dcf12c96392bdc035cfcc9d06a2cfdc6562743f882a608a320a15015741b13a9_prof);

        
        $__internal_1b32030bf8c801ee2bb9233029ca0c3d1e2680d84a4be8b5633001c7dcf82837->leave($__internal_1b32030bf8c801ee2bb9233029ca0c3d1e2680d84a4be8b5633001c7dcf82837_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a44136b0f88bd8aed888b92917849e0ca0f3017887eb04dd6f01265b7a42928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a44136b0f88bd8aed888b92917849e0ca0f3017887eb04dd6f01265b7a42928->enter($__internal_8a44136b0f88bd8aed888b92917849e0ca0f3017887eb04dd6f01265b7a42928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80faebfbcdee785bb824347fa4751d3c9299ce2f01ef13ea25171aa02b44ebf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80faebfbcdee785bb824347fa4751d3c9299ce2f01ef13ea25171aa02b44ebf7->enter($__internal_80faebfbcdee785bb824347fa4751d3c9299ce2f01ef13ea25171aa02b44ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"section\">

            <!--   Icon Section   -->
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_slice($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register"), 0, 9));
        echo "
            <div class=\"row\">
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("action" => twig_slice($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register"), 0, 9))));
        echo "

            </div>

        </div>
        <br><br>
    </div>
";
        
        $__internal_80faebfbcdee785bb824347fa4751d3c9299ce2f01ef13ea25171aa02b44ebf7->leave($__internal_80faebfbcdee785bb824347fa4751d3c9299ce2f01ef13ea25171aa02b44ebf7_prof);

        
        $__internal_8a44136b0f88bd8aed888b92917849e0ca0f3017887eb04dd6f01265b7a42928->leave($__internal_8a44136b0f88bd8aed888b92917849e0ca0f3017887eb04dd6f01265b7a42928_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
            {{ dump(path('register')|slice(0,9)) }}
            <div class=\"row\">
                {{ form(form, {attr: {action: path('register')|slice(0,9) }}) }}

            </div>

        </div>
        <br><br>
    </div>
{% endblock %}
", "security/register.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/app/Resources/views/security/register.html.twig");
    }
}
