<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_596f7e335c17c199973b1c925eea393d69f1f8a6658d5c79dea4eba1528ec3c0 extends Twig_Template
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
        $__internal_5abbb628a69bd26b5e69c176c5fd6e4b18ba31b7942661e7a8c2c3b188cec4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abbb628a69bd26b5e69c176c5fd6e4b18ba31b7942661e7a8c2c3b188cec4ea->enter($__internal_5abbb628a69bd26b5e69c176c5fd6e4b18ba31b7942661e7a8c2c3b188cec4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5abbb628a69bd26b5e69c176c5fd6e4b18ba31b7942661e7a8c2c3b188cec4ea->leave($__internal_5abbb628a69bd26b5e69c176c5fd6e4b18ba31b7942661e7a8c2c3b188cec4ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_row.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
