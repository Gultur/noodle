<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_16a0a9b9efd93eb79a86fd98d982eb087daad48f0f91574b184ec13e637f05cd extends Twig_Template
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
        $__internal_ec9f6c443bc1b2a2972af0dd5896f9a78dfce399b9e30c24414611db5435f2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9f6c443bc1b2a2972af0dd5896f9a78dfce399b9e30c24414611db5435f2d0->enter($__internal_ec9f6c443bc1b2a2972af0dd5896f9a78dfce399b9e30c24414611db5435f2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ec9f6c443bc1b2a2972af0dd5896f9a78dfce399b9e30c24414611db5435f2d0->leave($__internal_ec9f6c443bc1b2a2972af0dd5896f9a78dfce399b9e30c24414611db5435f2d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/repeated_row.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
