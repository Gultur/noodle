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



            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 14
                echo "                <div class=\"question text-center\">
                    <p>Intitulé : ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array()), "html", null, true);
                echo "</p>
                    <p>Question de type :
                        ";
                // line 17
                if (($this->getAttribute($context["question"], "type", array()) == "text")) {
                    // line 18
                    echo "                            texte
                        ";
                } elseif (($this->getAttribute(                // line 19
$context["question"], "type", array()) == "trueOrFalse")) {
                    // line 20
                    echo "                            vrai ou faux
                        ";
                } elseif (($this->getAttribute(                // line 21
$context["question"], "type", array()) == "multipleChoicesRadio")) {
                    // line 22
                    echo "                            choix multiple, une seule réponse correcte
                        ";
                } elseif (($this->getAttribute(                // line 23
$context["question"], "type", array()) == "multipleChoicesCheckBox")) {
                    // line 24
                    echo "                            choix multiple, au moins une bonne réponse
                        ";
                }
                // line 26
                echo "                    </p>
                    <p>Durée : ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "time", array()), "html", null, true);
                echo " seconde(s)</p>
                    <p>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
                echo "</p>
                    <div class=\"answer\">
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 31
                    echo "
                            <p>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                    echo " :
                            ";
                    // line 33
                    if (($this->getAttribute($context["answer"], "correct", array()) == 1)) {
                        // line 34
                        echo "                                bonne réponse
                            ";
                    } elseif (($this->getAttribute(                    // line 35
$context["answer"], "correct", array()) == 0)) {
                        // line 36
                        echo "                                mauvaise réponse
                            ";
                    }
                    // line 38
                    echo "                            </p>

                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                    </div>

                    ";
                // line 43
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 44
                    echo "                        <a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletequestion", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer</a>
                    ";
                }
                // line 46
                echo "                    <hr>
                </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
        ";
        }
        // line 52
        echo "
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
        return array (  147 => 52,  143 => 50,  134 => 46,  128 => 44,  126 => 43,  122 => 41,  114 => 38,  110 => 36,  108 => 35,  105 => 34,  103 => 33,  99 => 32,  96 => 31,  92 => 30,  87 => 28,  83 => 27,  80 => 26,  76 => 24,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  64 => 19,  61 => 18,  59 => 17,  54 => 15,  51 => 14,  47 => 13,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 3,  11 => 1,);
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
