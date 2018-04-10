<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a84f92d021c7d3f1a37e344ce4595f1fae954e60b6bbcfc69fd0d3ea26e62808 extends Twig_Template
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
        $__internal_28aafa8aceeafdcb42b37793bc515c68d8f9b51c8fc42cf3bc3f55a0592f6550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28aafa8aceeafdcb42b37793bc515c68d8f9b51c8fc42cf3bc3f55a0592f6550->enter($__internal_28aafa8aceeafdcb42b37793bc515c68d8f9b51c8fc42cf3bc3f55a0592f6550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_28aafa8aceeafdcb42b37793bc515c68d8f9b51c8fc42cf3bc3f55a0592f6550->leave($__internal_28aafa8aceeafdcb42b37793bc515c68d8f9b51c8fc42cf3bc3f55a0592f6550_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/radio_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
