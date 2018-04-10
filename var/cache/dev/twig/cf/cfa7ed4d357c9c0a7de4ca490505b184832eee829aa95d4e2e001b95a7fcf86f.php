<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f7fbabb2692efcf5134499b31acfddb57ea3dca03bed75de81cf843a2f008290 extends Twig_Template
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
        $__internal_a7fc115f813dc437bf701d8b13862f85f917fb7888249aadde824ec5a936f4eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fc115f813dc437bf701d8b13862f85f917fb7888249aadde824ec5a936f4eb->enter($__internal_a7fc115f813dc437bf701d8b13862f85f917fb7888249aadde824ec5a936f4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
        
        $__internal_a7fc115f813dc437bf701d8b13862f85f917fb7888249aadde824ec5a936f4eb->leave($__internal_a7fc115f813dc437bf701d8b13862f85f917fb7888249aadde824ec5a936f4eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.css.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
