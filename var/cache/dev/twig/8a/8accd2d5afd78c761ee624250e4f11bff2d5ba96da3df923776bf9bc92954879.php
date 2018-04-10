<?php

/* default/quiz.html.twig */
class __TwigTemplate_16c28484566fc1463e411ffe7f05220994fc8b2780c690949a7cb3bc1cbf6a0b extends Twig_Template
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
        $__internal_372b206d70ad4b0784d5642d4e920fd00ce6294554b558335528c1de7f354b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372b206d70ad4b0784d5642d4e920fd00ce6294554b558335528c1de7f354b55->enter($__internal_372b206d70ad4b0784d5642d4e920fd00ce6294554b558335528c1de7f354b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/quiz.html.twig"));

        $__internal_c9d2e6daaf34ca08fe11b0eb03ff4ceeb131b09fa9759e393fd038bdb70775f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d2e6daaf34ca08fe11b0eb03ff4ceeb131b09fa9759e393fd038bdb70775f4->enter($__internal_c9d2e6daaf34ca08fe11b0eb03ff4ceeb131b09fa9759e393fd038bdb70775f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/quiz.html.twig"));

        // line 3
        $context["page_title"] = "Quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_372b206d70ad4b0784d5642d4e920fd00ce6294554b558335528c1de7f354b55->leave($__internal_372b206d70ad4b0784d5642d4e920fd00ce6294554b558335528c1de7f354b55_prof);

        
        $__internal_c9d2e6daaf34ca08fe11b0eb03ff4ceeb131b09fa9759e393fd038bdb70775f4->leave($__internal_c9d2e6daaf34ca08fe11b0eb03ff4ceeb131b09fa9759e393fd038bdb70775f4_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_00e4afa975f5071c9e2c4cce045377067c83f181f63443189cba9510c3750e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e4afa975f5071c9e2c4cce045377067c83f181f63443189cba9510c3750e1a->enter($__internal_00e4afa975f5071c9e2c4cce045377067c83f181f63443189cba9510c3750e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3b3ed329caf63ee9e144d6aa290f7005f03b21143d7b8fa12b04be919684eb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3ed329caf63ee9e144d6aa290f7005f03b21143d7b8fa12b04be919684eb4f->enter($__internal_3b3ed329caf63ee9e144d6aa290f7005f03b21143d7b8fa12b04be919684eb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentresults", array("id" => ($context["idSession"] ?? $this->getContext($context, "idSession")))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Visualiser mes résultats</a>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Quitter</a>


        <div id=\"response\">

        </div>

        <div id=\"time\">

        </div>
    </main>

    ";
        // line 41
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 42
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/teacher.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 44
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 45
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/student.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 47
        echo "

";
        
        $__internal_3b3ed329caf63ee9e144d6aa290f7005f03b21143d7b8fa12b04be919684eb4f->leave($__internal_3b3ed329caf63ee9e144d6aa290f7005f03b21143d7b8fa12b04be919684eb4f_prof);

        
        $__internal_00e4afa975f5071c9e2c4cce045377067c83f181f63443189cba9510c3750e1a->leave($__internal_00e4afa975f5071c9e2c4cce045377067c83f181f63443189cba9510c3750e1a_prof);

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
        return array (  127 => 47,  121 => 45,  118 => 44,  112 => 42,  110 => 41,  95 => 29,  91 => 28,  84 => 24,  81 => 23,  76 => 21,  61 => 9,  58 => 8,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

        <a href=\"{{ path('studentresults', {'id': idSession}) }}\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Visualiser mes résultats</a>
        <a href=\"{{ path('homepage') }}\" type=\"button\" class=\"btn btn-primary leave redirectLink\">Quitter</a>


        <div id=\"response\">

        </div>

        <div id=\"time\">

        </div>
    </main>

    {% if is_granted(\"ROLE_TEACHER\") or is_granted(\"ROLE_ADMIN\")%}
        <script src=\"{{ asset('js/teacher.js') }}\"></script>
    {% endif %}
    {% if is_granted(\"ROLE_STUDENT\")%}
        <script src=\"{{ asset('js/student.js') }}\"></script>
    {% endif %}


{% endblock %}", "default/quiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/quiz.html.twig");
    }
}
