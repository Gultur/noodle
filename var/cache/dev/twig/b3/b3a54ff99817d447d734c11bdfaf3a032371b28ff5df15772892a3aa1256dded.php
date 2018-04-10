<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_29deaa4f31a3cf29db6be565b5f50752e06c090b704c31a13825dfc65de89a46 extends Twig_Template
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
        $__internal_753e7e90e49dd75b28688cf66b7c7e54c8cff8d8a9fe91da1a4c57921ebed95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753e7e90e49dd75b28688cf66b7c7e54c8cff8d8a9fe91da1a4c57921ebed95d->enter($__internal_753e7e90e49dd75b28688cf66b7c7e54c8cff8d8a9fe91da1a4c57921ebed95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_753e7e90e49dd75b28688cf66b7c7e54c8cff8d8a9fe91da1a4c57921ebed95d->leave($__internal_753e7e90e49dd75b28688cf66b7c7e54c8cff8d8a9fe91da1a4c57921ebed95d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("", "@Framework/Form/widget_container_attributes.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
