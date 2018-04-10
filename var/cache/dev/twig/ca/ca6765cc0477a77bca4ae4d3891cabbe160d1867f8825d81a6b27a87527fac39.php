<?php

/* default/index.html.twig */
class __TwigTemplate_6668216fad2fadd2c3762672b9d5db84583468f64ce78258958f5c5345547717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/index.html.twig", 1);
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
        $__internal_6fa8ba133bd3398fca8e7d6d60a4ff884957e0455696388593f17f4c789ea4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa8ba133bd3398fca8e7d6d60a4ff884957e0455696388593f17f4c789ea4cc->enter($__internal_6fa8ba133bd3398fca8e7d6d60a4ff884957e0455696388593f17f4c789ea4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_c1afc1c653582f19f1bade746fdebbc8ab579276b24e73467ac1f758f54f3ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1afc1c653582f19f1bade746fdebbc8ab579276b24e73467ac1f758f54f3ac0->enter($__internal_c1afc1c653582f19f1bade746fdebbc8ab579276b24e73467ac1f758f54f3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 3
        $context["page_title"] = "Accueil";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa8ba133bd3398fca8e7d6d60a4ff884957e0455696388593f17f4c789ea4cc->leave($__internal_6fa8ba133bd3398fca8e7d6d60a4ff884957e0455696388593f17f4c789ea4cc_prof);

        
        $__internal_c1afc1c653582f19f1bade746fdebbc8ab579276b24e73467ac1f758f54f3ac0->leave($__internal_c1afc1c653582f19f1bade746fdebbc8ab579276b24e73467ac1f758f54f3ac0_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5ca378c37c68526e190a2edeaedd9a1bfc56ce4d0c945d80edfd7b116fdd477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ca378c37c68526e190a2edeaedd9a1bfc56ce4d0c945d80edfd7b116fdd477->enter($__internal_c5ca378c37c68526e190a2edeaedd9a1bfc56ce4d0c945d80edfd7b116fdd477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0de6700a41e517955f7487387f04575d4e4c3a4af79aedabf9f8e70005fcb1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de6700a41e517955f7487387f04575d4e4c3a4af79aedabf9f8e70005fcb1c6->enter($__internal_0de6700a41e517955f7487387f04575d4e4c3a4af79aedabf9f8e70005fcb1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
<main class=\"container\">

    <div class=\"text-center\">
        <h1>Bienvenue sur Noodle !</h1>
        <p class=\"presentation\">
            Vous êtes sur un site de quiz interactif en ligne. Venez créer des quiz pour vos
            élèves ou encore venez répondre à des quiz préparés par vos enseignants.
        </p>
    </div>

        ";
        // line 16
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEACHER") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 17
            echo "        <div class=\"btn-site\">
            <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addquestion");
            echo "\" type=\"button\" class=\"btn btn-primary btn-lg\">Créer une question</a>
            <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("displayquestions");
            echo "\" type=\"button\" class=\"btn btn-primary btn-lg\">Liste des questions</a>
        </div>
        <div class=\"btn-site\">
            <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createquiz");
            echo "\" type=\"button\" class=\"btn btn-primary btn-lg\">Créer un quiz</a>
            <a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listquiz");
            echo "\" type=\"button\" class=\"btn btn-primary btn-lg\">Lancer un quiz</a>
        </div>

        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 27
            echo "
            <p>Accéder au Quiz</p>
            <form action=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sessionadduser");
            echo "\" method=\"post\">
                <label for=\"sessionKey\">Entrez la clé de la session du Quiz</label>
                <input id=\"sessionKey\" name=\"sessionKey\" type=\"text\">
                <input type=\"submit\" value=\"Valider\">
            </form>

            ";
            // line 35
            if (array_key_exists("errorSession", $context)) {
                // line 36
                echo "                <div class=\"alert alert-danger alert-dismissable\">
                    ";
                // line 37
                echo twig_escape_filter($this->env, ($context["errorSession"] ?? $this->getContext($context, "errorSession")), "html", null, true);
                echo "
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                </div>
            ";
            }
            // line 41
            echo "
        ";
        }
        // line 43
        echo "


</main>



";
        
        $__internal_0de6700a41e517955f7487387f04575d4e4c3a4af79aedabf9f8e70005fcb1c6->leave($__internal_0de6700a41e517955f7487387f04575d4e4c3a4af79aedabf9f8e70005fcb1c6_prof);

        
        $__internal_c5ca378c37c68526e190a2edeaedd9a1bfc56ce4d0c945d80edfd7b116fdd477->leave($__internal_c5ca378c37c68526e190a2edeaedd9a1bfc56ce4d0c945d80edfd7b116fdd477_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  116 => 41,  109 => 37,  106 => 36,  104 => 35,  95 => 29,  91 => 27,  84 => 23,  80 => 22,  74 => 19,  70 => 18,  67 => 17,  65 => 16,  52 => 5,  43 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Accueil' %}
{% block content %}

<main class=\"container\">

    <div class=\"text-center\">
        <h1>Bienvenue sur Noodle !</h1>
        <p class=\"presentation\">
            Vous êtes sur un site de quiz interactif en ligne. Venez créer des quiz pour vos
            élèves ou encore venez répondre à des quiz préparés par vos enseignants.
        </p>
    </div>

        {% if is_granted(\"ROLE_TEACHER\") or is_granted(\"ROLE_ADMIN\") %}
        <div class=\"btn-site\">
            <a href=\"{{ path('addquestion') }}\" type=\"button\" class=\"btn btn-primary btn-lg\">Créer une question</a>
            <a href=\"{{ path('displayquestions') }}\" type=\"button\" class=\"btn btn-primary btn-lg\">Liste des questions</a>
        </div>
        <div class=\"btn-site\">
            <a href=\"{{ path('createquiz') }}\" type=\"button\" class=\"btn btn-primary btn-lg\">Créer un quiz</a>
            <a href=\"{{ path('listquiz') }}\" type=\"button\" class=\"btn btn-primary btn-lg\">Lancer un quiz</a>
        </div>

        {% elseif is_granted(\"ROLE_STUDENT\") %}

            <p>Accéder au Quiz</p>
            <form action=\"{{ path('sessionadduser') }}\" method=\"post\">
                <label for=\"sessionKey\">Entrez la clé de la session du Quiz</label>
                <input id=\"sessionKey\" name=\"sessionKey\" type=\"text\">
                <input type=\"submit\" value=\"Valider\">
            </form>

            {% if errorSession is defined %}
                <div class=\"alert alert-danger alert-dismissable\">
                    {{ errorSession }}
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                </div>
            {% endif %}

        {% endif %}



</main>



{% endblock %}
", "default/index.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/index.html.twig");
    }
}
