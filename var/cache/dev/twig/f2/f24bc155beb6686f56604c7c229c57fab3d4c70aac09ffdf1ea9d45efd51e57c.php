<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_1f6ac97df9867554c290cfd833d6a975672c345b380f02562250ee3c3649247d extends Twig_Template
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
        $__internal_61728d13bcff8405f422cff8f6e13f80d4a4646e550e043176547a813cbef0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61728d13bcff8405f422cff8f6e13f80d4a4646e550e043176547a813cbef0d2->enter($__internal_61728d13bcff8405f422cff8f6e13f80d4a4646e550e043176547a813cbef0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_43a8c17a32d4002f1d469c50169a934fd562d2e4671ebdc5d9b36ef23ae6941f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a8c17a32d4002f1d469c50169a934fd562d2e4671ebdc5d9b36ef23ae6941f->enter($__internal_43a8c17a32d4002f1d469c50169a934fd562d2e4671ebdc5d9b36ef23ae6941f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_61728d13bcff8405f422cff8f6e13f80d4a4646e550e043176547a813cbef0d2->leave($__internal_61728d13bcff8405f422cff8f6e13f80d4a4646e550e043176547a813cbef0d2_prof);

        
        $__internal_43a8c17a32d4002f1d469c50169a934fd562d2e4671ebdc5d9b36ef23ae6941f->leave($__internal_43a8c17a32d4002f1d469c50169a934fd562d2e4671ebdc5d9b36ef23ae6941f_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c7c1a74e12f153339f3179088d6ec33bc7452d34d01cb9a730c93e1322e319b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c1a74e12f153339f3179088d6ec33bc7452d34d01cb9a730c93e1322e319b1->enter($__internal_c7c1a74e12f153339f3179088d6ec33bc7452d34d01cb9a730c93e1322e319b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b38f3bbab3cec0b52a2389fc17d2f53d0cd25f439dd3b853f1158c7d2c8f9ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38f3bbab3cec0b52a2389fc17d2f53d0cd25f439dd3b853f1158c7d2c8f9ff4->enter($__internal_b38f3bbab3cec0b52a2389fc17d2f53d0cd25f439dd3b853f1158c7d2c8f9ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b38f3bbab3cec0b52a2389fc17d2f53d0cd25f439dd3b853f1158c7d2c8f9ff4->leave($__internal_b38f3bbab3cec0b52a2389fc17d2f53d0cd25f439dd3b853f1158c7d2c8f9ff4_prof);

        
        $__internal_c7c1a74e12f153339f3179088d6ec33bc7452d34d01cb9a730c93e1322e319b1->leave($__internal_c7c1a74e12f153339f3179088d6ec33bc7452d34d01cb9a730c93e1322e319b1_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2fc0de9619bdb4b7c1afa55ecc98b28719ef8bd95d416d6b7e8ea2f2c0677330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc0de9619bdb4b7c1afa55ecc98b28719ef8bd95d416d6b7e8ea2f2c0677330->enter($__internal_2fc0de9619bdb4b7c1afa55ecc98b28719ef8bd95d416d6b7e8ea2f2c0677330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_d11da944a8756b89bb0fffc39b7373f4f5bfeb87f8cea31f17e135d3abdc7d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11da944a8756b89bb0fffc39b7373f4f5bfeb87f8cea31f17e135d3abdc7d8d->enter($__internal_d11da944a8756b89bb0fffc39b7373f4f5bfeb87f8cea31f17e135d3abdc7d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_e6fe7db0dc5fe628dafc91e30f9c698900161983267e020ff9b33810f5d2061a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_8e4dc4c198e52cabf9ef139906cd53724e78d460d0d4577546e13b55d0695ce5 = "{{") && ('' === $__internal_8e4dc4c198e52cabf9ef139906cd53724e78d460d0d4577546e13b55d0695ce5 || 0 === strpos($__internal_e6fe7db0dc5fe628dafc91e30f9c698900161983267e020ff9b33810f5d2061a, $__internal_8e4dc4c198e52cabf9ef139906cd53724e78d460d0d4577546e13b55d0695ce5)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_74f3499a7625e1ba9494a413728ae179f31a50fc97380e6dd63b2d6622630d3a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_99de6e812937a15c784bfbe372acf84f7a34cb3c6c3edf096cbd84977e31de5e = "}}") && ('' === $__internal_99de6e812937a15c784bfbe372acf84f7a34cb3c6c3edf096cbd84977e31de5e || $__internal_99de6e812937a15c784bfbe372acf84f7a34cb3c6c3edf096cbd84977e31de5e === substr($__internal_74f3499a7625e1ba9494a413728ae179f31a50fc97380e6dd63b2d6622630d3a, -strlen($__internal_99de6e812937a15c784bfbe372acf84f7a34cb3c6c3edf096cbd84977e31de5e))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
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
        
        $__internal_d11da944a8756b89bb0fffc39b7373f4f5bfeb87f8cea31f17e135d3abdc7d8d->leave($__internal_d11da944a8756b89bb0fffc39b7373f4f5bfeb87f8cea31f17e135d3abdc7d8d_prof);

        
        $__internal_2fc0de9619bdb4b7c1afa55ecc98b28719ef8bd95d416d6b7e8ea2f2c0677330->leave($__internal_2fc0de9619bdb4b7c1afa55ecc98b28719ef8bd95d416d6b7e8ea2f2c0677330_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2bb8b72498a67e7c74483304fcc6caff372469cdf83d1166cf86e9e170213806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb8b72498a67e7c74483304fcc6caff372469cdf83d1166cf86e9e170213806->enter($__internal_2bb8b72498a67e7c74483304fcc6caff372469cdf83d1166cf86e9e170213806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2dcbe7f810e5e67bf56470a79b17725f4f0f8178854563bd4d7e23f1ce403975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcbe7f810e5e67bf56470a79b17725f4f0f8178854563bd4d7e23f1ce403975->enter($__internal_2dcbe7f810e5e67bf56470a79b17725f4f0f8178854563bd4d7e23f1ce403975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_2dcbe7f810e5e67bf56470a79b17725f4f0f8178854563bd4d7e23f1ce403975->leave($__internal_2dcbe7f810e5e67bf56470a79b17725f4f0f8178854563bd4d7e23f1ce403975_prof);

        
        $__internal_2bb8b72498a67e7c74483304fcc6caff372469cdf83d1166cf86e9e170213806->leave($__internal_2bb8b72498a67e7c74483304fcc6caff372469cdf83d1166cf86e9e170213806_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b575bade7ec421872d14eeed2b59df2d085811ffe96254821e2a3e5a13f0a80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b575bade7ec421872d14eeed2b59df2d085811ffe96254821e2a3e5a13f0a80a->enter($__internal_b575bade7ec421872d14eeed2b59df2d085811ffe96254821e2a3e5a13f0a80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_935fa8e82e63c68f3093e0459c75ca499e0c184f470b92104951401c8bb68e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935fa8e82e63c68f3093e0459c75ca499e0c184f470b92104951401c8bb68e36->enter($__internal_935fa8e82e63c68f3093e0459c75ca499e0c184f470b92104951401c8bb68e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_935fa8e82e63c68f3093e0459c75ca499e0c184f470b92104951401c8bb68e36->leave($__internal_935fa8e82e63c68f3093e0459c75ca499e0c184f470b92104951401c8bb68e36_prof);

        
        $__internal_b575bade7ec421872d14eeed2b59df2d085811ffe96254821e2a3e5a13f0a80a->leave($__internal_b575bade7ec421872d14eeed2b59df2d085811ffe96254821e2a3e5a13f0a80a_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1cf4bf861ef694709a3171734c98c402ddbc295f7a56ef4285d3806b5d83b7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf4bf861ef694709a3171734c98c402ddbc295f7a56ef4285d3806b5d83b7da->enter($__internal_1cf4bf861ef694709a3171734c98c402ddbc295f7a56ef4285d3806b5d83b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_646500fd84aef61930cf0f3cc26bda8e0d1f4391f85cf8369f1c1b50b6cf2b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646500fd84aef61930cf0f3cc26bda8e0d1f4391f85cf8369f1c1b50b6cf2b63->enter($__internal_646500fd84aef61930cf0f3cc26bda8e0d1f4391f85cf8369f1c1b50b6cf2b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_646500fd84aef61930cf0f3cc26bda8e0d1f4391f85cf8369f1c1b50b6cf2b63->leave($__internal_646500fd84aef61930cf0f3cc26bda8e0d1f4391f85cf8369f1c1b50b6cf2b63_prof);

        
        $__internal_1cf4bf861ef694709a3171734c98c402ddbc295f7a56ef4285d3806b5d83b7da->leave($__internal_1cf4bf861ef694709a3171734c98c402ddbc295f7a56ef4285d3806b5d83b7da_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f0b07605dd00303f10cc6042fe8a6c42065baa2fec5f506759edd974607f163a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b07605dd00303f10cc6042fe8a6c42065baa2fec5f506759edd974607f163a->enter($__internal_f0b07605dd00303f10cc6042fe8a6c42065baa2fec5f506759edd974607f163a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_61a9a3f0ecd77d5950e24a14158a8a441ecab374ca299094a3fbc9dc40342e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a9a3f0ecd77d5950e24a14158a8a441ecab374ca299094a3fbc9dc40342e84->enter($__internal_61a9a3f0ecd77d5950e24a14158a8a441ecab374ca299094a3fbc9dc40342e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_61a9a3f0ecd77d5950e24a14158a8a441ecab374ca299094a3fbc9dc40342e84->leave($__internal_61a9a3f0ecd77d5950e24a14158a8a441ecab374ca299094a3fbc9dc40342e84_prof);

        
        $__internal_f0b07605dd00303f10cc6042fe8a6c42065baa2fec5f506759edd974607f163a->leave($__internal_f0b07605dd00303f10cc6042fe8a6c42065baa2fec5f506759edd974607f163a_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9216ca7dde5fae82e66eb5d8537ad81bbbd816dc03e2bb81d3da0ef47366e2bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9216ca7dde5fae82e66eb5d8537ad81bbbd816dc03e2bb81d3da0ef47366e2bb->enter($__internal_9216ca7dde5fae82e66eb5d8537ad81bbbd816dc03e2bb81d3da0ef47366e2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_17268650377f837f7f7325f9152db00879de3f218d09301fb32eda8551b801bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17268650377f837f7f7325f9152db00879de3f218d09301fb32eda8551b801bf->enter($__internal_17268650377f837f7f7325f9152db00879de3f218d09301fb32eda8551b801bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_17268650377f837f7f7325f9152db00879de3f218d09301fb32eda8551b801bf->leave($__internal_17268650377f837f7f7325f9152db00879de3f218d09301fb32eda8551b801bf_prof);

        
        $__internal_9216ca7dde5fae82e66eb5d8537ad81bbbd816dc03e2bb81d3da0ef47366e2bb->leave($__internal_9216ca7dde5fae82e66eb5d8537ad81bbbd816dc03e2bb81d3da0ef47366e2bb_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8d06ed38e3f52147c907ff2e0e8ed23020f6e408724e5eb91d4dbb1211235124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d06ed38e3f52147c907ff2e0e8ed23020f6e408724e5eb91d4dbb1211235124->enter($__internal_8d06ed38e3f52147c907ff2e0e8ed23020f6e408724e5eb91d4dbb1211235124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b8efc862a1bdb2000bc534cdb9a61d70a3a5de3108b74ed7c93fb8376a75dd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8efc862a1bdb2000bc534cdb9a61d70a3a5de3108b74ed7c93fb8376a75dd59->enter($__internal_b8efc862a1bdb2000bc534cdb9a61d70a3a5de3108b74ed7c93fb8376a75dd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b8efc862a1bdb2000bc534cdb9a61d70a3a5de3108b74ed7c93fb8376a75dd59->leave($__internal_b8efc862a1bdb2000bc534cdb9a61d70a3a5de3108b74ed7c93fb8376a75dd59_prof);

        
        $__internal_8d06ed38e3f52147c907ff2e0e8ed23020f6e408724e5eb91d4dbb1211235124->leave($__internal_8d06ed38e3f52147c907ff2e0e8ed23020f6e408724e5eb91d4dbb1211235124_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_00493068bff478a8935713d6d63f80c64e7615bea14f59f2101e0f1741c303d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00493068bff478a8935713d6d63f80c64e7615bea14f59f2101e0f1741c303d0->enter($__internal_00493068bff478a8935713d6d63f80c64e7615bea14f59f2101e0f1741c303d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_66724d1c58f82dc213afa56c06b6b1e8a4c040815b0516cd2dae4eecf6498d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66724d1c58f82dc213afa56c06b6b1e8a4c040815b0516cd2dae4eecf6498d5c->enter($__internal_66724d1c58f82dc213afa56c06b6b1e8a4c040815b0516cd2dae4eecf6498d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
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
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_66724d1c58f82dc213afa56c06b6b1e8a4c040815b0516cd2dae4eecf6498d5c->leave($__internal_66724d1c58f82dc213afa56c06b6b1e8a4c040815b0516cd2dae4eecf6498d5c_prof);

        
        $__internal_00493068bff478a8935713d6d63f80c64e7615bea14f59f2101e0f1741c303d0->leave($__internal_00493068bff478a8935713d6d63f80c64e7615bea14f59f2101e0f1741c303d0_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_cbf120860119e68208c1c86649dcc01969d356535fa302cf464ddadbd22dd274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf120860119e68208c1c86649dcc01969d356535fa302cf464ddadbd22dd274->enter($__internal_cbf120860119e68208c1c86649dcc01969d356535fa302cf464ddadbd22dd274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f6b36d0d928ea38856d6262fdceeb561024717ef71b813a554045cdf1a47322a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b36d0d928ea38856d6262fdceeb561024717ef71b813a554045cdf1a47322a->enter($__internal_f6b36d0d928ea38856d6262fdceeb561024717ef71b813a554045cdf1a47322a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f6b36d0d928ea38856d6262fdceeb561024717ef71b813a554045cdf1a47322a->leave($__internal_f6b36d0d928ea38856d6262fdceeb561024717ef71b813a554045cdf1a47322a_prof);

        
        $__internal_cbf120860119e68208c1c86649dcc01969d356535fa302cf464ddadbd22dd274->leave($__internal_cbf120860119e68208c1c86649dcc01969d356535fa302cf464ddadbd22dd274_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0230d048a76456d1b5793a0467393808f18d54ea60331eb4db3dfa2c4b35f5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0230d048a76456d1b5793a0467393808f18d54ea60331eb4db3dfa2c4b35f5bd->enter($__internal_0230d048a76456d1b5793a0467393808f18d54ea60331eb4db3dfa2c4b35f5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_56ad57b352cce8e9cc17e43c3e28172a46a55e1e9d631716e2db5acdb25a92be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ad57b352cce8e9cc17e43c3e28172a46a55e1e9d631716e2db5acdb25a92be->enter($__internal_56ad57b352cce8e9cc17e43c3e28172a46a55e1e9d631716e2db5acdb25a92be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_56ad57b352cce8e9cc17e43c3e28172a46a55e1e9d631716e2db5acdb25a92be->leave($__internal_56ad57b352cce8e9cc17e43c3e28172a46a55e1e9d631716e2db5acdb25a92be_prof);

        
        $__internal_0230d048a76456d1b5793a0467393808f18d54ea60331eb4db3dfa2c4b35f5bd->leave($__internal_0230d048a76456d1b5793a0467393808f18d54ea60331eb4db3dfa2c4b35f5bd_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_11d8ecab741d75e06f6c84b0c28c2541b33bfa17d9fac81f862f95f551e0135e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d8ecab741d75e06f6c84b0c28c2541b33bfa17d9fac81f862f95f551e0135e->enter($__internal_11d8ecab741d75e06f6c84b0c28c2541b33bfa17d9fac81f862f95f551e0135e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_4426dce5368e90dd65eb89ee0deea57f08016f4a296d7ef21c63a9109cf70be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4426dce5368e90dd65eb89ee0deea57f08016f4a296d7ef21c63a9109cf70be0->enter($__internal_4426dce5368e90dd65eb89ee0deea57f08016f4a296d7ef21c63a9109cf70be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4426dce5368e90dd65eb89ee0deea57f08016f4a296d7ef21c63a9109cf70be0->leave($__internal_4426dce5368e90dd65eb89ee0deea57f08016f4a296d7ef21c63a9109cf70be0_prof);

        
        $__internal_11d8ecab741d75e06f6c84b0c28c2541b33bfa17d9fac81f862f95f551e0135e->leave($__internal_11d8ecab741d75e06f6c84b0c28c2541b33bfa17d9fac81f862f95f551e0135e_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a02b2362baba652c56ca5cf6b17946362f5dbafc9347e1d1462b30c9e10b952d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02b2362baba652c56ca5cf6b17946362f5dbafc9347e1d1462b30c9e10b952d->enter($__internal_a02b2362baba652c56ca5cf6b17946362f5dbafc9347e1d1462b30c9e10b952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a3f3a8d6b02355f34b70df37b335937406e0b84e64982612cbd50f613e9ae7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f3a8d6b02355f34b70df37b335937406e0b84e64982612cbd50f613e9ae7da->enter($__internal_a3f3a8d6b02355f34b70df37b335937406e0b84e64982612cbd50f613e9ae7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_a3f3a8d6b02355f34b70df37b335937406e0b84e64982612cbd50f613e9ae7da->leave($__internal_a3f3a8d6b02355f34b70df37b335937406e0b84e64982612cbd50f613e9ae7da_prof);

        
        $__internal_a02b2362baba652c56ca5cf6b17946362f5dbafc9347e1d1462b30c9e10b952d->leave($__internal_a02b2362baba652c56ca5cf6b17946362f5dbafc9347e1d1462b30c9e10b952d_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b101f3e088278826d2b39e1de5731ce212750c52772e3efd8214d04477090c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b101f3e088278826d2b39e1de5731ce212750c52772e3efd8214d04477090c4f->enter($__internal_b101f3e088278826d2b39e1de5731ce212750c52772e3efd8214d04477090c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ae41c0fdd5070850f5461eb8a6f58012f642298d86c10af2ce7be471146aa01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae41c0fdd5070850f5461eb8a6f58012f642298d86c10af2ce7be471146aa01e->enter($__internal_ae41c0fdd5070850f5461eb8a6f58012f642298d86c10af2ce7be471146aa01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae41c0fdd5070850f5461eb8a6f58012f642298d86c10af2ce7be471146aa01e->leave($__internal_ae41c0fdd5070850f5461eb8a6f58012f642298d86c10af2ce7be471146aa01e_prof);

        
        $__internal_b101f3e088278826d2b39e1de5731ce212750c52772e3efd8214d04477090c4f->leave($__internal_b101f3e088278826d2b39e1de5731ce212750c52772e3efd8214d04477090c4f_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_87aa2dfcada79df85549f275b384ea525ab74eb68ade04ac21e159c4951d7f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87aa2dfcada79df85549f275b384ea525ab74eb68ade04ac21e159c4951d7f70->enter($__internal_87aa2dfcada79df85549f275b384ea525ab74eb68ade04ac21e159c4951d7f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a50aeb17f67931160306cc82fa7a60a0cad0ad0fad27458ee7017c8129d0f002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50aeb17f67931160306cc82fa7a60a0cad0ad0fad27458ee7017c8129d0f002->enter($__internal_a50aeb17f67931160306cc82fa7a60a0cad0ad0fad27458ee7017c8129d0f002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a50aeb17f67931160306cc82fa7a60a0cad0ad0fad27458ee7017c8129d0f002->leave($__internal_a50aeb17f67931160306cc82fa7a60a0cad0ad0fad27458ee7017c8129d0f002_prof);

        
        $__internal_87aa2dfcada79df85549f275b384ea525ab74eb68ade04ac21e159c4951d7f70->leave($__internal_87aa2dfcada79df85549f275b384ea525ab74eb68ade04ac21e159c4951d7f70_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cec8ec694e5e46f7e5ef2b24de615cdd1ab546e5a2a6c54dbe93354962442396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec8ec694e5e46f7e5ef2b24de615cdd1ab546e5a2a6c54dbe93354962442396->enter($__internal_cec8ec694e5e46f7e5ef2b24de615cdd1ab546e5a2a6c54dbe93354962442396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a05248a38be04e7ef4fe92515ff9060267f573a7a9904561569b657b13918a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05248a38be04e7ef4fe92515ff9060267f573a7a9904561569b657b13918a08->enter($__internal_a05248a38be04e7ef4fe92515ff9060267f573a7a9904561569b657b13918a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a05248a38be04e7ef4fe92515ff9060267f573a7a9904561569b657b13918a08->leave($__internal_a05248a38be04e7ef4fe92515ff9060267f573a7a9904561569b657b13918a08_prof);

        
        $__internal_cec8ec694e5e46f7e5ef2b24de615cdd1ab546e5a2a6c54dbe93354962442396->leave($__internal_cec8ec694e5e46f7e5ef2b24de615cdd1ab546e5a2a6c54dbe93354962442396_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e264914ea24e816acb3e1e1c1159545e4dd5792e2e1f6d8ece540e03b943f11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e264914ea24e816acb3e1e1c1159545e4dd5792e2e1f6d8ece540e03b943f11e->enter($__internal_e264914ea24e816acb3e1e1c1159545e4dd5792e2e1f6d8ece540e03b943f11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_dbd8b4f9b1712b92df59f6aa8c5569b0612317d4e318b7a0c9e29de53f2915cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd8b4f9b1712b92df59f6aa8c5569b0612317d4e318b7a0c9e29de53f2915cd->enter($__internal_dbd8b4f9b1712b92df59f6aa8c5569b0612317d4e318b7a0c9e29de53f2915cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dbd8b4f9b1712b92df59f6aa8c5569b0612317d4e318b7a0c9e29de53f2915cd->leave($__internal_dbd8b4f9b1712b92df59f6aa8c5569b0612317d4e318b7a0c9e29de53f2915cd_prof);

        
        $__internal_e264914ea24e816acb3e1e1c1159545e4dd5792e2e1f6d8ece540e03b943f11e->leave($__internal_e264914ea24e816acb3e1e1c1159545e4dd5792e2e1f6d8ece540e03b943f11e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
