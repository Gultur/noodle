<?php

/* default/quiz.html.twig */
class __TwigTemplate_6c0698f5b9aa3dbdcae092dbfc783e9c50abdf46658bdbc9cacfbc0d193f1aaa extends Twig_Template
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
        $__internal_3d4ed875faf26e12be2b58e8c5c50dfa3660d94425a55f124bdc1e50724ac742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4ed875faf26e12be2b58e8c5c50dfa3660d94425a55f124bdc1e50724ac742->enter($__internal_3d4ed875faf26e12be2b58e8c5c50dfa3660d94425a55f124bdc1e50724ac742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/quiz.html.twig"));

        $__internal_434ff390c841d145a1aa101352e6fec8b3ae46b198a68f6810b54a1ba384d3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434ff390c841d145a1aa101352e6fec8b3ae46b198a68f6810b54a1ba384d3b0->enter($__internal_434ff390c841d145a1aa101352e6fec8b3ae46b198a68f6810b54a1ba384d3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/quiz.html.twig"));

        // line 3
        $context["page_title"] = "Quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4ed875faf26e12be2b58e8c5c50dfa3660d94425a55f124bdc1e50724ac742->leave($__internal_3d4ed875faf26e12be2b58e8c5c50dfa3660d94425a55f124bdc1e50724ac742_prof);

        
        $__internal_434ff390c841d145a1aa101352e6fec8b3ae46b198a68f6810b54a1ba384d3b0->leave($__internal_434ff390c841d145a1aa101352e6fec8b3ae46b198a68f6810b54a1ba384d3b0_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3eafbd487ec89284423083e379a6ebe8291cbc08396ccac5f957bd19d80aedee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eafbd487ec89284423083e379a6ebe8291cbc08396ccac5f957bd19d80aedee->enter($__internal_3eafbd487ec89284423083e379a6ebe8291cbc08396ccac5f957bd19d80aedee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3f5f954b4cfc82d7687dcfb20422facc1ee405dfb7a9fcf8c278d84201106e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5f954b4cfc82d7687dcfb20422facc1ee405dfb7a9fcf8c278d84201106e48->enter($__internal_3f5f954b4cfc82d7687dcfb20422facc1ee405dfb7a9fcf8c278d84201106e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <main class=\"container\">

        ";
        // line 7
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 8
            echo "
            <p>La clé de session est : <span>";
            // line 9
            echo twig_escape_filter($this->env, ($context["sessionKey"] ?? $this->getContext($context, "sessionKey")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["indexSession"] ?? $this->getContext($context, "indexSession")), "html", null, true);
        echo "\">

        </div>
        <div id=\"graph\">

        </div>


        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentresults", array("id" => ($context["idSession"] ?? $this->getContext($context, "idSession")))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Visualiser mes résultats</a>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Quitter</a>


        <div id=\"response\">

        </div>

        <div id=\"time\">

        </div>

        <div id=\"piechart\" style=\"width: 900px; height: 500px;\"></div>
    </main>

    ";
        // line 47
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 48
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/teacher.js"), "html", null, true);
            echo "\"></script>

        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
        <script type=\"text/javascript\">
         /*   google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work',     11],
                    ['Eat',      2],
                    ['Commute',  2],
                    ['Watch TV', 2],
                    ['Sleep',    7]
                ]);

                var options = {
                    title: 'My Daily Activities'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }*/
        </script>


    ";
        }
        // line 78
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 79
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/student.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 81
        echo "

";
        
        $__internal_3f5f954b4cfc82d7687dcfb20422facc1ee405dfb7a9fcf8c278d84201106e48->leave($__internal_3f5f954b4cfc82d7687dcfb20422facc1ee405dfb7a9fcf8c278d84201106e48_prof);

        
        $__internal_3eafbd487ec89284423083e379a6ebe8291cbc08396ccac5f957bd19d80aedee->leave($__internal_3eafbd487ec89284423083e379a6ebe8291cbc08396ccac5f957bd19d80aedee_prof);

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
        return array (  161 => 81,  155 => 79,  152 => 78,  118 => 48,  116 => 47,  99 => 33,  95 => 32,  84 => 24,  81 => 23,  76 => 21,  61 => 9,  58 => 8,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% set page_title = 'Quiz' %}
{% block content %}
    <main class=\"container\">

        {% if is_granted(\"ROLE_TEACHER\") or is_granted(\"ROLE_ADMIN\") %}

            <p>La clé de session est : <span>{{ sessionKey }}</span></p>

            <p id=\"totalStudents\"></p>
            <p id=\"responded\"></p>
            <p id=\"notResponded\"></p>

            <button id=\"startQuiz\" class=\"btn btn-primary\">Démarrer le quiz</button>
            <button id=\"nextQuestion\" class=\"btn btn-primary\">Question suivante</button>
            <button id=\"stopQuestion\" class=\"btn btn-primary\">Arrêter la question</button>
            <button id=\"showResults\" class=\"btn btn-primary\">Voir les résultats</button>
            <button id=\"showResponse\" class=\"btn btn-primary\">Envoyer la réponse</button>
            <button id=\"addTime\" class=\"btn btn-primary\">Ajouter 10 secondes</button>
            <a id=\"closeQuiz\" href=\"{{ path('homepage') }}\" type=\"button\" class=\"btn btn-primary\">Clore le quiz</a>
        {% endif %}

        <div id=\"quiz\" data-session=\"{{ indexSession }}\">

        </div>
        <div id=\"graph\">

        </div>


        <a href=\"{{ path('studentresults', {'id': idSession}) }}\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Visualiser mes résultats</a>
        <a href=\"{{ path('homepage') }}\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Quitter</a>


        <div id=\"response\">

        </div>

        <div id=\"time\">

        </div>

        <div id=\"piechart\" style=\"width: 900px; height: 500px;\"></div>
    </main>

    {% if is_granted(\"ROLE_TEACHER\") or is_granted(\"ROLE_ADMIN\")%}
        <script src=\"{{ asset('js/teacher.js') }}\"></script>

        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
        <script type=\"text/javascript\">
         /*   google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work',     11],
                    ['Eat',      2],
                    ['Commute',  2],
                    ['Watch TV', 2],
                    ['Sleep',    7]
                ]);

                var options = {
                    title: 'My Daily Activities'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }*/
        </script>


    {% endif %}
    {% if is_granted(\"ROLE_STUDENT\")%}
        <script src=\"{{ asset('js/student.js') }}\"></script>
    {% endif %}


{% endblock %}", "default/quiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/quiz.html.twig");
    }
}
