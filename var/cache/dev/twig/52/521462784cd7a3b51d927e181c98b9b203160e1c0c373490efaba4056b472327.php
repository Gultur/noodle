<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c2caee3fe79697f7dda32bcb0e5db371439a99b422a42f98b18b3cd9c8681ac3 extends Twig_Template
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
        $__internal_1adb88daccf26f4351841911cf0b62c5396e4a4ff1bfbb6130d0ca9551df5451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adb88daccf26f4351841911cf0b62c5396e4a4ff1bfbb6130d0ca9551df5451->enter($__internal_1adb88daccf26f4351841911cf0b62c5396e4a4ff1bfbb6130d0ca9551df5451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_1adb88daccf26f4351841911cf0b62c5396e4a4ff1bfbb6130d0ca9551df5451->leave($__internal_1adb88daccf26f4351841911cf0b62c5396e4a4ff1bfbb6130d0ca9551df5451_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.rdf.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
