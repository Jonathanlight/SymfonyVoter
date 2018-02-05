<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4cc1f419d6e299be85f55c4eb9e710d5d3091a5cc34b02f8347a02e17a5ac064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_abb13612b64e1f042558226be68a08dcc8d340d18ca2df58e75c5a3a766d1586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb13612b64e1f042558226be68a08dcc8d340d18ca2df58e75c5a3a766d1586->enter($__internal_abb13612b64e1f042558226be68a08dcc8d340d18ca2df58e75c5a3a766d1586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d3a88125630f9d8168b406408532a5631b4b20eba1f9569ef4ad471758247752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a88125630f9d8168b406408532a5631b4b20eba1f9569ef4ad471758247752->enter($__internal_d3a88125630f9d8168b406408532a5631b4b20eba1f9569ef4ad471758247752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb13612b64e1f042558226be68a08dcc8d340d18ca2df58e75c5a3a766d1586->leave($__internal_abb13612b64e1f042558226be68a08dcc8d340d18ca2df58e75c5a3a766d1586_prof);

        
        $__internal_d3a88125630f9d8168b406408532a5631b4b20eba1f9569ef4ad471758247752->leave($__internal_d3a88125630f9d8168b406408532a5631b4b20eba1f9569ef4ad471758247752_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a77716595f1428640b553b42f2a8616ac4b0acbe721c96bfa88033709104d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a77716595f1428640b553b42f2a8616ac4b0acbe721c96bfa88033709104d0d->enter($__internal_0a77716595f1428640b553b42f2a8616ac4b0acbe721c96bfa88033709104d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72cfb792b69061696362a5a3ad2b5d44293ebaca96eb3c2c8da237146e339b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cfb792b69061696362a5a3ad2b5d44293ebaca96eb3c2c8da237146e339b72->enter($__internal_72cfb792b69061696362a5a3ad2b5d44293ebaca96eb3c2c8da237146e339b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_72cfb792b69061696362a5a3ad2b5d44293ebaca96eb3c2c8da237146e339b72->leave($__internal_72cfb792b69061696362a5a3ad2b5d44293ebaca96eb3c2c8da237146e339b72_prof);

        
        $__internal_0a77716595f1428640b553b42f2a8616ac4b0acbe721c96bfa88033709104d0d->leave($__internal_0a77716595f1428640b553b42f2a8616ac4b0acbe721c96bfa88033709104d0d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55e9000ef4b72abd1cb8dd83526afcd8187b636695dbb74842292cd28b888c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e9000ef4b72abd1cb8dd83526afcd8187b636695dbb74842292cd28b888c4f->enter($__internal_55e9000ef4b72abd1cb8dd83526afcd8187b636695dbb74842292cd28b888c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_936ccfce1e86be84a12737981f90b0a26e6048dc97076f148f092c17ff8bdc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936ccfce1e86be84a12737981f90b0a26e6048dc97076f148f092c17ff8bdc67->enter($__internal_936ccfce1e86be84a12737981f90b0a26e6048dc97076f148f092c17ff8bdc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_936ccfce1e86be84a12737981f90b0a26e6048dc97076f148f092c17ff8bdc67->leave($__internal_936ccfce1e86be84a12737981f90b0a26e6048dc97076f148f092c17ff8bdc67_prof);

        
        $__internal_55e9000ef4b72abd1cb8dd83526afcd8187b636695dbb74842292cd28b888c4f->leave($__internal_55e9000ef4b72abd1cb8dd83526afcd8187b636695dbb74842292cd28b888c4f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c2b13e8317fb80c70f28e59becbdd6d9434319fa71f1f9610920c6f773290ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2b13e8317fb80c70f28e59becbdd6d9434319fa71f1f9610920c6f773290ff->enter($__internal_9c2b13e8317fb80c70f28e59becbdd6d9434319fa71f1f9610920c6f773290ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29e5d583ed405d76553653056a2a1153cfbf172d302266da3fabea300e958a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e5d583ed405d76553653056a2a1153cfbf172d302266da3fabea300e958a2d->enter($__internal_29e5d583ed405d76553653056a2a1153cfbf172d302266da3fabea300e958a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_29e5d583ed405d76553653056a2a1153cfbf172d302266da3fabea300e958a2d->leave($__internal_29e5d583ed405d76553653056a2a1153cfbf172d302266da3fabea300e958a2d_prof);

        
        $__internal_9c2b13e8317fb80c70f28e59becbdd6d9434319fa71f1f9610920c6f773290ff->leave($__internal_9c2b13e8317fb80c70f28e59becbdd6d9434319fa71f1f9610920c6f773290ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
