<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
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
        $__internal_359b07fa509c88f7a6c22308d904880dad2f648670845587d2d0b22c9a48812f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359b07fa509c88f7a6c22308d904880dad2f648670845587d2d0b22c9a48812f->enter($__internal_359b07fa509c88f7a6c22308d904880dad2f648670845587d2d0b22c9a48812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eee76893331acd9ffef4691183c7ab7511ecbed2b81c4cf21bf5a1e498d1e2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee76893331acd9ffef4691183c7ab7511ecbed2b81c4cf21bf5a1e498d1e2c4->enter($__internal_eee76893331acd9ffef4691183c7ab7511ecbed2b81c4cf21bf5a1e498d1e2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359b07fa509c88f7a6c22308d904880dad2f648670845587d2d0b22c9a48812f->leave($__internal_359b07fa509c88f7a6c22308d904880dad2f648670845587d2d0b22c9a48812f_prof);

        
        $__internal_eee76893331acd9ffef4691183c7ab7511ecbed2b81c4cf21bf5a1e498d1e2c4->leave($__internal_eee76893331acd9ffef4691183c7ab7511ecbed2b81c4cf21bf5a1e498d1e2c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ee8c1f5f383f0adba16410848898b0c73dbbc25cb51d7488a14e1393341a886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee8c1f5f383f0adba16410848898b0c73dbbc25cb51d7488a14e1393341a886->enter($__internal_2ee8c1f5f383f0adba16410848898b0c73dbbc25cb51d7488a14e1393341a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_092e4854fb87535035b721567db5ebfb48943cf26caba8e106a303942a4d5554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092e4854fb87535035b721567db5ebfb48943cf26caba8e106a303942a4d5554->enter($__internal_092e4854fb87535035b721567db5ebfb48943cf26caba8e106a303942a4d5554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_092e4854fb87535035b721567db5ebfb48943cf26caba8e106a303942a4d5554->leave($__internal_092e4854fb87535035b721567db5ebfb48943cf26caba8e106a303942a4d5554_prof);

        
        $__internal_2ee8c1f5f383f0adba16410848898b0c73dbbc25cb51d7488a14e1393341a886->leave($__internal_2ee8c1f5f383f0adba16410848898b0c73dbbc25cb51d7488a14e1393341a886_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70ff0fd26fd39f4f0ab5a5130632ad269e821ff1405cd5b68cdd80929a7c0c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ff0fd26fd39f4f0ab5a5130632ad269e821ff1405cd5b68cdd80929a7c0c13->enter($__internal_70ff0fd26fd39f4f0ab5a5130632ad269e821ff1405cd5b68cdd80929a7c0c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c958f763a566dca337ace16806def125637f1a8354ad0e116190d6b6c53eb89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c958f763a566dca337ace16806def125637f1a8354ad0e116190d6b6c53eb89b->enter($__internal_c958f763a566dca337ace16806def125637f1a8354ad0e116190d6b6c53eb89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c958f763a566dca337ace16806def125637f1a8354ad0e116190d6b6c53eb89b->leave($__internal_c958f763a566dca337ace16806def125637f1a8354ad0e116190d6b6c53eb89b_prof);

        
        $__internal_70ff0fd26fd39f4f0ab5a5130632ad269e821ff1405cd5b68cdd80929a7c0c13->leave($__internal_70ff0fd26fd39f4f0ab5a5130632ad269e821ff1405cd5b68cdd80929a7c0c13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77cdbf3fd6702eddb02a2ddf277dd1bbc41e2dbfd2dd7adcd6677724e0640a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cdbf3fd6702eddb02a2ddf277dd1bbc41e2dbfd2dd7adcd6677724e0640a90->enter($__internal_77cdbf3fd6702eddb02a2ddf277dd1bbc41e2dbfd2dd7adcd6677724e0640a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5a1169ce83cab270d366cfe6e436a16c188a6b11a5f58c96848966664706b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a1169ce83cab270d366cfe6e436a16c188a6b11a5f58c96848966664706b1e->enter($__internal_a5a1169ce83cab270d366cfe6e436a16c188a6b11a5f58c96848966664706b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a5a1169ce83cab270d366cfe6e436a16c188a6b11a5f58c96848966664706b1e->leave($__internal_a5a1169ce83cab270d366cfe6e436a16c188a6b11a5f58c96848966664706b1e_prof);

        
        $__internal_77cdbf3fd6702eddb02a2ddf277dd1bbc41e2dbfd2dd7adcd6677724e0640a90->leave($__internal_77cdbf3fd6702eddb02a2ddf277dd1bbc41e2dbfd2dd7adcd6677724e0640a90_prof);

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
