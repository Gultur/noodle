<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2dcfd7e879b58b85d46a0a09e6410640a0963f320602e57173260e950a3b037a extends Twig_Template
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
        $__internal_0a4a015fbbc835964cb1f5ae346db3631474114e21f3a75025c43f52cec1aa0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4a015fbbc835964cb1f5ae346db3631474114e21f3a75025c43f52cec1aa0d->enter($__internal_0a4a015fbbc835964cb1f5ae346db3631474114e21f3a75025c43f52cec1aa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bb4e0d55225378f7aae90113a74d0072e7d1b593cd38c6c830a76da377d0d110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4e0d55225378f7aae90113a74d0072e7d1b593cd38c6c830a76da377d0d110->enter($__internal_bb4e0d55225378f7aae90113a74d0072e7d1b593cd38c6c830a76da377d0d110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4a015fbbc835964cb1f5ae346db3631474114e21f3a75025c43f52cec1aa0d->leave($__internal_0a4a015fbbc835964cb1f5ae346db3631474114e21f3a75025c43f52cec1aa0d_prof);

        
        $__internal_bb4e0d55225378f7aae90113a74d0072e7d1b593cd38c6c830a76da377d0d110->leave($__internal_bb4e0d55225378f7aae90113a74d0072e7d1b593cd38c6c830a76da377d0d110_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9afbe0988d4ebd161ad99f107b296cae32c1289e5add5c42cacc9cff395dbd78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afbe0988d4ebd161ad99f107b296cae32c1289e5add5c42cacc9cff395dbd78->enter($__internal_9afbe0988d4ebd161ad99f107b296cae32c1289e5add5c42cacc9cff395dbd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aea3412f17b77321875ea6511ce84ea6703e5ab0faa10d74cf8a87ceaf2a23b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea3412f17b77321875ea6511ce84ea6703e5ab0faa10d74cf8a87ceaf2a23b2->enter($__internal_aea3412f17b77321875ea6511ce84ea6703e5ab0faa10d74cf8a87ceaf2a23b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aea3412f17b77321875ea6511ce84ea6703e5ab0faa10d74cf8a87ceaf2a23b2->leave($__internal_aea3412f17b77321875ea6511ce84ea6703e5ab0faa10d74cf8a87ceaf2a23b2_prof);

        
        $__internal_9afbe0988d4ebd161ad99f107b296cae32c1289e5add5c42cacc9cff395dbd78->leave($__internal_9afbe0988d4ebd161ad99f107b296cae32c1289e5add5c42cacc9cff395dbd78_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2234352af7236dbd78a9de4d5499bc2cbdbc4618d5db209620d94bb41a4ebb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2234352af7236dbd78a9de4d5499bc2cbdbc4618d5db209620d94bb41a4ebb9->enter($__internal_f2234352af7236dbd78a9de4d5499bc2cbdbc4618d5db209620d94bb41a4ebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62bc6e5d2b40a1a14a90576f3541eb234406050f92a93679d14ac9fc3316c540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bc6e5d2b40a1a14a90576f3541eb234406050f92a93679d14ac9fc3316c540->enter($__internal_62bc6e5d2b40a1a14a90576f3541eb234406050f92a93679d14ac9fc3316c540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_62bc6e5d2b40a1a14a90576f3541eb234406050f92a93679d14ac9fc3316c540->leave($__internal_62bc6e5d2b40a1a14a90576f3541eb234406050f92a93679d14ac9fc3316c540_prof);

        
        $__internal_f2234352af7236dbd78a9de4d5499bc2cbdbc4618d5db209620d94bb41a4ebb9->leave($__internal_f2234352af7236dbd78a9de4d5499bc2cbdbc4618d5db209620d94bb41a4ebb9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1548af7e3856e3423d10e491fa2b3639514ad10370e08e7d0d1f7402853e614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1548af7e3856e3423d10e491fa2b3639514ad10370e08e7d0d1f7402853e614->enter($__internal_e1548af7e3856e3423d10e491fa2b3639514ad10370e08e7d0d1f7402853e614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da1a6b125f17c71421183710b79aadf60439b395c97acab20b032ea3318c7110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1a6b125f17c71421183710b79aadf60439b395c97acab20b032ea3318c7110->enter($__internal_da1a6b125f17c71421183710b79aadf60439b395c97acab20b032ea3318c7110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_da1a6b125f17c71421183710b79aadf60439b395c97acab20b032ea3318c7110->leave($__internal_da1a6b125f17c71421183710b79aadf60439b395c97acab20b032ea3318c7110_prof);

        
        $__internal_e1548af7e3856e3423d10e491fa2b3639514ad10370e08e7d0d1f7402853e614->leave($__internal_e1548af7e3856e3423d10e491fa2b3639514ad10370e08e7d0d1f7402853e614_prof);

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
