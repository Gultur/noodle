<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_c9b61d579ef46cef706755426c40edcd46265773c0626e4ce6ee886112ccd36e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acfcb0c4084c960da12af94644e46949d9801dfb0221e3f97ccdcd96a71bcace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfcb0c4084c960da12af94644e46949d9801dfb0221e3f97ccdcd96a71bcace->enter($__internal_acfcb0c4084c960da12af94644e46949d9801dfb0221e3f97ccdcd96a71bcace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_acfcb0c4084c960da12af94644e46949d9801dfb0221e3f97ccdcd96a71bcace->leave($__internal_acfcb0c4084c960da12af94644e46949d9801dfb0221e3f97ccdcd96a71bcace_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cc96f0ceac491e43ff2d59698e4c4191ff547beaf3f106f107498e457b9cb4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc96f0ceac491e43ff2d59698e4c4191ff547beaf3f106f107498e457b9cb4e9->enter($__internal_cc96f0ceac491e43ff2d59698e4c4191ff547beaf3f106f107498e457b9cb4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_cc96f0ceac491e43ff2d59698e4c4191ff547beaf3f106f107498e457b9cb4e9->leave($__internal_cc96f0ceac491e43ff2d59698e4c4191ff547beaf3f106f107498e457b9cb4e9_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a9328f66818d120699c369301fb168fd21c48b1333a976d47f869f48daa4685d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9328f66818d120699c369301fb168fd21c48b1333a976d47f869f48daa4685d->enter($__internal_a9328f66818d120699c369301fb168fd21c48b1333a976d47f869f48daa4685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_a9328f66818d120699c369301fb168fd21c48b1333a976d47f869f48daa4685d->leave($__internal_a9328f66818d120699c369301fb168fd21c48b1333a976d47f869f48daa4685d_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_509d1f49f28ddfb9eaf7981d180c083c647b0ce1f65796cc39aafecae13ba7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509d1f49f28ddfb9eaf7981d180c083c647b0ce1f65796cc39aafecae13ba7a6->enter($__internal_509d1f49f28ddfb9eaf7981d180c083c647b0ce1f65796cc39aafecae13ba7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_509d1f49f28ddfb9eaf7981d180c083c647b0ce1f65796cc39aafecae13ba7a6->leave($__internal_509d1f49f28ddfb9eaf7981d180c083c647b0ce1f65796cc39aafecae13ba7a6_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_252f431cdb6710aca7ec8f38d2de4306846022896e45cc6ed067ae5671adfa65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252f431cdb6710aca7ec8f38d2de4306846022896e45cc6ed067ae5671adfa65->enter($__internal_252f431cdb6710aca7ec8f38d2de4306846022896e45cc6ed067ae5671adfa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_252f431cdb6710aca7ec8f38d2de4306846022896e45cc6ed067ae5671adfa65->leave($__internal_252f431cdb6710aca7ec8f38d2de4306846022896e45cc6ed067ae5671adfa65_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5f02f5159d4148948f014b2efaacfe1998e0b4328bada447360641434624bb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f02f5159d4148948f014b2efaacfe1998e0b4328bada447360641434624bb46->enter($__internal_5f02f5159d4148948f014b2efaacfe1998e0b4328bada447360641434624bb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_5f02f5159d4148948f014b2efaacfe1998e0b4328bada447360641434624bb46->leave($__internal_5f02f5159d4148948f014b2efaacfe1998e0b4328bada447360641434624bb46_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8fbc067e59f19588b7cabc6c174a9cae93f5773d6a472968cdec29a1e813824c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbc067e59f19588b7cabc6c174a9cae93f5773d6a472968cdec29a1e813824c->enter($__internal_8fbc067e59f19588b7cabc6c174a9cae93f5773d6a472968cdec29a1e813824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_8fbc067e59f19588b7cabc6c174a9cae93f5773d6a472968cdec29a1e813824c->leave($__internal_8fbc067e59f19588b7cabc6c174a9cae93f5773d6a472968cdec29a1e813824c_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_25fedc3f994d3e82c12395c6c1b5f55cf37896e28e7830ee66712b43c46aabfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fedc3f994d3e82c12395c6c1b5f55cf37896e28e7830ee66712b43c46aabfd->enter($__internal_25fedc3f994d3e82c12395c6c1b5f55cf37896e28e7830ee66712b43c46aabfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_25fedc3f994d3e82c12395c6c1b5f55cf37896e28e7830ee66712b43c46aabfd->leave($__internal_25fedc3f994d3e82c12395c6c1b5f55cf37896e28e7830ee66712b43c46aabfd_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7eb9bbe5b1eefb32bb2ff4763f3d483496ec82f7ce5a2597894557b55ae6f6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb9bbe5b1eefb32bb2ff4763f3d483496ec82f7ce5a2597894557b55ae6f6e2->enter($__internal_7eb9bbe5b1eefb32bb2ff4763f3d483496ec82f7ce5a2597894557b55ae6f6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_7eb9bbe5b1eefb32bb2ff4763f3d483496ec82f7ce5a2597894557b55ae6f6e2->leave($__internal_7eb9bbe5b1eefb32bb2ff4763f3d483496ec82f7ce5a2597894557b55ae6f6e2_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  296 => 78,  294 => 77,  292 => 76,  290 => 75,  286 => 74,  282 => 73,  280 => 72,  274 => 71,  267 => 68,  261 => 67,  254 => 64,  252 => 63,  250 => 62,  246 => 61,  242 => 60,  240 => 59,  234 => 58,  227 => 55,  225 => 54,  223 => 53,  219 => 52,  215 => 51,  213 => 50,  207 => 49,  200 => 46,  196 => 44,  194 => 43,  192 => 42,  188 => 41,  186 => 40,  181 => 39,  178 => 38,  172 => 37,  164 => 33,  161 => 32,  159 => 31,  157 => 30,  153 => 29,  151 => 28,  145 => 27,  142 => 25,  140 => 24,  134 => 23,  127 => 18,  121 => 17,  113 => 13,  111 => 12,  108 => 10,  106 => 9,  101 => 7,  99 => 6,  93 => 5,  86 => 71,  83 => 70,  81 => 67,  78 => 66,  76 => 58,  73 => 57,  71 => 49,  68 => 48,  66 => 37,  63 => 36,  61 => 23,  58 => 22,  55 => 20,  53 => 17,  50 => 16,  48 => 5,  45 => 4,  42 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_horizontal_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
