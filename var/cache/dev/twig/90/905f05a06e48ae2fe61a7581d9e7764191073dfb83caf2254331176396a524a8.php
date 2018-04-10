<?php

/* default/studentResults.html.twig */
class __TwigTemplate_f8ad6a4cc85dadf14c10dc1b59c3df3cfdf64a0b254f2cfb8b179206fda45461 extends Twig_Template
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
        $__internal_bee03e30f60bcf58efeb0b31f4cf1ed7823c7fef8c2efee6b008ed6065a17c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee03e30f60bcf58efeb0b31f4cf1ed7823c7fef8c2efee6b008ed6065a17c9a->enter($__internal_bee03e30f60bcf58efeb0b31f4cf1ed7823c7fef8c2efee6b008ed6065a17c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/studentResults.html.twig"));

        // line 3
        $context["page_title"] = "Resultats";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee03e30f60bcf58efeb0b31f4cf1ed7823c7fef8c2efee6b008ed6065a17c9a->leave($__internal_bee03e30f60bcf58efeb0b31f4cf1ed7823c7fef8c2efee6b008ed6065a17c9a_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_90d3770bc4dc9b4ed398379f5269df6994dd28e82392ab7a186b5f228be864cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d3770bc4dc9b4ed398379f5269df6994dd28e82392ab7a186b5f228be864cb->enter($__internal_90d3770bc4dc9b4ed398379f5269df6994dd28e82392ab7a186b5f228be864cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    <main>
        <p class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["studentCorrectAnswers"] ?? null), "html", null, true);
        echo " bonne(s) réponse(s) sur ";
        echo twig_escape_filter($this->env, ($context["nbQuestions"] ?? null), "html", null, true);
        echo " question(s)</p>

        <div class=\"text-center\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 13
            echo "                <hr>

                <div>
                    <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "question", array()), "question", array()), "html", null, true);
            echo "</p>
                    <p>Votre ou vos réponse(s) :
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "studentAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 19
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                    </p>


                    <p class=\"correctAnswers\">La ou les bonne(s) réponse(s) :
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["result"], "correctAnswers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["correctanswer"]) {
                // line 26
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["correctanswer"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correctanswer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>


    <main/>

";
        
        $__internal_90d3770bc4dc9b4ed398379f5269df6994dd28e82392ab7a186b5f228be864cb->leave($__internal_90d3770bc4dc9b4ed398379f5269df6994dd28e82392ab7a186b5f228be864cb_prof);

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
        return array (  109 => 31,  101 => 28,  92 => 26,  88 => 25,  82 => 21,  73 => 19,  69 => 18,  64 => 16,  59 => 13,  55 => 12,  47 => 9,  43 => 7,  37 => 6,  30 => 1,  28 => 3,  11 => 1,);
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
