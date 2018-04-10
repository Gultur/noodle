<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_592faf70dd63dc33bad63cab0f003465d0499bc7440b02cc9433cd20ce4e7727 extends Twig_Template
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
        $__internal_0fa3d49edc3fd5b3a9d41e66fc47e1e16053aaec66eba30bc34f9898b44e8d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa3d49edc3fd5b3a9d41e66fc47e1e16053aaec66eba30bc34f9898b44e8d67->enter($__internal_0fa3d49edc3fd5b3a9d41e66fc47e1e16053aaec66eba30bc34f9898b44e8d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? null), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0fa3d49edc3fd5b3a9d41e66fc47e1e16053aaec66eba30bc34f9898b44e8d67->leave($__internal_0fa3d49edc3fd5b3a9d41e66fc47e1e16053aaec66eba30bc34f9898b44e8d67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "@Framework/Form/money_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
