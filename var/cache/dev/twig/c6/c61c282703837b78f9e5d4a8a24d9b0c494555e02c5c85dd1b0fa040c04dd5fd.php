<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_87f91f7b617e85b76a2e020507967f93b0945ddd1ca3380279198fc7a48dc8ef extends Twig_Template
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
        $__internal_7ca13894ffeb8ab23233b1c2b93e4b2d44c2f60779eb37725fe7c0cc289e66a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca13894ffeb8ab23233b1c2b93e4b2d44c2f60779eb37725fe7c0cc289e66a8->enter($__internal_7ca13894ffeb8ab23233b1c2b93e4b2d44c2f60779eb37725fe7c0cc289e66a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7ca13894ffeb8ab23233b1c2b93e4b2d44c2f60779eb37725fe7c0cc289e66a8->leave($__internal_7ca13894ffeb8ab23233b1c2b93e4b2d44c2f60779eb37725fe7c0cc289e66a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.atom.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
