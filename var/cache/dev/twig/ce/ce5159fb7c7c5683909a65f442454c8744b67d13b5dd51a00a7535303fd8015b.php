<?php

/* security/administration.html.twig */
class __TwigTemplate_700b4086f56e9c591181d500e4a72d19d126230ddcf76eb6e500c66d44c2ba7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/administration.html.twig", 1);
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
        $__internal_d96176465847e69b6bbdd714c687b0b99f76bb13c7e3e3e8270a2aef0cfffff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96176465847e69b6bbdd714c687b0b99f76bb13c7e3e3e8270a2aef0cfffff6->enter($__internal_d96176465847e69b6bbdd714c687b0b99f76bb13c7e3e3e8270a2aef0cfffff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/administration.html.twig"));

        $__internal_82b4f241cbb51ccc4a0185c11f9bf23bfd17741d261b7014a13889b66eec6f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b4f241cbb51ccc4a0185c11f9bf23bfd17741d261b7014a13889b66eec6f33->enter($__internal_82b4f241cbb51ccc4a0185c11f9bf23bfd17741d261b7014a13889b66eec6f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/administration.html.twig"));

        // line 3
        $context["page_title"] = "Administration";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96176465847e69b6bbdd714c687b0b99f76bb13c7e3e3e8270a2aef0cfffff6->leave($__internal_d96176465847e69b6bbdd714c687b0b99f76bb13c7e3e3e8270a2aef0cfffff6_prof);

        
        $__internal_82b4f241cbb51ccc4a0185c11f9bf23bfd17741d261b7014a13889b66eec6f33->leave($__internal_82b4f241cbb51ccc4a0185c11f9bf23bfd17741d261b7014a13889b66eec6f33_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b779700474892a26f8bf340c704dcddbdd0019d2c7ba3d2b434c2767357626a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b779700474892a26f8bf340c704dcddbdd0019d2c7ba3d2b434c2767357626a->enter($__internal_3b779700474892a26f8bf340c704dcddbdd0019d2c7ba3d2b434c2767357626a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5acfb1d5a16c98f0d1c3b265424c1ab0f398ca5889fe1f19915b5cb68f71ac19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acfb1d5a16c98f0d1c3b265424c1ab0f398ca5889fe1f19915b5cb68f71ac19->enter($__internal_5acfb1d5a16c98f0d1c3b265424c1ab0f398ca5889fe1f19915b5cb68f71ac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <main>
        <div class=\"btn-site\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listusers");
        echo "\" type=\"button\" class=\"btn btn-primary btn-lg leave\">Éditer un utilisateur</a>
        </div>
    </main>


";
        
        $__internal_5acfb1d5a16c98f0d1c3b265424c1ab0f398ca5889fe1f19915b5cb68f71ac19->leave($__internal_5acfb1d5a16c98f0d1c3b265424c1ab0f398ca5889fe1f19915b5cb68f71ac19_prof);

        
        $__internal_3b779700474892a26f8bf340c704dcddbdd0019d2c7ba3d2b434c2767357626a->leave($__internal_3b779700474892a26f8bf340c704dcddbdd0019d2c7ba3d2b434c2767357626a_prof);

    }

    public function getTemplateName()
    {
        return "security/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Administration' %}
{% block content %}
    <main>
        <div class=\"btn-site\">
            <a href=\"{{ path('listusers') }}\" type=\"button\" class=\"btn btn-primary btn-lg leave\">Éditer un utilisateur</a>
        </div>
    </main>


{% endblock %}", "security/administration.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/administration.html.twig");
    }
}
