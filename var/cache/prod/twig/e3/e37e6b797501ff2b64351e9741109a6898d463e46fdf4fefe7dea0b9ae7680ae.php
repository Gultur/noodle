<?php

/* default/quiz.html.twig */
class __TwigTemplate_f5094db228caf14ff2c454eb6c29b622463004f63dc32cdef12bf521ca36f08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/quiz.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_title"] = "Quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <main class=\"container\">

        ";
        // line 7
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 8
            echo "
            <p>La clé de session est : <span>";
            // line 9
            echo twig_escape_filter($this->env, ($context["sessionKey"] ?? null), "html", null, true);
            echo "</span></p>

            <p id=\"totalStudents\"></p>
            <p id=\"responded\"></p>
            <p id=\"notResponded\"></p>

            <button id=\"startQuiz\" class=\"btn btn-primary\">Démarrer le quiz</button>
            <button id=\"nextQuestion\" class=\"btn btn-primary\">Question suivante</button>
            <button id=\"stopQuestion\" class=\"btn btn-primary\">Arrêter la question</button>
            <button id=\"showResults\" class=\"btn btn-primary\">Voir les résultats</button>
            <button id=\"showResponse\" class=\"btn btn-primary\">Envoyer la réponse</button>
            <button id=\"addTime\" class=\"btn btn-primary\">Ajouter 10 secondes</button>
            <a id=\"closeQuiz\" href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" type=\"button\" class=\"btn btn-primary\">Clore le quiz</a>
        ";
        }
        // line 23
        echo "
        <div id=\"quiz\" data-session=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["indexSession"] ?? null), "html", null, true);
        echo "\">

        </div>



        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentresults", array("id" => ($context["idSession"] ?? null))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Visualiser mes résultats</a>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Quitter</a>


        <div id=\"response\">

        </div>

        <div id=\"time\">

        </div>

        <div id=\"graph\" style=\"width: 900px; height: 500px;\">

        </div>

    </main>

    ";
        // line 48
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 49
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/teacher.js"), "html", null, true);
            echo "\"></script>

        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>



    ";
        }
        // line 56
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 57
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/student.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 59
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  115 => 57,  112 => 56,  101 => 49,  99 => 48,  79 => 31,  75 => 30,  66 => 24,  63 => 23,  58 => 21,  43 => 9,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/quiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/quiz.html.twig");
    }
}
