<?php

/* security/register.html.twig */
class __TwigTemplate_fb0d19b6c57e3c6dff31604d4d05e7bbe70accd25c64ea7c4fef6d20ed3ef56c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/register.html.twig", 1);
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
        $__internal_65ef32c7649a8840b469c7ed69288e43c4686b7023f4b3d5f6d171ceac9a23fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ef32c7649a8840b469c7ed69288e43c4686b7023f4b3d5f6d171ceac9a23fd->enter($__internal_65ef32c7649a8840b469c7ed69288e43c4686b7023f4b3d5f6d171ceac9a23fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 3
        $context["page_title"] = "Inscription";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ef32c7649a8840b469c7ed69288e43c4686b7023f4b3d5f6d171ceac9a23fd->leave($__internal_65ef32c7649a8840b469c7ed69288e43c4686b7023f4b3d5f6d171ceac9a23fd_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_03efc7860a7e0814610f9a20969e04ffacdbd7e1678a4411b1e663136c00f57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03efc7860a7e0814610f9a20969e04ffacdbd7e1678a4411b1e663136c00f57e->enter($__internal_03efc7860a7e0814610f9a20969e04ffacdbd7e1678a4411b1e663136c00f57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

    <main class=\"container\">
        <h1>Inscription</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row');
        echo "

            <div class=\"btn-site\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Valider</button>
            </div>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </main>

";
        
        $__internal_03efc7860a7e0814610f9a20969e04ffacdbd7e1678a4411b1e663136c00f57e->leave($__internal_03efc7860a7e0814610f9a20969e04ffacdbd7e1678a4411b1e663136c00f57e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/register.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/register.html.twig");
    }
}
