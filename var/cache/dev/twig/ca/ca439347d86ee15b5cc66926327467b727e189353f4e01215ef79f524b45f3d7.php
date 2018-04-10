<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_b529c1f94ac2d734e77bd781eae676f9074c6d297981740e1b8b159070dfa264 extends Twig_Template
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
        $__internal_98f0cfd98b2c111ea9a101c71fcad0129107506b076c05741a66a850ae8692be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f0cfd98b2c111ea9a101c71fcad0129107506b076c05741a66a850ae8692be->enter($__internal_98f0cfd98b2c111ea9a101c71fcad0129107506b076c05741a66a850ae8692be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null), "exception" => $this->getAttribute(($context["exception"] ?? null), "toarray", array()))));
        echo "
";
        
        $__internal_98f0cfd98b2c111ea9a101c71fcad0129107506b076c05741a66a850ae8692be->leave($__internal_98f0cfd98b2c111ea9a101c71fcad0129107506b076c05741a66a850ae8692be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.json.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
