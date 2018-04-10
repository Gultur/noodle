<?php

/* layout.html.twig */
class __TwigTemplate_3a7dc4d4597ad502ac94f2980d58906a0b9dc80774d8b84e8496ba386d7cc287 extends Twig_Template
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
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "
";
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
        return array (  150 => 54,  147 => 53,  138 => 14,  134 => 13,  128 => 10,  123 => 8,  118 => 7,  115 => 6,  108 => 57,  105 => 56,  103 => 53,  93 => 45,  86 => 42,  81 => 40,  76 => 39,  73 => 38,  67 => 36,  65 => 35,  61 => 34,  48 => 26,  37 => 19,  35 => 6,  27 => 5,  21 => 1,);
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
