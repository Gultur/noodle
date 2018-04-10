<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_eae6e6e0dc9e3dfa4818e6acd57dfb4996efb122ae1e250b40f304be9bf306e6 extends Twig_Template
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
        $__internal_09042537bcd73908eaeee29f1b471b200959e3c8c3f4278fddfbb640752587a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09042537bcd73908eaeee29f1b471b200959e3c8c3f4278fddfbb640752587a3->enter($__internal_09042537bcd73908eaeee29f1b471b200959e3c8c3f4278fddfbb640752587a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_09042537bcd73908eaeee29f1b471b200959e3c8c3f4278fddfbb640752587a3->leave($__internal_09042537bcd73908eaeee29f1b471b200959e3c8c3f4278fddfbb640752587a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/range_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
