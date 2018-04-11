<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb846fa0608dab74b50b95f5a7c64945816ce9ac4038d61975345ed3c84e46eb extends Twig_Template
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
        $__internal_8cddeff280bde2fe5974fd840b37840aca54cc91096696ebb96b32fcde74522d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cddeff280bde2fe5974fd840b37840aca54cc91096696ebb96b32fcde74522d->enter($__internal_8cddeff280bde2fe5974fd840b37840aca54cc91096696ebb96b32fcde74522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_aab26eef6da5171ee31a5048f3c8f0d3ba268305149c1f55cd4e1a00bc1640c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab26eef6da5171ee31a5048f3c8f0d3ba268305149c1f55cd4e1a00bc1640c7->enter($__internal_aab26eef6da5171ee31a5048f3c8f0d3ba268305149c1f55cd4e1a00bc1640c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8cddeff280bde2fe5974fd840b37840aca54cc91096696ebb96b32fcde74522d->leave($__internal_8cddeff280bde2fe5974fd840b37840aca54cc91096696ebb96b32fcde74522d_prof);

        
        $__internal_aab26eef6da5171ee31a5048f3c8f0d3ba268305149c1f55cd4e1a00bc1640c7->leave($__internal_aab26eef6da5171ee31a5048f3c8f0d3ba268305149c1f55cd4e1a00bc1640c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02d128d2c7e4ad45b8886a0e9d233c942e1a9256d8d90d382cccac578455e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02d128d2c7e4ad45b8886a0e9d233c942e1a9256d8d90d382cccac578455e70->enter($__internal_d02d128d2c7e4ad45b8886a0e9d233c942e1a9256d8d90d382cccac578455e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f656f6d698cd12a731529aff4e6ab09fff6d56d94cece7cad3a7e1442eef048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f656f6d698cd12a731529aff4e6ab09fff6d56d94cece7cad3a7e1442eef048->enter($__internal_8f656f6d698cd12a731529aff4e6ab09fff6d56d94cece7cad3a7e1442eef048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8f656f6d698cd12a731529aff4e6ab09fff6d56d94cece7cad3a7e1442eef048->leave($__internal_8f656f6d698cd12a731529aff4e6ab09fff6d56d94cece7cad3a7e1442eef048_prof);

        
        $__internal_d02d128d2c7e4ad45b8886a0e9d233c942e1a9256d8d90d382cccac578455e70->leave($__internal_d02d128d2c7e4ad45b8886a0e9d233c942e1a9256d8d90d382cccac578455e70_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d70d96d8671d60bcae5dff95447bb33e4ac4b2abcd7bb36e386304dde6a674be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70d96d8671d60bcae5dff95447bb33e4ac4b2abcd7bb36e386304dde6a674be->enter($__internal_d70d96d8671d60bcae5dff95447bb33e4ac4b2abcd7bb36e386304dde6a674be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08f8e0180fbc005af8fcb09f96488d9830bf6f70f91a25a7015e1536fed46054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f8e0180fbc005af8fcb09f96488d9830bf6f70f91a25a7015e1536fed46054->enter($__internal_08f8e0180fbc005af8fcb09f96488d9830bf6f70f91a25a7015e1536fed46054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_08f8e0180fbc005af8fcb09f96488d9830bf6f70f91a25a7015e1536fed46054->leave($__internal_08f8e0180fbc005af8fcb09f96488d9830bf6f70f91a25a7015e1536fed46054_prof);

        
        $__internal_d70d96d8671d60bcae5dff95447bb33e4ac4b2abcd7bb36e386304dde6a674be->leave($__internal_d70d96d8671d60bcae5dff95447bb33e4ac4b2abcd7bb36e386304dde6a674be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c3e3f321e9bb22e678ad3d904e1fdbab2c4fd343fd74d33df4b5d7cf5d3cfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3e3f321e9bb22e678ad3d904e1fdbab2c4fd343fd74d33df4b5d7cf5d3cfa8->enter($__internal_0c3e3f321e9bb22e678ad3d904e1fdbab2c4fd343fd74d33df4b5d7cf5d3cfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9af4853c5979bbb0af69a2d5b3ef0d10dfa113ce810d37b557642c8a3357d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9af4853c5979bbb0af69a2d5b3ef0d10dfa113ce810d37b557642c8a3357d73->enter($__internal_a9af4853c5979bbb0af69a2d5b3ef0d10dfa113ce810d37b557642c8a3357d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9af4853c5979bbb0af69a2d5b3ef0d10dfa113ce810d37b557642c8a3357d73->leave($__internal_a9af4853c5979bbb0af69a2d5b3ef0d10dfa113ce810d37b557642c8a3357d73_prof);

        
        $__internal_0c3e3f321e9bb22e678ad3d904e1fdbab2c4fd343fd74d33df4b5d7cf5d3cfa8->leave($__internal_0c3e3f321e9bb22e678ad3d904e1fdbab2c4fd343fd74d33df4b5d7cf5d3cfa8_prof);

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
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
