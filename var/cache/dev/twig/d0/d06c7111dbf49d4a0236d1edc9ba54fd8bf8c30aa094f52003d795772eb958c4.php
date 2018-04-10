<?php

/* security/administration.html.twig */
class __TwigTemplate_4003b65c553c7c411f558e8b048c64d09aec658ba34b87a108b929670feccefa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/administration.html.twig", 1);
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
        $__internal_8a09f0a2240f7e2ac8677d651254f6ff6190b12641d26a6ec73c856ca82b0b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a09f0a2240f7e2ac8677d651254f6ff6190b12641d26a6ec73c856ca82b0b6e->enter($__internal_8a09f0a2240f7e2ac8677d651254f6ff6190b12641d26a6ec73c856ca82b0b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/administration.html.twig"));

        // line 3
        $context["page_title"] = "Administration";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a09f0a2240f7e2ac8677d651254f6ff6190b12641d26a6ec73c856ca82b0b6e->leave($__internal_8a09f0a2240f7e2ac8677d651254f6ff6190b12641d26a6ec73c856ca82b0b6e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_db20d13d1f6d52a144bf16ced487ded9b51ffe18731fb6ed4e94e243393c79f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db20d13d1f6d52a144bf16ced487ded9b51ffe18731fb6ed4e94e243393c79f0->enter($__internal_db20d13d1f6d52a144bf16ced487ded9b51ffe18731fb6ed4e94e243393c79f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <main>
        <div class=\"btn-site\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listusers");
        echo "\" type=\"button\" class=\"btn btn-primary btn-lg leave\">Éditer un utilisateur</a>
        </div>
    </main>


";
        
        $__internal_db20d13d1f6d52a144bf16ced487ded9b51ffe18731fb6ed4e94e243393c79f0->leave($__internal_db20d13d1f6d52a144bf16ced487ded9b51ffe18731fb6ed4e94e243393c79f0_prof);

    }

    public function getTemplateName()
    {
        return "security/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/administration.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/administration.html.twig");
    }
}
