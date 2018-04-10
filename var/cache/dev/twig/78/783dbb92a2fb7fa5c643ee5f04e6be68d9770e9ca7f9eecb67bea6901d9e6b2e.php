<?php

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_1d7b5465d558bfb4ed284dbb1253b0cc8ff9c8e9ea53addd85021391c9159541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25229460b8648fb20099ff457e431c7dcc45195ef5dbf68eba12639b4722cfea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25229460b8648fb20099ff457e431c7dcc45195ef5dbf68eba12639b4722cfea->enter($__internal_25229460b8648fb20099ff457e431c7dcc45195ef5dbf68eba12639b4722cfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        echo "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["request"] ?? null), "route", array())) ? ($this->getAttribute(($context["request"] ?? null), "route", array())) : ("(none)")), "html", null, true);
        echo "</span>
        <span class=\"label\">Matched route</span>
    </div>

    ";
        // line 9
        if ($this->getAttribute(($context["request"] ?? null), "route", array())) {
            // line 10
            echo "        <div class=\"metric\">
            <span class=\"value\">";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["traces"] ?? null)), "html", null, true);
            echo "</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    ";
        }
        // line 15
        echo "</div>

";
        // line 17
        if ($this->getAttribute(($context["request"] ?? null), "route", array())) {
            // line 18
            echo "    <h3>Route Parameters</h3>

    ";
            // line 20
            if (twig_test_empty($this->getAttribute(($context["request"] ?? null), "routeParams", array()))) {
                // line 21
                echo "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 25
                echo "        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["request"] ?? null), "routeParams", array()), "labels" => array(0 => "Name", 1 => "Value")), false);
                echo "
    ";
            }
        }
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute(($context["router"] ?? null), "redirect", array())) {
            // line 30
            echo "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["router"] ?? null), "targetUrl", array()), "html", null, true);
            echo "
        ";
            // line 35
            if ($this->getAttribute(($context["router"] ?? null), "targetRoute", array())) {
                echo "<span class=\"text-muted\">(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["router"] ?? null), "targetRoute", array()), "html", null, true);
                echo "\")</span>";
            }
            // line 36
            echo "    </div>
";
        }
        // line 38
        echo "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? null), "pathinfo", array()), "html", null, true);
        echo "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["traces"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 56
            echo "        <tr class=\"";
            echo ((($this->getAttribute($context["trace"], "level", array()) == 1)) ? ("status-warning") : (((($this->getAttribute($context["trace"], "level", array()) == 2)) ? ("status-success") : (""))));
            echo "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "name", array()), "html", null, true);
            echo "</td>
            <td class=\"break-long-words\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
            echo "</td>
            <td class=\"font-normal\">
                ";
            // line 61
            if (($this->getAttribute($context["trace"], "level", array()) == 1)) {
                // line 62
                echo "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "log", array()), "html", null, true);
                echo "</span>
                ";
            } elseif (($this->getAttribute(            // line 64
$context["trace"], "level", array()) == 2)) {
                // line 65
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "log", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 67
                echo "                    Path does not match
                ";
            }
            // line 69
            echo "            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_25229460b8648fb20099ff457e431c7dcc45195ef5dbf68eba12639b4722cfea->leave($__internal_25229460b8648fb20099ff457e431c7dcc45195ef5dbf68eba12639b4722cfea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Router/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 72,  175 => 69,  171 => 67,  165 => 65,  163 => 64,  159 => 63,  156 => 62,  154 => 61,  149 => 59,  145 => 58,  141 => 57,  136 => 56,  119 => 55,  103 => 42,  97 => 38,  93 => 36,  87 => 35,  83 => 34,  77 => 30,  75 => 29,  72 => 28,  65 => 25,  59 => 21,  57 => 20,  53 => 18,  51 => 17,  47 => 15,  40 => 11,  37 => 10,  35 => 9,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Router/panel.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Router/panel.html.twig");
    }
}
