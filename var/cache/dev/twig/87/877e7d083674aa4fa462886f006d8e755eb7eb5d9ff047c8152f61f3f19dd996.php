<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3880194cc02d1a941182945e98ff1edc0b1e8ea0de692140c247706ccdeb9499 extends Twig_Template
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
        $__internal_c0325b691c01369970a65bca789f463b07cc0fb4122492604402bb86a2fd9875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0325b691c01369970a65bca789f463b07cc0fb4122492604402bb86a2fd9875->enter($__internal_c0325b691c01369970a65bca789f463b07cc0fb4122492604402bb86a2fd9875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_41de5ff2e3ea4c4f46043cfcd7da4041643e948a30b5fa40f4da35e9be804658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41de5ff2e3ea4c4f46043cfcd7da4041643e948a30b5fa40f4da35e9be804658->enter($__internal_41de5ff2e3ea4c4f46043cfcd7da4041643e948a30b5fa40f4da35e9be804658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0325b691c01369970a65bca789f463b07cc0fb4122492604402bb86a2fd9875->leave($__internal_c0325b691c01369970a65bca789f463b07cc0fb4122492604402bb86a2fd9875_prof);

        
        $__internal_41de5ff2e3ea4c4f46043cfcd7da4041643e948a30b5fa40f4da35e9be804658->leave($__internal_41de5ff2e3ea4c4f46043cfcd7da4041643e948a30b5fa40f4da35e9be804658_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35c63343a9bbe33ffb11b0257873e3bde92c0fb1be647987316a3a8c47a3a264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c63343a9bbe33ffb11b0257873e3bde92c0fb1be647987316a3a8c47a3a264->enter($__internal_35c63343a9bbe33ffb11b0257873e3bde92c0fb1be647987316a3a8c47a3a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb9435d900f3c674441255d3db231b2f6fb26115725d9aa8c1d0a94ed99f29d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9435d900f3c674441255d3db231b2f6fb26115725d9aa8c1d0a94ed99f29d4->enter($__internal_eb9435d900f3c674441255d3db231b2f6fb26115725d9aa8c1d0a94ed99f29d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb9435d900f3c674441255d3db231b2f6fb26115725d9aa8c1d0a94ed99f29d4->leave($__internal_eb9435d900f3c674441255d3db231b2f6fb26115725d9aa8c1d0a94ed99f29d4_prof);

        
        $__internal_35c63343a9bbe33ffb11b0257873e3bde92c0fb1be647987316a3a8c47a3a264->leave($__internal_35c63343a9bbe33ffb11b0257873e3bde92c0fb1be647987316a3a8c47a3a264_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47ac55bb071c8827406ea6d57d110054d62d05dd50650f207b79b1c24d8e06b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ac55bb071c8827406ea6d57d110054d62d05dd50650f207b79b1c24d8e06b3->enter($__internal_47ac55bb071c8827406ea6d57d110054d62d05dd50650f207b79b1c24d8e06b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ef328d3f036c62ae70e103947b5a6a24ac287d5d946994828e9c31364c7ce70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef328d3f036c62ae70e103947b5a6a24ac287d5d946994828e9c31364c7ce70->enter($__internal_3ef328d3f036c62ae70e103947b5a6a24ac287d5d946994828e9c31364c7ce70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ef328d3f036c62ae70e103947b5a6a24ac287d5d946994828e9c31364c7ce70->leave($__internal_3ef328d3f036c62ae70e103947b5a6a24ac287d5d946994828e9c31364c7ce70_prof);

        
        $__internal_47ac55bb071c8827406ea6d57d110054d62d05dd50650f207b79b1c24d8e06b3->leave($__internal_47ac55bb071c8827406ea6d57d110054d62d05dd50650f207b79b1c24d8e06b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f217bae185f6efef4f1dfa648326fb914cc5026f21bb0befacd1eb627e3ee28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f217bae185f6efef4f1dfa648326fb914cc5026f21bb0befacd1eb627e3ee28->enter($__internal_7f217bae185f6efef4f1dfa648326fb914cc5026f21bb0befacd1eb627e3ee28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0f4a32e67dbc951328d7d993631684775dd1499749ed352722945f5a4d0b297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f4a32e67dbc951328d7d993631684775dd1499749ed352722945f5a4d0b297->enter($__internal_a0f4a32e67dbc951328d7d993631684775dd1499749ed352722945f5a4d0b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0f4a32e67dbc951328d7d993631684775dd1499749ed352722945f5a4d0b297->leave($__internal_a0f4a32e67dbc951328d7d993631684775dd1499749ed352722945f5a4d0b297_prof);

        
        $__internal_7f217bae185f6efef4f1dfa648326fb914cc5026f21bb0befacd1eb627e3ee28->leave($__internal_7f217bae185f6efef4f1dfa648326fb914cc5026f21bb0befacd1eb627e3ee28_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
