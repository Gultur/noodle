<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d82513a334835c5fe73518cf3d34c7093a8fc1f9c8d447b89e82852d1a70e213 extends Twig_Template
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
        $__internal_796970918bd5f3190a39aa74cee0430551f5d8901cdbc2b47aa8b68e47751912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796970918bd5f3190a39aa74cee0430551f5d8901cdbc2b47aa8b68e47751912->enter($__internal_796970918bd5f3190a39aa74cee0430551f5d8901cdbc2b47aa8b68e47751912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_796970918bd5f3190a39aa74cee0430551f5d8901cdbc2b47aa8b68e47751912->leave($__internal_796970918bd5f3190a39aa74cee0430551f5d8901cdbc2b47aa8b68e47751912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
