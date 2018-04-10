<?php

/* default/addQuestion.html.twig */
class __TwigTemplate_ca91ec80310fde211e26d0e7eb918f4e1dff2679f6e057d3c965b798704c33e2 extends Twig_Template
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
        $__internal_3256837baa65924aee4035ce543d6386dc383d045364bddb98b4cd4bab526178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3256837baa65924aee4035ce543d6386dc383d045364bddb98b4cd4bab526178->enter($__internal_3256837baa65924aee4035ce543d6386dc383d045364bddb98b4cd4bab526178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addQuestion.html.twig"));

        $__internal_361cea3a7f7b9bb2b1b89ee94e0a5d62d4f7a3f741937612acfd480b6d1bd850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361cea3a7f7b9bb2b1b89ee94e0a5d62d4f7a3f741937612acfd480b6d1bd850->enter($__internal_361cea3a7f7b9bb2b1b89ee94e0a5d62d4f7a3f741937612acfd480b6d1bd850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/addQuestion.html.twig"));

        // line 3
        $context["page_title"] = "Création de question";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3256837baa65924aee4035ce543d6386dc383d045364bddb98b4cd4bab526178->leave($__internal_3256837baa65924aee4035ce543d6386dc383d045364bddb98b4cd4bab526178_prof);

        
        $__internal_361cea3a7f7b9bb2b1b89ee94e0a5d62d4f7a3f741937612acfd480b6d1bd850->leave($__internal_361cea3a7f7b9bb2b1b89ee94e0a5d62d4f7a3f741937612acfd480b6d1bd850_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_812f7b9a86b766f57417139d23144e4f66b8a879d87b0f1b0b509b47c6dca37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812f7b9a86b766f57417139d23144e4f66b8a879d87b0f1b0b509b47c6dca37a->enter($__internal_812f7b9a86b766f57417139d23144e4f66b8a879d87b0f1b0b509b47c6dca37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6e85a579c373743925e663b79aa25f016fecdcde7f9141294a7d01289f7e1867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e85a579c373743925e663b79aa25f016fecdcde7f9141294a7d01289f7e1867->enter($__internal_6e85a579c373743925e663b79aa25f016fecdcde7f9141294a7d01289f7e1867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "

<main class=\"container\">

    <h1>Création d'une question</h1>


    <div class=\"well\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "question", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'row');
        echo "

        <div id=\"answersDiv\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "answers", array()), 'row');
        echo "
        </div>


        <div class=\"btn-site\">
            <button id=\"add_answer\" class=\"btn btn-primary\">Ajouter une réponse</button>
        </div>


        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "


        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Créer</button>
        </div>



        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


    ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
</main>
";
        
        $__internal_6e85a579c373743925e663b79aa25f016fecdcde7f9141294a7d01289f7e1867->leave($__internal_6e85a579c373743925e663b79aa25f016fecdcde7f9141294a7d01289f7e1867_prof);

        
        $__internal_812f7b9a86b766f57417139d23144e4f66b8a879d87b0f1b0b509b47c6dca37a->leave($__internal_812f7b9a86b766f57417139d23144e4f66b8a879d87b0f1b0b509b47c6dca37a_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_216ea7bd012494c3e08c337cac557c54371a7a5ac52b72baba2d8de18c14bda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216ea7bd012494c3e08c337cac557c54371a7a5ac52b72baba2d8de18c14bda4->enter($__internal_216ea7bd012494c3e08c337cac557c54371a7a5ac52b72baba2d8de18c14bda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e6c8eadae6459028b9c2fac4e470f5c8bd5ed549bec3674f48220fafb0e2858a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c8eadae6459028b9c2fac4e470f5c8bd5ed549bec3674f48220fafb0e2858a->enter($__internal_e6c8eadae6459028b9c2fac4e470f5c8bd5ed549bec3674f48220fafb0e2858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "

        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/addQuestion.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_e6c8eadae6459028b9c2fac4e470f5c8bd5ed549bec3674f48220fafb0e2858a->leave($__internal_e6c8eadae6459028b9c2fac4e470f5c8bd5ed549bec3674f48220fafb0e2858a_prof);

        
        $__internal_216ea7bd012494c3e08c337cac557c54371a7a5ac52b72baba2d8de18c14bda4->leave($__internal_216ea7bd012494c3e08c337cac557c54371a7a5ac52b72baba2d8de18c14bda4_prof);

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
        return array (  149 => 50,  145 => 48,  136 => 47,  124 => 53,  122 => 47,  115 => 43,  103 => 34,  91 => 25,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  68 => 17,  63 => 15,  53 => 7,  44 => 6,  34 => 1,  32 => 3,  11 => 1,);
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

{% set page_title = 'Création de question' %}


{% block content %}


<main class=\"container\">

    <h1>Création d'une question</h1>


    <div class=\"well\">
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

        {{ form_errors(form) }}

        {{ form_row(form.name) }}
        {{ form_row(form.type) }}
        {{ form_row(form.question) }}
        {{ form_row(form.time) }}

        <div id=\"answersDiv\">
        {{ form_row(form.answers) }}
        </div>


        <div class=\"btn-site\">
            <button id=\"add_answer\" class=\"btn btn-primary\">Ajouter une réponse</button>
        </div>


        {{ form_rest(form) }}


        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Créer</button>
        </div>



        {{ form_end(form) }}
    </div>


    {% block javascripts %}


        <script type=\"text/javascript\" src=\"{{ asset('js/addQuestion.js') }}\"></script>

    {% endblock %}

</main>
{% endblock %}

", "default/addQuestion.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/addQuestion.html.twig");
    }
}
