<?php

/* default/quiz.html.twig */
class __TwigTemplate_e231aaf6513dfcd1d40eb2f5fe3fe5e32e69a854b0599acef1688643e703094f extends Twig_Template
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
        $__internal_a6a5f508d45ea80a71bac525826137e3e017d043ebd0549c01a98fe0fcc8ffcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a5f508d45ea80a71bac525826137e3e017d043ebd0549c01a98fe0fcc8ffcc->enter($__internal_a6a5f508d45ea80a71bac525826137e3e017d043ebd0549c01a98fe0fcc8ffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/quiz.html.twig"));

        // line 3
        $context["page_title"] = "Quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a5f508d45ea80a71bac525826137e3e017d043ebd0549c01a98fe0fcc8ffcc->leave($__internal_a6a5f508d45ea80a71bac525826137e3e017d043ebd0549c01a98fe0fcc8ffcc_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_719f44ac1f1836662640e7ff88b469c5e6bcad772acc614aede013b00fef639c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719f44ac1f1836662640e7ff88b469c5e6bcad772acc614aede013b00fef639c->enter($__internal_719f44ac1f1836662640e7ff88b469c5e6bcad772acc614aede013b00fef639c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

            <p>Nombre d'étudiants ayant répondu : <span id=\"responded\"></span></p>
            <p>Nombre d'étudiants n'ayant pas répondu : <span id=\"notResponded\"></span></p>

            <button id=\"startQuiz\" class=\"btn btn-primary\">Démarrer le quiz</button>
            <button id=\"nextQuestion\" class=\"btn btn-primary\">Question suivante</button>
            <button id=\"stopQuestion\" class=\"btn btn-primary\">Arrêter la question</button>
            <button id=\"showResults\" class=\"btn btn-primary\">Voir les résultats</button>
            <button id=\"showResponse\" class=\"btn btn-primary\">Envoyer la réponse</button>
            <button id=\"addTime\" class=\"btn btn-primary\">Ajouter 10 secondes</button>
            <a id=\"closeQuiz\" href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" type=\"button\" class=\"btn btn-primary\">Clore le quiz</a>
        ";
        }
        // line 22
        echo "
        <div id=\"quiz\" data-session=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["indexSession"] ?? null), "html", null, true);
        echo "\">

        </div>

        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentresults", array("id" => ($context["idSession"] ?? null))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Visualiser mes résultats</a>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Quitter</a>


        <div id=\"response\">

        </div>

        <div id=\"time\">

        </div>
    </main>

    ";
        // line 40
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 41
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/teacher.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 43
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 44
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/student.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 46
        echo "

";
        
        $__internal_719f44ac1f1836662640e7ff88b469c5e6bcad772acc614aede013b00fef639c->leave($__internal_719f44ac1f1836662640e7ff88b469c5e6bcad772acc614aede013b00fef639c_prof);

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
        return array (  117 => 46,  111 => 44,  108 => 43,  102 => 41,  100 => 40,  85 => 28,  81 => 27,  74 => 23,  71 => 22,  66 => 20,  52 => 9,  49 => 8,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
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
