<?php

/* default/editQuiz.html.twig */
class __TwigTemplate_6d514ffa2e9764d4e91ddfb799bacfcc61c80b02a9cb12b481247cd28dc79eff extends Twig_Template
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
        $__internal_82898f0dc6cc92f237c966b9f57ca1baf2cf8bdbc8ee28a51562cdd80b4811e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82898f0dc6cc92f237c966b9f57ca1baf2cf8bdbc8ee28a51562cdd80b4811e4->enter($__internal_82898f0dc6cc92f237c966b9f57ca1baf2cf8bdbc8ee28a51562cdd80b4811e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/editQuiz.html.twig"));

        // line 3
        $context["page_title"] = "Édition du quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82898f0dc6cc92f237c966b9f57ca1baf2cf8bdbc8ee28a51562cdd80b4811e4->leave($__internal_82898f0dc6cc92f237c966b9f57ca1baf2cf8bdbc8ee28a51562cdd80b4811e4_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7bf69826103f7bd8bee9eb773c8b5dcf32ef4834fe12442e27c840b8431f260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bf69826103f7bd8bee9eb773c8b5dcf32ef4834fe12442e27c840b8431f260->enter($__internal_e7bf69826103f7bd8bee9eb773c8b5dcf32ef4834fe12442e27c840b8431f260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e7bf69826103f7bd8bee9eb773c8b5dcf32ef4834fe12442e27c840b8431f260->leave($__internal_e7bf69826103f7bd8bee9eb773c8b5dcf32ef4834fe12442e27c840b8431f260_prof);

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
        return array (  125 => 46,  115 => 38,  104 => 33,  99 => 32,  95 => 31,  87 => 25,  76 => 20,  71 => 19,  67 => 18,  56 => 12,  51 => 10,  47 => 9,  43 => 7,  37 => 6,  30 => 1,  28 => 3,  11 => 1,);
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
