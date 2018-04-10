<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a50448f3b272821e9c923ba2f854f1ddbed44b67da759aec07b666169473e8b6 extends Twig_Template
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
        $__internal_0192fe93f09af020c54d7a0d470523444b8b2afb420b4c90fa5e86e53966b438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0192fe93f09af020c54d7a0d470523444b8b2afb420b4c90fa5e86e53966b438->enter($__internal_0192fe93f09af020c54d7a0d470523444b8b2afb420b4c90fa5e86e53966b438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0192fe93f09af020c54d7a0d470523444b8b2afb420b4c90fa5e86e53966b438->leave($__internal_0192fe93f09af020c54d7a0d470523444b8b2afb420b4c90fa5e86e53966b438_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/reset_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
