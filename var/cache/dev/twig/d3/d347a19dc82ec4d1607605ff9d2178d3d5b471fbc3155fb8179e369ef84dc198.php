<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c1fa73a3b236fd341da1229bd0d5b56f9e5fe72da6cdd5cab3a1c875c2beaf29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d5dc6f140d870032c1f5e636b5f68246fb867ebe66883ed3249d44c56d0ea573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5dc6f140d870032c1f5e636b5f68246fb867ebe66883ed3249d44c56d0ea573->enter($__internal_d5dc6f140d870032c1f5e636b5f68246fb867ebe66883ed3249d44c56d0ea573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bbff7e8a0d1cf6da8b7225654648856a9ffe8de8e54f32884e8e2ef72e71e85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbff7e8a0d1cf6da8b7225654648856a9ffe8de8e54f32884e8e2ef72e71e85c->enter($__internal_bbff7e8a0d1cf6da8b7225654648856a9ffe8de8e54f32884e8e2ef72e71e85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5dc6f140d870032c1f5e636b5f68246fb867ebe66883ed3249d44c56d0ea573->leave($__internal_d5dc6f140d870032c1f5e636b5f68246fb867ebe66883ed3249d44c56d0ea573_prof);

        
        $__internal_bbff7e8a0d1cf6da8b7225654648856a9ffe8de8e54f32884e8e2ef72e71e85c->leave($__internal_bbff7e8a0d1cf6da8b7225654648856a9ffe8de8e54f32884e8e2ef72e71e85c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9524e1ca61a4ea23d4c79040ed3220f8e0b893b934f48b4d47a32613ef23516d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9524e1ca61a4ea23d4c79040ed3220f8e0b893b934f48b4d47a32613ef23516d->enter($__internal_9524e1ca61a4ea23d4c79040ed3220f8e0b893b934f48b4d47a32613ef23516d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f9e7d7abe17c83c1903dfa390289d272a52f5d6142c024afa4e176f6711316ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e7d7abe17c83c1903dfa390289d272a52f5d6142c024afa4e176f6711316ca->enter($__internal_f9e7d7abe17c83c1903dfa390289d272a52f5d6142c024afa4e176f6711316ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f9e7d7abe17c83c1903dfa390289d272a52f5d6142c024afa4e176f6711316ca->leave($__internal_f9e7d7abe17c83c1903dfa390289d272a52f5d6142c024afa4e176f6711316ca_prof);

        
        $__internal_9524e1ca61a4ea23d4c79040ed3220f8e0b893b934f48b4d47a32613ef23516d->leave($__internal_9524e1ca61a4ea23d4c79040ed3220f8e0b893b934f48b4d47a32613ef23516d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9acaa6b9514f66781e6d5fa629ccc7aff61c2afc3962aee9b1795e04ed3140a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acaa6b9514f66781e6d5fa629ccc7aff61c2afc3962aee9b1795e04ed3140a5->enter($__internal_9acaa6b9514f66781e6d5fa629ccc7aff61c2afc3962aee9b1795e04ed3140a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ded16c848ab6bb12bfc4aa512c65fe97caf485299648fea378c2db18fe13f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded16c848ab6bb12bfc4aa512c65fe97caf485299648fea378c2db18fe13f58->enter($__internal_7ded16c848ab6bb12bfc4aa512c65fe97caf485299648fea378c2db18fe13f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7ded16c848ab6bb12bfc4aa512c65fe97caf485299648fea378c2db18fe13f58->leave($__internal_7ded16c848ab6bb12bfc4aa512c65fe97caf485299648fea378c2db18fe13f58_prof);

        
        $__internal_9acaa6b9514f66781e6d5fa629ccc7aff61c2afc3962aee9b1795e04ed3140a5->leave($__internal_9acaa6b9514f66781e6d5fa629ccc7aff61c2afc3962aee9b1795e04ed3140a5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30d97ce73da1c6c511da6a8a4778538a7534f3a4d07e8036439357264934df7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d97ce73da1c6c511da6a8a4778538a7534f3a4d07e8036439357264934df7f->enter($__internal_30d97ce73da1c6c511da6a8a4778538a7534f3a4d07e8036439357264934df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a48864011b0a4fbfc58f9ca26fe78cd6abb3e7adc83dc160216c9fa1902017cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48864011b0a4fbfc58f9ca26fe78cd6abb3e7adc83dc160216c9fa1902017cf->enter($__internal_a48864011b0a4fbfc58f9ca26fe78cd6abb3e7adc83dc160216c9fa1902017cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a48864011b0a4fbfc58f9ca26fe78cd6abb3e7adc83dc160216c9fa1902017cf->leave($__internal_a48864011b0a4fbfc58f9ca26fe78cd6abb3e7adc83dc160216c9fa1902017cf_prof);

        
        $__internal_30d97ce73da1c6c511da6a8a4778538a7534f3a4d07e8036439357264934df7f->leave($__internal_30d97ce73da1c6c511da6a8a4778538a7534f3a4d07e8036439357264934df7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
