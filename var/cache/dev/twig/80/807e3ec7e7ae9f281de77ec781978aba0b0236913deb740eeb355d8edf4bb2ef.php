<?php

/* @Framework/Form/tel_widget.html.php */
class __TwigTemplate_09c3f89eaff2b85afec3c6f8de38bdfd6478efd0756ccf2502b0f2e44647d94c extends Twig_Template
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
        $__internal_36729fde3b1d6057f24cf27d6f80d0f0e70edd4b29558c1088f245dcd3ae991e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36729fde3b1d6057f24cf27d6f80d0f0e70edd4b29558c1088f245dcd3ae991e->enter($__internal_36729fde3b1d6057f24cf27d6f80d0f0e70edd4b29558c1088f245dcd3ae991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/tel_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'tel'));
";
        
        $__internal_36729fde3b1d6057f24cf27d6f80d0f0e70edd4b29558c1088f245dcd3ae991e->leave($__internal_36729fde3b1d6057f24cf27d6f80d0f0e70edd4b29558c1088f245dcd3ae991e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/tel_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/tel_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/tel_widget.html.php");
    }
}