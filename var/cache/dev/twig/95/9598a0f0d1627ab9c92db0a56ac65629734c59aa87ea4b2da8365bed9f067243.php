<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_7da741964c195dd5841e86b82b596712766f44e4f17659cf4d69bc74c6175d98 extends Twig_Template
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
        $__internal_05566bfd3d1c05efa533d7baa036a000623fbce96ec168a47e7ba590045cce2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05566bfd3d1c05efa533d7baa036a000623fbce96ec168a47e7ba590045cce2d->enter($__internal_05566bfd3d1c05efa533d7baa036a000623fbce96ec168a47e7ba590045cce2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_05566bfd3d1c05efa533d7baa036a000623fbce96ec168a47e7ba590045cce2d->leave($__internal_05566bfd3d1c05efa533d7baa036a000623fbce96ec168a47e7ba590045cce2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/email_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
