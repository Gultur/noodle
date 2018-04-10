<?php

/* layout.html.twig */
class __TwigTemplate_144468a087247476d703ad7b35e73153aac712695bdd8c3a9c63b91dede32abc extends Twig_Template
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
        $__internal_031ad8de3953027cd7b47f7a4c9eb4b6086a0998e31359551deefdd4b858bb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031ad8de3953027cd7b47f7a4c9eb4b6086a0998e31359551deefdd4b858bb62->enter($__internal_031ad8de3953027cd7b47f7a4c9eb4b6086a0998e31359551deefdd4b858bb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        if (array_key_exists("page_title", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
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
        
        $__internal_031ad8de3953027cd7b47f7a4c9eb4b6086a0998e31359551deefdd4b858bb62->leave($__internal_031ad8de3953027cd7b47f7a4c9eb4b6086a0998e31359551deefdd4b858bb62_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d71f60a558b891c5bd92bc763fe55bc2a0c75eaa7568a6611fde467e318771b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71f60a558b891c5bd92bc763fe55bc2a0c75eaa7568a6611fde467e318771b0->enter($__internal_d71f60a558b891c5bd92bc763fe55bc2a0c75eaa7568a6611fde467e318771b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d71f60a558b891c5bd92bc763fe55bc2a0c75eaa7568a6611fde467e318771b0->leave($__internal_d71f60a558b891c5bd92bc763fe55bc2a0c75eaa7568a6611fde467e318771b0_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_045ffe7f3ce148a7c6265c2fa9157ac63edb4d2597fab5ece5db78c391474a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045ffe7f3ce148a7c6265c2fa9157ac63edb4d2597fab5ece5db78c391474a5e->enter($__internal_045ffe7f3ce148a7c6265c2fa9157ac63edb4d2597fab5ece5db78c391474a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 54
        echo "
";
        
        $__internal_045ffe7f3ce148a7c6265c2fa9157ac63edb4d2597fab5ece5db78c391474a5e->leave($__internal_045ffe7f3ce148a7c6265c2fa9157ac63edb4d2597fab5ece5db78c391474a5e_prof);

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
        return array (  165 => 54,  159 => 53,  147 => 14,  143 => 13,  137 => 10,  132 => 8,  127 => 7,  121 => 6,  111 => 57,  108 => 56,  106 => 53,  96 => 45,  89 => 42,  84 => 40,  79 => 39,  76 => 38,  70 => 36,  68 => 35,  64 => 34,  51 => 26,  40 => 19,  38 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/layout.html.twig");
    }
}
