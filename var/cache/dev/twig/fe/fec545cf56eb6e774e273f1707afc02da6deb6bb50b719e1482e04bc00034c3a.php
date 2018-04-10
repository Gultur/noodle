<?php

/* default/displayQuestions.html.twig */
class __TwigTemplate_945e6d69d66555f24c86954c6656d69a88d76fe888135153402cb7b2d7d51aae extends Twig_Template
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
        $__internal_b731b5447aa5cdef080951ae21be2306a32dc4256e4db15cde9cb8db77204cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b731b5447aa5cdef080951ae21be2306a32dc4256e4db15cde9cb8db77204cb5->enter($__internal_b731b5447aa5cdef080951ae21be2306a32dc4256e4db15cde9cb8db77204cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/displayQuestions.html.twig"));

        $__internal_32fd3903754ae0b813dd7682165da00dc25cac78ef7f8e859799939ecf617617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fd3903754ae0b813dd7682165da00dc25cac78ef7f8e859799939ecf617617->enter($__internal_32fd3903754ae0b813dd7682165da00dc25cac78ef7f8e859799939ecf617617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/displayQuestions.html.twig"));

        // line 3
        $context["page_title"] = "Affichage des questions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b731b5447aa5cdef080951ae21be2306a32dc4256e4db15cde9cb8db77204cb5->leave($__internal_b731b5447aa5cdef080951ae21be2306a32dc4256e4db15cde9cb8db77204cb5_prof);

        
        $__internal_32fd3903754ae0b813dd7682165da00dc25cac78ef7f8e859799939ecf617617->leave($__internal_32fd3903754ae0b813dd7682165da00dc25cac78ef7f8e859799939ecf617617_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_80d5438abda32144da2e695dbe36a98e88c4b81a4cc0c724029e8cd087a583d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d5438abda32144da2e695dbe36a98e88c4b81a4cc0c724029e8cd087a583d9->enter($__internal_80d5438abda32144da2e695dbe36a98e88c4b81a4cc0c724029e8cd087a583d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_356362018b620715c08e92e2daf522b9ab6c5e882fd491c927cd605c2fd38dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356362018b620715c08e92e2daf522b9ab6c5e882fd491c927cd605c2fd38dc3->enter($__internal_356362018b620715c08e92e2daf522b9ab6c5e882fd491c927cd605c2fd38dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? $this->getContext($context, "questions")));
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
        
        $__internal_356362018b620715c08e92e2daf522b9ab6c5e882fd491c927cd605c2fd38dc3->leave($__internal_356362018b620715c08e92e2daf522b9ab6c5e882fd491c927cd605c2fd38dc3_prof);

        
        $__internal_80d5438abda32144da2e695dbe36a98e88c4b81a4cc0c724029e8cd087a583d9->leave($__internal_80d5438abda32144da2e695dbe36a98e88c4b81a4cc0c724029e8cd087a583d9_prof);

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
        return array (  165 => 52,  161 => 50,  152 => 46,  146 => 44,  144 => 43,  140 => 41,  132 => 38,  128 => 36,  126 => 35,  123 => 34,  121 => 33,  117 => 32,  114 => 31,  110 => 30,  105 => 28,  101 => 27,  98 => 26,  94 => 24,  92 => 23,  89 => 22,  87 => 21,  84 => 20,  82 => 19,  79 => 18,  77 => 17,  72 => 15,  69 => 14,  65 => 13,  58 => 8,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% set page_title = 'Affichage des questions' %}
{% block content %}

    <main class=\"container\">
        {% if (is_granted(\"ROLE_TEACHER\") == true or is_granted(\"ROLE_ADMIN\") == true ) %}

            <h1>Liste des questions</h1>



            {% for question in questions %}
                <div class=\"question text-center\">
                    <p>Intitulé : {{ question.name }}</p>
                    <p>Question de type :
                        {% if question.type == 'text' %}
                            texte
                        {% elseif question.type == 'trueOrFalse' %}
                            vrai ou faux
                        {% elseif question.type == 'multipleChoicesRadio' %}
                            choix multiple, une seule réponse correcte
                        {% elseif question.type == 'multipleChoicesCheckBox' %}
                            choix multiple, au moins une bonne réponse
                        {% endif %}
                    </p>
                    <p>Durée : {{ question.time }} seconde(s)</p>
                    <p>{{ question.question }}</p>
                    <div class=\"answer\">
                    {% for answer in question.answers %}

                            <p>{{ answer.value }} :
                            {% if answer.correct == 1 %}
                                bonne réponse
                            {% elseif answer.correct == 0 %}
                                mauvaise réponse
                            {% endif %}
                            </p>

                    {% endfor %}
                    </div>

                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <a class=\"btn btn-primary\" href=\"{{ path(\"deletequestion\", {\"id\": question.id}) }}\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer</a>
                    {% endif %}
                    <hr>
                </div>

            {% endfor %}

        {% endif %}

    </main>

{% endblock %}

", "default/displayQuestions.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/displayQuestions.html.twig");
    }
}
