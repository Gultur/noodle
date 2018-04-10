<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7d732a6b413edb77aed060a5463790c583ca3c45b40b2fbd931a1899f7265e4d extends Twig_Template
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
        $__internal_bb580ad1308e686775f9fee1a5c4bd4e9eb7452eab72c9b79ecc24fa79edd6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb580ad1308e686775f9fee1a5c4bd4e9eb7452eab72c9b79ecc24fa79edd6c2->enter($__internal_bb580ad1308e686775f9fee1a5c4bd4e9eb7452eab72c9b79ecc24fa79edd6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb580ad1308e686775f9fee1a5c4bd4e9eb7452eab72c9b79ecc24fa79edd6c2->leave($__internal_bb580ad1308e686775f9fee1a5c4bd4e9eb7452eab72c9b79ecc24fa79edd6c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_023d14927d50ccabe3cbae378172b6f8f2a8a730895ec9e8fb68881e590e76bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023d14927d50ccabe3cbae378172b6f8f2a8a730895ec9e8fb68881e590e76bc->enter($__internal_023d14927d50ccabe3cbae378172b6f8f2a8a730895ec9e8fb68881e590e76bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_023d14927d50ccabe3cbae378172b6f8f2a8a730895ec9e8fb68881e590e76bc->leave($__internal_023d14927d50ccabe3cbae378172b6f8f2a8a730895ec9e8fb68881e590e76bc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9d9100e5710ab0b0d29d1ad978ef99049e0cb3f9e6d7ed15d3156426b551e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d9100e5710ab0b0d29d1ad978ef99049e0cb3f9e6d7ed15d3156426b551e8f->enter($__internal_c9d9100e5710ab0b0d29d1ad978ef99049e0cb3f9e6d7ed15d3156426b551e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo ")
";
        
        $__internal_c9d9100e5710ab0b0d29d1ad978ef99049e0cb3f9e6d7ed15d3156426b551e8f->leave($__internal_c9d9100e5710ab0b0d29d1ad978ef99049e0cb3f9e6d7ed15d3156426b551e8f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b45a8a57d64d832d9f8d2f4b5716a61fec5573c11116dcc5d4867e22394d57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b45a8a57d64d832d9f8d2f4b5716a61fec5573c11116dcc5d4867e22394d57a->enter($__internal_0b45a8a57d64d832d9f8d2f4b5716a61fec5573c11116dcc5d4867e22394d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0b45a8a57d64d832d9f8d2f4b5716a61fec5573c11116dcc5d4867e22394d57a->leave($__internal_0b45a8a57d64d832d9f8d2f4b5716a61fec5573c11116dcc5d4867e22394d57a_prof);

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
        return array (  205 => 141,  199 => 140,  185 => 137,  179 => 136,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception_full.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
