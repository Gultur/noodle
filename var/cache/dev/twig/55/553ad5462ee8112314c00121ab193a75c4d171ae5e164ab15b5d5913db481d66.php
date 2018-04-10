<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1b4253846f09257e950cd7654bbd45152b4bd8ffde242d4b2d4012faa690b11e extends Twig_Template
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
        $__internal_4aeecd1b1b21f597094198f3cee58b8c1bdad73255a77cd640be2bd97b31eab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aeecd1b1b21f597094198f3cee58b8c1bdad73255a77cd640be2bd97b31eab2->enter($__internal_4aeecd1b1b21f597094198f3cee58b8c1bdad73255a77cd640be2bd97b31eab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4aeecd1b1b21f597094198f3cee58b8c1bdad73255a77cd640be2bd97b31eab2->leave($__internal_4aeecd1b1b21f597094198f3cee58b8c1bdad73255a77cd640be2bd97b31eab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_rows.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
