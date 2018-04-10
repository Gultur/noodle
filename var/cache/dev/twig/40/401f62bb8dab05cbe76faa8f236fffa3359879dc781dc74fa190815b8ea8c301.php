<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_305b0d8d02dee12606eb97ed989aba64cd5992d86ac18ce99b7c8bc81d55d99d extends Twig_Template
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
        $__internal_7109c44ccb7965cb7f11715d033c84457733a800f640345b5290a58987b41a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7109c44ccb7965cb7f11715d033c84457733a800f640345b5290a58987b41a95->enter($__internal_7109c44ccb7965cb7f11715d033c84457733a800f640345b5290a58987b41a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7109c44ccb7965cb7f11715d033c84457733a800f640345b5290a58987b41a95->leave($__internal_7109c44ccb7965cb7f11715d033c84457733a800f640345b5290a58987b41a95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/url_widget.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
