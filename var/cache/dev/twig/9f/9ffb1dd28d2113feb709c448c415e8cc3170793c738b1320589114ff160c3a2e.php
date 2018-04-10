<?php

/* security/listUser.html.twig */
class __TwigTemplate_c9c4704d3b8e5791e10b8b163454d9485eeffc2d0627ef82385f22bb512159f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/listUser.html.twig", 1);
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
        $__internal_b966c6971e3c171b1c0a05a6c25c6a8c7ead80ebb346d7d465aa380b5c91a0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b966c6971e3c171b1c0a05a6c25c6a8c7ead80ebb346d7d465aa380b5c91a0e4->enter($__internal_b966c6971e3c171b1c0a05a6c25c6a8c7ead80ebb346d7d465aa380b5c91a0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/listUser.html.twig"));

        // line 3
        $context["page_title"] = "Liste des utilisateurs";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b966c6971e3c171b1c0a05a6c25c6a8c7ead80ebb346d7d465aa380b5c91a0e4->leave($__internal_b966c6971e3c171b1c0a05a6c25c6a8c7ead80ebb346d7d465aa380b5c91a0e4_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad98e099728fa290c6da85ede5aca2d67670f60dc2d6392c1d73b57ed1876f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad98e099728fa290c6da85ede5aca2d67670f60dc2d6392c1d73b57ed1876f81->enter($__internal_ad98e099728fa290c6da85ede5aca2d67670f60dc2d6392c1d73b57ed1876f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

    <main>
        <h1>Listes des utilisateurs :</h1>
        <div class=\"listUser\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edituser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary\">Modifier</a></p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </main>



";
        
        $__internal_ad98e099728fa290c6da85ede5aca2d67670f60dc2d6392c1d73b57ed1876f81->leave($__internal_ad98e099728fa290c6da85ede5aca2d67670f60dc2d6392c1d73b57ed1876f81_prof);

    }

    public function getTemplateName()
    {
        return "security/listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  54 => 11,  50 => 10,  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/listUser.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/listUser.html.twig");
    }
}
