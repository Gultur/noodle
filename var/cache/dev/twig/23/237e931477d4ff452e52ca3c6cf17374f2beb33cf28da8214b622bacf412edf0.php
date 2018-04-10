<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8c249003ab73c3e91e0c6eb9b29dd906cce3446946a2e95bd60f496b48f9f33f extends Twig_Template
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
        $__internal_633806522b6d462bfc5c95e50d4ea03aa3d7f4aaff497b0eac013f4ec3cac1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633806522b6d462bfc5c95e50d4ea03aa3d7f4aaff497b0eac013f4ec3cac1fa->enter($__internal_633806522b6d462bfc5c95e50d4ea03aa3d7f4aaff497b0eac013f4ec3cac1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_633806522b6d462bfc5c95e50d4ea03aa3d7f4aaff497b0eac013f4ec3cac1fa->leave($__internal_633806522b6d462bfc5c95e50d4ea03aa3d7f4aaff497b0eac013f4ec3cac1fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/collection_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
