<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ff9cbd39ddad1ba270c2b04e42383a6354edfaee418701b2aeaf34dedc5741eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fac00c83db3dfd03b475f837a5b7586e5130f5af4b766d1c07c47e4080263fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac00c83db3dfd03b475f837a5b7586e5130f5af4b766d1c07c47e4080263fb1->enter($__internal_fac00c83db3dfd03b475f837a5b7586e5130f5af4b766d1c07c47e4080263fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac00c83db3dfd03b475f837a5b7586e5130f5af4b766d1c07c47e4080263fb1->leave($__internal_fac00c83db3dfd03b475f837a5b7586e5130f5af4b766d1c07c47e4080263fb1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d1a6b27539c8ed473338d7bae27182c158334ff2e4e14f0f7da58b9ebe0f711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1a6b27539c8ed473338d7bae27182c158334ff2e4e14f0f7da58b9ebe0f711->enter($__internal_5d1a6b27539c8ed473338d7bae27182c158334ff2e4e14f0f7da58b9ebe0f711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d1a6b27539c8ed473338d7bae27182c158334ff2e4e14f0f7da58b9ebe0f711->leave($__internal_5d1a6b27539c8ed473338d7bae27182c158334ff2e4e14f0f7da58b9ebe0f711_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d862b536254af8dfaa46ba146583fa5062e26412609132063b1356bf16ebe50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d862b536254af8dfaa46ba146583fa5062e26412609132063b1356bf16ebe50->enter($__internal_5d862b536254af8dfaa46ba146583fa5062e26412609132063b1356bf16ebe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d862b536254af8dfaa46ba146583fa5062e26412609132063b1356bf16ebe50->leave($__internal_5d862b536254af8dfaa46ba146583fa5062e26412609132063b1356bf16ebe50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c78290f3bf53b28fabec3f31fa4d8efba1de9115e3f98a41002117350579f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c78290f3bf53b28fabec3f31fa4d8efba1de9115e3f98a41002117350579f91->enter($__internal_9c78290f3bf53b28fabec3f31fa4d8efba1de9115e3f98a41002117350579f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_9c78290f3bf53b28fabec3f31fa4d8efba1de9115e3f98a41002117350579f91->leave($__internal_9c78290f3bf53b28fabec3f31fa4d8efba1de9115e3f98a41002117350579f91_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/router.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
