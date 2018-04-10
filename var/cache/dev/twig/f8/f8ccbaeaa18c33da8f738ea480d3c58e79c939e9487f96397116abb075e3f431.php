<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_48b6b8f180642a1c57d559f316b58d1902fe7d03e56af312a166a5c800f9dcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1067ecaaf735cdb35631ec32ff39989718dfde6ac9d5cd14567105fccf93db4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1067ecaaf735cdb35631ec32ff39989718dfde6ac9d5cd14567105fccf93db4b->enter($__internal_1067ecaaf735cdb35631ec32ff39989718dfde6ac9d5cd14567105fccf93db4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1067ecaaf735cdb35631ec32ff39989718dfde6ac9d5cd14567105fccf93db4b->leave($__internal_1067ecaaf735cdb35631ec32ff39989718dfde6ac9d5cd14567105fccf93db4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0393b7076c773a0adbbab194b97937f0b1fa740f97610116f5a3a0000b723f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0393b7076c773a0adbbab194b97937f0b1fa740f97610116f5a3a0000b723f90->enter($__internal_0393b7076c773a0adbbab194b97937f0b1fa740f97610116f5a3a0000b723f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0393b7076c773a0adbbab194b97937f0b1fa740f97610116f5a3a0000b723f90->leave($__internal_0393b7076c773a0adbbab194b97937f0b1fa740f97610116f5a3a0000b723f90_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_abf40d0bffa790f3e1c5779db8da6ff25ad3b2867f8071fb9d717dc793b17bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf40d0bffa790f3e1c5779db8da6ff25ad3b2867f8071fb9d717dc793b17bc4->enter($__internal_abf40d0bffa790f3e1c5779db8da6ff25ad3b2867f8071fb9d717dc793b17bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? null), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? null), ($context["line"] ?? null),  -1);
        echo "
</div>
";
        
        $__internal_abf40d0bffa790f3e1c5779db8da6ff25ad3b2867f8071fb9d717dc793b17bc4->leave($__internal_abf40d0bffa790f3e1c5779db8da6ff25ad3b2867f8071fb9d717dc793b17bc4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 12,  63 => 11,  60 => 10,  54 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/open.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
