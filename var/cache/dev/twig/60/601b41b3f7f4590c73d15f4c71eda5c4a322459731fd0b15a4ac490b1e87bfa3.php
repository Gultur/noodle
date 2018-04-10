<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b686d3e87cfe64914c2c8d2052fb62de642636316c2a39f870a403e210d91cdc extends Twig_Template
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
        $__internal_814163a60833b6d9a605aa26262d965a3d870455e0cdab0265dca0ec2fcd6a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814163a60833b6d9a605aa26262d965a3d870455e0cdab0265dca0ec2fcd6a0c->enter($__internal_814163a60833b6d9a605aa26262d965a3d870455e0cdab0265dca0ec2fcd6a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_814163a60833b6d9a605aa26262d965a3d870455e0cdab0265dca0ec2fcd6a0c->leave($__internal_814163a60833b6d9a605aa26262d965a3d870455e0cdab0265dca0ec2fcd6a0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("", "@Framework/Form/container_attributes.html.php", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
