<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0c5f52db86962509426692ddaa074216000b3d2d3832d0892ecd202750e188d3 extends Twig_Template
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
        $__internal_38d2ad574b41ab8403638d942eec71997ac71adb27eb2f9afa9bc7de8b868e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d2ad574b41ab8403638d942eec71997ac71adb27eb2f9afa9bc7de8b868e76->enter($__internal_38d2ad574b41ab8403638d942eec71997ac71adb27eb2f9afa9bc7de8b868e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0465cf12e5653c21360406867a3b0aaa663152c64490e9d71c5f78e6dadf5ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0465cf12e5653c21360406867a3b0aaa663152c64490e9d71c5f78e6dadf5ee5->enter($__internal_0465cf12e5653c21360406867a3b0aaa663152c64490e9d71c5f78e6dadf5ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38d2ad574b41ab8403638d942eec71997ac71adb27eb2f9afa9bc7de8b868e76->leave($__internal_38d2ad574b41ab8403638d942eec71997ac71adb27eb2f9afa9bc7de8b868e76_prof);

        
        $__internal_0465cf12e5653c21360406867a3b0aaa663152c64490e9d71c5f78e6dadf5ee5->leave($__internal_0465cf12e5653c21360406867a3b0aaa663152c64490e9d71c5f78e6dadf5ee5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28d817d346967c256bbc0ead6d634c01548ab6392363fb817f95e7c92b3a75e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d817d346967c256bbc0ead6d634c01548ab6392363fb817f95e7c92b3a75e5->enter($__internal_28d817d346967c256bbc0ead6d634c01548ab6392363fb817f95e7c92b3a75e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc8e2999a2e533acdce937602b9f111cc052db8fc05920c0bb5f5ce06d034fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8e2999a2e533acdce937602b9f111cc052db8fc05920c0bb5f5ce06d034fe8->enter($__internal_cc8e2999a2e533acdce937602b9f111cc052db8fc05920c0bb5f5ce06d034fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cc8e2999a2e533acdce937602b9f111cc052db8fc05920c0bb5f5ce06d034fe8->leave($__internal_cc8e2999a2e533acdce937602b9f111cc052db8fc05920c0bb5f5ce06d034fe8_prof);

        
        $__internal_28d817d346967c256bbc0ead6d634c01548ab6392363fb817f95e7c92b3a75e5->leave($__internal_28d817d346967c256bbc0ead6d634c01548ab6392363fb817f95e7c92b3a75e5_prof);

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
