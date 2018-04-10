<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_d651a4cedd58066515d86df62fc4055e62b1c02cec3c86dba155f1d17f48e1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e91bdefaeac7f0a937026d221ec3fc5d3d31dcf0ca012b0e47e02b791098a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e91bdefaeac7f0a937026d221ec3fc5d3d31dcf0ca012b0e47e02b791098a6b->enter($__internal_3e91bdefaeac7f0a937026d221ec3fc5d3d31dcf0ca012b0e47e02b791098a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_3e91bdefaeac7f0a937026d221ec3fc5d3d31dcf0ca012b0e47e02b791098a6b->leave($__internal_3e91bdefaeac7f0a937026d221ec3fc5d3d31dcf0ca012b0e47e02b791098a6b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_48db38e92ae5512cd28e8b8b477e3f3018daf688d7cd137942025f057e28faaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48db38e92ae5512cd28e8b8b477e3f3018daf688d7cd137942025f057e28faaa->enter($__internal_48db38e92ae5512cd28e8b8b477e3f3018daf688d7cd137942025f057e28faaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_48db38e92ae5512cd28e8b8b477e3f3018daf688d7cd137942025f057e28faaa->leave($__internal_48db38e92ae5512cd28e8b8b477e3f3018daf688d7cd137942025f057e28faaa_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_659c2978539e7307e7ce359f90ec48847b2decd04b7a3398b824534cfd5cc451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659c2978539e7307e7ce359f90ec48847b2decd04b7a3398b824534cfd5cc451->enter($__internal_659c2978539e7307e7ce359f90ec48847b2decd04b7a3398b824534cfd5cc451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_659c2978539e7307e7ce359f90ec48847b2decd04b7a3398b824534cfd5cc451->leave($__internal_659c2978539e7307e7ce359f90ec48847b2decd04b7a3398b824534cfd5cc451_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_82a3839f518eb2c2731fe54a23b2b1840b2c46d55ec15afa2bf9e008b1069b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a3839f518eb2c2731fe54a23b2b1840b2c46d55ec15afa2bf9e008b1069b41->enter($__internal_82a3839f518eb2c2731fe54a23b2b1840b2c46d55ec15afa2bf9e008b1069b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_82a3839f518eb2c2731fe54a23b2b1840b2c46d55ec15afa2bf9e008b1069b41->leave($__internal_82a3839f518eb2c2731fe54a23b2b1840b2c46d55ec15afa2bf9e008b1069b41_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c44ab6ce15d53d8567e2ce3e8d3890d1c92284c643c0667d4e0ff59d21880626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44ab6ce15d53d8567e2ce3e8d3890d1c92284c643c0667d4e0ff59d21880626->enter($__internal_c44ab6ce15d53d8567e2ce3e8d3890d1c92284c643c0667d4e0ff59d21880626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_c44ab6ce15d53d8567e2ce3e8d3890d1c92284c643c0667d4e0ff59d21880626->leave($__internal_c44ab6ce15d53d8567e2ce3e8d3890d1c92284c643c0667d4e0ff59d21880626_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d0ecff969ad779db06db68f8ed8a4f3fd7ccdffcd6c789d45699287b4d5b0281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ecff969ad779db06db68f8ed8a4f3fd7ccdffcd6c789d45699287b4d5b0281->enter($__internal_d0ecff969ad779db06db68f8ed8a4f3fd7ccdffcd6c789d45699287b4d5b0281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_d0ecff969ad779db06db68f8ed8a4f3fd7ccdffcd6c789d45699287b4d5b0281->leave($__internal_d0ecff969ad779db06db68f8ed8a4f3fd7ccdffcd6c789d45699287b4d5b0281_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4a939df8cb34610cd5f3c0a52eb98a59a023192cee19cc7c38cc587d38206b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a939df8cb34610cd5f3c0a52eb98a59a023192cee19cc7c38cc587d38206b41->enter($__internal_4a939df8cb34610cd5f3c0a52eb98a59a023192cee19cc7c38cc587d38206b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_4a939df8cb34610cd5f3c0a52eb98a59a023192cee19cc7c38cc587d38206b41->leave($__internal_4a939df8cb34610cd5f3c0a52eb98a59a023192cee19cc7c38cc587d38206b41_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_cee85a85865640d387f6be8f2bbd83a4cbeafd96376d8ca15531fbb11cfd8208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee85a85865640d387f6be8f2bbd83a4cbeafd96376d8ca15531fbb11cfd8208->enter($__internal_cee85a85865640d387f6be8f2bbd83a4cbeafd96376d8ca15531fbb11cfd8208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_cee85a85865640d387f6be8f2bbd83a4cbeafd96376d8ca15531fbb11cfd8208->leave($__internal_cee85a85865640d387f6be8f2bbd83a4cbeafd96376d8ca15531fbb11cfd8208_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cdc32e27f850e55ea56fe75326a72e9aee57cb8cc0dc4994dc32ead62f1cabd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc32e27f850e55ea56fe75326a72e9aee57cb8cc0dc4994dc32ead62f1cabd4->enter($__internal_cdc32e27f850e55ea56fe75326a72e9aee57cb8cc0dc4994dc32ead62f1cabd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_cdc32e27f850e55ea56fe75326a72e9aee57cb8cc0dc4994dc32ead62f1cabd4->leave($__internal_cdc32e27f850e55ea56fe75326a72e9aee57cb8cc0dc4994dc32ead62f1cabd4_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 64,  267 => 63,  265 => 62,  263 => 61,  259 => 60,  255 => 59,  249 => 58,  243 => 57,  236 => 54,  230 => 53,  223 => 50,  221 => 49,  219 => 48,  215 => 47,  211 => 46,  209 => 45,  203 => 44,  196 => 41,  194 => 40,  192 => 39,  188 => 38,  184 => 37,  182 => 36,  176 => 35,  169 => 32,  166 => 31,  164 => 30,  162 => 29,  158 => 28,  156 => 27,  150 => 26,  144 => 25,  137 => 20,  131 => 19,  123 => 15,  121 => 14,  116 => 12,  114 => 11,  108 => 10,  101 => 5,  99 => 4,  93 => 3,  86 => 57,  83 => 56,  81 => 53,  78 => 52,  76 => 44,  73 => 43,  71 => 35,  68 => 34,  66 => 25,  63 => 24,  60 => 22,  58 => 19,  55 => 18,  53 => 10,  50 => 9,  47 => 7,  45 => 3,  42 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_3_horizontal_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
