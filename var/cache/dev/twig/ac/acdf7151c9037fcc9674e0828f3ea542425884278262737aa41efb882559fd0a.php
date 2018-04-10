<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5d75a5888a0f2543dcdd27376aa0ac3c3220d11c479f066a82f0b2317dfd74a6 extends Twig_Template
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
        $__internal_f8d9ae6072567fe2b042c52245455ffee135f020c262d03d86515d11f3724b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d9ae6072567fe2b042c52245455ffee135f020c262d03d86515d11f3724b0e->enter($__internal_f8d9ae6072567fe2b042c52245455ffee135f020c262d03d86515d11f3724b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f8d9ae6072567fe2b042c52245455ffee135f020c262d03d86515d11f3724b0e->leave($__internal_f8d9ae6072567fe2b042c52245455ffee135f020c262d03d86515d11f3724b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/search_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
