<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e9e0b67db3e46e873a96ef816bf6d7f2297a6d117f058dc545ea05c26f8caccc extends Twig_Template
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
        $__internal_c3e641cb0b95f32110f1024c68b5fe149b5d8dfc86154b8322a301d1744fa288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e641cb0b95f32110f1024c68b5fe149b5d8dfc86154b8322a301d1744fa288->enter($__internal_c3e641cb0b95f32110f1024c68b5fe149b5d8dfc86154b8322a301d1744fa288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c3e641cb0b95f32110f1024c68b5fe149b5d8dfc86154b8322a301d1744fa288->leave($__internal_c3e641cb0b95f32110f1024c68b5fe149b5d8dfc86154b8322a301d1744fa288_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/submit_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
