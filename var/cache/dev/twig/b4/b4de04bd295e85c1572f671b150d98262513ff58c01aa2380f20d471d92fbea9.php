<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_fa45a7995d0dfe4a5811970075b91143d58f20969d4a6aed19e145cb3760e699 extends Twig_Template
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
        $__internal_39fec6faf1393b95b1ea19a738f9b72aa60746322d9e751f7b7d7072962f066a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fec6faf1393b95b1ea19a738f9b72aa60746322d9e751f7b7d7072962f066a->enter($__internal_39fec6faf1393b95b1ea19a738f9b72aa60746322d9e751f7b7d7072962f066a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? null), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_39fec6faf1393b95b1ea19a738f9b72aa60746322d9e751f7b7d7072962f066a->leave($__internal_39fec6faf1393b95b1ea19a738f9b72aa60746322d9e751f7b7d7072962f066a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/date_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
