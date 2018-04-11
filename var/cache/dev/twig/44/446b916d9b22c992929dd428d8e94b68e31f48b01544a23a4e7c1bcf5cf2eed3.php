<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_2de03fe0e92831bde62a393996324c6652c1c19c53b991412e61b2c00ad3cf29 extends Twig_Template
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
        $__internal_0bd521e9c05954d374cad15b62755fe3ca01bf31f3df0d2cc810df9f97dac1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd521e9c05954d374cad15b62755fe3ca01bf31f3df0d2cc810df9f97dac1a8->enter($__internal_0bd521e9c05954d374cad15b62755fe3ca01bf31f3df0d2cc810df9f97dac1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_6672d5fc2d4882c133b3110bb6ae22878f09dd3b9e9914b60b07696245df232d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6672d5fc2d4882c133b3110bb6ae22878f09dd3b9e9914b60b07696245df232d->enter($__internal_6672d5fc2d4882c133b3110bb6ae22878f09dd3b9e9914b60b07696245df232d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_0bd521e9c05954d374cad15b62755fe3ca01bf31f3df0d2cc810df9f97dac1a8->leave($__internal_0bd521e9c05954d374cad15b62755fe3ca01bf31f3df0d2cc810df9f97dac1a8_prof);

        
        $__internal_6672d5fc2d4882c133b3110bb6ae22878f09dd3b9e9914b60b07696245df232d->leave($__internal_6672d5fc2d4882c133b3110bb6ae22878f09dd3b9e9914b60b07696245df232d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a7644a2e3be2abfb2ddc155cdf8ce503385b7fed7ea7758bc5d9d4d1764a31e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7644a2e3be2abfb2ddc155cdf8ce503385b7fed7ea7758bc5d9d4d1764a31e0->enter($__internal_a7644a2e3be2abfb2ddc155cdf8ce503385b7fed7ea7758bc5d9d4d1764a31e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e1f8d0c2bc336694c95dab0fa9df69fcd039fbb4d3e973f7a59937f0bb84fc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f8d0c2bc336694c95dab0fa9df69fcd039fbb4d3e973f7a59937f0bb84fc64->enter($__internal_e1f8d0c2bc336694c95dab0fa9df69fcd039fbb4d3e973f7a59937f0bb84fc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e1f8d0c2bc336694c95dab0fa9df69fcd039fbb4d3e973f7a59937f0bb84fc64->leave($__internal_e1f8d0c2bc336694c95dab0fa9df69fcd039fbb4d3e973f7a59937f0bb84fc64_prof);

        
        $__internal_a7644a2e3be2abfb2ddc155cdf8ce503385b7fed7ea7758bc5d9d4d1764a31e0->leave($__internal_a7644a2e3be2abfb2ddc155cdf8ce503385b7fed7ea7758bc5d9d4d1764a31e0_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bad12937bb40e20dd8e563e1ea5ba5e9b3728a47f134d26c2d1f132741297f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad12937bb40e20dd8e563e1ea5ba5e9b3728a47f134d26c2d1f132741297f6c->enter($__internal_bad12937bb40e20dd8e563e1ea5ba5e9b3728a47f134d26c2d1f132741297f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_71ea385bf18b0936e468a5a9e479a22066d55eaede200804f65ff25c12feab09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ea385bf18b0936e468a5a9e479a22066d55eaede200804f65ff25c12feab09->enter($__internal_71ea385bf18b0936e468a5a9e479a22066d55eaede200804f65ff25c12feab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_71ea385bf18b0936e468a5a9e479a22066d55eaede200804f65ff25c12feab09->leave($__internal_71ea385bf18b0936e468a5a9e479a22066d55eaede200804f65ff25c12feab09_prof);

        
        $__internal_bad12937bb40e20dd8e563e1ea5ba5e9b3728a47f134d26c2d1f132741297f6c->leave($__internal_bad12937bb40e20dd8e563e1ea5ba5e9b3728a47f134d26c2d1f132741297f6c_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a679d32f1fc401c6a2cfb44cf59872906764bf9f68b5f7853c68eae753ac3526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a679d32f1fc401c6a2cfb44cf59872906764bf9f68b5f7853c68eae753ac3526->enter($__internal_a679d32f1fc401c6a2cfb44cf59872906764bf9f68b5f7853c68eae753ac3526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1988ff6c16ef5be4742d0e9b7f0ebbf8846e27015f1305345298d1648f8b07ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1988ff6c16ef5be4742d0e9b7f0ebbf8846e27015f1305345298d1648f8b07ea->enter($__internal_1988ff6c16ef5be4742d0e9b7f0ebbf8846e27015f1305345298d1648f8b07ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_1988ff6c16ef5be4742d0e9b7f0ebbf8846e27015f1305345298d1648f8b07ea->leave($__internal_1988ff6c16ef5be4742d0e9b7f0ebbf8846e27015f1305345298d1648f8b07ea_prof);

        
        $__internal_a679d32f1fc401c6a2cfb44cf59872906764bf9f68b5f7853c68eae753ac3526->leave($__internal_a679d32f1fc401c6a2cfb44cf59872906764bf9f68b5f7853c68eae753ac3526_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_517eb283ca9225b4d42adcb0c57356b6e2e766178095554885dabe461af65aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517eb283ca9225b4d42adcb0c57356b6e2e766178095554885dabe461af65aa8->enter($__internal_517eb283ca9225b4d42adcb0c57356b6e2e766178095554885dabe461af65aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6fa9ff002842d64b9df3d4ebcc14e29671c23ebdf6a7b63481aa14c72197e7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa9ff002842d64b9df3d4ebcc14e29671c23ebdf6a7b63481aa14c72197e7b5->enter($__internal_6fa9ff002842d64b9df3d4ebcc14e29671c23ebdf6a7b63481aa14c72197e7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_6fa9ff002842d64b9df3d4ebcc14e29671c23ebdf6a7b63481aa14c72197e7b5->leave($__internal_6fa9ff002842d64b9df3d4ebcc14e29671c23ebdf6a7b63481aa14c72197e7b5_prof);

        
        $__internal_517eb283ca9225b4d42adcb0c57356b6e2e766178095554885dabe461af65aa8->leave($__internal_517eb283ca9225b4d42adcb0c57356b6e2e766178095554885dabe461af65aa8_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0a907d2632671b3483e7f257f2693ca03d376f369493ea79045ae95850641c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a907d2632671b3483e7f257f2693ca03d376f369493ea79045ae95850641c70->enter($__internal_0a907d2632671b3483e7f257f2693ca03d376f369493ea79045ae95850641c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0005ce09f3315a744b9b3dd4d0d81a799a60e7d47e88714d19cb6abbad386f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0005ce09f3315a744b9b3dd4d0d81a799a60e7d47e88714d19cb6abbad386f85->enter($__internal_0005ce09f3315a744b9b3dd4d0d81a799a60e7d47e88714d19cb6abbad386f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0005ce09f3315a744b9b3dd4d0d81a799a60e7d47e88714d19cb6abbad386f85->leave($__internal_0005ce09f3315a744b9b3dd4d0d81a799a60e7d47e88714d19cb6abbad386f85_prof);

        
        $__internal_0a907d2632671b3483e7f257f2693ca03d376f369493ea79045ae95850641c70->leave($__internal_0a907d2632671b3483e7f257f2693ca03d376f369493ea79045ae95850641c70_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3ef38415c9d809ab47a8851613924a588d7962e9e15b961c8f4bd208065010b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef38415c9d809ab47a8851613924a588d7962e9e15b961c8f4bd208065010b8->enter($__internal_3ef38415c9d809ab47a8851613924a588d7962e9e15b961c8f4bd208065010b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_49b77dd6bfc738c4b2789c16086c9b966c146edbc5e66097898254ef93e0bd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b77dd6bfc738c4b2789c16086c9b966c146edbc5e66097898254ef93e0bd61->enter($__internal_49b77dd6bfc738c4b2789c16086c9b966c146edbc5e66097898254ef93e0bd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_49b77dd6bfc738c4b2789c16086c9b966c146edbc5e66097898254ef93e0bd61->leave($__internal_49b77dd6bfc738c4b2789c16086c9b966c146edbc5e66097898254ef93e0bd61_prof);

        
        $__internal_3ef38415c9d809ab47a8851613924a588d7962e9e15b961c8f4bd208065010b8->leave($__internal_3ef38415c9d809ab47a8851613924a588d7962e9e15b961c8f4bd208065010b8_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_800c92d84d89b362ff576d2c87d12c5812dc898393126dbd8b712d82a2589f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800c92d84d89b362ff576d2c87d12c5812dc898393126dbd8b712d82a2589f42->enter($__internal_800c92d84d89b362ff576d2c87d12c5812dc898393126dbd8b712d82a2589f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d2901c1cd20041efe3f3236f057e8d58bbcc23525ec6732f1a159d9ae078a17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2901c1cd20041efe3f3236f057e8d58bbcc23525ec6732f1a159d9ae078a17e->enter($__internal_d2901c1cd20041efe3f3236f057e8d58bbcc23525ec6732f1a159d9ae078a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d2901c1cd20041efe3f3236f057e8d58bbcc23525ec6732f1a159d9ae078a17e->leave($__internal_d2901c1cd20041efe3f3236f057e8d58bbcc23525ec6732f1a159d9ae078a17e_prof);

        
        $__internal_800c92d84d89b362ff576d2c87d12c5812dc898393126dbd8b712d82a2589f42->leave($__internal_800c92d84d89b362ff576d2c87d12c5812dc898393126dbd8b712d82a2589f42_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_28af4327f49e870c5d85d73bac6520ff5e18a14290a073e63a51b270b56a16da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28af4327f49e870c5d85d73bac6520ff5e18a14290a073e63a51b270b56a16da->enter($__internal_28af4327f49e870c5d85d73bac6520ff5e18a14290a073e63a51b270b56a16da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_03deda7047337dde560e1dd825cd9f93cecbebf84f878fb673f11dfafe99848b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03deda7047337dde560e1dd825cd9f93cecbebf84f878fb673f11dfafe99848b->enter($__internal_03deda7047337dde560e1dd825cd9f93cecbebf84f878fb673f11dfafe99848b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_03deda7047337dde560e1dd825cd9f93cecbebf84f878fb673f11dfafe99848b->leave($__internal_03deda7047337dde560e1dd825cd9f93cecbebf84f878fb673f11dfafe99848b_prof);

        
        $__internal_28af4327f49e870c5d85d73bac6520ff5e18a14290a073e63a51b270b56a16da->leave($__internal_28af4327f49e870c5d85d73bac6520ff5e18a14290a073e63a51b270b56a16da_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_fdb6e14c747657f6f1b8d26ab215c709b6590d8274cbaaef08b7a23290987300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb6e14c747657f6f1b8d26ab215c709b6590d8274cbaaef08b7a23290987300->enter($__internal_fdb6e14c747657f6f1b8d26ab215c709b6590d8274cbaaef08b7a23290987300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a407210c9b309863d9de2505ffab682778a5b98c929502e717c3d50064c72dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a407210c9b309863d9de2505ffab682778a5b98c929502e717c3d50064c72dde->enter($__internal_a407210c9b309863d9de2505ffab682778a5b98c929502e717c3d50064c72dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_a407210c9b309863d9de2505ffab682778a5b98c929502e717c3d50064c72dde->leave($__internal_a407210c9b309863d9de2505ffab682778a5b98c929502e717c3d50064c72dde_prof);

        
        $__internal_fdb6e14c747657f6f1b8d26ab215c709b6590d8274cbaaef08b7a23290987300->leave($__internal_fdb6e14c747657f6f1b8d26ab215c709b6590d8274cbaaef08b7a23290987300_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5e0eb1345e81d5b469ddd062ff544e40cb2c0b7f16990d995aa94945f8c797b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0eb1345e81d5b469ddd062ff544e40cb2c0b7f16990d995aa94945f8c797b7->enter($__internal_5e0eb1345e81d5b469ddd062ff544e40cb2c0b7f16990d995aa94945f8c797b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ef289cc61bc7bbcccdb59395f1dbbdf5c93e61e4738093bf26d398afd927b632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef289cc61bc7bbcccdb59395f1dbbdf5c93e61e4738093bf26d398afd927b632->enter($__internal_ef289cc61bc7bbcccdb59395f1dbbdf5c93e61e4738093bf26d398afd927b632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_ef289cc61bc7bbcccdb59395f1dbbdf5c93e61e4738093bf26d398afd927b632->leave($__internal_ef289cc61bc7bbcccdb59395f1dbbdf5c93e61e4738093bf26d398afd927b632_prof);

        
        $__internal_5e0eb1345e81d5b469ddd062ff544e40cb2c0b7f16990d995aa94945f8c797b7->leave($__internal_5e0eb1345e81d5b469ddd062ff544e40cb2c0b7f16990d995aa94945f8c797b7_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_55f40d162a5f0764fbc74f32427d9d8c252cec63d1dcdf453178e1565c659fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f40d162a5f0764fbc74f32427d9d8c252cec63d1dcdf453178e1565c659fb7->enter($__internal_55f40d162a5f0764fbc74f32427d9d8c252cec63d1dcdf453178e1565c659fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6e23294e6dd60009875b03072a32f42a5b06621753ae2acb34da3d26d7d8b83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e23294e6dd60009875b03072a32f42a5b06621753ae2acb34da3d26d7d8b83f->enter($__internal_6e23294e6dd60009875b03072a32f42a5b06621753ae2acb34da3d26d7d8b83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_6e23294e6dd60009875b03072a32f42a5b06621753ae2acb34da3d26d7d8b83f->leave($__internal_6e23294e6dd60009875b03072a32f42a5b06621753ae2acb34da3d26d7d8b83f_prof);

        
        $__internal_55f40d162a5f0764fbc74f32427d9d8c252cec63d1dcdf453178e1565c659fb7->leave($__internal_55f40d162a5f0764fbc74f32427d9d8c252cec63d1dcdf453178e1565c659fb7_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_806026336a0ed83be1858280dc3a212d66a98f9eccdab772b2c659f85c67260b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806026336a0ed83be1858280dc3a212d66a98f9eccdab772b2c659f85c67260b->enter($__internal_806026336a0ed83be1858280dc3a212d66a98f9eccdab772b2c659f85c67260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_63cfa07aebc440251f6641b256421fcabeba1adcc04abcb290b3edb6638f8715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cfa07aebc440251f6641b256421fcabeba1adcc04abcb290b3edb6638f8715->enter($__internal_63cfa07aebc440251f6641b256421fcabeba1adcc04abcb290b3edb6638f8715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_63cfa07aebc440251f6641b256421fcabeba1adcc04abcb290b3edb6638f8715->leave($__internal_63cfa07aebc440251f6641b256421fcabeba1adcc04abcb290b3edb6638f8715_prof);

        
        $__internal_806026336a0ed83be1858280dc3a212d66a98f9eccdab772b2c659f85c67260b->leave($__internal_806026336a0ed83be1858280dc3a212d66a98f9eccdab772b2c659f85c67260b_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_daf1d06b8cb6c3a11601d7751d0771c4f20856feba7071b9bba395698f5c5a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf1d06b8cb6c3a11601d7751d0771c4f20856feba7071b9bba395698f5c5a14->enter($__internal_daf1d06b8cb6c3a11601d7751d0771c4f20856feba7071b9bba395698f5c5a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2d9ba860a6c8b6b5794f827f5d533c7abcb6d60760fd032d1c61dda805a96236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9ba860a6c8b6b5794f827f5d533c7abcb6d60760fd032d1c61dda805a96236->enter($__internal_2d9ba860a6c8b6b5794f827f5d533c7abcb6d60760fd032d1c61dda805a96236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2d9ba860a6c8b6b5794f827f5d533c7abcb6d60760fd032d1c61dda805a96236->leave($__internal_2d9ba860a6c8b6b5794f827f5d533c7abcb6d60760fd032d1c61dda805a96236_prof);

        
        $__internal_daf1d06b8cb6c3a11601d7751d0771c4f20856feba7071b9bba395698f5c5a14->leave($__internal_daf1d06b8cb6c3a11601d7751d0771c4f20856feba7071b9bba395698f5c5a14_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_98cafff2f9d1015177b2940a25b70701e44a887d4651341e36cdbe91bb64a475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cafff2f9d1015177b2940a25b70701e44a887d4651341e36cdbe91bb64a475->enter($__internal_98cafff2f9d1015177b2940a25b70701e44a887d4651341e36cdbe91bb64a475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_49134dac83c6646fa1aa7347b5861019f9bc32ac81178e4f1481242927672315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49134dac83c6646fa1aa7347b5861019f9bc32ac81178e4f1481242927672315->enter($__internal_49134dac83c6646fa1aa7347b5861019f9bc32ac81178e4f1481242927672315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_49134dac83c6646fa1aa7347b5861019f9bc32ac81178e4f1481242927672315->leave($__internal_49134dac83c6646fa1aa7347b5861019f9bc32ac81178e4f1481242927672315_prof);

        
        $__internal_98cafff2f9d1015177b2940a25b70701e44a887d4651341e36cdbe91bb64a475->leave($__internal_98cafff2f9d1015177b2940a25b70701e44a887d4651341e36cdbe91bb64a475_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c6191429dd4d22cea23fa82373b35d804d10829dfa26529b68fd402b1caa28a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6191429dd4d22cea23fa82373b35d804d10829dfa26529b68fd402b1caa28a6->enter($__internal_c6191429dd4d22cea23fa82373b35d804d10829dfa26529b68fd402b1caa28a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e74fedcea8eb5baf461df6992a2a62254e32ed64c7d88489022a3d411c67ec45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74fedcea8eb5baf461df6992a2a62254e32ed64c7d88489022a3d411c67ec45->enter($__internal_e74fedcea8eb5baf461df6992a2a62254e32ed64c7d88489022a3d411c67ec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e74fedcea8eb5baf461df6992a2a62254e32ed64c7d88489022a3d411c67ec45->leave($__internal_e74fedcea8eb5baf461df6992a2a62254e32ed64c7d88489022a3d411c67ec45_prof);

        
        $__internal_c6191429dd4d22cea23fa82373b35d804d10829dfa26529b68fd402b1caa28a6->leave($__internal_c6191429dd4d22cea23fa82373b35d804d10829dfa26529b68fd402b1caa28a6_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7071b30c99c9eddf75de5af7c4e6314a10dcb8a2903ea9e75decb557f8473bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7071b30c99c9eddf75de5af7c4e6314a10dcb8a2903ea9e75decb557f8473bb2->enter($__internal_7071b30c99c9eddf75de5af7c4e6314a10dcb8a2903ea9e75decb557f8473bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_51a38a88ba4fcec867c2366533af6454293e7c67b90021f78a5f7b7425faa77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a38a88ba4fcec867c2366533af6454293e7c67b90021f78a5f7b7425faa77c->enter($__internal_51a38a88ba4fcec867c2366533af6454293e7c67b90021f78a5f7b7425faa77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_51a38a88ba4fcec867c2366533af6454293e7c67b90021f78a5f7b7425faa77c->leave($__internal_51a38a88ba4fcec867c2366533af6454293e7c67b90021f78a5f7b7425faa77c_prof);

        
        $__internal_7071b30c99c9eddf75de5af7c4e6314a10dcb8a2903ea9e75decb557f8473bb2->leave($__internal_7071b30c99c9eddf75de5af7c4e6314a10dcb8a2903ea9e75decb557f8473bb2_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e5e75e97d915770cb088b7a907e8bf055228f58298d89c8ccb33e36630cd0f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e75e97d915770cb088b7a907e8bf055228f58298d89c8ccb33e36630cd0f1e->enter($__internal_e5e75e97d915770cb088b7a907e8bf055228f58298d89c8ccb33e36630cd0f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3b6e79ed99ed1cdd93817e83c0056b7b327967f959fd2b645a4ce8e4a86769b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e79ed99ed1cdd93817e83c0056b7b327967f959fd2b645a4ce8e4a86769b6->enter($__internal_3b6e79ed99ed1cdd93817e83c0056b7b327967f959fd2b645a4ce8e4a86769b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_3b6e79ed99ed1cdd93817e83c0056b7b327967f959fd2b645a4ce8e4a86769b6->leave($__internal_3b6e79ed99ed1cdd93817e83c0056b7b327967f959fd2b645a4ce8e4a86769b6_prof);

        
        $__internal_e5e75e97d915770cb088b7a907e8bf055228f58298d89c8ccb33e36630cd0f1e->leave($__internal_e5e75e97d915770cb088b7a907e8bf055228f58298d89c8ccb33e36630cd0f1e_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a82df18120be116b39ad0b1c127f609ed16fd8d50ce95e5d81a58f7e2e040d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82df18120be116b39ad0b1c127f609ed16fd8d50ce95e5d81a58f7e2e040d10->enter($__internal_a82df18120be116b39ad0b1c127f609ed16fd8d50ce95e5d81a58f7e2e040d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_799053fda27268e0a294b6e1b583dc185eb5dac508c0efb24563b734fd50a6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799053fda27268e0a294b6e1b583dc185eb5dac508c0efb24563b734fd50a6de->enter($__internal_799053fda27268e0a294b6e1b583dc185eb5dac508c0efb24563b734fd50a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_799053fda27268e0a294b6e1b583dc185eb5dac508c0efb24563b734fd50a6de->leave($__internal_799053fda27268e0a294b6e1b583dc185eb5dac508c0efb24563b734fd50a6de_prof);

        
        $__internal_a82df18120be116b39ad0b1c127f609ed16fd8d50ce95e5d81a58f7e2e040d10->leave($__internal_a82df18120be116b39ad0b1c127f609ed16fd8d50ce95e5d81a58f7e2e040d10_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
