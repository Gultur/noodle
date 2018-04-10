<?php

/* form_table_layout.html.twig */
class __TwigTemplate_870cb1c760b9990acb17b8a6b13856175a17a871d8154eed4aa7c278bfc54af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f28335ce39328a665be676eee07bf8eb7bec3a261a7cee3ff544245ca9efbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f28335ce39328a665be676eee07bf8eb7bec3a261a7cee3ff544245ca9efbd6->enter($__internal_3f28335ce39328a665be676eee07bf8eb7bec3a261a7cee3ff544245ca9efbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3f28335ce39328a665be676eee07bf8eb7bec3a261a7cee3ff544245ca9efbd6->leave($__internal_3f28335ce39328a665be676eee07bf8eb7bec3a261a7cee3ff544245ca9efbd6_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3b0cfa9d199a4261642488c448bf6e05fa8329f313686919360619818b5c036a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0cfa9d199a4261642488c448bf6e05fa8329f313686919360619818b5c036a->enter($__internal_3b0cfa9d199a4261642488c448bf6e05fa8329f313686919360619818b5c036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_3b0cfa9d199a4261642488c448bf6e05fa8329f313686919360619818b5c036a->leave($__internal_3b0cfa9d199a4261642488c448bf6e05fa8329f313686919360619818b5c036a_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cfeca1ed972506e348df2d60ff0f5a246d594f657b288b4c966f28e3b7dba039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfeca1ed972506e348df2d60ff0f5a246d594f657b288b4c966f28e3b7dba039->enter($__internal_cfeca1ed972506e348df2d60ff0f5a246d594f657b288b4c966f28e3b7dba039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_cfeca1ed972506e348df2d60ff0f5a246d594f657b288b4c966f28e3b7dba039->leave($__internal_cfeca1ed972506e348df2d60ff0f5a246d594f657b288b4c966f28e3b7dba039_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5e95e6261593e7d931432e5d747d08eb7f10d615ea6bd5f527a6b7662c0c4d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e95e6261593e7d931432e5d747d08eb7f10d615ea6bd5f527a6b7662c0c4d71->enter($__internal_5e95e6261593e7d931432e5d747d08eb7f10d615ea6bd5f527a6b7662c0c4d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_5e95e6261593e7d931432e5d747d08eb7f10d615ea6bd5f527a6b7662c0c4d71->leave($__internal_5e95e6261593e7d931432e5d747d08eb7f10d615ea6bd5f527a6b7662c0c4d71_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_dac4c03c834db7a8a130eed32712309ffeb1bdb9cb1d4f2e0edb9e7cde19ce58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac4c03c834db7a8a130eed32712309ffeb1bdb9cb1d4f2e0edb9e7cde19ce58->enter($__internal_dac4c03c834db7a8a130eed32712309ffeb1bdb9cb1d4f2e0edb9e7cde19ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)) && (twig_length_filter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_dac4c03c834db7a8a130eed32712309ffeb1bdb9cb1d4f2e0edb9e7cde19ce58->leave($__internal_dac4c03c834db7a8a130eed32712309ffeb1bdb9cb1d4f2e0edb9e7cde19ce58_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  139 => 42,  137 => 41,  133 => 38,  131 => 37,  128 => 35,  126 => 34,  122 => 33,  116 => 32,  108 => 28,  106 => 27,  103 => 25,  97 => 24,  89 => 20,  87 => 19,  83 => 16,  77 => 15,  69 => 11,  67 => 10,  65 => 9,  62 => 7,  60 => 6,  57 => 4,  51 => 3,  44 => 32,  42 => 24,  40 => 15,  38 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_table_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
