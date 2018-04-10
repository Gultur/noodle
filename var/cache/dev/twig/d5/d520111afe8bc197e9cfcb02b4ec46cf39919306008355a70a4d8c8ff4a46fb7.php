<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_525692a4731d65095ae8d2a4b8feda5e24c40f64566b349984e9a685acc9c776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3376c9829c17769cf213fc504fe3fc2d48903e235cb4a391b9ff456c946e7f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3376c9829c17769cf213fc504fe3fc2d48903e235cb4a391b9ff456c946e7f15->enter($__internal_3376c9829c17769cf213fc504fe3fc2d48903e235cb4a391b9ff456c946e7f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3376c9829c17769cf213fc504fe3fc2d48903e235cb4a391b9ff456c946e7f15->leave($__internal_3376c9829c17769cf213fc504fe3fc2d48903e235cb4a391b9ff456c946e7f15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db8f02477b8715d4de6db1b1b739f0a9d8a4d9960f6b40d07569a1297a0a0176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8f02477b8715d4de6db1b1b739f0a9d8a4d9960f6b40d07569a1297a0a0176->enter($__internal_db8f02477b8715d4de6db1b1b739f0a9d8a4d9960f6b40d07569a1297a0a0176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_db8f02477b8715d4de6db1b1b739f0a9d8a4d9960f6b40d07569a1297a0a0176->leave($__internal_db8f02477b8715d4de6db1b1b739f0a9d8a4d9960f6b40d07569a1297a0a0176_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2edd9f007a21d1a0f45af8349b9a53ddfef08740d2c3d656c62fb2d5ae91c164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edd9f007a21d1a0f45af8349b9a53ddfef08740d2c3d656c62fb2d5ae91c164->enter($__internal_2edd9f007a21d1a0f45af8349b9a53ddfef08740d2c3d656c62fb2d5ae91c164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2edd9f007a21d1a0f45af8349b9a53ddfef08740d2c3d656c62fb2d5ae91c164->leave($__internal_2edd9f007a21d1a0f45af8349b9a53ddfef08740d2c3d656c62fb2d5ae91c164_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
