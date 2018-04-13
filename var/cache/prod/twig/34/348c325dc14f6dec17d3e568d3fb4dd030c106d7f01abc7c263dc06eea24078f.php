<?php

/* default/editQuiz.html.twig */
class __TwigTemplate_c4172e966e8ae4436d23af0cff2ab35b4c6809393debe992145ead13227a2677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/editQuiz.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_title"] = "Édition du quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <main class=\"container\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listquiz");
        echo "\" type=\"button\" class=\"btn btn-primary leave\">Revenir à la liste des Quiz</a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("displayquestions");
        echo "\" type=\"button\" class=\"btn btn-primary leave\">Liste des questions</a>
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createsession", array("id" => $this->getAttribute(($context["quiz"] ?? null), "id", array()))), "html", null, true);
        echo "\" type=\"button\" class=\"btn btn-primary leave\">Lancer le quiz</a>

        <h1 class=\"text-center\" data-quiz=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quiz"] ?? null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quiz"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
        <p class=text-center\">Les changements sont pris en compte et appliqués immédiatement sans validation necessaire</p>

        <section>

            <div id=\"questionsInQuiz\" class=\"panel-group col-md-6\">
                <h2>Questions présentes dans le quiz</h2>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quiz"] ?? null), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 21
            echo "                    <div class=\"panel panel-default questionBox\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 22
            $context["collapse_id"] = ("collapse" . $this->getAttribute($context["question"], "id", array()));
            // line 23
            echo "                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
            // line 25
            echo twig_escape_filter($this->env, ($context["collapse_id"] ?? null), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> <em>Question : </em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array()), "html", null, true);
            echo "</a>
                            </h4>
                        </div>
                        <div id=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["collapse_id"] ?? null), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <p><em>Enoncé : </em>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</p>
                                <p><em>Type de la question :</em>
                                    ";
            // line 32
            if (($this->getAttribute($context["question"], "type", array()) == "text")) {
                // line 33
                echo "                                        texte
                                    ";
            } elseif (($this->getAttribute(            // line 34
$context["question"], "type", array()) == "trueOrFalse")) {
                // line 35
                echo "                                        vrai ou faux
                                    ";
            } elseif (($this->getAttribute(            // line 36
$context["question"], "type", array()) == "multipleChoicesRadio")) {
                // line 37
                echo "                                        choix multiple, une seule réponse correcte
                                    ";
            } elseif (($this->getAttribute(            // line 38
$context["question"], "type", array()) == "multipleChoicesCheckBox")) {
                // line 39
                echo "                                        choix multiple, au moins une bonne réponse
                                    ";
            }
            // line 41
            echo "                                </p>
                                <p><em>Durée : </em>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "time", array()), "html", null, true);
            echo " seconde(s)</p>
                                <div class=\"answer\">
                                    <p><em>Réponse(s) (une bonne réponse est en vert): </em></p>

                                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 47
                echo "
                                        ";
                // line 48
                if (($this->getAttribute($context["answer"], "correct", array()) == 1)) {
                    // line 49
                    echo "                                            <p class=\"text-success\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                    echo " </p>
                                        ";
                } elseif (($this->getAttribute(                // line 50
$context["answer"], "correct", array()) == 0)) {
                    // line 51
                    echo "                                            <p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 53
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                </div>
                          </div>
                        </div>
                        <button class=\"btn btn-primary\">Retirer du quiz</button>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
            </div>


            <div id=\"questionsNotInQuiz\" class=\"panel-group col-md-6\">
                <h2>Questions disponibles</h2>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 69
            echo "                    <div class=\"panel panel-default questionBox\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 70
            $context["collapse_id"] = ("collapse" . $this->getAttribute($context["question"], "id", array()));
            // line 71
            echo "                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
            // line 73
            echo twig_escape_filter($this->env, ($context["collapse_id"] ?? null), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> <em>Question : </em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array()), "html", null, true);
            echo "</a>
                            </h4>
                        </div>
                        <div id=\"";
            // line 76
            echo twig_escape_filter($this->env, ($context["collapse_id"] ?? null), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <p><em>Enoncé : </em>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</p>
                                <p><em>Type de la question :</em>
                                    ";
            // line 80
            if (($this->getAttribute($context["question"], "type", array()) == "text")) {
                // line 81
                echo "                                        texte
                                    ";
            } elseif (($this->getAttribute(            // line 82
$context["question"], "type", array()) == "trueOrFalse")) {
                // line 83
                echo "                                        vrai ou faux
                                    ";
            } elseif (($this->getAttribute(            // line 84
$context["question"], "type", array()) == "multipleChoicesRadio")) {
                // line 85
                echo "                                        choix multiple, une seule réponse correcte
                                    ";
            } elseif (($this->getAttribute(            // line 86
$context["question"], "type", array()) == "multipleChoicesCheckBox")) {
                // line 87
                echo "                                        choix multiple, au moins une bonne réponse
                                    ";
            }
            // line 89
            echo "                                </p>
                                <p><em>Durée : </em>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "time", array()), "html", null, true);
            echo " seconde(s)</p>
                                <div class=\"answer\">
                                    <p><em>Réponse(s) (une bonne réponse est en vert): </em></p>

                                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 95
                echo "
                                        ";
                // line 96
                if (($this->getAttribute($context["answer"], "correct", array()) == 1)) {
                    // line 97
                    echo "                                            <p class=\"text-success\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                    echo " </p>
                                        ";
                } elseif (($this->getAttribute(                // line 98
$context["answer"], "correct", array()) == 0)) {
                    // line 99
                    echo "                                            <p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 101
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                                </div>
                            </div>
                        </div>
                        <button class=\"btn btn-primary\">Ajouter au quiz</button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
            </div>
        </section>


    </main>


    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/editQuiz.js"), "html", null, true);
        echo "\"></script>



";
    }

    public function getTemplateName()
    {
        return "default/editQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 117,  280 => 109,  269 => 103,  262 => 101,  256 => 99,  254 => 98,  249 => 97,  247 => 96,  244 => 95,  240 => 94,  233 => 90,  230 => 89,  226 => 87,  224 => 86,  221 => 85,  219 => 84,  216 => 83,  214 => 82,  211 => 81,  209 => 80,  204 => 78,  199 => 76,  191 => 73,  187 => 71,  185 => 70,  180 => 69,  176 => 68,  168 => 62,  156 => 55,  149 => 53,  143 => 51,  141 => 50,  136 => 49,  134 => 48,  131 => 47,  127 => 46,  120 => 42,  117 => 41,  113 => 39,  111 => 38,  108 => 37,  106 => 36,  103 => 35,  101 => 34,  98 => 33,  96 => 32,  91 => 30,  86 => 28,  78 => 25,  74 => 23,  72 => 22,  67 => 21,  63 => 20,  51 => 13,  46 => 11,  42 => 10,  38 => 9,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/editQuiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/editQuiz.html.twig");
    }
}
