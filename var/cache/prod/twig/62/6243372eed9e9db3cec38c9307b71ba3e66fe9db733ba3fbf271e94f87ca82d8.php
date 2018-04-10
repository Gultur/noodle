<?php

/* default/createSession.html.twig */
class __TwigTemplate_3f280b169d65d14b57235c42f269fa587c606eccae850a863d13bcd8c9257eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/createSession.html.twig", 1);
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
        $context["page_title"] = "Création de session";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "

    <main class=\"container\">
        <h1>Création de la session</h1>

        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        ";
        // line 16
        if (array_key_exists("errorKey", $context)) {
            // line 17
            echo "            <div class=\"alert alert-danger alert-dismissable\">
                ";
            // line 18
            echo twig_escape_filter($this->env, ($context["errorKey"] ?? null), "html", null, true);
            echo "
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            </div>
        ";
        }
        // line 22
        echo "    </main>

";
    }

    public function getTemplateName()
    {
        return "default/createSession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  59 => 18,  56 => 17,  54 => 16,  49 => 14,  45 => 13,  41 => 12,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/createSession.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/createSession.html.twig");
    }
}
