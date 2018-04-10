<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_dccfb0d4282d703f4c53d47cbeb36a3c2faf6b41693c901667f5e7046dfd693e extends Twig_Template
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
        $__internal_57bb65dfb63dedecbaf1c7709a7ef304f76702561f265a4f535c2bf2773c1a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bb65dfb63dedecbaf1c7709a7ef304f76702561f265a4f535c2bf2773c1a85->enter($__internal_57bb65dfb63dedecbaf1c7709a7ef304f76702561f265a4f535c2bf2773c1a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_57bb65dfb63dedecbaf1c7709a7ef304f76702561f265a4f535c2bf2773c1a85->leave($__internal_57bb65dfb63dedecbaf1c7709a7ef304f76702561f265a4f535c2bf2773c1a85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("", "@Framework/Form/widget_attributes.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
