<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
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
        $__internal_ddd33e1f92cb25cc13fca3d3c245a9a968db333c06a03b8a6a1ffc4fe75dcee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd33e1f92cb25cc13fca3d3c245a9a968db333c06a03b8a6a1ffc4fe75dcee1->enter($__internal_ddd33e1f92cb25cc13fca3d3c245a9a968db333c06a03b8a6a1ffc4fe75dcee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_02d1817aa8fccd8beffe1c857b2f479c2766fb47dc88e4aa4c0bc26ca37334b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d1817aa8fccd8beffe1c857b2f479c2766fb47dc88e4aa4c0bc26ca37334b7->enter($__internal_02d1817aa8fccd8beffe1c857b2f479c2766fb47dc88e4aa4c0bc26ca37334b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ddd33e1f92cb25cc13fca3d3c245a9a968db333c06a03b8a6a1ffc4fe75dcee1->leave($__internal_ddd33e1f92cb25cc13fca3d3c245a9a968db333c06a03b8a6a1ffc4fe75dcee1_prof);

        
        $__internal_02d1817aa8fccd8beffe1c857b2f479c2766fb47dc88e4aa4c0bc26ca37334b7->leave($__internal_02d1817aa8fccd8beffe1c857b2f479c2766fb47dc88e4aa4c0bc26ca37334b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb1ddf9735537b3e291644fa9a6008503e571c922a736efab5ac072fab62d443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1ddf9735537b3e291644fa9a6008503e571c922a736efab5ac072fab62d443->enter($__internal_eb1ddf9735537b3e291644fa9a6008503e571c922a736efab5ac072fab62d443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c6b412022d054cf41bca8a149326d2bd1dd1144a21434d5119cc5b5caad3e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6b412022d054cf41bca8a149326d2bd1dd1144a21434d5119cc5b5caad3e1d->enter($__internal_4c6b412022d054cf41bca8a149326d2bd1dd1144a21434d5119cc5b5caad3e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c6b412022d054cf41bca8a149326d2bd1dd1144a21434d5119cc5b5caad3e1d->leave($__internal_4c6b412022d054cf41bca8a149326d2bd1dd1144a21434d5119cc5b5caad3e1d_prof);

        
        $__internal_eb1ddf9735537b3e291644fa9a6008503e571c922a736efab5ac072fab62d443->leave($__internal_eb1ddf9735537b3e291644fa9a6008503e571c922a736efab5ac072fab62d443_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e44007f06159297b97783771983efad4e52dda91c8f4cfefa5ddeaa7c6c036d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e44007f06159297b97783771983efad4e52dda91c8f4cfefa5ddeaa7c6c036d->enter($__internal_1e44007f06159297b97783771983efad4e52dda91c8f4cfefa5ddeaa7c6c036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5ad0a2c64f936a78adec5a66b491f1df0a8ae1e50d380f7030c253c8cf33061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ad0a2c64f936a78adec5a66b491f1df0a8ae1e50d380f7030c253c8cf33061->enter($__internal_a5ad0a2c64f936a78adec5a66b491f1df0a8ae1e50d380f7030c253c8cf33061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a5ad0a2c64f936a78adec5a66b491f1df0a8ae1e50d380f7030c253c8cf33061->leave($__internal_a5ad0a2c64f936a78adec5a66b491f1df0a8ae1e50d380f7030c253c8cf33061_prof);

        
        $__internal_1e44007f06159297b97783771983efad4e52dda91c8f4cfefa5ddeaa7c6c036d->leave($__internal_1e44007f06159297b97783771983efad4e52dda91c8f4cfefa5ddeaa7c6c036d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e110c68fc2f212c2dbca2882a21439148dabb53afdd191c4dd62a5c432000aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e110c68fc2f212c2dbca2882a21439148dabb53afdd191c4dd62a5c432000aa9->enter($__internal_e110c68fc2f212c2dbca2882a21439148dabb53afdd191c4dd62a5c432000aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c78c505a99eae54c085137d753b98fa09f5fe0b3ea2cd2883d58952814f541e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78c505a99eae54c085137d753b98fa09f5fe0b3ea2cd2883d58952814f541e6->enter($__internal_c78c505a99eae54c085137d753b98fa09f5fe0b3ea2cd2883d58952814f541e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c78c505a99eae54c085137d753b98fa09f5fe0b3ea2cd2883d58952814f541e6->leave($__internal_c78c505a99eae54c085137d753b98fa09f5fe0b3ea2cd2883d58952814f541e6_prof);

        
        $__internal_e110c68fc2f212c2dbca2882a21439148dabb53afdd191c4dd62a5c432000aa9->leave($__internal_e110c68fc2f212c2dbca2882a21439148dabb53afdd191c4dd62a5c432000aa9_prof);

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
