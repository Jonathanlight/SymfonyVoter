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
        $__internal_192f910692d5ffb27c756fb2b09ab1cad2e74ab432022ffea882371a85d17412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192f910692d5ffb27c756fb2b09ab1cad2e74ab432022ffea882371a85d17412->enter($__internal_192f910692d5ffb27c756fb2b09ab1cad2e74ab432022ffea882371a85d17412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_5354065de741517a3b23aa4ea9e27d9e65b8a4afd15f35ab1e0aa6423862f3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5354065de741517a3b23aa4ea9e27d9e65b8a4afd15f35ab1e0aa6423862f3c7->enter($__internal_5354065de741517a3b23aa4ea9e27d9e65b8a4afd15f35ab1e0aa6423862f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192f910692d5ffb27c756fb2b09ab1cad2e74ab432022ffea882371a85d17412->leave($__internal_192f910692d5ffb27c756fb2b09ab1cad2e74ab432022ffea882371a85d17412_prof);

        
        $__internal_5354065de741517a3b23aa4ea9e27d9e65b8a4afd15f35ab1e0aa6423862f3c7->leave($__internal_5354065de741517a3b23aa4ea9e27d9e65b8a4afd15f35ab1e0aa6423862f3c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c26b3bb8e96f72a975bd1ff549861504f44dc0fa4be1c4421ab2d14765b9f3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26b3bb8e96f72a975bd1ff549861504f44dc0fa4be1c4421ab2d14765b9f3be->enter($__internal_c26b3bb8e96f72a975bd1ff549861504f44dc0fa4be1c4421ab2d14765b9f3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5925e7fad950ba0a4f842e50140cb0bbffb705fb29c85c2bfa7451facb61264b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5925e7fad950ba0a4f842e50140cb0bbffb705fb29c85c2bfa7451facb61264b->enter($__internal_5925e7fad950ba0a4f842e50140cb0bbffb705fb29c85c2bfa7451facb61264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 15
            echo "                                Active
                            ";
        } else {
            // line 17
            echo "                                Not Active
                            ";
        }
        // line 19
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
        
        $__internal_5925e7fad950ba0a4f842e50140cb0bbffb705fb29c85c2bfa7451facb61264b->leave($__internal_5925e7fad950ba0a4f842e50140cb0bbffb705fb29c85c2bfa7451facb61264b_prof);

        
        $__internal_c26b3bb8e96f72a975bd1ff549861504f44dc0fa4be1c4421ab2d14765b9f3be->leave($__internal_c26b3bb8e96f72a975bd1ff549861504f44dc0fa4be1c4421ab2d14765b9f3be_prof);

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
        return array (  71 => 19,  67 => 17,  63 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
