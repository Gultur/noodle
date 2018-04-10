<?php

/* security/listUser.html.twig */
class __TwigTemplate_2244bf2e608cc05da412b1d157117d949a979578f24a5a912bc5c246787d2130 extends Twig_Template
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
        $__internal_c4a8c4f5fbe62a921c7861e452bf13408410d77e9211f7667ccdc5f2b3710922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a8c4f5fbe62a921c7861e452bf13408410d77e9211f7667ccdc5f2b3710922->enter($__internal_c4a8c4f5fbe62a921c7861e452bf13408410d77e9211f7667ccdc5f2b3710922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/listUser.html.twig"));

        $__internal_b86e7aeeffa581da2b63243f50b18521c148a1f59594e1daf646040324f8fc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86e7aeeffa581da2b63243f50b18521c148a1f59594e1daf646040324f8fc8a->enter($__internal_b86e7aeeffa581da2b63243f50b18521c148a1f59594e1daf646040324f8fc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/listUser.html.twig"));

        // line 3
        $context["page_title"] = "Liste des utilisateurs";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a8c4f5fbe62a921c7861e452bf13408410d77e9211f7667ccdc5f2b3710922->leave($__internal_c4a8c4f5fbe62a921c7861e452bf13408410d77e9211f7667ccdc5f2b3710922_prof);

        
        $__internal_b86e7aeeffa581da2b63243f50b18521c148a1f59594e1daf646040324f8fc8a->leave($__internal_b86e7aeeffa581da2b63243f50b18521c148a1f59594e1daf646040324f8fc8a_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1fe180d09e4d5867690121507809eb009645dabd706e0eaec5b6c9fcc4242e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fe180d09e4d5867690121507809eb009645dabd706e0eaec5b6c9fcc4242e3->enter($__internal_e1fe180d09e4d5867690121507809eb009645dabd706e0eaec5b6c9fcc4242e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d92c78d2a51cbf9457311fd5e56df6502c2f02ebb7f5873e81c0607a28449cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92c78d2a51cbf9457311fd5e56df6502c2f02ebb7f5873e81c0607a28449cbe->enter($__internal_d92c78d2a51cbf9457311fd5e56df6502c2f02ebb7f5873e81c0607a28449cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

    <main>
        <h1>Listes des utilisateurs :</h1>
        <div class=\"listUser\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "role", array()), 0, array(), "array"), "html", null, true);
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
        
        $__internal_d92c78d2a51cbf9457311fd5e56df6502c2f02ebb7f5873e81c0607a28449cbe->leave($__internal_d92c78d2a51cbf9457311fd5e56df6502c2f02ebb7f5873e81c0607a28449cbe_prof);

        
        $__internal_e1fe180d09e4d5867690121507809eb009645dabd706e0eaec5b6c9fcc4242e3->leave($__internal_e1fe180d09e4d5867690121507809eb009645dabd706e0eaec5b6c9fcc4242e3_prof);

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
        return array (  80 => 13,  63 => 11,  59 => 10,  52 => 5,  43 => 4,  33 => 1,  31 => 3,  11 => 1,);
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

{% set page_title = 'Liste des utilisateurs' %}
{% block content %}


    <main>
        <h1>Listes des utilisateurs :</h1>
        <div class=\"listUser\">
        {% for user in users %}
            <p>{{ user.id }} : {{ user.username }} - {{ user.email }} - {{ user.role[0] }} <a href=\"{{ path('edituser', {'id':user.id}) }}\" type=\"button\" class=\"btn btn-primary\">Modifier</a></p>
        {% endfor %}
        </div>
    </main>



{% endblock %}", "security/listUser.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/listUser.html.twig");
    }
}
