<?php

/* layout.html.twig */
class __TwigTemplate_b78fc06fb4f326f4231ff6e6dc3b243d8433f4d77b88940039c1e1e6920cbd49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28f570c49227200ded089fdd2b7452c69a865570f5b62f19cde83cdc03915d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f570c49227200ded089fdd2b7452c69a865570f5b62f19cde83cdc03915d64->enter($__internal_28f570c49227200ded089fdd2b7452c69a865570f5b62f19cde83cdc03915d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_387c1747a973b50cc6c14cc743a927b8b46c2470ce7261082c9cf284babedab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387c1747a973b50cc6c14cc743a927b8b46c2470ce7261082c9cf284babedab2->enter($__internal_387c1747a973b50cc6c14cc743a927b8b46c2470ce7261082c9cf284babedab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        if (array_key_exists("page_title", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["page_title"] ?? $this->getContext($context, "page_title")), "html", null, true);
            echo " | ";
        }
        echo " Noodle</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
<header>
    <section class=\"navigation\">
        <div class=\"nav-container\">
            <div class=\"brand\">
                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/noodles2.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
            </div>
            <nav>
                <div class=\"nav-mobile\">
                    <a id=\"nav-toggle\" href=\"#!\"><span></span></a>
                </div>
                <ul class=\"nav-list\">
                    <!-- Setting the links to #! will ensure that no action takes place on click. -->
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
                    ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administration");
            echo "\">Administration</a></li>
                    ";
        }
        // line 38
        echo "                    ";
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") == false) && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == false)) && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") == false))) {
            // line 39
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion</a></li>
                        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">S'inscrire</a></li>
                    ";
        } else {
            // line 42
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a></li>

                    ";
        }
        // line 45
        echo "                </ul>
            </nav>
        </div>

    </section>
</header>


";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/quizJs.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_28f570c49227200ded089fdd2b7452c69a865570f5b62f19cde83cdc03915d64->leave($__internal_28f570c49227200ded089fdd2b7452c69a865570f5b62f19cde83cdc03915d64_prof);

        
        $__internal_387c1747a973b50cc6c14cc743a927b8b46c2470ce7261082c9cf284babedab2->leave($__internal_387c1747a973b50cc6c14cc743a927b8b46c2470ce7261082c9cf284babedab2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41211b9393e9741be17fa18f6220692c7035627d1ab4c87eec214898810ae0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41211b9393e9741be17fa18f6220692c7035627d1ab4c87eec214898810ae0fb->enter($__internal_41211b9393e9741be17fa18f6220692c7035627d1ab4c87eec214898810ae0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_506ca0cab9e788de025ae5744ebbe51092fcdc070f9d63c86b6ca5aae137116d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506ca0cab9e788de025ae5744ebbe51092fcdc070f9d63c86b6ca5aae137116d->enter($__internal_506ca0cab9e788de025ae5744ebbe51092fcdc070f9d63c86b6ca5aae137116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/noodles.png"), "html", null, true);
        echo "\">


        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>



    ";
        
        $__internal_506ca0cab9e788de025ae5744ebbe51092fcdc070f9d63c86b6ca5aae137116d->leave($__internal_506ca0cab9e788de025ae5744ebbe51092fcdc070f9d63c86b6ca5aae137116d_prof);

        
        $__internal_41211b9393e9741be17fa18f6220692c7035627d1ab4c87eec214898810ae0fb->leave($__internal_41211b9393e9741be17fa18f6220692c7035627d1ab4c87eec214898810ae0fb_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_657bfb429170a1ab4524bab911819624c0fedd3f2e1eb5f413d94ec5085d9b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657bfb429170a1ab4524bab911819624c0fedd3f2e1eb5f413d94ec5085d9b62->enter($__internal_657bfb429170a1ab4524bab911819624c0fedd3f2e1eb5f413d94ec5085d9b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e0ca6a08478f1aa00f543b9e160614e1169a8ffe28f8c5d4bb21093b6ff37b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ca6a08478f1aa00f543b9e160614e1169a8ffe28f8c5d4bb21093b6ff37b5a->enter($__internal_e0ca6a08478f1aa00f543b9e160614e1169a8ffe28f8c5d4bb21093b6ff37b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 54
        echo "
";
        
        $__internal_e0ca6a08478f1aa00f543b9e160614e1169a8ffe28f8c5d4bb21093b6ff37b5a->leave($__internal_e0ca6a08478f1aa00f543b9e160614e1169a8ffe28f8c5d4bb21093b6ff37b5a_prof);

        
        $__internal_657bfb429170a1ab4524bab911819624c0fedd3f2e1eb5f413d94ec5085d9b62->leave($__internal_657bfb429170a1ab4524bab911819624c0fedd3f2e1eb5f413d94ec5085d9b62_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 54,  171 => 53,  156 => 14,  152 => 13,  146 => 10,  141 => 8,  136 => 7,  127 => 6,  114 => 57,  111 => 56,  109 => 53,  99 => 45,  92 => 42,  87 => 40,  82 => 39,  79 => 38,  73 => 36,  71 => 35,  67 => 34,  54 => 26,  43 => 19,  41 => 6,  33 => 5,  27 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>{% if page_title is defined %} {{ page_title }} | {% endif %} Noodle</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">

        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('images/noodles.png') }}\">


        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>



    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
<header>
    <section class=\"navigation\">
        <div class=\"nav-container\">
            <div class=\"brand\">
                <a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('images/noodles2.png') }}\" class=\"logo\"></a>
            </div>
            <nav>
                <div class=\"nav-mobile\">
                    <a id=\"nav-toggle\" href=\"#!\"><span></span></a>
                </div>
                <ul class=\"nav-list\">
                    <!-- Setting the links to #! will ensure that no action takes place on click. -->
                    <li><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <li><a href=\"{{ path('administration') }}\">Administration</a></li>
                    {% endif %}
                    {% if (is_granted(\"ROLE_TEACHER\") == false and is_granted(\"ROLE_ADMIN\") == false and is_granted(\"ROLE_STUDENT\") == false) %}
                        <li><a href=\"{{ path('login') }}\">Connexion</a></li>
                        <li><a href=\"{{ path('register') }}\">S'inscrire</a></li>
                    {% else %}
                        <li><a href=\"{{ path('logout') }}\">Déconnexion</a></li>

                    {% endif %}
                </ul>
            </nav>
        </div>

    </section>
</header>


{% block content %}

{% endblock %}

<script src=\"{{ asset('js/quizJs.js') }}\"></script>
</body>
</html>", "layout.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/layout.html.twig");
    }
}
