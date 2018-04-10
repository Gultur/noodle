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
        $__internal_4450a8e8481cdefe64a41d72068492c9f34062acaa786aed4e9b56d776d53878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4450a8e8481cdefe64a41d72068492c9f34062acaa786aed4e9b56d776d53878->enter($__internal_4450a8e8481cdefe64a41d72068492c9f34062acaa786aed4e9b56d776d53878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/studentResults.html.twig"));

        $__internal_3f95a670ac1d48bb5f242774900e99c14a04c5548703d938d81640c1ad5f194b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f95a670ac1d48bb5f242774900e99c14a04c5548703d938d81640c1ad5f194b->enter($__internal_3f95a670ac1d48bb5f242774900e99c14a04c5548703d938d81640c1ad5f194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/studentResults.html.twig"));

        // line 3
        $context["page_title"] = "Resultats";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4450a8e8481cdefe64a41d72068492c9f34062acaa786aed4e9b56d776d53878->leave($__internal_4450a8e8481cdefe64a41d72068492c9f34062acaa786aed4e9b56d776d53878_prof);

        
        $__internal_3f95a670ac1d48bb5f242774900e99c14a04c5548703d938d81640c1ad5f194b->leave($__internal_3f95a670ac1d48bb5f242774900e99c14a04c5548703d938d81640c1ad5f194b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_43ee2d7665db7c65d48a7aff5d815e7e981335d36548ca68f7804378825930b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ee2d7665db7c65d48a7aff5d815e7e981335d36548ca68f7804378825930b1->enter($__internal_43ee2d7665db7c65d48a7aff5d815e7e981335d36548ca68f7804378825930b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4ae421e62b54f7fbe3d3271d1408720dcc3d5a8ac0053865dcd26592257846db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae421e62b54f7fbe3d3271d1408720dcc3d5a8ac0053865dcd26592257846db->enter($__internal_4ae421e62b54f7fbe3d3271d1408720dcc3d5a8ac0053865dcd26592257846db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <main>
        <p class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["studentCorrectAnswers"] ?? $this->getContext($context, "studentCorrectAnswers")), "html", null, true);
        echo " bonne(s) réponse(s) sur ";
        echo twig_escape_filter($this->env, ($context["nbQuestions"] ?? $this->getContext($context, "nbQuestions")), "html", null, true);
        echo " question(s)</p>

        <div class=\"text-center\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 13
            echo "                <hr>

                <div>
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "question", array()), "question", array()), "html", null, true);
            echo "</p>
                    <p>Votre ou vos réponse(s) :
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "studentAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 19
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                    </p>


                    <p class=\"correctAnswers\">La ou les bonne(s) réponse(s) :
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "correctAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["correctanswer"]) {
                // line 26
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["correctanswer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correctanswer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>


    <main/>

";
        
        $__internal_4ae421e62b54f7fbe3d3271d1408720dcc3d5a8ac0053865dcd26592257846db->leave($__internal_4ae421e62b54f7fbe3d3271d1408720dcc3d5a8ac0053865dcd26592257846db_prof);

        
        $__internal_43ee2d7665db7c65d48a7aff5d815e7e981335d36548ca68f7804378825930b1->leave($__internal_43ee2d7665db7c65d48a7aff5d815e7e981335d36548ca68f7804378825930b1_prof);

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
        return array (  118 => 31,  110 => 28,  101 => 26,  97 => 25,  91 => 21,  82 => 19,  78 => 18,  73 => 16,  68 => 13,  64 => 12,  56 => 9,  52 => 7,  43 => 6,  33 => 1,  31 => 3,  11 => 1,);
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
