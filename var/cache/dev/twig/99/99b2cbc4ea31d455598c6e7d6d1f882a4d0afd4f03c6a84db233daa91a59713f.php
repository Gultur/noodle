<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a13d4aa98e1aec6120e2d8a0cd5ebc3facde4bcf4c1f49f771d01449dfd63473 extends Twig_Template
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
        $__internal_d19f4d418a795e9c1a22a392bde5a5a70cb2281611f7eea80e03acf735b77c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19f4d418a795e9c1a22a392bde5a5a70cb2281611f7eea80e03acf735b77c8d->enter($__internal_d19f4d418a795e9c1a22a392bde5a5a70cb2281611f7eea80e03acf735b77c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "js", null, true);
        echo "

*/
";
        
        $__internal_d19f4d418a795e9c1a22a392bde5a5a70cb2281611f7eea80e03acf735b77c8d->leave($__internal_d19f4d418a795e9c1a22a392bde5a5a70cb2281611f7eea80e03acf735b77c8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.js.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
