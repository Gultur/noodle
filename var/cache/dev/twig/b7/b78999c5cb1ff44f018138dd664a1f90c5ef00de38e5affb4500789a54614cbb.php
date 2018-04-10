<?php

/* security/updateUser.html.twig */
class __TwigTemplate_355be46032773092db970b4e7e91d2d928b080607efb78d120e9cf182e4a29f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "security/updateUser.html.twig", 1);
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
        $__internal_07e029bdd21d2fbb6c37ec1c710abefa9f49f28f04924e6701951b764937c659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e029bdd21d2fbb6c37ec1c710abefa9f49f28f04924e6701951b764937c659->enter($__internal_07e029bdd21d2fbb6c37ec1c710abefa9f49f28f04924e6701951b764937c659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/updateUser.html.twig"));

        // line 3
        $context["page_title"] = "Édition d'un utilisateur";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e029bdd21d2fbb6c37ec1c710abefa9f49f28f04924e6701951b764937c659->leave($__internal_07e029bdd21d2fbb6c37ec1c710abefa9f49f28f04924e6701951b764937c659_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_156e9ab331f7956bfeaa70269d375e19ad92a7a0841c9ae42dc6386d500caa0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156e9ab331f7956bfeaa70269d375e19ad92a7a0841c9ae42dc6386d500caa0f->enter($__internal_156e9ab331f7956bfeaa70269d375e19ad92a7a0841c9ae42dc6386d500caa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

    <main class=\"container\">
        <h1>Éditer un utilisateur</h1>


        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "username", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "role", array()), 'row');
        echo "

        <div class=\"btn-site\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg\" onclick=\"return confirm('Confirmer la modification ?')\">Valider</button>
        </div>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </main>



";
        
        $__internal_156e9ab331f7956bfeaa70269d375e19ad92a7a0841c9ae42dc6386d500caa0f->leave($__internal_156e9ab331f7956bfeaa70269d375e19ad92a7a0841c9ae42dc6386d500caa0f_prof);

    }

    public function getTemplateName()
    {
        return "security/updateUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  64 => 15,  60 => 14,  56 => 13,  51 => 11,  43 => 5,  37 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/updateUser.html.twig", "/home/gultur/noodleclean/Noodle/app/Resources/views/security/updateUser.html.twig");
    }
}
