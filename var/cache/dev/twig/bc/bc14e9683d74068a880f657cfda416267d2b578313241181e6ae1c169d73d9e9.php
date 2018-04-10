<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1206a7162e0f72af69da614ff55b71e4dadf22256ea21171eb6aba8ddd3976dd extends Twig_Template
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
        $__internal_2eac235a218c90deff0bff26af3618b83f411bbad8e612e48e34a3ba145f6c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eac235a218c90deff0bff26af3618b83f411bbad8e612e48e34a3ba145f6c38->enter($__internal_2eac235a218c90deff0bff26af3618b83f411bbad8e612e48e34a3ba145f6c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2eac235a218c90deff0bff26af3618b83f411bbad8e612e48e34a3ba145f6c38->leave($__internal_2eac235a218c90deff0bff26af3618b83f411bbad8e612e48e34a3ba145f6c38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/number_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
