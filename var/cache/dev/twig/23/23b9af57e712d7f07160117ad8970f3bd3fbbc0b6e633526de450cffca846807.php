<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1be921660affbbbae506ca7552b49ea03f53b9ca127a8697d85bc919dc844fb9 extends Twig_Template
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
        $__internal_a9972e0cdef69c10139b358c7c0265a77b2481c774ec39391a5e76e51b7e61f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9972e0cdef69c10139b358c7c0265a77b2481c774ec39391a5e76e51b7e61f2->enter($__internal_a9972e0cdef69c10139b358c7c0265a77b2481c774ec39391a5e76e51b7e61f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a9972e0cdef69c10139b358c7c0265a77b2481c774ec39391a5e76e51b7e61f2->leave($__internal_a9972e0cdef69c10139b358c7c0265a77b2481c774ec39391a5e76e51b7e61f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/integer_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
