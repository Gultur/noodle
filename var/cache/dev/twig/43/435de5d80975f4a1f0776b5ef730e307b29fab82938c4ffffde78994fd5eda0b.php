<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a05233c31873a2c7a602c8c33937db8c6f18d1c7b22a7be75fecd8e7140fb33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc24356d93b6727d835fe723af7b4fa258f06c0fb1da9d1acde4b9ffd7ae1c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc24356d93b6727d835fe723af7b4fa258f06c0fb1da9d1acde4b9ffd7ae1c35->enter($__internal_dc24356d93b6727d835fe723af7b4fa258f06c0fb1da9d1acde4b9ffd7ae1c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_316ea52f2f5a4b60e98f4858382a197b8cc585a4b5793fb24bffd6640e39bfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316ea52f2f5a4b60e98f4858382a197b8cc585a4b5793fb24bffd6640e39bfce->enter($__internal_316ea52f2f5a4b60e98f4858382a197b8cc585a4b5793fb24bffd6640e39bfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc24356d93b6727d835fe723af7b4fa258f06c0fb1da9d1acde4b9ffd7ae1c35->leave($__internal_dc24356d93b6727d835fe723af7b4fa258f06c0fb1da9d1acde4b9ffd7ae1c35_prof);

        
        $__internal_316ea52f2f5a4b60e98f4858382a197b8cc585a4b5793fb24bffd6640e39bfce->leave($__internal_316ea52f2f5a4b60e98f4858382a197b8cc585a4b5793fb24bffd6640e39bfce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8ab7283c80ac9f05a2aad68f4fae0b3fa750f6d46d944ff068729561584fd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ab7283c80ac9f05a2aad68f4fae0b3fa750f6d46d944ff068729561584fd2d->enter($__internal_b8ab7283c80ac9f05a2aad68f4fae0b3fa750f6d46d944ff068729561584fd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1686693257774723b385f476f2adaabdb2f4f1eb73d9b0585ff329b1919c363c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1686693257774723b385f476f2adaabdb2f4f1eb73d9b0585ff329b1919c363c->enter($__internal_1686693257774723b385f476f2adaabdb2f4f1eb73d9b0585ff329b1919c363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1686693257774723b385f476f2adaabdb2f4f1eb73d9b0585ff329b1919c363c->leave($__internal_1686693257774723b385f476f2adaabdb2f4f1eb73d9b0585ff329b1919c363c_prof);

        
        $__internal_b8ab7283c80ac9f05a2aad68f4fae0b3fa750f6d46d944ff068729561584fd2d->leave($__internal_b8ab7283c80ac9f05a2aad68f4fae0b3fa750f6d46d944ff068729561584fd2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
