<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_71bd4cd29e61cc3a6403ac53f7aee6593d0032bcd8d46d08b85348e663801705 extends Twig_Template
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
        $__internal_3fbf67ef13dee0462c3d06a4027e9b6146e76f08d643aba86e4daa52485585c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbf67ef13dee0462c3d06a4027e9b6146e76f08d643aba86e4daa52485585c5->enter($__internal_3fbf67ef13dee0462c3d06a4027e9b6146e76f08d643aba86e4daa52485585c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fbf67ef13dee0462c3d06a4027e9b6146e76f08d643aba86e4daa52485585c5->leave($__internal_3fbf67ef13dee0462c3d06a4027e9b6146e76f08d643aba86e4daa52485585c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ade274e4817299e29bb034c01ac457e867508db0ee39d2bdbd6455dda1dc29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ade274e4817299e29bb034c01ac457e867508db0ee39d2bdbd6455dda1dc29d->enter($__internal_9ade274e4817299e29bb034c01ac457e867508db0ee39d2bdbd6455dda1dc29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9ade274e4817299e29bb034c01ac457e867508db0ee39d2bdbd6455dda1dc29d->leave($__internal_9ade274e4817299e29bb034c01ac457e867508db0ee39d2bdbd6455dda1dc29d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22d05bd9e5b6802f24b10dc0136c12492e221241799e9e208d2897bfe486e782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d05bd9e5b6802f24b10dc0136c12492e221241799e9e208d2897bfe486e782->enter($__internal_22d05bd9e5b6802f24b10dc0136c12492e221241799e9e208d2897bfe486e782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_22d05bd9e5b6802f24b10dc0136c12492e221241799e9e208d2897bfe486e782->leave($__internal_22d05bd9e5b6802f24b10dc0136c12492e221241799e9e208d2897bfe486e782_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93231f50f29c2656f3c1f20aa71425c631eb0ea9a8caa7d7258ea4c4113f774c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93231f50f29c2656f3c1f20aa71425c631eb0ea9a8caa7d7258ea4c4113f774c->enter($__internal_93231f50f29c2656f3c1f20aa71425c631eb0ea9a8caa7d7258ea4c4113f774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_93231f50f29c2656f3c1f20aa71425c631eb0ea9a8caa7d7258ea4c4113f774c->leave($__internal_93231f50f29c2656f3c1f20aa71425c631eb0ea9a8caa7d7258ea4c4113f774c_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Collector/exception.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
