<?php

/* default/editQuiz.html.twig */
class __TwigTemplate_ab5f1edad7cd85c123063ec6f41a75b605854f566ef2ce62bf273209b3642b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/editQuiz.html.twig", 1);
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
        $__internal_a70b12098d3ffc9307174a6ea7706cf347a5c5d225fc3ee0bdef57decf706971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70b12098d3ffc9307174a6ea7706cf347a5c5d225fc3ee0bdef57decf706971->enter($__internal_a70b12098d3ffc9307174a6ea7706cf347a5c5d225fc3ee0bdef57decf706971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/editQuiz.html.twig"));

        $__internal_a20c154e675129e875a778fe30fe9ea89e6e65a484316789bd23bfc54fac2ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20c154e675129e875a778fe30fe9ea89e6e65a484316789bd23bfc54fac2ccf->enter($__internal_a20c154e675129e875a778fe30fe9ea89e6e65a484316789bd23bfc54fac2ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/editQuiz.html.twig"));

        // line 3
        $context["page_title"] = "Édition du quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a70b12098d3ffc9307174a6ea7706cf347a5c5d225fc3ee0bdef57decf706971->leave($__internal_a70b12098d3ffc9307174a6ea7706cf347a5c5d225fc3ee0bdef57decf706971_prof);

        
        $__internal_a20c154e675129e875a778fe30fe9ea89e6e65a484316789bd23bfc54fac2ccf->leave($__internal_a20c154e675129e875a778fe30fe9ea89e6e65a484316789bd23bfc54fac2ccf_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d3d74e95a14a8e1eabc4cc4b572e25a2455992b0a41dd2eabb1c6cd0962daf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3d74e95a14a8e1eabc4cc4b572e25a2455992b0a41dd2eabb1c6cd0962daf2->enter($__internal_9d3d74e95a14a8e1eabc4cc4b572e25a2455992b0a41dd2eabb1c6cd0962daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4b5b66f6c3189f08de42b252cccfa8228b4b8cba6dfa90f87c4f3777698e58c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5b66f6c3189f08de42b252cccfa8228b4b8cba6dfa90f87c4f3777698e58c3->enter($__internal_4b5b66f6c3189f08de42b252cccfa8228b4b8cba6dfa90f87c4f3777698e58c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <main class=\"container\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listquiz");
        echo "\" type=\"button\" class=\"btn btn-primary leave\">Revenir à la liste des Quiz</a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("displayquestions");
        echo "\" type=\"button\" class=\"btn btn-primary leave\">Liste des questions</a>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createsession", array("id" => $this->getAttribute(($context["quiz"] ?? $this->getContext($context, "quiz")), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary leave\">Lancer le quiz</a>

        <h1 class=\"text-center\" data-quiz=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quiz"] ?? $this->getContext($context, "quiz")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quiz"] ?? $this->getContext($context, "quiz")), "name", array()), "html", null, true);
        echo "</h1>

        <section>

            <div id=\"leftDiv\" class=\"col-md-6\">
                <h2>Questions présentes dans le quiz</h2>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quiz"] ?? $this->getContext($context, "quiz")), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 20
            echo "                    <div class=\"questionBox\" id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ">
                        <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</p>
                        <button class=\"btn btn-primary\">Changer de zone</button>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
            </div>


            <div id=\"rightDiv\" class=\"col-md-6\">
                <h2>Questions disponibles</h2>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 33
            echo "                    <div class=\"questionBox\" id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ">
                        <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</p>
                        <button class=\"btn btn-primary\">Changer de zone</button>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            </div>
        </section>


    </main>


    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/editQuiz.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_4b5b66f6c3189f08de42b252cccfa8228b4b8cba6dfa90f87c4f3777698e58c3->leave($__internal_4b5b66f6c3189f08de42b252cccfa8228b4b8cba6dfa90f87c4f3777698e58c3_prof);

        
        $__internal_9d3d74e95a14a8e1eabc4cc4b572e25a2455992b0a41dd2eabb1c6cd0962daf2->leave($__internal_9d3d74e95a14a8e1eabc4cc4b572e25a2455992b0a41dd2eabb1c6cd0962daf2_prof);

    }

    public function getTemplateName()
    {
        return "default/editQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  128 => 39,  117 => 34,  112 => 33,  108 => 32,  100 => 26,  89 => 21,  84 => 20,  80 => 19,  69 => 13,  64 => 11,  60 => 10,  56 => 9,  52 => 7,  43 => 6,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Édition du quiz' %}


{% block content %}

    <main class=\"container\">
        <a href=\"{{ path('listquiz') }}\" type=\"button\" class=\"btn btn-primary leave\">Revenir à la liste des Quiz</a>
        <a href=\"{{ path('displayquestions') }}\" type=\"button\" class=\"btn btn-primary leave\">Liste des questions</a>
        <a href=\"{{ path('createsession', {\"id\" : quiz.id})  }}\" type=\"button\" class=\"btn btn-primary leave\">Lancer le quiz</a>

        <h1 class=\"text-center\" data-quiz=\"{{ quiz.id }}\">{{ quiz.name }}</h1>

        <section>

            <div id=\"leftDiv\" class=\"col-md-6\">
                <h2>Questions présentes dans le quiz</h2>
                {% for question in quiz.questions %}
                    <div class=\"questionBox\" id={{ question.id }}>
                        <p>{{ question.question }}</p>
                        <button class=\"btn btn-primary\">Changer de zone</button>
                        <hr>
                    </div>
                {% endfor %}

            </div>


            <div id=\"rightDiv\" class=\"col-md-6\">
                <h2>Questions disponibles</h2>
                {% for question in questions %}
                    <div class=\"questionBox\" id={{ question.id }}>
                        <p>{{ question.question }}</p>
                        <button class=\"btn btn-primary\">Changer de zone</button>
                        <hr>
                    </div>
                {% endfor %}

            </div>
        </section>


    </main>


    <script src=\"{{ asset('js/editQuiz.js') }}\"></script>


{% endblock %}", "default/editQuiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/editQuiz.html.twig");
    }
}
