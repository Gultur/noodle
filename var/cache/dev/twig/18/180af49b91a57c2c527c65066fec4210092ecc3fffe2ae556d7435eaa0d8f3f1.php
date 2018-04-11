<?php

/* default/studentResults.html.twig */
class __TwigTemplate_50f7359eb0474705f0d512d452830a954dc80d88f62a250873124684bfa14e82 extends Twig_Template
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
        $__internal_827f645ee5fc2ea1e0e805ef7163f15911a6d99b64e754b8d02e52be08374d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827f645ee5fc2ea1e0e805ef7163f15911a6d99b64e754b8d02e52be08374d0f->enter($__internal_827f645ee5fc2ea1e0e805ef7163f15911a6d99b64e754b8d02e52be08374d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/studentResults.html.twig"));

        $__internal_a36743301141fc532daa47b9dff68e5bbc8ee170882047488ee38c47bf96a11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36743301141fc532daa47b9dff68e5bbc8ee170882047488ee38c47bf96a11b->enter($__internal_a36743301141fc532daa47b9dff68e5bbc8ee170882047488ee38c47bf96a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/studentResults.html.twig"));

        // line 3
        $context["page_title"] = "Resultats";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_827f645ee5fc2ea1e0e805ef7163f15911a6d99b64e754b8d02e52be08374d0f->leave($__internal_827f645ee5fc2ea1e0e805ef7163f15911a6d99b64e754b8d02e52be08374d0f_prof);

        
        $__internal_a36743301141fc532daa47b9dff68e5bbc8ee170882047488ee38c47bf96a11b->leave($__internal_a36743301141fc532daa47b9dff68e5bbc8ee170882047488ee38c47bf96a11b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_847af12a64844038a6fbfcf533fc3c346b991fccf0171c3413d0ff07623f45ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847af12a64844038a6fbfcf533fc3c346b991fccf0171c3413d0ff07623f45ef->enter($__internal_847af12a64844038a6fbfcf533fc3c346b991fccf0171c3413d0ff07623f45ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_05e20af98713fb016cf40380d77352874ad5d26ce063dae330499346585377d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e20af98713fb016cf40380d77352874ad5d26ce063dae330499346585377d3->enter($__internal_05e20af98713fb016cf40380d77352874ad5d26ce063dae330499346585377d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_05e20af98713fb016cf40380d77352874ad5d26ce063dae330499346585377d3->leave($__internal_05e20af98713fb016cf40380d77352874ad5d26ce063dae330499346585377d3_prof);

        
        $__internal_847af12a64844038a6fbfcf533fc3c346b991fccf0171c3413d0ff07623f45ef->leave($__internal_847af12a64844038a6fbfcf533fc3c346b991fccf0171c3413d0ff07623f45ef_prof);

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
