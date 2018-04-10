<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_176e5529ff62e13bd307924e1cd548cd319d335cb290c977dc0d119fca0fa1ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_121ba0542ab98263562116fbd2a4670a5c922bd2f9cd526e09528279a6e50167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121ba0542ab98263562116fbd2a4670a5c922bd2f9cd526e09528279a6e50167->enter($__internal_121ba0542ab98263562116fbd2a4670a5c922bd2f9cd526e09528279a6e50167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_121ba0542ab98263562116fbd2a4670a5c922bd2f9cd526e09528279a6e50167->leave($__internal_121ba0542ab98263562116fbd2a4670a5c922bd2f9cd526e09528279a6e50167_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fb6037a8d53391d38599ee58f26aa679219088fd34171dd9ed106dae1359f913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6037a8d53391d38599ee58f26aa679219088fd34171dd9ed106dae1359f913->enter($__internal_fb6037a8d53391d38599ee58f26aa679219088fd34171dd9ed106dae1359f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fb6037a8d53391d38599ee58f26aa679219088fd34171dd9ed106dae1359f913->leave($__internal_fb6037a8d53391d38599ee58f26aa679219088fd34171dd9ed106dae1359f913_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1c947f798e4dfc64c905ccee1d7252537278f7b65862b59149d0201476bbaa5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c947f798e4dfc64c905ccee1d7252537278f7b65862b59149d0201476bbaa5e->enter($__internal_1c947f798e4dfc64c905ccee1d7252537278f7b65862b59149d0201476bbaa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_423b304265b4aa74c87dcf19879f5d1f30d988e4871252f21557609191b831ef = ($context["money_pattern"] ?? null)) && is_string($__internal_0af4bbad97ec389d5fb088647a285fa4513d9fe4a4fb5e53ccc6567c376c7d57 = "{{") && ('' === $__internal_0af4bbad97ec389d5fb088647a285fa4513d9fe4a4fb5e53ccc6567c376c7d57 || 0 === strpos($__internal_423b304265b4aa74c87dcf19879f5d1f30d988e4871252f21557609191b831ef, $__internal_0af4bbad97ec389d5fb088647a285fa4513d9fe4a4fb5e53ccc6567c376c7d57)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_2ec0e1913bd1c8d424edff7207f256bb65de17a9e55ca27420a9077ae1e32dbb = ($context["money_pattern"] ?? null)) && is_string($__internal_1b6e969e0ecdac30ebc2a8d05b4c77b17f2ca2c6b9c41b1d37f9c055f036a39e = "}}") && ('' === $__internal_1b6e969e0ecdac30ebc2a8d05b4c77b17f2ca2c6b9c41b1d37f9c055f036a39e || $__internal_1b6e969e0ecdac30ebc2a8d05b4c77b17f2ca2c6b9c41b1d37f9c055f036a39e === substr($__internal_2ec0e1913bd1c8d424edff7207f256bb65de17a9e55ca27420a9077ae1e32dbb, -strlen($__internal_1b6e969e0ecdac30ebc2a8d05b4c77b17f2ca2c6b9c41b1d37f9c055f036a39e))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_1c947f798e4dfc64c905ccee1d7252537278f7b65862b59149d0201476bbaa5e->leave($__internal_1c947f798e4dfc64c905ccee1d7252537278f7b65862b59149d0201476bbaa5e_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2bb11acc90687afe5fdf3503632378bb5466e6b0b340a8e02c9fb8530b32841b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb11acc90687afe5fdf3503632378bb5466e6b0b340a8e02c9fb8530b32841b->enter($__internal_2bb11acc90687afe5fdf3503632378bb5466e6b0b340a8e02c9fb8530b32841b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_2bb11acc90687afe5fdf3503632378bb5466e6b0b340a8e02c9fb8530b32841b->leave($__internal_2bb11acc90687afe5fdf3503632378bb5466e6b0b340a8e02c9fb8530b32841b_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d3f7e611cd51728c4abd4cd900b6de96d22001f3acb59404243b4861bfa299f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f7e611cd51728c4abd4cd900b6de96d22001f3acb59404243b4861bfa299f1->enter($__internal_d3f7e611cd51728c4abd4cd900b6de96d22001f3acb59404243b4861bfa299f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_d3f7e611cd51728c4abd4cd900b6de96d22001f3acb59404243b4861bfa299f1->leave($__internal_d3f7e611cd51728c4abd4cd900b6de96d22001f3acb59404243b4861bfa299f1_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5aec57d054f4491df718f420d1df123457b3c1ff36e917f9dc127b15681d87de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aec57d054f4491df718f420d1df123457b3c1ff36e917f9dc127b15681d87de->enter($__internal_5aec57d054f4491df718f420d1df123457b3c1ff36e917f9dc127b15681d87de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_5aec57d054f4491df718f420d1df123457b3c1ff36e917f9dc127b15681d87de->leave($__internal_5aec57d054f4491df718f420d1df123457b3c1ff36e917f9dc127b15681d87de_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_24b63d2bde7a7ee81486a4829d9f18b80919e31dc8a70dc68a209671e814eddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b63d2bde7a7ee81486a4829d9f18b80919e31dc8a70dc68a209671e814eddc->enter($__internal_24b63d2bde7a7ee81486a4829d9f18b80919e31dc8a70dc68a209671e814eddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_24b63d2bde7a7ee81486a4829d9f18b80919e31dc8a70dc68a209671e814eddc->leave($__internal_24b63d2bde7a7ee81486a4829d9f18b80919e31dc8a70dc68a209671e814eddc_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_55c81926c3de53d4fc8b6029dbe94fdbec4a6d87aff66de2c0999b19d6d3ac90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c81926c3de53d4fc8b6029dbe94fdbec4a6d87aff66de2c0999b19d6d3ac90->enter($__internal_55c81926c3de53d4fc8b6029dbe94fdbec4a6d87aff66de2c0999b19d6d3ac90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_55c81926c3de53d4fc8b6029dbe94fdbec4a6d87aff66de2c0999b19d6d3ac90->leave($__internal_55c81926c3de53d4fc8b6029dbe94fdbec4a6d87aff66de2c0999b19d6d3ac90_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5d0bce0888bec3d4844d65a24a9ad3cc344932d7834298af621f58155f4db108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0bce0888bec3d4844d65a24a9ad3cc344932d7834298af621f58155f4db108->enter($__internal_5d0bce0888bec3d4844d65a24a9ad3cc344932d7834298af621f58155f4db108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5d0bce0888bec3d4844d65a24a9ad3cc344932d7834298af621f58155f4db108->leave($__internal_5d0bce0888bec3d4844d65a24a9ad3cc344932d7834298af621f58155f4db108_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_dfa4c604526089b98c82ead7313b60d456bd0059aa5c72ebf32a4e16c2297aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa4c604526089b98c82ead7313b60d456bd0059aa5c72ebf32a4e16c2297aa6->enter($__internal_dfa4c604526089b98c82ead7313b60d456bd0059aa5c72ebf32a4e16c2297aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_dfa4c604526089b98c82ead7313b60d456bd0059aa5c72ebf32a4e16c2297aa6->leave($__internal_dfa4c604526089b98c82ead7313b60d456bd0059aa5c72ebf32a4e16c2297aa6_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_8a4e3fbac11ca24f40bbb438cdaeedf3e2a8df888eea1bdbfcc8647cd7a50032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4e3fbac11ca24f40bbb438cdaeedf3e2a8df888eea1bdbfcc8647cd7a50032->enter($__internal_8a4e3fbac11ca24f40bbb438cdaeedf3e2a8df888eea1bdbfcc8647cd7a50032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_8a4e3fbac11ca24f40bbb438cdaeedf3e2a8df888eea1bdbfcc8647cd7a50032->leave($__internal_8a4e3fbac11ca24f40bbb438cdaeedf3e2a8df888eea1bdbfcc8647cd7a50032_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4d74d8c0d6c2dac1b4a951ce6ada09510a819e4e05c02e5a2cdedbe72c50fc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d74d8c0d6c2dac1b4a951ce6ada09510a819e4e05c02e5a2cdedbe72c50fc86->enter($__internal_4d74d8c0d6c2dac1b4a951ce6ada09510a819e4e05c02e5a2cdedbe72c50fc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4d74d8c0d6c2dac1b4a951ce6ada09510a819e4e05c02e5a2cdedbe72c50fc86->leave($__internal_4d74d8c0d6c2dac1b4a951ce6ada09510a819e4e05c02e5a2cdedbe72c50fc86_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c6c4b5b9401d6cb34b6ea7ca5f0dea0164b44bab2b0d54116c15eb53bb880446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c4b5b9401d6cb34b6ea7ca5f0dea0164b44bab2b0d54116c15eb53bb880446->enter($__internal_c6c4b5b9401d6cb34b6ea7ca5f0dea0164b44bab2b0d54116c15eb53bb880446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c6c4b5b9401d6cb34b6ea7ca5f0dea0164b44bab2b0d54116c15eb53bb880446->leave($__internal_c6c4b5b9401d6cb34b6ea7ca5f0dea0164b44bab2b0d54116c15eb53bb880446_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b887c7bddd5336e2cdf4ac0a641d8c5a4c45b1b9895f8b216c7a528777cfa36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b887c7bddd5336e2cdf4ac0a641d8c5a4c45b1b9895f8b216c7a528777cfa36f->enter($__internal_b887c7bddd5336e2cdf4ac0a641d8c5a4c45b1b9895f8b216c7a528777cfa36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_b887c7bddd5336e2cdf4ac0a641d8c5a4c45b1b9895f8b216c7a528777cfa36f->leave($__internal_b887c7bddd5336e2cdf4ac0a641d8c5a4c45b1b9895f8b216c7a528777cfa36f_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c510ec1fe8284164968968aa7049b9e13106bdc7582effcb4dbe0574de89ebf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c510ec1fe8284164968968aa7049b9e13106bdc7582effcb4dbe0574de89ebf3->enter($__internal_c510ec1fe8284164968968aa7049b9e13106bdc7582effcb4dbe0574de89ebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c510ec1fe8284164968968aa7049b9e13106bdc7582effcb4dbe0574de89ebf3->leave($__internal_c510ec1fe8284164968968aa7049b9e13106bdc7582effcb4dbe0574de89ebf3_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_1d9bb5ecee62a837c4b53ec4f0f912d4044d2e7adb339d7d86e6500601a29af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9bb5ecee62a837c4b53ec4f0f912d4044d2e7adb339d7d86e6500601a29af3->enter($__internal_1d9bb5ecee62a837c4b53ec4f0f912d4044d2e7adb339d7d86e6500601a29af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1d9bb5ecee62a837c4b53ec4f0f912d4044d2e7adb339d7d86e6500601a29af3->leave($__internal_1d9bb5ecee62a837c4b53ec4f0f912d4044d2e7adb339d7d86e6500601a29af3_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_771e0961ba4abd1fbf98154d382e3e75ed7b99b4b176ae44d183117da6572c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771e0961ba4abd1fbf98154d382e3e75ed7b99b4b176ae44d183117da6572c1d->enter($__internal_771e0961ba4abd1fbf98154d382e3e75ed7b99b4b176ae44d183117da6572c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_771e0961ba4abd1fbf98154d382e3e75ed7b99b4b176ae44d183117da6572c1d->leave($__internal_771e0961ba4abd1fbf98154d382e3e75ed7b99b4b176ae44d183117da6572c1d_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_607a8830c0848cf7de2efb0a1b2e920f7f2282fa2a88d8e84e805bd14192be5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607a8830c0848cf7de2efb0a1b2e920f7f2282fa2a88d8e84e805bd14192be5a->enter($__internal_607a8830c0848cf7de2efb0a1b2e920f7f2282fa2a88d8e84e805bd14192be5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_607a8830c0848cf7de2efb0a1b2e920f7f2282fa2a88d8e84e805bd14192be5a->leave($__internal_607a8830c0848cf7de2efb0a1b2e920f7f2282fa2a88d8e84e805bd14192be5a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  640 => 187,  638 => 186,  632 => 185,  625 => 182,  623 => 181,  617 => 180,  610 => 177,  608 => 176,  602 => 175,  595 => 172,  593 => 171,  587 => 170,  580 => 167,  578 => 166,  576 => 165,  570 => 164,  563 => 159,  557 => 158,  550 => 155,  544 => 154,  537 => 151,  535 => 150,  529 => 148,  521 => 142,  515 => 139,  514 => 138,  513 => 137,  509 => 136,  505 => 135,  498 => 131,  497 => 130,  496 => 129,  492 => 128,  490 => 127,  484 => 126,  477 => 123,  475 => 122,  469 => 121,  461 => 117,  457 => 116,  452 => 112,  446 => 111,  440 => 110,  434 => 109,  428 => 108,  422 => 107,  416 => 106,  410 => 105,  405 => 101,  399 => 100,  393 => 99,  387 => 98,  381 => 97,  375 => 96,  369 => 95,  363 => 94,  358 => 91,  355 => 90,  353 => 89,  349 => 88,  347 => 87,  344 => 85,  342 => 84,  336 => 83,  327 => 78,  325 => 77,  315 => 76,  310 => 74,  308 => 73,  306 => 72,  303 => 70,  301 => 69,  295 => 68,  286 => 63,  284 => 62,  282 => 60,  281 => 59,  280 => 58,  279 => 57,  274 => 55,  272 => 54,  270 => 53,  267 => 51,  265 => 50,  259 => 49,  251 => 45,  249 => 44,  247 => 43,  245 => 42,  243 => 41,  239 => 40,  237 => 39,  234 => 37,  232 => 36,  226 => 35,  218 => 31,  216 => 30,  214 => 29,  208 => 28,  200 => 24,  196 => 22,  190 => 20,  188 => 19,  186 => 18,  180 => 16,  178 => 15,  173 => 14,  170 => 13,  167 => 12,  165 => 11,  159 => 10,  152 => 7,  150 => 6,  144 => 5,  137 => 185,  134 => 184,  132 => 180,  129 => 179,  127 => 175,  124 => 174,  122 => 170,  119 => 169,  117 => 164,  114 => 163,  111 => 161,  109 => 158,  106 => 157,  104 => 154,  101 => 153,  99 => 148,  96 => 147,  93 => 145,  91 => 126,  88 => 125,  86 => 121,  84 => 83,  82 => 68,  79 => 67,  77 => 49,  74 => 48,  72 => 35,  69 => 34,  67 => 28,  64 => 27,  62 => 10,  59 => 9,  57 => 5,  54 => 4,  51 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_base_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
