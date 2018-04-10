<?php

/* default/addQuestion.html.twig */
class __TwigTemplate_de7fa025be2443301dd3942b92a2264b05fd3217607ad08ed4f28b303d8ef3f8 extends Twig_Template
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
        // line 3
        $context["page_title"] = "Création de question";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "

        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/addQuestion.js"), "html", null, true);
        echo "\"></script>

    ";
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
        return array (  119 => 50,  115 => 48,  112 => 47,  106 => 53,  104 => 47,  97 => 43,  85 => 34,  73 => 25,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  50 => 17,  45 => 15,  35 => 7,  32 => 6,  28 => 1,  26 => 3,  11 => 1,);
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
