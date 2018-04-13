<?php

/* default/displayQuestions.html.twig */
class __TwigTemplate_dbdee290661fcc1404f1c7b08f599ceeb0ddfa991c5e3a7074fdc328cf6c051d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/displayQuestions.html.twig", 1);
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
        $context["page_title"] = "Affichage des questions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <main class=\"container\">
        ";
        // line 7
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") == true) || ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") == true))) {
            // line 8
            echo "
        <h1>Liste des questions</h1>



        <div >
            <div class=\"panel-group\" id=\"accordion\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 16
                echo "                    ";
                $context["collapse_id"] = ("collapse" . $this->getAttribute($context["question"], "id", array()));
                // line 17
                echo "
                    <div class=\"panel panel-default question text-center\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
                // line 21
                echo twig_escape_filter($this->env, ($context["collapse_id"] ?? null), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-plus\"></span> <em>Intitulé de la question : </em>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array()), "html", null, true);
                echo "</a>
                            </h4>
                        </div>
                        <div id=\"";
                // line 24
                echo twig_escape_filter($this->env, ($context["collapse_id"] ?? null), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                <p><em>Enoncé : </em>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
                echo "</p>
                                <p><em>Type de la question :</em>
                                    ";
                // line 28
                if (($this->getAttribute($context["question"], "type", array()) == "text")) {
                    // line 29
                    echo "                                        texte
                                    ";
                } elseif (($this->getAttribute(                // line 30
$context["question"], "type", array()) == "trueOrFalse")) {
                    // line 31
                    echo "                                        vrai ou faux
                                    ";
                } elseif (($this->getAttribute(                // line 32
$context["question"], "type", array()) == "multipleChoicesRadio")) {
                    // line 33
                    echo "                                        choix multiple, une seule réponse correcte
                                    ";
                } elseif (($this->getAttribute(                // line 34
$context["question"], "type", array()) == "multipleChoicesCheckBox")) {
                    // line 35
                    echo "                                        choix multiple, au moins une bonne réponse
                                    ";
                }
                // line 37
                echo "                                </p>
                                <p><em>Durée : </em>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "time", array()), "html", null, true);
                echo " seconde(s)</p>

                                <div class=\"answer\">
                                    <p><em>Réponse(s) (une bonne réponse est en vert): </em></p>

                                    ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 44
                    echo "
                                        ";
                    // line 45
                    if (($this->getAttribute($context["answer"], "correct", array()) == 1)) {
                        // line 46
                        echo "                                            <p class=\"text-success\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                        echo " </p>
                                        ";
                    } elseif (($this->getAttribute(                    // line 47
$context["answer"], "correct", array()) == 0)) {
                        // line 48
                        echo "                                            <p class=\"text-danger\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                        echo "</p>
                                        ";
                    }
                    // line 50
                    echo "
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                                </div>

                                ";
                // line 54
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 55
                    echo "                                    <a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletequestion", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer</a>
                                ";
                }
                // line 57
                echo "                                <hr>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </div>
        </div>



            </div>

        ";
        }
        // line 70
        echo "

        <script>
            \$(document).ready(function(){
                // Add minus icon for collapse element which is open by default
                \$(\".collapse.in\").each(function(){
                    \$(this).siblings(\".panel-heading\").find(\".glyphicon\").addClass(\"glyphicon-minus\").removeClass(\"glyphicon-plus\");
                });

                // Toggle plus minus icon on show hide of collapse element
                \$(\".collapse\").on('show.bs.collapse', function(){
                    \$(this).parent().find(\".glyphicon\").removeClass(\"glyphicon-plus\").addClass(\"glyphicon-minus\");
                }).on('hide.bs.collapse', function(){
                    \$(this).parent().find(\".glyphicon\").removeClass(\"glyphicon-minus\").addClass(\"glyphicon-plus\");
                });
            });
        </script>
    </main>

";
    }

    public function getTemplateName()
    {
        return "default/displayQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 70,  163 => 62,  153 => 57,  147 => 55,  145 => 54,  141 => 52,  134 => 50,  128 => 48,  126 => 47,  121 => 46,  119 => 45,  116 => 44,  112 => 43,  104 => 38,  101 => 37,  97 => 35,  95 => 34,  92 => 33,  90 => 32,  87 => 31,  85 => 30,  82 => 29,  80 => 28,  75 => 26,  70 => 24,  62 => 21,  56 => 17,  53 => 16,  49 => 15,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/displayQuestions.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/displayQuestions.html.twig");
    }
}
