<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_55791ed625017a59cb79a3969a2d734f5ce1055e046dae1ae7a8abae15aa2231 extends Twig_Template
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
        $__internal_d987c148904d1b2035709928f64a6f9b72e27146667982c7a16699a1a4258095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d987c148904d1b2035709928f64a6f9b72e27146667982c7a16699a1a4258095->enter($__internal_d987c148904d1b2035709928f64a6f9b72e27146667982c7a16699a1a4258095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "css", null, true);
        echo "

*/
";
        
        $__internal_d987c148904d1b2035709928f64a6f9b72e27146667982c7a16699a1a4258095->leave($__internal_d987c148904d1b2035709928f64a6f9b72e27146667982c7a16699a1a4258095_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.css.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
