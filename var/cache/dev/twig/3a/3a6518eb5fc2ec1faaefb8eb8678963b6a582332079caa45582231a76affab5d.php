<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_96a2ce2a1a2e2c47febd5692bf3f5e44bff0039935ae16e3fcb22466e2d1d740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b1972b47c617d1e3074c4a9cf0f86f3fe7cc78f08b21a6135e4716802f6f248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1972b47c617d1e3074c4a9cf0f86f3fe7cc78f08b21a6135e4716802f6f248->enter($__internal_2b1972b47c617d1e3074c4a9cf0f86f3fe7cc78f08b21a6135e4716802f6f248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_2b1972b47c617d1e3074c4a9cf0f86f3fe7cc78f08b21a6135e4716802f6f248->leave($__internal_2b1972b47c617d1e3074c4a9cf0f86f3fe7cc78f08b21a6135e4716802f6f248_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6a3de7e79cc69e334acc4e1fdac90126c3be507e1d3afab540f321cdc8f4f9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3de7e79cc69e334acc4e1fdac90126c3be507e1d3afab540f321cdc8f4f9e4->enter($__internal_6a3de7e79cc69e334acc4e1fdac90126c3be507e1d3afab540f321cdc8f4f9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6a3de7e79cc69e334acc4e1fdac90126c3be507e1d3afab540f321cdc8f4f9e4->leave($__internal_6a3de7e79cc69e334acc4e1fdac90126c3be507e1d3afab540f321cdc8f4f9e4_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ec60315772528b74365d7950b65e2fbf1051bbd396245f22c6f95881057b17c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec60315772528b74365d7950b65e2fbf1051bbd396245f22c6f95881057b17c8->enter($__internal_ec60315772528b74365d7950b65e2fbf1051bbd396245f22c6f95881057b17c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ec60315772528b74365d7950b65e2fbf1051bbd396245f22c6f95881057b17c8->leave($__internal_ec60315772528b74365d7950b65e2fbf1051bbd396245f22c6f95881057b17c8_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_93536b36514bd012adad19a9f94fd65db92c4a310364eeda29892f625a5ebe55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93536b36514bd012adad19a9f94fd65db92c4a310364eeda29892f625a5ebe55->enter($__internal_93536b36514bd012adad19a9f94fd65db92c4a310364eeda29892f625a5ebe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_93536b36514bd012adad19a9f94fd65db92c4a310364eeda29892f625a5ebe55->leave($__internal_93536b36514bd012adad19a9f94fd65db92c4a310364eeda29892f625a5ebe55_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_11dc7116f141ca277ca969e7c22a60319669fd37cf27614b3d46d31a02f2efdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11dc7116f141ca277ca969e7c22a60319669fd37cf27614b3d46d31a02f2efdd->enter($__internal_11dc7116f141ca277ca969e7c22a60319669fd37cf27614b3d46d31a02f2efdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_11dc7116f141ca277ca969e7c22a60319669fd37cf27614b3d46d31a02f2efdd->leave($__internal_11dc7116f141ca277ca969e7c22a60319669fd37cf27614b3d46d31a02f2efdd_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b92b6a1d9c33319a7861d2d6314433012b129d973d2f7391235d2dc8843544b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92b6a1d9c33319a7861d2d6314433012b129d973d2f7391235d2dc8843544b8->enter($__internal_b92b6a1d9c33319a7861d2d6314433012b129d973d2f7391235d2dc8843544b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b92b6a1d9c33319a7861d2d6314433012b129d973d2f7391235d2dc8843544b8->leave($__internal_b92b6a1d9c33319a7861d2d6314433012b129d973d2f7391235d2dc8843544b8_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3f4bce6f40b4cf77dd23bfbb75c4510b8dd4944b1e9320977786a065b4eabba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4bce6f40b4cf77dd23bfbb75c4510b8dd4944b1e9320977786a065b4eabba6->enter($__internal_3f4bce6f40b4cf77dd23bfbb75c4510b8dd4944b1e9320977786a065b4eabba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3f4bce6f40b4cf77dd23bfbb75c4510b8dd4944b1e9320977786a065b4eabba6->leave($__internal_3f4bce6f40b4cf77dd23bfbb75c4510b8dd4944b1e9320977786a065b4eabba6_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2ac47e66a0e8ff0a9ceb0d618013bd3c8d28fe4925dda264219ea9a8cd7ea48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac47e66a0e8ff0a9ceb0d618013bd3c8d28fe4925dda264219ea9a8cd7ea48e->enter($__internal_2ac47e66a0e8ff0a9ceb0d618013bd3c8d28fe4925dda264219ea9a8cd7ea48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2ac47e66a0e8ff0a9ceb0d618013bd3c8d28fe4925dda264219ea9a8cd7ea48e->leave($__internal_2ac47e66a0e8ff0a9ceb0d618013bd3c8d28fe4925dda264219ea9a8cd7ea48e_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7ae325bcf7ac7b73929dd935a1caa379c28920fd69f5d424688e91c2e05a7132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae325bcf7ac7b73929dd935a1caa379c28920fd69f5d424688e91c2e05a7132->enter($__internal_7ae325bcf7ac7b73929dd935a1caa379c28920fd69f5d424688e91c2e05a7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7ae325bcf7ac7b73929dd935a1caa379c28920fd69f5d424688e91c2e05a7132->leave($__internal_7ae325bcf7ac7b73929dd935a1caa379c28920fd69f5d424688e91c2e05a7132_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_39674b33fcf99fbbea98f83a0fd73e8568e6cd2419760520590043dd663219d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39674b33fcf99fbbea98f83a0fd73e8568e6cd2419760520590043dd663219d8->enter($__internal_39674b33fcf99fbbea98f83a0fd73e8568e6cd2419760520590043dd663219d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? null)) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
            }
            // line 73
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 76
($context["name"] ?? null), "%id%" =>                     // line 77
($context["id"] ?? null)));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo ($context["widget"] ?? null);
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_39674b33fcf99fbbea98f83a0fd73e8568e6cd2419760520590043dd663219d8->leave($__internal_39674b33fcf99fbbea98f83a0fd73e8568e6cd2419760520590043dd663219d8_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c78fbf999921ab2f56c7027b6481d3c1b06b8697253ecde013b2ddb659185671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78fbf999921ab2f56c7027b6481d3c1b06b8697253ecde013b2ddb659185671->enter($__internal_c78fbf999921ab2f56c7027b6481d3c1b06b8697253ecde013b2ddb659185671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_c78fbf999921ab2f56c7027b6481d3c1b06b8697253ecde013b2ddb659185671->leave($__internal_c78fbf999921ab2f56c7027b6481d3c1b06b8697253ecde013b2ddb659185671_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e5e25599020c55f2eede0f5f4572a0bf04201e6c6614eeb6cb96a29e9d704d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e25599020c55f2eede0f5f4572a0bf04201e6c6614eeb6cb96a29e9d704d4e->enter($__internal_e5e25599020c55f2eede0f5f4572a0bf04201e6c6614eeb6cb96a29e9d704d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_e5e25599020c55f2eede0f5f4572a0bf04201e6c6614eeb6cb96a29e9d704d4e->leave($__internal_e5e25599020c55f2eede0f5f4572a0bf04201e6c6614eeb6cb96a29e9d704d4e_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_421e8e3e8b816d7ea667774118e5cce39622eb313835e6c3447f1963a0ff01d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421e8e3e8b816d7ea667774118e5cce39622eb313835e6c3447f1963a0ff01d5->enter($__internal_421e8e3e8b816d7ea667774118e5cce39622eb313835e6c3447f1963a0ff01d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_421e8e3e8b816d7ea667774118e5cce39622eb313835e6c3447f1963a0ff01d5->leave($__internal_421e8e3e8b816d7ea667774118e5cce39622eb313835e6c3447f1963a0ff01d5_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5aeef03401df3293451e83a8c42d7b1b22d87227ca8f14c8b6a12cf285268358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aeef03401df3293451e83a8c42d7b1b22d87227ca8f14c8b6a12cf285268358->enter($__internal_5aeef03401df3293451e83a8c42d7b1b22d87227ca8f14c8b6a12cf285268358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5aeef03401df3293451e83a8c42d7b1b22d87227ca8f14c8b6a12cf285268358->leave($__internal_5aeef03401df3293451e83a8c42d7b1b22d87227ca8f14c8b6a12cf285268358_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_357f992323dcc2af46a5af078fedf4201fc049764f1315aa4aaa416fc7a0607e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357f992323dcc2af46a5af078fedf4201fc049764f1315aa4aaa416fc7a0607e->enter($__internal_357f992323dcc2af46a5af078fedf4201fc049764f1315aa4aaa416fc7a0607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_357f992323dcc2af46a5af078fedf4201fc049764f1315aa4aaa416fc7a0607e->leave($__internal_357f992323dcc2af46a5af078fedf4201fc049764f1315aa4aaa416fc7a0607e_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c7896663dc34573513fc03a6de611ce0744bcb31aa8e3bd098eefb94fa09a21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7896663dc34573513fc03a6de611ce0744bcb31aa8e3bd098eefb94fa09a21d->enter($__internal_c7896663dc34573513fc03a6de611ce0744bcb31aa8e3bd098eefb94fa09a21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c7896663dc34573513fc03a6de611ce0744bcb31aa8e3bd098eefb94fa09a21d->leave($__internal_c7896663dc34573513fc03a6de611ce0744bcb31aa8e3bd098eefb94fa09a21d_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f27a8b6f044ec16762ba5c8a72a1e95b03526816d0d07e1433a25a5a67f84c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27a8b6f044ec16762ba5c8a72a1e95b03526816d0d07e1433a25a5a67f84c98->enter($__internal_f27a8b6f044ec16762ba5c8a72a1e95b03526816d0d07e1433a25a5a67f84c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_f27a8b6f044ec16762ba5c8a72a1e95b03526816d0d07e1433a25a5a67f84c98->leave($__internal_f27a8b6f044ec16762ba5c8a72a1e95b03526816d0d07e1433a25a5a67f84c98_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d15c280295a7e253dd1f83f58b1607ffe194e68c7a7805101b4c125407e05ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15c280295a7e253dd1f83f58b1607ffe194e68c7a7805101b4c125407e05ae3->enter($__internal_d15c280295a7e253dd1f83f58b1607ffe194e68c7a7805101b4c125407e05ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_d15c280295a7e253dd1f83f58b1607ffe194e68c7a7805101b4c125407e05ae3->leave($__internal_d15c280295a7e253dd1f83f58b1607ffe194e68c7a7805101b4c125407e05ae3_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f2e2bef6457ccf03a0134f9ec9cbd6e797bd18d4eaba29dd06b7be21913fe139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e2bef6457ccf03a0134f9ec9cbd6e797bd18d4eaba29dd06b7be21913fe139->enter($__internal_f2e2bef6457ccf03a0134f9ec9cbd6e797bd18d4eaba29dd06b7be21913fe139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_f2e2bef6457ccf03a0134f9ec9cbd6e797bd18d4eaba29dd06b7be21913fe139->leave($__internal_f2e2bef6457ccf03a0134f9ec9cbd6e797bd18d4eaba29dd06b7be21913fe139_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  539 => 149,  536 => 148,  528 => 146,  524 => 145,  522 => 144,  516 => 143,  514 => 142,  508 => 141,  501 => 136,  499 => 135,  497 => 134,  491 => 133,  485 => 132,  478 => 129,  476 => 128,  474 => 127,  468 => 126,  462 => 125,  455 => 122,  453 => 121,  447 => 120,  440 => 117,  438 => 116,  432 => 115,  425 => 112,  423 => 111,  417 => 110,  410 => 107,  408 => 106,  402 => 105,  395 => 102,  393 => 101,  391 => 100,  385 => 99,  378 => 96,  376 => 95,  374 => 94,  372 => 93,  366 => 92,  360 => 91,  352 => 85,  348 => 84,  333 => 83,  329 => 80,  326 => 77,  325 => 76,  324 => 75,  322 => 74,  320 => 73,  317 => 71,  315 => 70,  312 => 68,  310 => 67,  308 => 66,  302 => 64,  295 => 61,  293 => 59,  287 => 58,  280 => 55,  278 => 53,  272 => 52,  265 => 49,  263 => 48,  257 => 46,  250 => 43,  248 => 42,  242 => 41,  234 => 35,  232 => 34,  230 => 33,  227 => 31,  225 => 30,  223 => 29,  217 => 28,  209 => 24,  207 => 23,  205 => 22,  202 => 20,  200 => 19,  198 => 18,  192 => 17,  185 => 14,  183 => 13,  177 => 12,  170 => 9,  167 => 7,  165 => 6,  159 => 5,  152 => 141,  149 => 140,  146 => 138,  144 => 132,  141 => 131,  139 => 125,  136 => 124,  134 => 120,  131 => 119,  129 => 115,  126 => 114,  124 => 110,  121 => 109,  119 => 105,  116 => 104,  114 => 99,  111 => 98,  109 => 91,  106 => 90,  103 => 88,  101 => 64,  98 => 63,  96 => 58,  93 => 57,  91 => 52,  88 => 51,  86 => 46,  83 => 45,  81 => 41,  78 => 40,  75 => 38,  73 => 28,  70 => 27,  68 => 17,  65 => 16,  63 => 12,  60 => 11,  58 => 5,  55 => 4,  52 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_3_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
