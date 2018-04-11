<?php

/* default/listQuiz.html.twig */
class __TwigTemplate_e3368cf666fac652fa6b9b894ab74d07b67509580b9c09702ba4fc691650ec53 extends Twig_Template
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
        $__internal_8a5798078b5b2388b6d45ce9f86443672dd82f727aa28bcebc9cf6ca97845599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5798078b5b2388b6d45ce9f86443672dd82f727aa28bcebc9cf6ca97845599->enter($__internal_8a5798078b5b2388b6d45ce9f86443672dd82f727aa28bcebc9cf6ca97845599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/listQuiz.html.twig"));

        $__internal_404893fb84e0a62181e97c0bb0b065960e8107c091d0e9cecc79bbb43c9e9417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404893fb84e0a62181e97c0bb0b065960e8107c091d0e9cecc79bbb43c9e9417->enter($__internal_404893fb84e0a62181e97c0bb0b065960e8107c091d0e9cecc79bbb43c9e9417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/listQuiz.html.twig"));

        // line 3
        $context["page_title"] = "Liste des quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a5798078b5b2388b6d45ce9f86443672dd82f727aa28bcebc9cf6ca97845599->leave($__internal_8a5798078b5b2388b6d45ce9f86443672dd82f727aa28bcebc9cf6ca97845599_prof);

        
        $__internal_404893fb84e0a62181e97c0bb0b065960e8107c091d0e9cecc79bbb43c9e9417->leave($__internal_404893fb84e0a62181e97c0bb0b065960e8107c091d0e9cecc79bbb43c9e9417_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8e0dbf03198b27edeb6afc9984ddade660b8648db848c228a3092701d32aea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e0dbf03198b27edeb6afc9984ddade660b8648db848c228a3092701d32aea0->enter($__internal_b8e0dbf03198b27edeb6afc9984ddade660b8648db848c228a3092701d32aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26ddb51b501a8cbb0792cef2e9f9158056b2f6b5e0625b7d4973e4d0b2a6b774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ddb51b501a8cbb0792cef2e9f9158056b2f6b5e0625b7d4973e4d0b2a6b774->enter($__internal_26ddb51b501a8cbb0792cef2e9f9158056b2f6b5e0625b7d4973e4d0b2a6b774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_26ddb51b501a8cbb0792cef2e9f9158056b2f6b5e0625b7d4973e4d0b2a6b774->leave($__internal_26ddb51b501a8cbb0792cef2e9f9158056b2f6b5e0625b7d4973e4d0b2a6b774_prof);

        
        $__internal_b8e0dbf03198b27edeb6afc9984ddade660b8648db848c228a3092701d32aea0->leave($__internal_b8e0dbf03198b27edeb6afc9984ddade660b8648db848c228a3092701d32aea0_prof);

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
