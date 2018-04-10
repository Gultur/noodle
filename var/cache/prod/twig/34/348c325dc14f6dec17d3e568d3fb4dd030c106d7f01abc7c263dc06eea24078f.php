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

        <h1 class=\"text-center\" data-quiz=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quiz"] ?? null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quiz"] ?? null), "name", array()), "html", null, true);
        echo "</h1>

        <section>

            <div id=\"leftDiv\" class=\"col-md-6\">
                <h2>Questions présentes dans le quiz</h2>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quiz"] ?? null), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 19
            echo "                    <div class=\"questionBox\" id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ">
                        <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</p>
                        <button class=\"btn btn-primary\">Changer de zone</button>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
            </div>


            <div id=\"rightDiv\" class=\"col-md-6\">
                <h2>Questions disponibles</h2>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 32
            echo "                    <div class=\"questionBox\" id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ">
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</p>
                        <button class=\"btn btn-primary\">Changer de zone</button>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            </div>
        </section>


    </main>


    <script src=\"";
        // line 46
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
        return array (  116 => 46,  106 => 38,  95 => 33,  90 => 32,  86 => 31,  78 => 25,  67 => 20,  62 => 19,  58 => 18,  47 => 12,  42 => 10,  38 => 9,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
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
