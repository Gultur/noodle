<?php

/* security/register.html.twig */
class __TwigTemplate_9019ac217c0d7b23579e65685a67bfc96d0788f9325b5b3240f53cdb52398538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/register.html.twig", 1);
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
        $__internal_e5e5d9aec56eb5816f4c211e8f19fe16ddc535073f4687e25eda2e7ac7440cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e5d9aec56eb5816f4c211e8f19fe16ddc535073f4687e25eda2e7ac7440cb0->enter($__internal_e5e5d9aec56eb5816f4c211e8f19fe16ddc535073f4687e25eda2e7ac7440cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_9e868a639e1207b63cd4736d37b80ea904dab43e04a35948256475f1a852a3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e868a639e1207b63cd4736d37b80ea904dab43e04a35948256475f1a852a3be->enter($__internal_9e868a639e1207b63cd4736d37b80ea904dab43e04a35948256475f1a852a3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 3
        $context["page_title"] = "Inscription";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e5d9aec56eb5816f4c211e8f19fe16ddc535073f4687e25eda2e7ac7440cb0->leave($__internal_e5e5d9aec56eb5816f4c211e8f19fe16ddc535073f4687e25eda2e7ac7440cb0_prof);

        
        $__internal_9e868a639e1207b63cd4736d37b80ea904dab43e04a35948256475f1a852a3be->leave($__internal_9e868a639e1207b63cd4736d37b80ea904dab43e04a35948256475f1a852a3be_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d33e7d8924bd27b20dc49445e10a4cf2ee001e921a6167a59ffb6a99baef210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d33e7d8924bd27b20dc49445e10a4cf2ee001e921a6167a59ffb6a99baef210->enter($__internal_7d33e7d8924bd27b20dc49445e10a4cf2ee001e921a6167a59ffb6a99baef210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3a95928f28f1974c9149a539c66bd8dcb3d16b1347b8da6383f884b7e7bf45a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a95928f28f1974c9149a539c66bd8dcb3d16b1347b8da6383f884b7e7bf45a6->enter($__internal_3a95928f28f1974c9149a539c66bd8dcb3d16b1347b8da6383f884b7e7bf45a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

    <main class=\"container\">
        <h1>Inscription</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

            <div class=\"btn-site\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Valider</button>
            </div>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </main>

";
        
        $__internal_3a95928f28f1974c9149a539c66bd8dcb3d16b1347b8da6383f884b7e7bf45a6->leave($__internal_3a95928f28f1974c9149a539c66bd8dcb3d16b1347b8da6383f884b7e7bf45a6_prof);

        
        $__internal_7d33e7d8924bd27b20dc49445e10a4cf2ee001e921a6167a59ffb6a99baef210->leave($__internal_7d33e7d8924bd27b20dc49445e10a4cf2ee001e921a6167a59ffb6a99baef210_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  52 => 5,  43 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Inscription' %}
{% block content %}


    <main class=\"container\">
        <h1>Inscription</h1>

        {{ form_start(form) }}
            {{ form_row(form.username) }}
            {{ form_row(form.email) }}
            {{ form_row(form.plainPassword.first) }}
            {{ form_row(form.plainPassword.second) }}

            <div class=\"btn-site\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Valider</button>
            </div>
        {{ form_end(form) }}
    </main>

{% endblock %}", "security/register.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/register.html.twig");
    }
}
