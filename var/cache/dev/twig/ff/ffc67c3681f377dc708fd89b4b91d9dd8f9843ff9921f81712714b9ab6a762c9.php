<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_3b437bb249df5bb8540b8cc50e39f2320678613cb9ca471e8a2a573fa587675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc53b750ad50b5cf844ca09bcc3a158ee88063d53d6dceba22f6a649689be923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc53b750ad50b5cf844ca09bcc3a158ee88063d53d6dceba22f6a649689be923->enter($__internal_bc53b750ad50b5cf844ca09bcc3a158ee88063d53d6dceba22f6a649689be923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc53b750ad50b5cf844ca09bcc3a158ee88063d53d6dceba22f6a649689be923->leave($__internal_bc53b750ad50b5cf844ca09bcc3a158ee88063d53d6dceba22f6a649689be923_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89f3d5e3923ff75b82e86c0e3d9dae6c9a39ba1d6b41171957914db219def3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f3d5e3923ff75b82e86c0e3d9dae6c9a39ba1d6b41171957914db219def3a6->enter($__internal_89f3d5e3923ff75b82e86c0e3d9dae6c9a39ba1d6b41171957914db219def3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 85
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 93
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 99
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 100
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 107
        if (array_key_exists("templates", $context)) {
            // line 108
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
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
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 110
                echo "                            ";
                ob_start();
                // line 111
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 111)->hasBlock("menu", $context)) {
                    // line 112
                    $__internal_cbdda0d1a452f145868f7b06149a98333fec31b4aaee88dbe98543789639b02d = array("collector" => $this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => ($context["profiler_markup_version"] ?? null));
                    if (!is_array($__internal_cbdda0d1a452f145868f7b06149a98333fec31b4aaee88dbe98543789639b02d)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_cbdda0d1a452f145868f7b06149a98333fec31b4aaee88dbe98543789639b02d);
                    // line 113
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 113)->displayBlock("menu", $context);
                    $context = $context['_parent'];
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 117
                echo "                            ";
                if ( !twig_test_empty(($context["menu"] ?? null))) {
                    // line 118
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == ($context["panel"] ?? null))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? null), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo ($context["menu"] ?? null);
                    echo "</a>
                                </li>
                            ";
                }
                // line 122
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    </ul>
                ";
        }
        // line 125
        echo "            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 130
        $this->displayBlock('panel', $context, $blocks);
        // line 131
        echo "                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
";
        
        $__internal_89f3d5e3923ff75b82e86c0e3d9dae6c9a39ba1d6b41171957914db219def3a6->leave($__internal_89f3d5e3923ff75b82e86c0e3d9dae6c9a39ba1d6b41171957914db219def3a6_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6bd398c28f9c86cadcfe9cafe6f7fac2b19383a5c0d8e025821a1798045732a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd398c28f9c86cadcfe9cafe6f7fac2b19383a5c0d8e025821a1798045732a3->enter($__internal_6bd398c28f9c86cadcfe9cafe6f7fac2b19383a5c0d8e025821a1798045732a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute(($context["profile"] ?? null), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        ";
            // line 22
            $context["request_collector"] = (($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array()), false)) : (false));
            // line 23
            echo "                        ";
            if ((($context["request_collector"] ?? null) && $this->getAttribute(($context["request_collector"] ?? null), "redirect", array()))) {
                // line 24
                $context["redirect"] = $this->getAttribute(($context["request_collector"] ?? null), "redirect", array());
                // line 25
                $context["controller"] = $this->getAttribute(($context["redirect"] ?? null), "controller", array());
                // line 26
                $context["redirect_route"] = ("@" . $this->getAttribute(($context["redirect"] ?? null), "route", array()));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? null), "status_code", array()), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 33
                echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute(($context["redirect"] ?? null), "method", array()))) ? ($this->getAttribute(($context["redirect"] ?? null), "method", array())) : ("")), "html", null, true);
                echo "
                                    ";
                // line 34
                if ($this->getAttribute($this->getAttribute(($context["redirect"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
                    // line 35
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? null), "file", array()), $this->getAttribute(($context["controller"] ?? null), "line", array()));
                    // line 36
                    if (($context["link"] ?? null)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? null), "file", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? null), "html", null, true);
                    // line 38
                    if (($context["link"] ?? null)) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? null), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["redirect"] ?? null), "token", array()), "panel" => $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "panel", 1 => "request"), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? null), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 46
            echo "
                        ";
            // line 47
            if (((($context["request_collector"] ?? null) && (($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request_collector"] ?? null), "forward", array()), false)) : (false))) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", false, true), "controller", array(), "any", false, true), "class", array(), "any", true, true))) {
                // line 48
                $context["forward"] = $this->getAttribute(($context["request_collector"] ?? null), "forward", array());
                // line 49
                $context["controller"] = $this->getAttribute(($context["forward"] ?? null), "controller", array());
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 53
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? null), "file", array()), $this->getAttribute(($context["controller"] ?? null), "line", array()));
                // line 54
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? null), "file", array()), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["controller"] ?? null), "class", array()))), "html", null, true);
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["controller"] ?? null), "method", array())) ? ((" :: " . $this->getAttribute(($context["controller"] ?? null), "method", array()))) : ("")), "html", null, true);
                // line 57
                if (($context["link"] ?? null)) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["forward"] ?? null), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["forward"] ?? null), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 62
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 65
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", array("token" => ($context["token"] ?? null), "limit" => 10, "ip" => $this->getAttribute(($context["profile"] ?? null), "ip", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "ip", array()), "html", null, true);
            echo "</a>
                            </dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 84
        echo "        ";
        
        $__internal_6bd398c28f9c86cadcfe9cafe6f7fac2b19383a5c0d8e025821a1798045732a3->leave($__internal_6bd398c28f9c86cadcfe9cafe6f7fac2b19383a5c0d8e025821a1798045732a3_prof);

    }

    // line 130
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0700de834584028937dcb828e8fa52623462a32d32cab6881b879dfdad5b05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0700de834584028937dcb828e8fa52623462a32d32cab6881b879dfdad5b05a->enter($__internal_a0700de834584028937dcb828e8fa52623462a32d32cab6881b879dfdad5b05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a0700de834584028937dcb828e8fa52623462a32d32cab6881b879dfdad5b05a->leave($__internal_a0700de834584028937dcb828e8fa52623462a32d32cab6881b879dfdad5b05a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 130,  384 => 84,  376 => 79,  370 => 76,  361 => 72,  354 => 68,  348 => 65,  343 => 62,  334 => 58,  330 => 57,  328 => 56,  326 => 55,  318 => 54,  316 => 53,  311 => 50,  309 => 49,  307 => 48,  305 => 47,  302 => 46,  293 => 42,  290 => 40,  285 => 38,  283 => 37,  275 => 36,  273 => 35,  271 => 34,  267 => 33,  260 => 29,  256 => 27,  254 => 26,  252 => 25,  250 => 24,  247 => 23,  245 => 22,  241 => 20,  235 => 18,  227 => 16,  225 => 15,  219 => 12,  216 => 11,  213 => 10,  210 => 9,  207 => 8,  201 => 7,  182 => 131,  180 => 130,  176 => 129,  170 => 125,  166 => 123,  152 => 122,  144 => 119,  137 => 118,  134 => 117,  129 => 113,  122 => 112,  120 => 111,  117 => 110,  100 => 109,  97 => 108,  95 => 107,  88 => 103,  82 => 100,  76 => 99,  71 => 97,  67 => 96,  61 => 93,  51 => 85,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/layout.html.twig");
    }
}
