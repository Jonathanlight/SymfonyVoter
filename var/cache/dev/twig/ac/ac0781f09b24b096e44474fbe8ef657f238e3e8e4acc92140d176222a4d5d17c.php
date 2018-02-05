<?php

/* base.html.twig */
class __TwigTemplate_886c1b70435d387549d9d68eca962f5f84ed0580117c741f70daece1a19cce62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf80d750ee7919826481837b13c0d50e86a616689626bddfc703bb12dcbfee0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf80d750ee7919826481837b13c0d50e86a616689626bddfc703bb12dcbfee0f->enter($__internal_cf80d750ee7919826481837b13c0d50e86a616689626bddfc703bb12dcbfee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9cf7e2a349a91222fbf4611b0094c703c5573eb1cdb5b39da45b3c8b2c018b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf7e2a349a91222fbf4611b0094c703c5573eb1cdb5b39da45b3c8b2c018b2d->enter($__internal_9cf7e2a349a91222fbf4611b0094c703c5573eb1cdb5b39da45b3c8b2c018b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
    <nav class=\"light-blue lighten-1\" role=\"navigation\">
        <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("home");
        echo "\" class=\"brand-logo\">Logo</a>

            <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
        echo "\">Login</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("register");
        echo "\">Register</a></li>
                <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\">fr</a></li>
                <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">en</a></li>
            </ul>


            <ul id=\"nav-mobile\" class=\"side-nav\">
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("edit");
        echo "\">Edit</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show");
        echo "\">Show</a></li>
                <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\">fr</a></li>
                <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">en</a></li>
            </ul>
            <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
        </div>
    </nav>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center green-text\"> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.title"), "html", null, true);
        echo "</h1>
            <div class=\"row center\">
                <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <br><br>

        </div>
    </div>
    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
    </body>
</html>
";
        
        $__internal_cf80d750ee7919826481837b13c0d50e86a616689626bddfc703bb12dcbfee0f->leave($__internal_cf80d750ee7919826481837b13c0d50e86a616689626bddfc703bb12dcbfee0f_prof);

        
        $__internal_9cf7e2a349a91222fbf4611b0094c703c5573eb1cdb5b39da45b3c8b2c018b2d->leave($__internal_9cf7e2a349a91222fbf4611b0094c703c5573eb1cdb5b39da45b3c8b2c018b2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_207268912dc79898f87ab32b4952892cb1bab13ac3081bf75fed5d6843e29633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_207268912dc79898f87ab32b4952892cb1bab13ac3081bf75fed5d6843e29633->enter($__internal_207268912dc79898f87ab32b4952892cb1bab13ac3081bf75fed5d6843e29633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffe71724db5ed7a815f33b8255431af0a5d66d3b151fd5cd5203b5dc86f31e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe71724db5ed7a815f33b8255431af0a5d66d3b151fd5cd5203b5dc86f31e2d->enter($__internal_ffe71724db5ed7a815f33b8255431af0a5d66d3b151fd5cd5203b5dc86f31e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ffe71724db5ed7a815f33b8255431af0a5d66d3b151fd5cd5203b5dc86f31e2d->leave($__internal_ffe71724db5ed7a815f33b8255431af0a5d66d3b151fd5cd5203b5dc86f31e2d_prof);

        
        $__internal_207268912dc79898f87ab32b4952892cb1bab13ac3081bf75fed5d6843e29633->leave($__internal_207268912dc79898f87ab32b4952892cb1bab13ac3081bf75fed5d6843e29633_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c1cad720817ea95d135e3d4e032cd5992f8c3c9090053c1b5d1f563502125c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1cad720817ea95d135e3d4e032cd5992f8c3c9090053c1b5d1f563502125c5->enter($__internal_5c1cad720817ea95d135e3d4e032cd5992f8c3c9090053c1b5d1f563502125c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c03db3c9f3dd6b13998b3710b21253d0d98c42f63e76e51675d17a5e85d1b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03db3c9f3dd6b13998b3710b21253d0d98c42f63e76e51675d17a5e85d1b3d6->enter($__internal_c03db3c9f3dd6b13998b3710b21253d0d98c42f63e76e51675d17a5e85d1b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c03db3c9f3dd6b13998b3710b21253d0d98c42f63e76e51675d17a5e85d1b3d6->leave($__internal_c03db3c9f3dd6b13998b3710b21253d0d98c42f63e76e51675d17a5e85d1b3d6_prof);

        
        $__internal_5c1cad720817ea95d135e3d4e032cd5992f8c3c9090053c1b5d1f563502125c5->leave($__internal_5c1cad720817ea95d135e3d4e032cd5992f8c3c9090053c1b5d1f563502125c5_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_7213e8017865fb1aba9615d5ef71ac19c815f08ca94e159fba7240330e1564e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7213e8017865fb1aba9615d5ef71ac19c815f08ca94e159fba7240330e1564e9->enter($__internal_7213e8017865fb1aba9615d5ef71ac19c815f08ca94e159fba7240330e1564e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa479eaa5feb12e3dfd60cd83b744b1dfde66fc80805c96e68646e5541fd4e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa479eaa5feb12e3dfd60cd83b744b1dfde66fc80805c96e68646e5541fd4e55->enter($__internal_aa479eaa5feb12e3dfd60cd83b744b1dfde66fc80805c96e68646e5541fd4e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa479eaa5feb12e3dfd60cd83b744b1dfde66fc80805c96e68646e5541fd4e55->leave($__internal_aa479eaa5feb12e3dfd60cd83b744b1dfde66fc80805c96e68646e5541fd4e55_prof);

        
        $__internal_7213e8017865fb1aba9615d5ef71ac19c815f08ca94e159fba7240330e1564e9->leave($__internal_7213e8017865fb1aba9615d5ef71ac19c815f08ca94e159fba7240330e1564e9_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a5ac40a16c6ba4f37b56eee5e3077c971237da040f76fe05dafdd21df5b7f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5ac40a16c6ba4f37b56eee5e3077c971237da040f76fe05dafdd21df5b7f46->enter($__internal_9a5ac40a16c6ba4f37b56eee5e3077c971237da040f76fe05dafdd21df5b7f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7a4b68870e3b8585c5f8c4fedc2104bd1aff9fe7f594dbcb4eb20bc12468d861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4b68870e3b8585c5f8c4fedc2104bd1aff9fe7f594dbcb4eb20bc12468d861->enter($__internal_7a4b68870e3b8585c5f8c4fedc2104bd1aff9fe7f594dbcb4eb20bc12468d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a4b68870e3b8585c5f8c4fedc2104bd1aff9fe7f594dbcb4eb20bc12468d861->leave($__internal_7a4b68870e3b8585c5f8c4fedc2104bd1aff9fe7f594dbcb4eb20bc12468d861_prof);

        
        $__internal_9a5ac40a16c6ba4f37b56eee5e3077c971237da040f76fe05dafdd21df5b7f46->leave($__internal_9a5ac40a16c6ba4f37b56eee5e3077c971237da040f76fe05dafdd21df5b7f46_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 48,  172 => 47,  155 => 13,  137 => 5,  121 => 49,  118 => 48,  116 => 47,  105 => 39,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  56 => 17,  51 => 14,  49 => 13,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!--Import Google Icon Font-->
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    <nav class=\"light-blue lighten-1\" role=\"navigation\">
        <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"{{ url('home') }}\" class=\"brand-logo\">Logo</a>

            <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"{{ url('login') }}\">Login</a></li>
                <li><a href=\"{{ url('register') }}\">Register</a></li>
                <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">fr</a></li>
                <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">en</a></li>
            </ul>


            <ul id=\"nav-mobile\" class=\"side-nav\">
                <li><a href=\"{{ url('edit') }}\">Edit</a></li>
                <li><a href=\"{{ url('show') }}\">Show</a></li>
                <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">fr</a></li>
                <li><a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">en</a></li>
            </ul>
            <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
        </div>
    </nav>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center green-text\"> {{ 'base.title' | trans }}</h1>
            <div class=\"row center\">
                <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <br><br>

        </div>
    </div>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
    </body>
</html>
", "base.html.twig", "/Users/jkablan/Desktop/Work/web/SymfonyVoter/app/Resources/views/base.html.twig");
    }
}
