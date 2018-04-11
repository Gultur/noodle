<?php

/* security/login.html.twig */
class __TwigTemplate_1e0cbbc6a3413eeb664e14566987428bc451af086f2aa75f68e7ac1c6d246589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
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
        $__internal_82c26e02db3c7d08746243f072e7e759170a8fa1a1b91d90d93a447cbb8571a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c26e02db3c7d08746243f072e7e759170a8fa1a1b91d90d93a447cbb8571a6->enter($__internal_82c26e02db3c7d08746243f072e7e759170a8fa1a1b91d90d93a447cbb8571a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_a552e87b140577aa8f296b2aa23f9f53306d356edcbad76a41ce2bf71d5f5581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a552e87b140577aa8f296b2aa23f9f53306d356edcbad76a41ce2bf71d5f5581->enter($__internal_a552e87b140577aa8f296b2aa23f9f53306d356edcbad76a41ce2bf71d5f5581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 3
        $context["page_title"] = "Connexion";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c26e02db3c7d08746243f072e7e759170a8fa1a1b91d90d93a447cbb8571a6->leave($__internal_82c26e02db3c7d08746243f072e7e759170a8fa1a1b91d90d93a447cbb8571a6_prof);

        
        $__internal_a552e87b140577aa8f296b2aa23f9f53306d356edcbad76a41ce2bf71d5f5581->leave($__internal_a552e87b140577aa8f296b2aa23f9f53306d356edcbad76a41ce2bf71d5f5581_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_162bee43fec2a0d8eb9c0a70be45bb3062e053656394465f18173f2aec08e8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162bee43fec2a0d8eb9c0a70be45bb3062e053656394465f18173f2aec08e8ff->enter($__internal_162bee43fec2a0d8eb9c0a70be45bb3062e053656394465f18173f2aec08e8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1fb7ceb70de0dc7031440a7994378f39045d8087bc347870908bfd864e66eb7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb7ceb70de0dc7031440a7994378f39045d8087bc347870908bfd864e66eb7b->enter($__internal_1fb7ceb70de0dc7031440a7994378f39045d8087bc347870908bfd864e66eb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "

<main class=\"container\">
    <h1>Connexion</h1>

    <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

        <div class=\"form-group\">
            <label for=\"username\" for=\"username\">Identifiant</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Identifiant\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
        </div>

        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Connexion</button>
        </div>

        ";
        // line 27
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 28
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <p>Erreur d'identifiant ou de mot de passe</p>

            </div>
        ";
        }
        // line 34
        echo "
    </form>

</main>

";
        
        $__internal_1fb7ceb70de0dc7031440a7994378f39045d8087bc347870908bfd864e66eb7b->leave($__internal_1fb7ceb70de0dc7031440a7994378f39045d8087bc347870908bfd864e66eb7b_prof);

        
        $__internal_162bee43fec2a0d8eb9c0a70be45bb3062e053656394465f18173f2aec08e8ff->leave($__internal_162bee43fec2a0d8eb9c0a70be45bb3062e053656394465f18173f2aec08e8ff_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  82 => 28,  80 => 27,  66 => 16,  59 => 12,  52 => 7,  43 => 6,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Connexion' %}


{% block content %}


<main class=\"container\">
    <h1>Connexion</h1>

    <form action=\"{{ path('login') }}\" method=\"post\">

        <div class=\"form-group\">
            <label for=\"username\" for=\"username\">Identifiant</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Identifiant\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
        </div>

        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Connexion</button>
        </div>

        {% if error %}
            <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <p>Erreur d'identifiant ou de mot de passe</p>

            </div>
        {% endif %}

    </form>

</main>

{% endblock %}", "security/login.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/login.html.twig");
    }
}
