<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8e7e1bba553b02b06882af8f3f6009cd5c8b90aacd97e95623cd220174e55762 extends Twig_Template
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
        $__internal_7e836e700177bf4c5642bb568eebafcb707cd23cfb4ea2379cf31fc904baf177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e836e700177bf4c5642bb568eebafcb707cd23cfb4ea2379cf31fc904baf177->enter($__internal_7e836e700177bf4c5642bb568eebafcb707cd23cfb4ea2379cf31fc904baf177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7e836e700177bf4c5642bb568eebafcb707cd23cfb4ea2379cf31fc904baf177->leave($__internal_7e836e700177bf4c5642bb568eebafcb707cd23cfb4ea2379cf31fc904baf177_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
