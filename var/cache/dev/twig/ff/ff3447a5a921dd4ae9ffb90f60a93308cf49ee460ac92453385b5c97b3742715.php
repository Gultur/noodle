<?php

/* default/studentResults.html.twig */
class __TwigTemplate_5ed0a00c4e18784960a8dc1c7a2c0cca7e9081d17df452741740638d77f6a853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/studentResults.html.twig", 1);
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
        $__internal_8834fd510587cdc91d19f9a3735d620879f80245dade5599851dc95dbba862d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8834fd510587cdc91d19f9a3735d620879f80245dade5599851dc95dbba862d2->enter($__internal_8834fd510587cdc91d19f9a3735d620879f80245dade5599851dc95dbba862d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/studentResults.html.twig"));

        $__internal_dd3863e32ee0cb8d35233c6f119cb22eaa81e3513b3a9450fb60b7ee3cd14041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3863e32ee0cb8d35233c6f119cb22eaa81e3513b3a9450fb60b7ee3cd14041->enter($__internal_dd3863e32ee0cb8d35233c6f119cb22eaa81e3513b3a9450fb60b7ee3cd14041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/studentResults.html.twig"));

        // line 3
        $context["page_title"] = "Resultats";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8834fd510587cdc91d19f9a3735d620879f80245dade5599851dc95dbba862d2->leave($__internal_8834fd510587cdc91d19f9a3735d620879f80245dade5599851dc95dbba862d2_prof);

        
        $__internal_dd3863e32ee0cb8d35233c6f119cb22eaa81e3513b3a9450fb60b7ee3cd14041->leave($__internal_dd3863e32ee0cb8d35233c6f119cb22eaa81e3513b3a9450fb60b7ee3cd14041_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b4ba31b0d4e00774b881f11daee47ea445592ba94858045b2e7729d970e5082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4ba31b0d4e00774b881f11daee47ea445592ba94858045b2e7729d970e5082->enter($__internal_0b4ba31b0d4e00774b881f11daee47ea445592ba94858045b2e7729d970e5082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_740d1112d3464a5cff8441deb46ea853266c510b9d87784165e9005604b6decc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740d1112d3464a5cff8441deb46ea853266c510b9d87784165e9005604b6decc->enter($__internal_740d1112d3464a5cff8441deb46ea853266c510b9d87784165e9005604b6decc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <main>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"  type=\"button\" class=\"btn btn-primary\">Retour à l'accueil</a>
        <p class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["studentCorrectAnswers"] ?? $this->getContext($context, "studentCorrectAnswers")), "html", null, true);
        echo " bonne(s) réponse(s) sur ";
        echo twig_escape_filter($this->env, ($context["nbQuestions"] ?? $this->getContext($context, "nbQuestions")), "html", null, true);
        echo " question(s)</p>

        <div class=\"text-center\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 14
            echo "                <hr>

                <div>
                    <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "question", array()), "question", array()), "html", null, true);
            echo "</p>
                    <p>Votre ou vos réponse(s) :
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "studentAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 20
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </p>


                    <p class=\"correctAnswers\">La ou les bonne(s) réponse(s) :
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "correctAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["correctanswer"]) {
                // line 27
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["correctanswer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correctanswer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>


    <main/>

";
        
        $__internal_740d1112d3464a5cff8441deb46ea853266c510b9d87784165e9005604b6decc->leave($__internal_740d1112d3464a5cff8441deb46ea853266c510b9d87784165e9005604b6decc_prof);

        
        $__internal_0b4ba31b0d4e00774b881f11daee47ea445592ba94858045b2e7729d970e5082->leave($__internal_0b4ba31b0d4e00774b881f11daee47ea445592ba94858045b2e7729d970e5082_prof);

    }

    public function getTemplateName()
    {
        return "default/studentResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  114 => 29,  105 => 27,  101 => 26,  95 => 22,  86 => 20,  82 => 19,  77 => 17,  72 => 14,  68 => 13,  60 => 10,  56 => 9,  52 => 7,  43 => 6,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Resultats' %}


{% block content %}

    <main>
        <a href=\"{{ path('homepage') }}\"  type=\"button\" class=\"btn btn-primary\">Retour à l'accueil</a>
        <p class=\"text-center\">{{ studentCorrectAnswers }} bonne(s) réponse(s) sur {{ nbQuestions }} question(s)</p>

        <div class=\"text-center\">
            {% for result in results %}
                <hr>

                <div>
                    <p>{{ result.question.question }}</p>
                    <p>Votre ou vos réponse(s) :
                        {% for answer in result.studentAnswers %}
                            {{ answer.value }}
                        {% endfor %}
                    </p>


                    <p class=\"correctAnswers\">La ou les bonne(s) réponse(s) :
                        {% for correctanswer in result.correctAnswers %}
                            {{ correctanswer.value }}
                        {% endfor %}
                    </p>
                </div>
            {% endfor %}
        </div>


    <main/>

{% endblock %}", "default/studentResults.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/studentResults.html.twig");
    }
}
