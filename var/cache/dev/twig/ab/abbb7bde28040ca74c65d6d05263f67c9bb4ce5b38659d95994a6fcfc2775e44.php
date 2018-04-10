<?php

/* default/displayQuestions.html.twig */
class __TwigTemplate_0dbb0fc518243830d8be5357c5c0f93cbfa4b880d15b88dda0c654cf05363d67 extends Twig_Template
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
        $__internal_c48fef515ebaccd4c10c4d828b6e83c7c7c32d842e46a63b880040e7f22b7777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48fef515ebaccd4c10c4d828b6e83c7c7c32d842e46a63b880040e7f22b7777->enter($__internal_c48fef515ebaccd4c10c4d828b6e83c7c7c32d842e46a63b880040e7f22b7777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/displayQuestions.html.twig"));

        // line 3
        $context["page_title"] = "Affichage des questions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48fef515ebaccd4c10c4d828b6e83c7c7c32d842e46a63b880040e7f22b7777->leave($__internal_c48fef515ebaccd4c10c4d828b6e83c7c7c32d842e46a63b880040e7f22b7777_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a20383c7878825335b6b3a53edeaa91e6949a57edae43c92901020ff5d75fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a20383c7878825335b6b3a53edeaa91e6949a57edae43c92901020ff5d75fc8->enter($__internal_6a20383c7878825335b6b3a53edeaa91e6949a57edae43c92901020ff5d75fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6a20383c7878825335b6b3a53edeaa91e6949a57edae43c92901020ff5d75fc8->leave($__internal_6a20383c7878825335b6b3a53edeaa91e6949a57edae43c92901020ff5d75fc8_prof);

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
        return array (  156 => 52,  152 => 50,  143 => 46,  137 => 44,  135 => 43,  131 => 41,  123 => 38,  119 => 36,  117 => 35,  114 => 34,  112 => 33,  108 => 32,  105 => 31,  101 => 30,  96 => 28,  92 => 27,  89 => 26,  85 => 24,  83 => 23,  80 => 22,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  68 => 17,  63 => 15,  60 => 14,  56 => 13,  49 => 8,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
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
