<?php

/* default/addQuestion.html.twig */
class __TwigTemplate_2d026abfb50b92a57d472b98bd52949168ade93d13f94e27d9a755582663bea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/addQuestion.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0253c0f74049022643c41a884d7070e78717604ceb5836bdd1ce5f6033ffb2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0253c0f74049022643c41a884d7070e78717604ceb5836bdd1ce5f6033ffb2a0->enter($__internal_0253c0f74049022643c41a884d7070e78717604ceb5836bdd1ce5f6033ffb2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addQuestion.html.twig"));

        // line 3
        $context["page_title"] = "Création de question";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0253c0f74049022643c41a884d7070e78717604ceb5836bdd1ce5f6033ffb2a0->leave($__internal_0253c0f74049022643c41a884d7070e78717604ceb5836bdd1ce5f6033ffb2a0_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_4eda507d3753952d52d00dfbda0e5d6ac65335812225583b42124a45c5b238ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eda507d3753952d52d00dfbda0e5d6ac65335812225583b42124a45c5b238ef->enter($__internal_4eda507d3753952d52d00dfbda0e5d6ac65335812225583b42124a45c5b238ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "

<main class=\"container\">

    <h1>Création d'une question</h1>


    <div class=\"well\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "question", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'row');
        echo "

        <div id=\"answersDiv\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "answers", array()), 'row');
        echo "
        </div>


        <div class=\"btn-site\">
            <button id=\"add_answer\" class=\"btn btn-primary\">Ajouter une réponse</button>
        </div>


        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "


        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Créer</button>
        </div>



        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>


    ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
</main>
";
        
        $__internal_4eda507d3753952d52d00dfbda0e5d6ac65335812225583b42124a45c5b238ef->leave($__internal_4eda507d3753952d52d00dfbda0e5d6ac65335812225583b42124a45c5b238ef_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c668008da0bccdf6fef55fcd108017c66b3553439f715932f7e52e7553ddeac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c668008da0bccdf6fef55fcd108017c66b3553439f715932f7e52e7553ddeac6->enter($__internal_c668008da0bccdf6fef55fcd108017c66b3553439f715932f7e52e7553ddeac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "

        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/addQuestion.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_c668008da0bccdf6fef55fcd108017c66b3553439f715932f7e52e7553ddeac6->leave($__internal_c668008da0bccdf6fef55fcd108017c66b3553439f715932f7e52e7553ddeac6_prof);

    }

    public function getTemplateName()
    {
        return "default/addQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  130 => 48,  124 => 47,  115 => 53,  113 => 47,  106 => 43,  94 => 34,  82 => 25,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  59 => 17,  54 => 15,  44 => 7,  38 => 6,  31 => 1,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/addQuestion.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/addQuestion.html.twig");
    }
}
