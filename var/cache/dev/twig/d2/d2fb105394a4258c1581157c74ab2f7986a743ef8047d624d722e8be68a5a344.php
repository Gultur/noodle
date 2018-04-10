<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_31653edcb9b35833d26ccb73245d5959bbdcb8820e4bef72eddfed6c4fffaa37 extends Twig_Template
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
        $__internal_4928795bda10f08f428464ca46f708bf8d503d120fcadce84956c13e10c706c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4928795bda10f08f428464ca46f708bf8d503d120fcadce84956c13e10c706c1->enter($__internal_4928795bda10f08f428464ca46f708bf8d503d120fcadce84956c13e10c706c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_4928795bda10f08f428464ca46f708bf8d503d120fcadce84956c13e10c706c1->leave($__internal_4928795bda10f08f428464ca46f708bf8d503d120fcadce84956c13e10c706c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/color_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
