<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_008a46b563ce5aebd0b5513aadc2ae39f9e4ab1e5e367d5699ad68f58efaf10b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aebdfc05c716699ca197b240ea29a640ee379d6d34937ebee931fda7424d67c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebdfc05c716699ca197b240ea29a640ee379d6d34937ebee931fda7424d67c7->enter($__internal_aebdfc05c716699ca197b240ea29a640ee379d6d34937ebee931fda7424d67c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
        
        $__internal_aebdfc05c716699ca197b240ea29a640ee379d6d34937ebee931fda7424d67c7->leave($__internal_aebdfc05c716699ca197b240ea29a640ee379d6d34937ebee931fda7424d67c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.js.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
