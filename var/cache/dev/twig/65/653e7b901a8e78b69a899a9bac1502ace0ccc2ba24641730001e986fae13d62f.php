<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cf87945dc46870d0a47bcda5fa4941638ec2457ee267cd083784caf1fc0e869b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc5a3b75c56b171ca1e3086dd0a1613bd58315fb439f17fb75c7ec27e0e5f019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5a3b75c56b171ca1e3086dd0a1613bd58315fb439f17fb75c7ec27e0e5f019->enter($__internal_bc5a3b75c56b171ca1e3086dd0a1613bd58315fb439f17fb75c7ec27e0e5f019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e34b9aea7e181fe8f94b314ac5be15293968b7d508499efadd97b1346cb84e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34b9aea7e181fe8f94b314ac5be15293968b7d508499efadd97b1346cb84e59->enter($__internal_e34b9aea7e181fe8f94b314ac5be15293968b7d508499efadd97b1346cb84e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5a3b75c56b171ca1e3086dd0a1613bd58315fb439f17fb75c7ec27e0e5f019->leave($__internal_bc5a3b75c56b171ca1e3086dd0a1613bd58315fb439f17fb75c7ec27e0e5f019_prof);

        
        $__internal_e34b9aea7e181fe8f94b314ac5be15293968b7d508499efadd97b1346cb84e59->leave($__internal_e34b9aea7e181fe8f94b314ac5be15293968b7d508499efadd97b1346cb84e59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7547790e1a4c5abc3e8f88909da400594db6d738aae790316945ee67939add5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7547790e1a4c5abc3e8f88909da400594db6d738aae790316945ee67939add5->enter($__internal_a7547790e1a4c5abc3e8f88909da400594db6d738aae790316945ee67939add5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cb811ce3586794f8bb1c10664c0620124f62affb1b5bbdaf05a289eb20798660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb811ce3586794f8bb1c10664c0620124f62affb1b5bbdaf05a289eb20798660->enter($__internal_cb811ce3586794f8bb1c10664c0620124f62affb1b5bbdaf05a289eb20798660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb811ce3586794f8bb1c10664c0620124f62affb1b5bbdaf05a289eb20798660->leave($__internal_cb811ce3586794f8bb1c10664c0620124f62affb1b5bbdaf05a289eb20798660_prof);

        
        $__internal_a7547790e1a4c5abc3e8f88909da400594db6d738aae790316945ee67939add5->leave($__internal_a7547790e1a4c5abc3e8f88909da400594db6d738aae790316945ee67939add5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5eb2259bbe8d6be4fb1b89eb55f23598b0f7d30e16e80b1677d91ed218057e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb2259bbe8d6be4fb1b89eb55f23598b0f7d30e16e80b1677d91ed218057e86->enter($__internal_5eb2259bbe8d6be4fb1b89eb55f23598b0f7d30e16e80b1677d91ed218057e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b0a57edf93a0e3f8aed57102e035e1e129eb7031d5692a76e61188b9b414614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0a57edf93a0e3f8aed57102e035e1e129eb7031d5692a76e61188b9b414614->enter($__internal_0b0a57edf93a0e3f8aed57102e035e1e129eb7031d5692a76e61188b9b414614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b0a57edf93a0e3f8aed57102e035e1e129eb7031d5692a76e61188b9b414614->leave($__internal_0b0a57edf93a0e3f8aed57102e035e1e129eb7031d5692a76e61188b9b414614_prof);

        
        $__internal_5eb2259bbe8d6be4fb1b89eb55f23598b0f7d30e16e80b1677d91ed218057e86->leave($__internal_5eb2259bbe8d6be4fb1b89eb55f23598b0f7d30e16e80b1677d91ed218057e86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bab9d97fd5347079cf326bbab935d218593246f7e0e4816b3b789be7699a987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bab9d97fd5347079cf326bbab935d218593246f7e0e4816b3b789be7699a987->enter($__internal_5bab9d97fd5347079cf326bbab935d218593246f7e0e4816b3b789be7699a987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c5e9db88969f113111415f85ee22326a093067c2951bdeff9c54da674d05c180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e9db88969f113111415f85ee22326a093067c2951bdeff9c54da674d05c180->enter($__internal_c5e9db88969f113111415f85ee22326a093067c2951bdeff9c54da674d05c180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5e9db88969f113111415f85ee22326a093067c2951bdeff9c54da674d05c180->leave($__internal_c5e9db88969f113111415f85ee22326a093067c2951bdeff9c54da674d05c180_prof);

        
        $__internal_5bab9d97fd5347079cf326bbab935d218593246f7e0e4816b3b789be7699a987->leave($__internal_5bab9d97fd5347079cf326bbab935d218593246f7e0e4816b3b789be7699a987_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
