<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4cc183bcb09ffd21b426da8637bb565f743b0df02ed1d2f3f7e0239567b85a8c extends Twig_Template
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
        $__internal_edbfff2305eb2dbd32902dd58c29d94415569a3153040cf309bc0590102da4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbfff2305eb2dbd32902dd58c29d94415569a3153040cf309bc0590102da4d7->enter($__internal_edbfff2305eb2dbd32902dd58c29d94415569a3153040cf309bc0590102da4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_edbfff2305eb2dbd32902dd58c29d94415569a3153040cf309bc0590102da4d7->leave($__internal_edbfff2305eb2dbd32902dd58c29d94415569a3153040cf309bc0590102da4d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.atom.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
