<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_cafdafeae25220982c08198764d10e2ed5c73362300360e1f767c05974e508a4 extends Twig_Template
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
        $__internal_81590e8fc0223d2a3095dd8cf942130599185df1f2c7f446497da636ced54a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81590e8fc0223d2a3095dd8cf942130599185df1f2c7f446497da636ced54a19->enter($__internal_81590e8fc0223d2a3095dd8cf942130599185df1f2c7f446497da636ced54a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_81590e8fc0223d2a3095dd8cf942130599185df1f2c7f446497da636ced54a19->leave($__internal_81590e8fc0223d2a3095dd8cf942130599185df1f2c7f446497da636ced54a19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("", "@Framework/Form/choice_options.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
