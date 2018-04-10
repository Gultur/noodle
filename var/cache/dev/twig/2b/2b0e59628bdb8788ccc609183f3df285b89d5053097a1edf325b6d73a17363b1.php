<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b57e338f8b86b92044a31d34e836809f47f5dad20bfa87ec2abffe931ebcc28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b57e338f8b86b92044a31d34e836809f47f5dad20bfa87ec2abffe931ebcc28->enter($__internal_9b57e338f8b86b92044a31d34e836809f47f5dad20bfa87ec2abffe931ebcc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_76288c4d1691b7ce96ea46df135ffb35cf33aed71be86c2ba6d0c9c371708364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76288c4d1691b7ce96ea46df135ffb35cf33aed71be86c2ba6d0c9c371708364->enter($__internal_76288c4d1691b7ce96ea46df135ffb35cf33aed71be86c2ba6d0c9c371708364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b57e338f8b86b92044a31d34e836809f47f5dad20bfa87ec2abffe931ebcc28->leave($__internal_9b57e338f8b86b92044a31d34e836809f47f5dad20bfa87ec2abffe931ebcc28_prof);

        
        $__internal_76288c4d1691b7ce96ea46df135ffb35cf33aed71be86c2ba6d0c9c371708364->leave($__internal_76288c4d1691b7ce96ea46df135ffb35cf33aed71be86c2ba6d0c9c371708364_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1469797a65ffea4ccf34e1601ffa47e7cabb2cc440c7ebb76f54d4b8ccbf5362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1469797a65ffea4ccf34e1601ffa47e7cabb2cc440c7ebb76f54d4b8ccbf5362->enter($__internal_1469797a65ffea4ccf34e1601ffa47e7cabb2cc440c7ebb76f54d4b8ccbf5362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f0572e8ec8d6441b9c922fcb2d53b4e512eab9ab1007205c3b0e4345a2c3fd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0572e8ec8d6441b9c922fcb2d53b4e512eab9ab1007205c3b0e4345a2c3fd61->enter($__internal_f0572e8ec8d6441b9c922fcb2d53b4e512eab9ab1007205c3b0e4345a2c3fd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f0572e8ec8d6441b9c922fcb2d53b4e512eab9ab1007205c3b0e4345a2c3fd61->leave($__internal_f0572e8ec8d6441b9c922fcb2d53b4e512eab9ab1007205c3b0e4345a2c3fd61_prof);

        
        $__internal_1469797a65ffea4ccf34e1601ffa47e7cabb2cc440c7ebb76f54d4b8ccbf5362->leave($__internal_1469797a65ffea4ccf34e1601ffa47e7cabb2cc440c7ebb76f54d4b8ccbf5362_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e41c22e835bccf2e9ac802d42ff3e43f43559eec5ef2dd99cfa2e2d7c2ffa82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e41c22e835bccf2e9ac802d42ff3e43f43559eec5ef2dd99cfa2e2d7c2ffa82->enter($__internal_4e41c22e835bccf2e9ac802d42ff3e43f43559eec5ef2dd99cfa2e2d7c2ffa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c673a6b6ffc36c315cb2865c8def9def0f90d1308c1454818861586c1885d351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c673a6b6ffc36c315cb2865c8def9def0f90d1308c1454818861586c1885d351->enter($__internal_c673a6b6ffc36c315cb2865c8def9def0f90d1308c1454818861586c1885d351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c673a6b6ffc36c315cb2865c8def9def0f90d1308c1454818861586c1885d351->leave($__internal_c673a6b6ffc36c315cb2865c8def9def0f90d1308c1454818861586c1885d351_prof);

        
        $__internal_4e41c22e835bccf2e9ac802d42ff3e43f43559eec5ef2dd99cfa2e2d7c2ffa82->leave($__internal_4e41c22e835bccf2e9ac802d42ff3e43f43559eec5ef2dd99cfa2e2d7c2ffa82_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c3d5372f120a965623fe7cdde154cf4dc97f4bfc7a6380dbbebbf2285c7ab18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3d5372f120a965623fe7cdde154cf4dc97f4bfc7a6380dbbebbf2285c7ab18->enter($__internal_8c3d5372f120a965623fe7cdde154cf4dc97f4bfc7a6380dbbebbf2285c7ab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e03d708541ffac6972fc86f97880d6b56d610871511e2375f7eab6aebf6905c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e03d708541ffac6972fc86f97880d6b56d610871511e2375f7eab6aebf6905c->enter($__internal_4e03d708541ffac6972fc86f97880d6b56d610871511e2375f7eab6aebf6905c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4e03d708541ffac6972fc86f97880d6b56d610871511e2375f7eab6aebf6905c->leave($__internal_4e03d708541ffac6972fc86f97880d6b56d610871511e2375f7eab6aebf6905c_prof);

        
        $__internal_8c3d5372f120a965623fe7cdde154cf4dc97f4bfc7a6380dbbebbf2285c7ab18->leave($__internal_8c3d5372f120a965623fe7cdde154cf4dc97f4bfc7a6380dbbebbf2285c7ab18_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
