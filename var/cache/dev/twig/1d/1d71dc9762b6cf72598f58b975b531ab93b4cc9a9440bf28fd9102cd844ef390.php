<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_30eeb124921736cdc2deb9905d51466ddf485d8bfe3f6ac59d3e5af0cd9e78a8 extends Twig_Template
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
        $__internal_2146fcc63dfb760b5ffde722d6c2c98507fefd4f681002cdf50eb7b8ce03fc10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2146fcc63dfb760b5ffde722d6c2c98507fefd4f681002cdf50eb7b8ce03fc10->enter($__internal_2146fcc63dfb760b5ffde722d6c2c98507fefd4f681002cdf50eb7b8ce03fc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2146fcc63dfb760b5ffde722d6c2c98507fefd4f681002cdf50eb7b8ce03fc10->leave($__internal_2146fcc63dfb760b5ffde722d6c2c98507fefd4f681002cdf50eb7b8ce03fc10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/checkbox_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
