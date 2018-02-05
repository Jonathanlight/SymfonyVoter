<?php

/* default/index.html.twig */
class __TwigTemplate_7b749c18355ac39bfe62c7604b3bc1bb2efee814c2d2fe587c12c74252275c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_b1e75361ae820408905df5723a2e570b2edbad91444eac0d4e291650cd860b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e75361ae820408905df5723a2e570b2edbad91444eac0d4e291650cd860b88->enter($__internal_b1e75361ae820408905df5723a2e570b2edbad91444eac0d4e291650cd860b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_d65c2f7b0fe10859310f9ea01734a23ce0421aa3b8a4f9d42cd3edda950d0e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65c2f7b0fe10859310f9ea01734a23ce0421aa3b8a4f9d42cd3edda950d0e4a->enter($__internal_d65c2f7b0fe10859310f9ea01734a23ce0421aa3b8a4f9d42cd3edda950d0e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e75361ae820408905df5723a2e570b2edbad91444eac0d4e291650cd860b88->leave($__internal_b1e75361ae820408905df5723a2e570b2edbad91444eac0d4e291650cd860b88_prof);

        
        $__internal_d65c2f7b0fe10859310f9ea01734a23ce0421aa3b8a4f9d42cd3edda950d0e4a->leave($__internal_d65c2f7b0fe10859310f9ea01734a23ce0421aa3b8a4f9d42cd3edda950d0e4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a14839396237da9fe2ca0821d3a70bb54f4993f00d619f332e0c64070ad9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a14839396237da9fe2ca0821d3a70bb54f4993f00d619f332e0c64070ad9a8->enter($__internal_65a14839396237da9fe2ca0821d3a70bb54f4993f00d619f332e0c64070ad9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfee2fbd2a28da6dffedf34242bc2eb103aa2226bc1e495d84801450db813ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfee2fbd2a28da6dffedf34242bc2eb103aa2226bc1e495d84801450db813ae5->enter($__internal_dfee2fbd2a28da6dffedf34242bc2eb103aa2226bc1e495d84801450db813ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"section\">
            <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col s12 m12\">
                    <div class=\"icon-block\">
                        <h2 class=\"center light-blue-text\"><i class=\"material-icons\">flash_on</i></h2>
                        <h5 class=\"center\">
                            User is
                            ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 14
            echo "                                Active
                            ";
        } else {
            // line 16
            echo "                                Not Active
                            ";
        }
        // line 18
        echo "                        </h5>
                        <p class=\"light\">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.
                            Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

            </div>

        </div>
        <br><br>
    </div>
";
        
        $__internal_dfee2fbd2a28da6dffedf34242bc2eb103aa2226bc1e495d84801450db813ae5->leave($__internal_dfee2fbd2a28da6dffedf34242bc2eb103aa2226bc1e495d84801450db813ae5_prof);

        
        $__internal_65a14839396237da9fe2ca0821d3a70bb54f4993f00d619f332e0c64070ad9a8->leave($__internal_65a14839396237da9fe2ca0821d3a70bb54f4993f00d619f332e0c64070ad9a8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 16,  62 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
                <div class=\"col s12 m12\">
                    <div class=\"icon-block\">
                        <h2 class=\"center light-blue-text\"><i class=\"material-icons\">flash_on</i></h2>
                        <h5 class=\"center\">
                            User is
                            {% if is_granted('EDIT', user) %}
                                Active
                            {% else %}
                                Not Active
                            {% endif %}
                        </h5>
                        <p class=\"light\">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.
                            Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

            </div>

        </div>
        <br><br>
    </div>
{% endblock %}
", "default/index.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/app/Resources/views/default/index.html.twig");
    }
}
