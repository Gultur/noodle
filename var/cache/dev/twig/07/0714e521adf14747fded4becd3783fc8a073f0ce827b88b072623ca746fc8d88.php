<?php

/* default/createSession.html.twig */
class __TwigTemplate_dad17472f33dc654bbdadf8509b398814b2cfc6150494096de5245d9de4132f4 extends Twig_Template
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
        $__internal_ea024f050134961d2919d7bf44706630796f96cac93d19a8369bf020a7514647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea024f050134961d2919d7bf44706630796f96cac93d19a8369bf020a7514647->enter($__internal_ea024f050134961d2919d7bf44706630796f96cac93d19a8369bf020a7514647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/createSession.html.twig"));

        // line 3
        $context["page_title"] = "Création de session";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea024f050134961d2919d7bf44706630796f96cac93d19a8369bf020a7514647->leave($__internal_ea024f050134961d2919d7bf44706630796f96cac93d19a8369bf020a7514647_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_92ce8e6f983bef9abf1bbd04ae04964da829903c015d820a2715163b4797aefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ce8e6f983bef9abf1bbd04ae04964da829903c015d820a2715163b4797aefa->enter($__internal_92ce8e6f983bef9abf1bbd04ae04964da829903c015d820a2715163b4797aefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_92ce8e6f983bef9abf1bbd04ae04964da829903c015d820a2715163b4797aefa->leave($__internal_92ce8e6f983bef9abf1bbd04ae04964da829903c015d820a2715163b4797aefa_prof);

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
        return array (  75 => 22,  68 => 18,  65 => 17,  63 => 16,  58 => 14,  54 => 13,  50 => 12,  43 => 7,  37 => 6,  30 => 1,  28 => 3,  11 => 1,);
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
