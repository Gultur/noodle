<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a919b321cddf3d82141e49b75f7e6ba6f8a761f9d48463cf74490f6b6f4ca97a extends Twig_Template
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
        $__internal_435cd39e98f7fe17a8a06b432a0144bc95872c4b1fa934a308cd8f6db353c575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435cd39e98f7fe17a8a06b432a0144bc95872c4b1fa934a308cd8f6db353c575->enter($__internal_435cd39e98f7fe17a8a06b432a0144bc95872c4b1fa934a308cd8f6db353c575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_435cd39e98f7fe17a8a06b432a0144bc95872c4b1fa934a308cd8f6db353c575->leave($__internal_435cd39e98f7fe17a8a06b432a0144bc95872c4b1fa934a308cd8f6db353c575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/textarea_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
