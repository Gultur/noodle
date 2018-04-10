<?php

/* default/createQuiz.html.twig */
class __TwigTemplate_776e459fb9d207f7c70de9b5fd3a070ccd682584a6522e344c4eeb5965f96972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/createQuiz.html.twig", 1);
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
        $__internal_dca1088937cb9c134e6a07bbd920ad181dfa85ec05297c76e2833411771cf8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca1088937cb9c134e6a07bbd920ad181dfa85ec05297c76e2833411771cf8cf->enter($__internal_dca1088937cb9c134e6a07bbd920ad181dfa85ec05297c76e2833411771cf8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/createQuiz.html.twig"));

        // line 3
        $context["page_title"] = "Création de quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dca1088937cb9c134e6a07bbd920ad181dfa85ec05297c76e2833411771cf8cf->leave($__internal_dca1088937cb9c134e6a07bbd920ad181dfa85ec05297c76e2833411771cf8cf_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7e8e5bb7e09487d2a097fb64d2a73d657ba443e243619b3cf7d030bb1b2e93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e8e5bb7e09487d2a097fb64d2a73d657ba443e243619b3cf7d030bb1b2e93e->enter($__internal_d7e8e5bb7e09487d2a097fb64d2a73d657ba443e243619b3cf7d030bb1b2e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "

    <main class=\"container\">

        <h1>Création d'un Quiz</h1>


        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Créer</button>
        </div>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </main>

";
        
        $__internal_d7e8e5bb7e09487d2a097fb64d2a73d657ba443e243619b3cf7d030bb1b2e93e->leave($__internal_d7e8e5bb7e09487d2a097fb64d2a73d657ba443e243619b3cf7d030bb1b2e93e_prof);

    }

    public function getTemplateName()
    {
        return "default/createQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  56 => 15,  52 => 14,  43 => 7,  37 => 6,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/createQuiz.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/default/createQuiz.html.twig");
    }
}
