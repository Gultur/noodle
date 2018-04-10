<?php

/* default/listQuiz.html.twig */
class __TwigTemplate_a46c015fc13f7e8778a68982bf6e83195515c8b56d5a1b32869bcde5ebba0c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/listQuiz.html.twig", 1);
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
        $__internal_7aecc3bd4923b605788d3d7c6110126c76810ba3b3d44d39f27e0c646fb21500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aecc3bd4923b605788d3d7c6110126c76810ba3b3d44d39f27e0c646fb21500->enter($__internal_7aecc3bd4923b605788d3d7c6110126c76810ba3b3d44d39f27e0c646fb21500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/listQuiz.html.twig"));

        $__internal_d4dd4ae38fdc5ad7ce61c7cf0c7fedea496c8729d9290f04ae201eff3f327e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4dd4ae38fdc5ad7ce61c7cf0c7fedea496c8729d9290f04ae201eff3f327e2d->enter($__internal_d4dd4ae38fdc5ad7ce61c7cf0c7fedea496c8729d9290f04ae201eff3f327e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/listQuiz.html.twig"));

        // line 3
        $context["page_title"] = "Liste des quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aecc3bd4923b605788d3d7c6110126c76810ba3b3d44d39f27e0c646fb21500->leave($__internal_7aecc3bd4923b605788d3d7c6110126c76810ba3b3d44d39f27e0c646fb21500_prof);

        
        $__internal_d4dd4ae38fdc5ad7ce61c7cf0c7fedea496c8729d9290f04ae201eff3f327e2d->leave($__internal_d4dd4ae38fdc5ad7ce61c7cf0c7fedea496c8729d9290f04ae201eff3f327e2d_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f8feb7717122092df8e68413be44577b7d383a00bf7a2c0a25366d972e261c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8feb7717122092df8e68413be44577b7d383a00bf7a2c0a25366d972e261c1->enter($__internal_2f8feb7717122092df8e68413be44577b7d383a00bf7a2c0a25366d972e261c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d57dc5c5eed8f1e7e236fa03573c31be24ab5fee0b360a0e3303d433f574c7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57dc5c5eed8f1e7e236fa03573c31be24ab5fee0b360a0e3303d433f574c7d0->enter($__internal_d57dc5c5eed8f1e7e236fa03573c31be24ab5fee0b360a0e3303d433f574c7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <main class=\"container\">
        <h1>Liste des Quiz</h1>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listQuiz"] ?? $this->getContext($context, "listQuiz")));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 12
            echo "            <div class=\"quiz\">
                <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "name", array()), "html", null, true);
            echo "</h3>
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editquiz", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary\">Modifier la liste des questions du quiz</a>
                <!--<p><a href=\"";
            // line 15
            echo "\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer le quiz</a></p> -->
                ";
            // line 16
            if (twig_test_empty($this->getAttribute($context["quiz"], "questions", array()))) {
                // line 17
                echo "                    <p>Il n'y a pas de question dans ce Quiz, ajoutez des questions pour pouvoir l'utiliser </p>
                ";
            } else {
                // line 19
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createsession", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-primary leave\">Lancer le quiz</a>
                ";
            }
            // line 21
            echo "                <hr>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    </main>

";
        
        $__internal_d57dc5c5eed8f1e7e236fa03573c31be24ab5fee0b360a0e3303d433f574c7d0->leave($__internal_d57dc5c5eed8f1e7e236fa03573c31be24ab5fee0b360a0e3303d433f574c7d0_prof);

        
        $__internal_2f8feb7717122092df8e68413be44577b7d383a00bf7a2c0a25366d972e261c1->leave($__internal_2f8feb7717122092df8e68413be44577b7d383a00bf7a2c0a25366d972e261c1_prof);

    }

    public function getTemplateName()
    {
        return "default/listQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  88 => 21,  82 => 19,  78 => 17,  76 => 16,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  58 => 11,  52 => 7,  43 => 6,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Liste des quiz' %}


{% block content %}

    <main class=\"container\">
        <h1>Liste des Quiz</h1>

        {% for quiz in listQuiz %}
            <div class=\"quiz\">
                <h3>{{ quiz.name }}</h3>
                <a href=\"{{ path('editquiz', {\"id\": quiz.id}) }}\" type=\"button\" class=\"btn btn-primary\">Modifier la liste des questions du quiz</a>
                <!--<p><a href=\"{# path('deletequiz', {\"id\": quiz.id}) #}\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer le quiz</a></p> -->
                {% if quiz.questions is empty %}
                    <p>Il n'y a pas de question dans ce Quiz, ajoutez des questions pour pouvoir l'utiliser </p>
                {% else %}
                    <a href=\"{{ path('createsession', {\"id\": quiz.id}) }}\" type=\"button\" class=\"btn btn-primary leave\">Lancer le quiz</a>
                {% endif %}
                <hr>
            </div>
        {% endfor %}

    </main>

{% endblock %}", "default/listQuiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/listQuiz.html.twig");
    }
}
