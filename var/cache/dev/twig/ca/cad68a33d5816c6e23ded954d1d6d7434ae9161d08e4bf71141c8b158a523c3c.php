<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7e91df846f996dd9f8c83d409011adf6c0a28b1cc6f274c8121dfb8a61fa6403 extends Twig_Template
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
        $__internal_dac213b21d9121749ff98fea8472e4b3b8454472f31f09a8eddf8baa52a2d549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac213b21d9121749ff98fea8472e4b3b8454472f31f09a8eddf8baa52a2d549->enter($__internal_dac213b21d9121749ff98fea8472e4b3b8454472f31f09a8eddf8baa52a2d549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dac213b21d9121749ff98fea8472e4b3b8454472f31f09a8eddf8baa52a2d549->leave($__internal_dac213b21d9121749ff98fea8472e4b3b8454472f31f09a8eddf8baa52a2d549_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_widget_simple.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
