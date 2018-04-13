<?php

/* default/studentResults.html.twig */
class __TwigTemplate_de6e87cd9d10b519f5a44449a853d9aabbce2e0bb42313158fbd806cd9035c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/studentResults.html.twig", 1);
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
        $context["page_title"] = "Resultats";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <main>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"  type=\"button\" class=\"btn btn-primary\">Retour à l'accueil</a>
        <p class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["studentCorrectAnswers"] ?? null), "html", null, true);
        echo " bonne(s) réponse(s) sur ";
        echo twig_escape_filter($this->env, ($context["nbQuestions"] ?? null), "html", null, true);
        echo " question(s)</p>

        <div class=\"text-center\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 14
            echo "                <hr>

                <div>
                    <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "question", array()), "question", array()), "html", null, true);
            echo "</p>
                    <p>Votre ou vos réponse(s) :
                        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "studentAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 20
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </p>


                    <p class=\"correctAnswers\">La ou les bonne(s) réponse(s) :
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "correctAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["correctanswer"]) {
                // line 27
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["correctanswer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correctanswer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>


    <main/>

";
    }

    public function getTemplateName()
    {
        return "default/studentResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  96 => 29,  87 => 27,  83 => 26,  77 => 22,  68 => 20,  64 => 19,  59 => 17,  54 => 14,  50 => 13,  42 => 10,  38 => 9,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/studentResults.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/studentResults.html.twig");
    }
}
