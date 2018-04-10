<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c68f02074e753aa45b3d8c8596402303a607a37c5b0a48611f5793f72de6a244 extends Twig_Template
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
        $__internal_cdbb9bfce29e073d330fb0289cf2823b2faaaeeb6932620444dc1be66067aad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbb9bfce29e073d330fb0289cf2823b2faaaeeb6932620444dc1be66067aad6->enter($__internal_cdbb9bfce29e073d330fb0289cf2823b2faaaeeb6932620444dc1be66067aad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cdbb9bfce29e073d330fb0289cf2823b2faaaeeb6932620444dc1be66067aad6->leave($__internal_cdbb9bfce29e073d330fb0289cf2823b2faaaeeb6932620444dc1be66067aad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("", "@Framework/Form/form.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
