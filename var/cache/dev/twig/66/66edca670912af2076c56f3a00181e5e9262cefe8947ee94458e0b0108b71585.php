<?php

/* security/login.html.twig */
class __TwigTemplate_27ba288f762a4a13540687260ce48d51e4df286d907c4c74a777822871f639a3 extends Twig_Template
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
        $__internal_2a6ea981359d661973cf809435b6dd230413eab9c3ae947cc50eceec12ec2b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6ea981359d661973cf809435b6dd230413eab9c3ae947cc50eceec12ec2b06->enter($__internal_2a6ea981359d661973cf809435b6dd230413eab9c3ae947cc50eceec12ec2b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 3
        $context["page_title"] = "Connexion";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6ea981359d661973cf809435b6dd230413eab9c3ae947cc50eceec12ec2b06->leave($__internal_2a6ea981359d661973cf809435b6dd230413eab9c3ae947cc50eceec12ec2b06_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d1c095159ac7aea9b53681b70fdf0f31c98e5029cdef690628a108d4bf4cf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1c095159ac7aea9b53681b70fdf0f31c98e5029cdef690628a108d4bf4cf6d->enter($__internal_4d1c095159ac7aea9b53681b70fdf0f31c98e5029cdef690628a108d4bf4cf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4d1c095159ac7aea9b53681b70fdf0f31c98e5029cdef690628a108d4bf4cf6d->leave($__internal_4d1c095159ac7aea9b53681b70fdf0f31c98e5029cdef690628a108d4bf4cf6d_prof);

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
        return array (  81 => 34,  73 => 28,  71 => 27,  57 => 16,  50 => 12,  43 => 7,  37 => 6,  30 => 1,  28 => 3,  11 => 1,);
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
