<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a53809de864600a45d9a8a13e4f5e4e19c14dd9d3dd2cd5681e49b400cccc3c9 extends Twig_Template
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
        $__internal_cd69413eca2c122f34e0cf44276d6792f226ef71f05ddd44db29cf963e746650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd69413eca2c122f34e0cf44276d6792f226ef71f05ddd44db29cf963e746650->enter($__internal_cd69413eca2c122f34e0cf44276d6792f226ef71f05ddd44db29cf963e746650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cd69413eca2c122f34e0cf44276d6792f226ef71f05ddd44db29cf963e746650->leave($__internal_cd69413eca2c122f34e0cf44276d6792f226ef71f05ddd44db29cf963e746650_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/percent_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
