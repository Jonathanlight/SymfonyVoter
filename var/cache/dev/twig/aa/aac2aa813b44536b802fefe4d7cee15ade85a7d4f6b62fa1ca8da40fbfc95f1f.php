<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_22a64c5dea1a099f2e53cb73187ff8b3e94a0b714a66e5b6f6156f6a07409f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a39c13dc19482c487791ac5a11e6aa89e374d47f5b4b6b3dbc1e4f3676f96116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39c13dc19482c487791ac5a11e6aa89e374d47f5b4b6b3dbc1e4f3676f96116->enter($__internal_a39c13dc19482c487791ac5a11e6aa89e374d47f5b4b6b3dbc1e4f3676f96116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a316ff7277d9e15270ce56fd20fa0713ebdc18448ef370d523e94c3e20d5b54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a316ff7277d9e15270ce56fd20fa0713ebdc18448ef370d523e94c3e20d5b54c->enter($__internal_a316ff7277d9e15270ce56fd20fa0713ebdc18448ef370d523e94c3e20d5b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39c13dc19482c487791ac5a11e6aa89e374d47f5b4b6b3dbc1e4f3676f96116->leave($__internal_a39c13dc19482c487791ac5a11e6aa89e374d47f5b4b6b3dbc1e4f3676f96116_prof);

        
        $__internal_a316ff7277d9e15270ce56fd20fa0713ebdc18448ef370d523e94c3e20d5b54c->leave($__internal_a316ff7277d9e15270ce56fd20fa0713ebdc18448ef370d523e94c3e20d5b54c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9bcee282e03f116fedb70c605d57a4b05a20c1178dbfc5058cf18018bc365967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcee282e03f116fedb70c605d57a4b05a20c1178dbfc5058cf18018bc365967->enter($__internal_9bcee282e03f116fedb70c605d57a4b05a20c1178dbfc5058cf18018bc365967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23a8d1f7399e3421627cf4232bc9d7a424a499edc58aa279fb580f8ec1a2b6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a8d1f7399e3421627cf4232bc9d7a424a499edc58aa279fb580f8ec1a2b6c8->enter($__internal_23a8d1f7399e3421627cf4232bc9d7a424a499edc58aa279fb580f8ec1a2b6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_23a8d1f7399e3421627cf4232bc9d7a424a499edc58aa279fb580f8ec1a2b6c8->leave($__internal_23a8d1f7399e3421627cf4232bc9d7a424a499edc58aa279fb580f8ec1a2b6c8_prof);

        
        $__internal_9bcee282e03f116fedb70c605d57a4b05a20c1178dbfc5058cf18018bc365967->leave($__internal_9bcee282e03f116fedb70c605d57a4b05a20c1178dbfc5058cf18018bc365967_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
