<?php

/* default/listQuiz.html.twig */
class __TwigTemplate_97598fb49d4428cf05ac488bcb0844b243755a9d658df877eaf0aab70f96d1c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/listQuiz.html.twig", 1);
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
        $context["page_title"] = "Liste des quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <main class=\"container\">
        <h1>Liste des Quiz</h1>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listQuiz"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 12
            echo "            <div class=\"quiz\">
                <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "name", array()), "html", null, true);
            echo "</h3>
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editquiz", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary\">Modifier la liste des questions du quiz</a>
                <!--<p><a href=\"";
            // line 15
            echo "\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer le quiz</a></p> -->
                ";
            // line 16
            if (twig_test_empty($this->getAttribute($context["quiz"], "questions", array()))) {
                // line 17
                echo "                    <p>Il n'y a pas de question dans ce Quiz, ajoutez des questions pour pouvoir l'utiliser </p>
                ";
            } else {
                // line 19
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createsession", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-primary leave\">Lancer le quiz</a>
                ";
            }
            // line 21
            echo "                <hr>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    </main>

";
    }

    public function getTemplateName()
    {
        return "default/listQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  70 => 21,  64 => 19,  60 => 17,  58 => 16,  55 => 15,  51 => 14,  47 => 13,  44 => 12,  40 => 11,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/listQuiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/listQuiz.html.twig");
    }
}
