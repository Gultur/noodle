<?php

/* layout.html.twig */
class __TwigTemplate_16283b047e51001fa551c6613f506d1938e559cb8b8d512c52666fb709a7f757 extends Twig_Template
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
        $__internal_28263d27f3482747072f4ddc4eabe76e3cde4cd3d79512d9b4c273a022905da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28263d27f3482747072f4ddc4eabe76e3cde4cd3d79512d9b4c273a022905da8->enter($__internal_28263d27f3482747072f4ddc4eabe76e3cde4cd3d79512d9b4c273a022905da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_34f4bb63303cde98e4822ff90cb5c243020f80b388a6f8570936a60aad2380a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f4bb63303cde98e4822ff90cb5c243020f80b388a6f8570936a60aad2380a1->enter($__internal_34f4bb63303cde98e4822ff90cb5c243020f80b388a6f8570936a60aad2380a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_28263d27f3482747072f4ddc4eabe76e3cde4cd3d79512d9b4c273a022905da8->leave($__internal_28263d27f3482747072f4ddc4eabe76e3cde4cd3d79512d9b4c273a022905da8_prof);

        
        $__internal_34f4bb63303cde98e4822ff90cb5c243020f80b388a6f8570936a60aad2380a1->leave($__internal_34f4bb63303cde98e4822ff90cb5c243020f80b388a6f8570936a60aad2380a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1766daf655e944f6f03b4bbea1ec9892880bfe55bd9e2e3ec35953186f17ceff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1766daf655e944f6f03b4bbea1ec9892880bfe55bd9e2e3ec35953186f17ceff->enter($__internal_1766daf655e944f6f03b4bbea1ec9892880bfe55bd9e2e3ec35953186f17ceff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_17d53962f1914fc66c01c1408ef65c7eac6e9383b50f33e5948ecbf066a8db0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d53962f1914fc66c01c1408ef65c7eac6e9383b50f33e5948ecbf066a8db0d->enter($__internal_17d53962f1914fc66c01c1408ef65c7eac6e9383b50f33e5948ecbf066a8db0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_17d53962f1914fc66c01c1408ef65c7eac6e9383b50f33e5948ecbf066a8db0d->leave($__internal_17d53962f1914fc66c01c1408ef65c7eac6e9383b50f33e5948ecbf066a8db0d_prof);

        
        $__internal_1766daf655e944f6f03b4bbea1ec9892880bfe55bd9e2e3ec35953186f17ceff->leave($__internal_1766daf655e944f6f03b4bbea1ec9892880bfe55bd9e2e3ec35953186f17ceff_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_efa54b071a416f23929907ada37d4a11ba804b3370db3ac14d8441c9aa8eb046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa54b071a416f23929907ada37d4a11ba804b3370db3ac14d8441c9aa8eb046->enter($__internal_efa54b071a416f23929907ada37d4a11ba804b3370db3ac14d8441c9aa8eb046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87cc7d5494733dec3e4ad11b5d3f1c7054611ea6749866404e6abc3bb44e8322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87cc7d5494733dec3e4ad11b5d3f1c7054611ea6749866404e6abc3bb44e8322->enter($__internal_87cc7d5494733dec3e4ad11b5d3f1c7054611ea6749866404e6abc3bb44e8322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 54
        echo "
";
        
        $__internal_87cc7d5494733dec3e4ad11b5d3f1c7054611ea6749866404e6abc3bb44e8322->leave($__internal_87cc7d5494733dec3e4ad11b5d3f1c7054611ea6749866404e6abc3bb44e8322_prof);

        
        $__internal_efa54b071a416f23929907ada37d4a11ba804b3370db3ac14d8441c9aa8eb046->leave($__internal_efa54b071a416f23929907ada37d4a11ba804b3370db3ac14d8441c9aa8eb046_prof);

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
