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
        $__internal_764f710a967b9f2e55ba12d2ce41c11d2c6fb93bad1b288af02820b238cb344d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764f710a967b9f2e55ba12d2ce41c11d2c6fb93bad1b288af02820b238cb344d->enter($__internal_764f710a967b9f2e55ba12d2ce41c11d2c6fb93bad1b288af02820b238cb344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9e3ee82f7f40e477218b8b7190bc9521de101d95333ae15ee8076bf914f2e46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3ee82f7f40e477218b8b7190bc9521de101d95333ae15ee8076bf914f2e46f->enter($__internal_9e3ee82f7f40e477218b8b7190bc9521de101d95333ae15ee8076bf914f2e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        </div>
    </div>
    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    <!--Import jQuery before materialize.js-->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
    </body>
</html>
";
        
        $__internal_764f710a967b9f2e55ba12d2ce41c11d2c6fb93bad1b288af02820b238cb344d->leave($__internal_764f710a967b9f2e55ba12d2ce41c11d2c6fb93bad1b288af02820b238cb344d_prof);

        
        $__internal_9e3ee82f7f40e477218b8b7190bc9521de101d95333ae15ee8076bf914f2e46f->leave($__internal_9e3ee82f7f40e477218b8b7190bc9521de101d95333ae15ee8076bf914f2e46f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82423ffdc566b091973f26b4786fc37f4943d5672333b0cbc6b268eafe113f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82423ffdc566b091973f26b4786fc37f4943d5672333b0cbc6b268eafe113f22->enter($__internal_82423ffdc566b091973f26b4786fc37f4943d5672333b0cbc6b268eafe113f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25a411755095db305f8e02e5758b20bbe42feaf20b72d6939510c6d868a846d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a411755095db305f8e02e5758b20bbe42feaf20b72d6939510c6d868a846d5->enter($__internal_25a411755095db305f8e02e5758b20bbe42feaf20b72d6939510c6d868a846d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_25a411755095db305f8e02e5758b20bbe42feaf20b72d6939510c6d868a846d5->leave($__internal_25a411755095db305f8e02e5758b20bbe42feaf20b72d6939510c6d868a846d5_prof);

        
        $__internal_82423ffdc566b091973f26b4786fc37f4943d5672333b0cbc6b268eafe113f22->leave($__internal_82423ffdc566b091973f26b4786fc37f4943d5672333b0cbc6b268eafe113f22_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3432aaee98ef8b6b38150925e01b9794b906142dad4a5d5ea8f3b1aa07e8e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3432aaee98ef8b6b38150925e01b9794b906142dad4a5d5ea8f3b1aa07e8e75->enter($__internal_c3432aaee98ef8b6b38150925e01b9794b906142dad4a5d5ea8f3b1aa07e8e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cf1eb49792e8d53bc357a0123c0b3713ef62361adc55addac99592f9bc92daee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1eb49792e8d53bc357a0123c0b3713ef62361adc55addac99592f9bc92daee->enter($__internal_cf1eb49792e8d53bc357a0123c0b3713ef62361adc55addac99592f9bc92daee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf1eb49792e8d53bc357a0123c0b3713ef62361adc55addac99592f9bc92daee->leave($__internal_cf1eb49792e8d53bc357a0123c0b3713ef62361adc55addac99592f9bc92daee_prof);

        
        $__internal_c3432aaee98ef8b6b38150925e01b9794b906142dad4a5d5ea8f3b1aa07e8e75->leave($__internal_c3432aaee98ef8b6b38150925e01b9794b906142dad4a5d5ea8f3b1aa07e8e75_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5b55f9a8948c3af6be0c94fe4a7b504b87873177948fe7a5e895a8e4c4e526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5b55f9a8948c3af6be0c94fe4a7b504b87873177948fe7a5e895a8e4c4e526->enter($__internal_3d5b55f9a8948c3af6be0c94fe4a7b504b87873177948fe7a5e895a8e4c4e526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8849d7fd5e4ddd481b22fc5f4de118457b41173a2ea811248b5427b8925498d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8849d7fd5e4ddd481b22fc5f4de118457b41173a2ea811248b5427b8925498d->enter($__internal_e8849d7fd5e4ddd481b22fc5f4de118457b41173a2ea811248b5427b8925498d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8849d7fd5e4ddd481b22fc5f4de118457b41173a2ea811248b5427b8925498d->leave($__internal_e8849d7fd5e4ddd481b22fc5f4de118457b41173a2ea811248b5427b8925498d_prof);

        
        $__internal_3d5b55f9a8948c3af6be0c94fe4a7b504b87873177948fe7a5e895a8e4c4e526->leave($__internal_3d5b55f9a8948c3af6be0c94fe4a7b504b87873177948fe7a5e895a8e4c4e526_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_988a98a8099ef9a4b4441b0298026eff443ebfc5dfde33714fe34a783edec4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988a98a8099ef9a4b4441b0298026eff443ebfc5dfde33714fe34a783edec4f4->enter($__internal_988a98a8099ef9a4b4441b0298026eff443ebfc5dfde33714fe34a783edec4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f37b9acd46ad85fc59990e59330259ad576fdc510b4319160f2cd5283389cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f37b9acd46ad85fc59990e59330259ad576fdc510b4319160f2cd5283389cdd->enter($__internal_1f37b9acd46ad85fc59990e59330259ad576fdc510b4319160f2cd5283389cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1f37b9acd46ad85fc59990e59330259ad576fdc510b4319160f2cd5283389cdd->leave($__internal_1f37b9acd46ad85fc59990e59330259ad576fdc510b4319160f2cd5283389cdd_prof);

        
        $__internal_988a98a8099ef9a4b4441b0298026eff443ebfc5dfde33714fe34a783edec4f4->leave($__internal_988a98a8099ef9a4b4441b0298026eff443ebfc5dfde33714fe34a783edec4f4_prof);

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
        return array (  184 => 43,  167 => 42,  150 => 13,  132 => 5,  116 => 44,  113 => 43,  111 => 42,  105 => 39,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  56 => 17,  51 => 14,  49 => 13,  39 => 6,  35 => 5,  29 => 1,);
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
