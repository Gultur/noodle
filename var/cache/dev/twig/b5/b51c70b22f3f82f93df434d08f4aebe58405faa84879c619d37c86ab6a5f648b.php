<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0dee24bae9ce1bf02889cdff60a7797b6a4e80ca8abda101047261338798eb9c extends Twig_Template
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
        $__internal_bc82a6babe99f149d9494eda51d5925772c87e2cfcd887f81a7ca5ed32dfa9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc82a6babe99f149d9494eda51d5925772c87e2cfcd887f81a7ca5ed32dfa9ad->enter($__internal_bc82a6babe99f149d9494eda51d5925772c87e2cfcd887f81a7ca5ed32dfa9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "\" />
";
        
        $__internal_bc82a6babe99f149d9494eda51d5925772c87e2cfcd887f81a7ca5ed32dfa9ad->leave($__internal_bc82a6babe99f149d9494eda51d5925772c87e2cfcd887f81a7ca5ed32dfa9ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.xml.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
