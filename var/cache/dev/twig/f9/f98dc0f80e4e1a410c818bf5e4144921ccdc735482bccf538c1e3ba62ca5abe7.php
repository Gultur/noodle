<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
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
        $__internal_1adb5ab3924b4230e33bb9b92dc5340c59125c84af99baa8a8848f9920880186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adb5ab3924b4230e33bb9b92dc5340c59125c84af99baa8a8848f9920880186->enter($__internal_1adb5ab3924b4230e33bb9b92dc5340c59125c84af99baa8a8848f9920880186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a25d599511bd02e4f840d194fcffe1b4ebcdcea9923cd20608c08bf5438f995e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25d599511bd02e4f840d194fcffe1b4ebcdcea9923cd20608c08bf5438f995e->enter($__internal_a25d599511bd02e4f840d194fcffe1b4ebcdcea9923cd20608c08bf5438f995e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1adb5ab3924b4230e33bb9b92dc5340c59125c84af99baa8a8848f9920880186->leave($__internal_1adb5ab3924b4230e33bb9b92dc5340c59125c84af99baa8a8848f9920880186_prof);

        
        $__internal_a25d599511bd02e4f840d194fcffe1b4ebcdcea9923cd20608c08bf5438f995e->leave($__internal_a25d599511bd02e4f840d194fcffe1b4ebcdcea9923cd20608c08bf5438f995e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fed7d7c9e30c39467bcf3ab8eaf4b3ab223bca988c64e342b2ee4e6cdef8ec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed7d7c9e30c39467bcf3ab8eaf4b3ab223bca988c64e342b2ee4e6cdef8ec11->enter($__internal_fed7d7c9e30c39467bcf3ab8eaf4b3ab223bca988c64e342b2ee4e6cdef8ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6ffaea98dd1e88cd8923729c2a016b8d94aaa8be07c1067877c22c7b59524453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffaea98dd1e88cd8923729c2a016b8d94aaa8be07c1067877c22c7b59524453->enter($__internal_6ffaea98dd1e88cd8923729c2a016b8d94aaa8be07c1067877c22c7b59524453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6ffaea98dd1e88cd8923729c2a016b8d94aaa8be07c1067877c22c7b59524453->leave($__internal_6ffaea98dd1e88cd8923729c2a016b8d94aaa8be07c1067877c22c7b59524453_prof);

        
        $__internal_fed7d7c9e30c39467bcf3ab8eaf4b3ab223bca988c64e342b2ee4e6cdef8ec11->leave($__internal_fed7d7c9e30c39467bcf3ab8eaf4b3ab223bca988c64e342b2ee4e6cdef8ec11_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_187c5b43cb2bbf7419cbe422eca5a50a63b1a83ddc9f30a45c827b9b28eb005a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187c5b43cb2bbf7419cbe422eca5a50a63b1a83ddc9f30a45c827b9b28eb005a->enter($__internal_187c5b43cb2bbf7419cbe422eca5a50a63b1a83ddc9f30a45c827b9b28eb005a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c7e0457755d5c6b09dba317906152a5175b3b566af3357039e130a94e2871646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e0457755d5c6b09dba317906152a5175b3b566af3357039e130a94e2871646->enter($__internal_c7e0457755d5c6b09dba317906152a5175b3b566af3357039e130a94e2871646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c7e0457755d5c6b09dba317906152a5175b3b566af3357039e130a94e2871646->leave($__internal_c7e0457755d5c6b09dba317906152a5175b3b566af3357039e130a94e2871646_prof);

        
        $__internal_187c5b43cb2bbf7419cbe422eca5a50a63b1a83ddc9f30a45c827b9b28eb005a->leave($__internal_187c5b43cb2bbf7419cbe422eca5a50a63b1a83ddc9f30a45c827b9b28eb005a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17d392e379036c16412506c3919e97d27c1e623554e569239c328f59e696f8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d392e379036c16412506c3919e97d27c1e623554e569239c328f59e696f8a7->enter($__internal_17d392e379036c16412506c3919e97d27c1e623554e569239c328f59e696f8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e41c75c773aa475e74f53094d98026ef7bb50d222369c18f725340eba5501637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41c75c773aa475e74f53094d98026ef7bb50d222369c18f725340eba5501637->enter($__internal_e41c75c773aa475e74f53094d98026ef7bb50d222369c18f725340eba5501637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e41c75c773aa475e74f53094d98026ef7bb50d222369c18f725340eba5501637->leave($__internal_e41c75c773aa475e74f53094d98026ef7bb50d222369c18f725340eba5501637_prof);

        
        $__internal_17d392e379036c16412506c3919e97d27c1e623554e569239c328f59e696f8a7->leave($__internal_17d392e379036c16412506c3919e97d27c1e623554e569239c328f59e696f8a7_prof);

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
