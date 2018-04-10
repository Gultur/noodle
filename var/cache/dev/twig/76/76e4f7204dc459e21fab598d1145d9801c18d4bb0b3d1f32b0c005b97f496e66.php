<?php

/* default/createSession.html.twig */
class __TwigTemplate_d9a371f3b6719d508d9a5d9bcec230aa04cf67440ce4bb1a12285173a4316dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/createSession.html.twig", 1);
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
        $__internal_776acbf32dc1914cec3ab2dd7306575705c38d7cc0b8e0105252e1ae01f496e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776acbf32dc1914cec3ab2dd7306575705c38d7cc0b8e0105252e1ae01f496e6->enter($__internal_776acbf32dc1914cec3ab2dd7306575705c38d7cc0b8e0105252e1ae01f496e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/createSession.html.twig"));

        $__internal_cec62286835d4a3bd1a0a99ffc8064d57b1aefd814e056bec520a777d57f0fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec62286835d4a3bd1a0a99ffc8064d57b1aefd814e056bec520a777d57f0fc6->enter($__internal_cec62286835d4a3bd1a0a99ffc8064d57b1aefd814e056bec520a777d57f0fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/createSession.html.twig"));

        // line 3
        $context["page_title"] = "Création de session";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776acbf32dc1914cec3ab2dd7306575705c38d7cc0b8e0105252e1ae01f496e6->leave($__internal_776acbf32dc1914cec3ab2dd7306575705c38d7cc0b8e0105252e1ae01f496e6_prof);

        
        $__internal_cec62286835d4a3bd1a0a99ffc8064d57b1aefd814e056bec520a777d57f0fc6->leave($__internal_cec62286835d4a3bd1a0a99ffc8064d57b1aefd814e056bec520a777d57f0fc6_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_407844db7151f3e8d354e61e93b0c90759d6d23259613c5d917dd0664fdd4637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407844db7151f3e8d354e61e93b0c90759d6d23259613c5d917dd0664fdd4637->enter($__internal_407844db7151f3e8d354e61e93b0c90759d6d23259613c5d917dd0664fdd4637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d3687458431755b59efb1037a267e3e75bb515e3bce1345a79e28e75d45144df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3687458431755b59efb1037a267e3e75bb515e3bce1345a79e28e75d45144df->enter($__internal_d3687458431755b59efb1037a267e3e75bb515e3bce1345a79e28e75d45144df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "

    <main class=\"container\">
        <h1>Création de la session</h1>

        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        ";
        // line 16
        if (array_key_exists("errorKey", $context)) {
            // line 17
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                ";
            // line 18
            echo twig_escape_filter($this->env, ($context["errorKey"] ?? $this->getContext($context, "errorKey")), "html", null, true);
            echo "
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            </div>
        ";
        }
        // line 22
        echo "    </main>

";
        
        $__internal_d3687458431755b59efb1037a267e3e75bb515e3bce1345a79e28e75d45144df->leave($__internal_d3687458431755b59efb1037a267e3e75bb515e3bce1345a79e28e75d45144df_prof);

        
        $__internal_407844db7151f3e8d354e61e93b0c90759d6d23259613c5d917dd0664fdd4637->leave($__internal_407844db7151f3e8d354e61e93b0c90759d6d23259613c5d917dd0664fdd4637_prof);

    }

    public function getTemplateName()
    {
        return "default/createSession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  77 => 18,  74 => 17,  72 => 16,  67 => 14,  63 => 13,  59 => 12,  52 => 7,  43 => 6,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Création de session' %}


{% block content %}


    <main class=\"container\">
        <h1>Création de la session</h1>

        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}

        {% if errorKey is defined %}
            <div class=\"alert alert-danger alert-dismissable\">
                {{ errorKey }}
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            </div>
        {% endif %}
    </main>

{% endblock %}", "default/createSession.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/createSession.html.twig");
    }
}
