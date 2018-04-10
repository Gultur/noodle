<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_78f8e7961e08cba98f5424023525addda422d888179d8dcde774ffdc5465166e extends Twig_Template
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
        $__internal_85f57bbb41de4e2b9a8779f774b1cbdf03c14f1655e76afef46956156805e29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f57bbb41de4e2b9a8779f774b1cbdf03c14f1655e76afef46956156805e29a->enter($__internal_85f57bbb41de4e2b9a8779f774b1cbdf03c14f1655e76afef46956156805e29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_85f57bbb41de4e2b9a8779f774b1cbdf03c14f1655e76afef46956156805e29a->leave($__internal_85f57bbb41de4e2b9a8779f774b1cbdf03c14f1655e76afef46956156805e29a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
