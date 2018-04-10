<?php

/* security/login.html.twig */
class __TwigTemplate_7e173e9e39137a5fdd725ba3998672e6b58d08cc11b338524e090ae130be73ba extends Twig_Template
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
        $__internal_6aef150d831127dde341bfc31f81460d61c69eab93974c4b5d260cd09a1928dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aef150d831127dde341bfc31f81460d61c69eab93974c4b5d260cd09a1928dc->enter($__internal_6aef150d831127dde341bfc31f81460d61c69eab93974c4b5d260cd09a1928dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_5c6b6fe9ee8677b0d9190c0dc5c1322f018fbda16ee64cd10b8693f0190673f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6b6fe9ee8677b0d9190c0dc5c1322f018fbda16ee64cd10b8693f0190673f1->enter($__internal_5c6b6fe9ee8677b0d9190c0dc5c1322f018fbda16ee64cd10b8693f0190673f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 3
        $context["page_title"] = "Connexion";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aef150d831127dde341bfc31f81460d61c69eab93974c4b5d260cd09a1928dc->leave($__internal_6aef150d831127dde341bfc31f81460d61c69eab93974c4b5d260cd09a1928dc_prof);

        
        $__internal_5c6b6fe9ee8677b0d9190c0dc5c1322f018fbda16ee64cd10b8693f0190673f1->leave($__internal_5c6b6fe9ee8677b0d9190c0dc5c1322f018fbda16ee64cd10b8693f0190673f1_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_a68514b142a99ae4eb6434bd084b16a077c1f7e91f624e6b78e734db6eec1123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68514b142a99ae4eb6434bd084b16a077c1f7e91f624e6b78e734db6eec1123->enter($__internal_a68514b142a99ae4eb6434bd084b16a077c1f7e91f624e6b78e734db6eec1123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_000b4a255e0aa7daeefe1a59276e14352a37da625748ffb246a353089ad3dd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000b4a255e0aa7daeefe1a59276e14352a37da625748ffb246a353089ad3dd56->enter($__internal_000b4a255e0aa7daeefe1a59276e14352a37da625748ffb246a353089ad3dd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_000b4a255e0aa7daeefe1a59276e14352a37da625748ffb246a353089ad3dd56->leave($__internal_000b4a255e0aa7daeefe1a59276e14352a37da625748ffb246a353089ad3dd56_prof);

        
        $__internal_a68514b142a99ae4eb6434bd084b16a077c1f7e91f624e6b78e734db6eec1123->leave($__internal_a68514b142a99ae4eb6434bd084b16a077c1f7e91f624e6b78e734db6eec1123_prof);

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
