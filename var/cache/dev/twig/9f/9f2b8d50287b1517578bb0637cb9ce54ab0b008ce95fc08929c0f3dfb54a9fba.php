<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bf29da7cb6292c749e2a934745a589a19792732612dc2e2089603149668f945b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_332c6342f648fb0eb69024890775c9de04ca20655642785a8576fd3c0e20276b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332c6342f648fb0eb69024890775c9de04ca20655642785a8576fd3c0e20276b->enter($__internal_332c6342f648fb0eb69024890775c9de04ca20655642785a8576fd3c0e20276b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_332c6342f648fb0eb69024890775c9de04ca20655642785a8576fd3c0e20276b->leave($__internal_332c6342f648fb0eb69024890775c9de04ca20655642785a8576fd3c0e20276b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dbef58e170772252a0762a64b03e74c7186048f5b128979d3deea3cb1c32505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbef58e170772252a0762a64b03e74c7186048f5b128979d3deea3cb1c32505->enter($__internal_8dbef58e170772252a0762a64b03e74c7186048f5b128979d3deea3cb1c32505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8dbef58e170772252a0762a64b03e74c7186048f5b128979d3deea3cb1c32505->leave($__internal_8dbef58e170772252a0762a64b03e74c7186048f5b128979d3deea3cb1c32505_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2d39801035528b6d2e1ed2d88d8eb0cda2f0de558c70ea23bc91bd8f7a57c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d39801035528b6d2e1ed2d88d8eb0cda2f0de558c70ea23bc91bd8f7a57c6d->enter($__internal_f2d39801035528b6d2e1ed2d88d8eb0cda2f0de558c70ea23bc91bd8f7a57c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f2d39801035528b6d2e1ed2d88d8eb0cda2f0de558c70ea23bc91bd8f7a57c6d->leave($__internal_f2d39801035528b6d2e1ed2d88d8eb0cda2f0de558c70ea23bc91bd8f7a57c6d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddb1bb30cf1fdf36f6e6e5172df774fdfd6324f46b110d195be3bbe221d205d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb1bb30cf1fdf36f6e6e5172df774fdfd6324f46b110d195be3bbe221d205d9->enter($__internal_ddb1bb30cf1fdf36f6e6e5172df774fdfd6324f46b110d195be3bbe221d205d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddb1bb30cf1fdf36f6e6e5172df774fdfd6324f46b110d195be3bbe221d205d9->leave($__internal_ddb1bb30cf1fdf36f6e6e5172df774fdfd6324f46b110d195be3bbe221d205d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
