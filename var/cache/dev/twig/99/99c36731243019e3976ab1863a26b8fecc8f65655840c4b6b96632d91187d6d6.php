<?php

/* default/createSession.html.twig */
class __TwigTemplate_eefcd472ec1119ce6ed05a90544a72424d8bbcf8d081bb95da6d04b0cce079b1 extends Twig_Template
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
        $__internal_dfcb855b3e1f697f081b0fc9aa6dfb9abef546e6f9ca52f0d04272a42f3ed251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfcb855b3e1f697f081b0fc9aa6dfb9abef546e6f9ca52f0d04272a42f3ed251->enter($__internal_dfcb855b3e1f697f081b0fc9aa6dfb9abef546e6f9ca52f0d04272a42f3ed251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/createSession.html.twig"));

        $__internal_718e559edef4509d81fe00b4cbc5ff3c7b65114a2763e40ba408b6dd470f1eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718e559edef4509d81fe00b4cbc5ff3c7b65114a2763e40ba408b6dd470f1eb4->enter($__internal_718e559edef4509d81fe00b4cbc5ff3c7b65114a2763e40ba408b6dd470f1eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/createSession.html.twig"));

        // line 3
        $context["page_title"] = "Création de session";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfcb855b3e1f697f081b0fc9aa6dfb9abef546e6f9ca52f0d04272a42f3ed251->leave($__internal_dfcb855b3e1f697f081b0fc9aa6dfb9abef546e6f9ca52f0d04272a42f3ed251_prof);

        
        $__internal_718e559edef4509d81fe00b4cbc5ff3c7b65114a2763e40ba408b6dd470f1eb4->leave($__internal_718e559edef4509d81fe00b4cbc5ff3c7b65114a2763e40ba408b6dd470f1eb4_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_eed19ffd914ffad8c22edab3402d7bb73708c64dc3f28bce5a1dd8f693873347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed19ffd914ffad8c22edab3402d7bb73708c64dc3f28bce5a1dd8f693873347->enter($__internal_eed19ffd914ffad8c22edab3402d7bb73708c64dc3f28bce5a1dd8f693873347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ff2cdd7c0c323450bbc9ca2cbed7005b0cc79a7a36059c6cc794a380ae82c0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2cdd7c0c323450bbc9ca2cbed7005b0cc79a7a36059c6cc794a380ae82c0b5->enter($__internal_ff2cdd7c0c323450bbc9ca2cbed7005b0cc79a7a36059c6cc794a380ae82c0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ff2cdd7c0c323450bbc9ca2cbed7005b0cc79a7a36059c6cc794a380ae82c0b5->leave($__internal_ff2cdd7c0c323450bbc9ca2cbed7005b0cc79a7a36059c6cc794a380ae82c0b5_prof);

        
        $__internal_eed19ffd914ffad8c22edab3402d7bb73708c64dc3f28bce5a1dd8f693873347->leave($__internal_eed19ffd914ffad8c22edab3402d7bb73708c64dc3f28bce5a1dd8f693873347_prof);

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
