<?php

/* default/index.html.twig */
class __TwigTemplate_8cbf055730ad69dbaf6541f99703ade5da97684c6060e261bc7c5d968c914a2a extends Twig_Template
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
        $__internal_81cfd5baecac28464e3f394ea387dc0ab13af5fbcfe7f37da5c2af05aab87f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cfd5baecac28464e3f394ea387dc0ab13af5fbcfe7f37da5c2af05aab87f16->enter($__internal_81cfd5baecac28464e3f394ea387dc0ab13af5fbcfe7f37da5c2af05aab87f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 3
        $context["page_title"] = "Accueil";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81cfd5baecac28464e3f394ea387dc0ab13af5fbcfe7f37da5c2af05aab87f16->leave($__internal_81cfd5baecac28464e3f394ea387dc0ab13af5fbcfe7f37da5c2af05aab87f16_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_42cb3844e53d2d700bad56d2b230351d3f6af67ce6b1e17c62768e30b03518ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42cb3844e53d2d700bad56d2b230351d3f6af67ce6b1e17c62768e30b03518ae->enter($__internal_42cb3844e53d2d700bad56d2b230351d3f6af67ce6b1e17c62768e30b03518ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "\" type=\"button\" class=\"btn btn-primary btn-lg\">Liste des Quiz</a>
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
                echo twig_escape_filter($this->env, ($context["errorSession"] ?? null), "html", null, true);
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
        
        $__internal_42cb3844e53d2d700bad56d2b230351d3f6af67ce6b1e17c62768e30b03518ae->leave($__internal_42cb3844e53d2d700bad56d2b230351d3f6af67ce6b1e17c62768e30b03518ae_prof);

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
        return array (  111 => 43,  107 => 41,  100 => 37,  97 => 36,  95 => 35,  86 => 29,  82 => 27,  75 => 23,  71 => 22,  65 => 19,  61 => 18,  58 => 17,  56 => 16,  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/index.html.twig");
    }
}
