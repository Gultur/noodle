<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a6029860aa941cd04146fcc83e7b1b99e600d40197583f03f85735a86e453226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0ad7ce65306411fbd80c627f54340288961efc07735ea7be12d35e67ea1bf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ad7ce65306411fbd80c627f54340288961efc07735ea7be12d35e67ea1bf0c->enter($__internal_e0ad7ce65306411fbd80c627f54340288961efc07735ea7be12d35e67ea1bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0ad7ce65306411fbd80c627f54340288961efc07735ea7be12d35e67ea1bf0c->leave($__internal_e0ad7ce65306411fbd80c627f54340288961efc07735ea7be12d35e67ea1bf0c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f947dcdffbc994775fdc23d1839b1de9a5e243f64d76313266e4b5c33bf26e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f947dcdffbc994775fdc23d1839b1de9a5e243f64d76313266e4b5c33bf26e8->enter($__internal_4f947dcdffbc994775fdc23d1839b1de9a5e243f64d76313266e4b5c33bf26e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f947dcdffbc994775fdc23d1839b1de9a5e243f64d76313266e4b5c33bf26e8->leave($__internal_4f947dcdffbc994775fdc23d1839b1de9a5e243f64d76313266e4b5c33bf26e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
