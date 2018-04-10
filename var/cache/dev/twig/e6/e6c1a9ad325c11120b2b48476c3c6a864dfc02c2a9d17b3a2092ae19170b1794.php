<?php

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_0ae2d5bef719e7bd672d0b2896a309438731ab12bd13b8e25cfce863fc994a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/results.html.twig", 1);
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
        $__internal_7e1819e8667686fe2edcc7a1773fcab8deb34eb1a6e1d8025d268d99cfe5d9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1819e8667686fe2edcc7a1773fcab8deb34eb1a6e1d8025d268d99cfe5d9ab->enter($__internal_7e1819e8667686fe2edcc7a1773fcab8deb34eb1a6e1d8025d268d99cfe5d9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1819e8667686fe2edcc7a1773fcab8deb34eb1a6e1d8025d268d99cfe5d9ab->leave($__internal_7e1819e8667686fe2edcc7a1773fcab8deb34eb1a6e1d8025d268d99cfe5d9ab_prof);

    }

    // line 3
    public function block_summary($context, array $blocks = array())
    {
        $__internal_94d4649c589ca8f7e0c21acc9ca9ea75f5379e99365dc6a2334641bf55d91a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d4649c589ca8f7e0c21acc9ca9ea75f5379e99365dc6a2334641bf55d91a87->enter($__internal_94d4649c589ca8f7e0c21acc9ca9ea75f5379e99365dc6a2334641bf55d91a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 4
        echo "    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
";
        
        $__internal_94d4649c589ca8f7e0c21acc9ca9ea75f5379e99365dc6a2334641bf55d91a87->leave($__internal_94d4649c589ca8f7e0c21acc9ca9ea75f5379e99365dc6a2334641bf55d91a87_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dec8c82f1a46b36f7a3b88ba49b51b058dd65a3587485e151442494c08e350e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec8c82f1a46b36f7a3b88ba49b51b058dd65a3587485e151442494c08e350e0->enter($__internal_dec8c82f1a46b36f7a3b88ba49b51b058dd65a3587485e151442494c08e350e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "    <h2>";
        echo twig_escape_filter($this->env, ((($context["tokens"] ?? null)) ? (twig_length_filter($this->env, ($context["tokens"] ?? null))) : ("No")), "html", null, true);
        echo " results found</h2>

    ";
        // line 14
        if (($context["tokens"] ?? null)) {
            // line 15
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tokens"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "                    ";
                $context["css_class"] = ((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 399)) ? ("status-error") : (((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                // line 29
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 32
                echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "ip", array()), "html", null, true);
                echo "</span>
                            ";
                // line 36
                if ( !(null === $this->getAttribute(($context["request"] ?? null), "session", array()))) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "all", array()), array("ip" => $this->getAttribute($context["result"], "ip", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 38
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>
                            ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "method", array()), "html", null, true);
                echo "
                            ";
                // line 44
                if ( !(null === $this->getAttribute(($context["request"] ?? null), "session", array()))) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "all", array()), array("method" => $this->getAttribute($context["result"], "method", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 46
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 49
                echo "                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "url", array()), "html", null, true);
                echo "
                            ";
                // line 52
                if ( !(null === $this->getAttribute(($context["request"] ?? null), "session", array()))) {
                    // line 53
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "all", array()), array("url" => $this->getAttribute($context["result"], "url", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 54
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "d-M-Y"), "html", null, true);
                echo "</span>
                            <span class=\"nowrap newline\">";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "H:i:s"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["result"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "token", array()), "html", null, true);
                echo "</a></td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 72
        echo "
";
        
        $__internal_dec8c82f1a46b36f7a3b88ba49b51b058dd65a3587485e151442494c08e350e0->leave($__internal_dec8c82f1a46b36f7a3b88ba49b51b058dd65a3587485e151442494c08e350e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 72,  210 => 68,  205 => 65,  186 => 62,  181 => 60,  177 => 59,  173 => 57,  167 => 54,  162 => 53,  160 => 52,  156 => 51,  152 => 49,  146 => 46,  141 => 45,  139 => 44,  135 => 43,  131 => 41,  125 => 38,  120 => 37,  118 => 36,  114 => 35,  106 => 32,  101 => 29,  98 => 28,  81 => 27,  67 => 15,  65 => 14,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/results.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/results.html.twig");
    }
}
