<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_3ea7d8764afe4fcfebb4100754cc89e8cc87b8884c50c51a39e7112c4e18d62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_569ddf66a6f9b1501f89a43f5a3e281e5a20e1a757ffdbb39f234bc5f1eb56ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569ddf66a6f9b1501f89a43f5a3e281e5a20e1a757ffdbb39f234bc5f1eb56ef->enter($__internal_569ddf66a6f9b1501f89a43f5a3e281e5a20e1a757ffdbb39f234bc5f1eb56ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569ddf66a6f9b1501f89a43f5a3e281e5a20e1a757ffdbb39f234bc5f1eb56ef->leave($__internal_569ddf66a6f9b1501f89a43f5a3e281e5a20e1a757ffdbb39f234bc5f1eb56ef_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bfafcae6339517c45a3d6fa0b305d2f476290ead818f703ca08e8afa87045637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfafcae6339517c45a3d6fa0b305d2f476290ead818f703ca08e8afa87045637->enter($__internal_bfafcae6339517c45a3d6fa0b305d2f476290ead818f703ca08e8afa87045637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bfafcae6339517c45a3d6fa0b305d2f476290ead818f703ca08e8afa87045637->leave($__internal_bfafcae6339517c45a3d6fa0b305d2f476290ead818f703ca08e8afa87045637_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd6da01eca6d86bcb8e8670e907fb15d89b0418e6cbdc4c947b34c0eafa1ac01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6da01eca6d86bcb8e8670e907fb15d89b0418e6cbdc4c947b34c0eafa1ac01->enter($__internal_bd6da01eca6d86bcb8e8670e907fb15d89b0418e6cbdc4c947b34c0eafa1ac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bd6da01eca6d86bcb8e8670e907fb15d89b0418e6cbdc4c947b34c0eafa1ac01->leave($__internal_bd6da01eca6d86bcb8e8670e907fb15d89b0418e6cbdc4c947b34c0eafa1ac01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 20,  63 => 19,  52 => 14,  46 => 12,  40 => 11,  33 => 1,  31 => 7,  30 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/info.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
