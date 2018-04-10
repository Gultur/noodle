<?php

/* security/login.html.twig */
class __TwigTemplate_3233d3d967363144917956eaf70ddb5109276011b98811336075d393e13a58cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
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
        $context["page_title"] = "Connexion";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "

<main class=\"container\">
    <h1>Connexion</h1>

    <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

        <div class=\"form-group\">
            <label for=\"username\" for=\"username\">Identifiant</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Identifiant\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
        </div>

        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Connexion</button>
        </div>

        ";
        // line 27
        if (($context["error"] ?? null)) {
            // line 28
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <p>Erreur d'identifiant ou de mot de passe</p>

            </div>
        ";
        }
        // line 34
        echo "
    </form>

</main>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 34,  64 => 28,  62 => 27,  48 => 16,  41 => 12,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/login.html.twig");
    }
}
