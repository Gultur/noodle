<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_4f31d987113d9b97e43087e9883a313c22242810452a303f19e99699cbafbcc7 extends Twig_Template
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
        $__internal_2fb3582f5838e0ce4642679627b65a692b8f9f85b4ab850028e63ff1fc16b538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb3582f5838e0ce4642679627b65a692b8f9f85b4ab850028e63ff1fc16b538->enter($__internal_2fb3582f5838e0ce4642679627b65a692b8f9f85b4ab850028e63ff1fc16b538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_2f1a4657a4971f865e4157cb312077f222f7fb6d3d1c9aabab4b5cf8fcfea90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1a4657a4971f865e4157cb312077f222f7fb6d3d1c9aabab4b5cf8fcfea90d->enter($__internal_2f1a4657a4971f865e4157cb312077f222f7fb6d3d1c9aabab4b5cf8fcfea90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_2fb3582f5838e0ce4642679627b65a692b8f9f85b4ab850028e63ff1fc16b538->leave($__internal_2fb3582f5838e0ce4642679627b65a692b8f9f85b4ab850028e63ff1fc16b538_prof);

        
        $__internal_2f1a4657a4971f865e4157cb312077f222f7fb6d3d1c9aabab4b5cf8fcfea90d->leave($__internal_2f1a4657a4971f865e4157cb312077f222f7fb6d3d1c9aabab4b5cf8fcfea90d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7b3f0a35c5ecfda549b9b651559322df998ee3bcefa58b283543d51a8f89f4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3f0a35c5ecfda549b9b651559322df998ee3bcefa58b283543d51a8f89f4cb->enter($__internal_7b3f0a35c5ecfda549b9b651559322df998ee3bcefa58b283543d51a8f89f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_283b74a154c8f6f1fad43dd543c713a78ec63c593b264ad1b9bc90e94a0a1a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283b74a154c8f6f1fad43dd543c713a78ec63c593b264ad1b9bc90e94a0a1a31->enter($__internal_283b74a154c8f6f1fad43dd543c713a78ec63c593b264ad1b9bc90e94a0a1a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_283b74a154c8f6f1fad43dd543c713a78ec63c593b264ad1b9bc90e94a0a1a31->leave($__internal_283b74a154c8f6f1fad43dd543c713a78ec63c593b264ad1b9bc90e94a0a1a31_prof);

        
        $__internal_7b3f0a35c5ecfda549b9b651559322df998ee3bcefa58b283543d51a8f89f4cb->leave($__internal_7b3f0a35c5ecfda549b9b651559322df998ee3bcefa58b283543d51a8f89f4cb_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_51c96f603163549e8f86ab2e4afa8aca70f6fd918b8215d6d0a15562fa4ac09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c96f603163549e8f86ab2e4afa8aca70f6fd918b8215d6d0a15562fa4ac09f->enter($__internal_51c96f603163549e8f86ab2e4afa8aca70f6fd918b8215d6d0a15562fa4ac09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2d0b6c00789e8dce15222829926a1ee8f9092e675f47dd36949d843b8ea1646a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0b6c00789e8dce15222829926a1ee8f9092e675f47dd36949d843b8ea1646a->enter($__internal_2d0b6c00789e8dce15222829926a1ee8f9092e675f47dd36949d843b8ea1646a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2d0b6c00789e8dce15222829926a1ee8f9092e675f47dd36949d843b8ea1646a->leave($__internal_2d0b6c00789e8dce15222829926a1ee8f9092e675f47dd36949d843b8ea1646a_prof);

        
        $__internal_51c96f603163549e8f86ab2e4afa8aca70f6fd918b8215d6d0a15562fa4ac09f->leave($__internal_51c96f603163549e8f86ab2e4afa8aca70f6fd918b8215d6d0a15562fa4ac09f_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3b6dfffb779d8025da78684b18dc32aa083780e2122f301d7e7bdcc408a4b548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6dfffb779d8025da78684b18dc32aa083780e2122f301d7e7bdcc408a4b548->enter($__internal_3b6dfffb779d8025da78684b18dc32aa083780e2122f301d7e7bdcc408a4b548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6e663de5e218d443535c6c0d2a6ca037f02024cf0bb11b8e649f4076592c4ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e663de5e218d443535c6c0d2a6ca037f02024cf0bb11b8e649f4076592c4ac4->enter($__internal_6e663de5e218d443535c6c0d2a6ca037f02024cf0bb11b8e649f4076592c4ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_6e663de5e218d443535c6c0d2a6ca037f02024cf0bb11b8e649f4076592c4ac4->leave($__internal_6e663de5e218d443535c6c0d2a6ca037f02024cf0bb11b8e649f4076592c4ac4_prof);

        
        $__internal_3b6dfffb779d8025da78684b18dc32aa083780e2122f301d7e7bdcc408a4b548->leave($__internal_3b6dfffb779d8025da78684b18dc32aa083780e2122f301d7e7bdcc408a4b548_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_42a06982ae48a804e99e70ef4a503375084c513c61e064fda42540884534471c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a06982ae48a804e99e70ef4a503375084c513c61e064fda42540884534471c->enter($__internal_42a06982ae48a804e99e70ef4a503375084c513c61e064fda42540884534471c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_4bc6241de241d54748828226cec49b11d0a7740372111464752f7922278bed46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc6241de241d54748828226cec49b11d0a7740372111464752f7922278bed46->enter($__internal_4bc6241de241d54748828226cec49b11d0a7740372111464752f7922278bed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_4bc6241de241d54748828226cec49b11d0a7740372111464752f7922278bed46->leave($__internal_4bc6241de241d54748828226cec49b11d0a7740372111464752f7922278bed46_prof);

        
        $__internal_42a06982ae48a804e99e70ef4a503375084c513c61e064fda42540884534471c->leave($__internal_42a06982ae48a804e99e70ef4a503375084c513c61e064fda42540884534471c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2ff6b7ceceb7285566c22b631b75a7a496fdd9577a1def12e684d5f135fbaf2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff6b7ceceb7285566c22b631b75a7a496fdd9577a1def12e684d5f135fbaf2e->enter($__internal_2ff6b7ceceb7285566c22b631b75a7a496fdd9577a1def12e684d5f135fbaf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bf63d2545ceab465e889fc4e102ceede213cae844c39865e8ba5a98dd710b7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf63d2545ceab465e889fc4e102ceede213cae844c39865e8ba5a98dd710b7cc->enter($__internal_bf63d2545ceab465e889fc4e102ceede213cae844c39865e8ba5a98dd710b7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_bf63d2545ceab465e889fc4e102ceede213cae844c39865e8ba5a98dd710b7cc->leave($__internal_bf63d2545ceab465e889fc4e102ceede213cae844c39865e8ba5a98dd710b7cc_prof);

        
        $__internal_2ff6b7ceceb7285566c22b631b75a7a496fdd9577a1def12e684d5f135fbaf2e->leave($__internal_2ff6b7ceceb7285566c22b631b75a7a496fdd9577a1def12e684d5f135fbaf2e_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_15310832955d012379b4c1e2ebb964ba2ddd195880bd30703cbad945b49dc782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15310832955d012379b4c1e2ebb964ba2ddd195880bd30703cbad945b49dc782->enter($__internal_15310832955d012379b4c1e2ebb964ba2ddd195880bd30703cbad945b49dc782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_233c71e85b14a003b698958139c4f667dd61088d5b3ed00ec5ff10701ed8a6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233c71e85b14a003b698958139c4f667dd61088d5b3ed00ec5ff10701ed8a6ac->enter($__internal_233c71e85b14a003b698958139c4f667dd61088d5b3ed00ec5ff10701ed8a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_233c71e85b14a003b698958139c4f667dd61088d5b3ed00ec5ff10701ed8a6ac->leave($__internal_233c71e85b14a003b698958139c4f667dd61088d5b3ed00ec5ff10701ed8a6ac_prof);

        
        $__internal_15310832955d012379b4c1e2ebb964ba2ddd195880bd30703cbad945b49dc782->leave($__internal_15310832955d012379b4c1e2ebb964ba2ddd195880bd30703cbad945b49dc782_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b89cb27072db32407e5c81fa1333325efbd9e66e57c115a8d267e3f06551703d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b89cb27072db32407e5c81fa1333325efbd9e66e57c115a8d267e3f06551703d->enter($__internal_b89cb27072db32407e5c81fa1333325efbd9e66e57c115a8d267e3f06551703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7de39c99abc5b1c1558f564190c613f2ae005833ebd8c198298f4e93e1edd079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de39c99abc5b1c1558f564190c613f2ae005833ebd8c198298f4e93e1edd079->enter($__internal_7de39c99abc5b1c1558f564190c613f2ae005833ebd8c198298f4e93e1edd079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7de39c99abc5b1c1558f564190c613f2ae005833ebd8c198298f4e93e1edd079->leave($__internal_7de39c99abc5b1c1558f564190c613f2ae005833ebd8c198298f4e93e1edd079_prof);

        
        $__internal_b89cb27072db32407e5c81fa1333325efbd9e66e57c115a8d267e3f06551703d->leave($__internal_b89cb27072db32407e5c81fa1333325efbd9e66e57c115a8d267e3f06551703d_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_54b8e7c41dade77ff5f23fb4232a29acdc2ad56ad5e46353bb0fd470c35d9f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b8e7c41dade77ff5f23fb4232a29acdc2ad56ad5e46353bb0fd470c35d9f2b->enter($__internal_54b8e7c41dade77ff5f23fb4232a29acdc2ad56ad5e46353bb0fd470c35d9f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_72080f77613f5ad3db3a5defbef82e09b9aae5e46f8eeda2bb55d644b0f82cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72080f77613f5ad3db3a5defbef82e09b9aae5e46f8eeda2bb55d644b0f82cc5->enter($__internal_72080f77613f5ad3db3a5defbef82e09b9aae5e46f8eeda2bb55d644b0f82cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_72080f77613f5ad3db3a5defbef82e09b9aae5e46f8eeda2bb55d644b0f82cc5->leave($__internal_72080f77613f5ad3db3a5defbef82e09b9aae5e46f8eeda2bb55d644b0f82cc5_prof);

        
        $__internal_54b8e7c41dade77ff5f23fb4232a29acdc2ad56ad5e46353bb0fd470c35d9f2b->leave($__internal_54b8e7c41dade77ff5f23fb4232a29acdc2ad56ad5e46353bb0fd470c35d9f2b_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5c3b8971516c9d2e8431f23b10219b090cc66ac5943a1626651a8dcb7469364a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3b8971516c9d2e8431f23b10219b090cc66ac5943a1626651a8dcb7469364a->enter($__internal_5c3b8971516c9d2e8431f23b10219b090cc66ac5943a1626651a8dcb7469364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1aecd50e79c4168013745f8e378aed2088c332443cafc638d7f288dfb2cee607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aecd50e79c4168013745f8e378aed2088c332443cafc638d7f288dfb2cee607->enter($__internal_1aecd50e79c4168013745f8e378aed2088c332443cafc638d7f288dfb2cee607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_1aecd50e79c4168013745f8e378aed2088c332443cafc638d7f288dfb2cee607->leave($__internal_1aecd50e79c4168013745f8e378aed2088c332443cafc638d7f288dfb2cee607_prof);

        
        $__internal_5c3b8971516c9d2e8431f23b10219b090cc66ac5943a1626651a8dcb7469364a->leave($__internal_5c3b8971516c9d2e8431f23b10219b090cc66ac5943a1626651a8dcb7469364a_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_02eabfba882a040738570c8cac318fc9c5ca55ed1daba4e8f7a60f62f76370df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02eabfba882a040738570c8cac318fc9c5ca55ed1daba4e8f7a60f62f76370df->enter($__internal_02eabfba882a040738570c8cac318fc9c5ca55ed1daba4e8f7a60f62f76370df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_708c3d64f567f43e84fdaecc6017f1c6d94c1259c7e76895058682ac380b6bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708c3d64f567f43e84fdaecc6017f1c6d94c1259c7e76895058682ac380b6bae->enter($__internal_708c3d64f567f43e84fdaecc6017f1c6d94c1259c7e76895058682ac380b6bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_708c3d64f567f43e84fdaecc6017f1c6d94c1259c7e76895058682ac380b6bae->leave($__internal_708c3d64f567f43e84fdaecc6017f1c6d94c1259c7e76895058682ac380b6bae_prof);

        
        $__internal_02eabfba882a040738570c8cac318fc9c5ca55ed1daba4e8f7a60f62f76370df->leave($__internal_02eabfba882a040738570c8cac318fc9c5ca55ed1daba4e8f7a60f62f76370df_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0542261f43bc8a3cfd4c1e1b8790cd912e64aea1bc6d92431f4357f344fec3d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0542261f43bc8a3cfd4c1e1b8790cd912e64aea1bc6d92431f4357f344fec3d9->enter($__internal_0542261f43bc8a3cfd4c1e1b8790cd912e64aea1bc6d92431f4357f344fec3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_148d4a2f74d0e8e3093cd96f99bbe21bebb51ffea261311b31848e536e8bb4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148d4a2f74d0e8e3093cd96f99bbe21bebb51ffea261311b31848e536e8bb4c6->enter($__internal_148d4a2f74d0e8e3093cd96f99bbe21bebb51ffea261311b31848e536e8bb4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_148d4a2f74d0e8e3093cd96f99bbe21bebb51ffea261311b31848e536e8bb4c6->leave($__internal_148d4a2f74d0e8e3093cd96f99bbe21bebb51ffea261311b31848e536e8bb4c6_prof);

        
        $__internal_0542261f43bc8a3cfd4c1e1b8790cd912e64aea1bc6d92431f4357f344fec3d9->leave($__internal_0542261f43bc8a3cfd4c1e1b8790cd912e64aea1bc6d92431f4357f344fec3d9_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_73ef243348664eef015938816daa889c4399eaaf3ef42c7ee492e92641650c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ef243348664eef015938816daa889c4399eaaf3ef42c7ee492e92641650c9d->enter($__internal_73ef243348664eef015938816daa889c4399eaaf3ef42c7ee492e92641650c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8e3518aab3cc59fa8ef25c4ef483c8c0e7c7ad72481809f83303a58294a82841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3518aab3cc59fa8ef25c4ef483c8c0e7c7ad72481809f83303a58294a82841->enter($__internal_8e3518aab3cc59fa8ef25c4ef483c8c0e7c7ad72481809f83303a58294a82841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8e3518aab3cc59fa8ef25c4ef483c8c0e7c7ad72481809f83303a58294a82841->leave($__internal_8e3518aab3cc59fa8ef25c4ef483c8c0e7c7ad72481809f83303a58294a82841_prof);

        
        $__internal_73ef243348664eef015938816daa889c4399eaaf3ef42c7ee492e92641650c9d->leave($__internal_73ef243348664eef015938816daa889c4399eaaf3ef42c7ee492e92641650c9d_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fc407d6c0cf3b49417b30e15e91d2b1f3e52875907d9b2547ec4109993bae276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc407d6c0cf3b49417b30e15e91d2b1f3e52875907d9b2547ec4109993bae276->enter($__internal_fc407d6c0cf3b49417b30e15e91d2b1f3e52875907d9b2547ec4109993bae276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_49355919f7ce47bbdcff1d906eaf45cc31199bd73a0ad272c5fc734e08d858ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49355919f7ce47bbdcff1d906eaf45cc31199bd73a0ad272c5fc734e08d858ec->enter($__internal_49355919f7ce47bbdcff1d906eaf45cc31199bd73a0ad272c5fc734e08d858ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_49355919f7ce47bbdcff1d906eaf45cc31199bd73a0ad272c5fc734e08d858ec->leave($__internal_49355919f7ce47bbdcff1d906eaf45cc31199bd73a0ad272c5fc734e08d858ec_prof);

        
        $__internal_fc407d6c0cf3b49417b30e15e91d2b1f3e52875907d9b2547ec4109993bae276->leave($__internal_fc407d6c0cf3b49417b30e15e91d2b1f3e52875907d9b2547ec4109993bae276_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e515c5c3e38de1080a66ee2c954f1ec9e36e7a723184eed67facf38ca787f92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e515c5c3e38de1080a66ee2c954f1ec9e36e7a723184eed67facf38ca787f92c->enter($__internal_e515c5c3e38de1080a66ee2c954f1ec9e36e7a723184eed67facf38ca787f92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6af290076d0dca7477bbfb1ac19543bff2664bfaaef3aa66e567e7bc97521d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af290076d0dca7477bbfb1ac19543bff2664bfaaef3aa66e567e7bc97521d0d->enter($__internal_6af290076d0dca7477bbfb1ac19543bff2664bfaaef3aa66e567e7bc97521d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6af290076d0dca7477bbfb1ac19543bff2664bfaaef3aa66e567e7bc97521d0d->leave($__internal_6af290076d0dca7477bbfb1ac19543bff2664bfaaef3aa66e567e7bc97521d0d_prof);

        
        $__internal_e515c5c3e38de1080a66ee2c954f1ec9e36e7a723184eed67facf38ca787f92c->leave($__internal_e515c5c3e38de1080a66ee2c954f1ec9e36e7a723184eed67facf38ca787f92c_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1777868d31ed58a6490e70ce39c6da60f1982d56ac7dc983310ab44cf9b5e87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1777868d31ed58a6490e70ce39c6da60f1982d56ac7dc983310ab44cf9b5e87d->enter($__internal_1777868d31ed58a6490e70ce39c6da60f1982d56ac7dc983310ab44cf9b5e87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_40f5ca0b804a20c473d82a64154e329033c445e79e0891e1ab23ec83484d5536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f5ca0b804a20c473d82a64154e329033c445e79e0891e1ab23ec83484d5536->enter($__internal_40f5ca0b804a20c473d82a64154e329033c445e79e0891e1ab23ec83484d5536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_40f5ca0b804a20c473d82a64154e329033c445e79e0891e1ab23ec83484d5536->leave($__internal_40f5ca0b804a20c473d82a64154e329033c445e79e0891e1ab23ec83484d5536_prof);

        
        $__internal_1777868d31ed58a6490e70ce39c6da60f1982d56ac7dc983310ab44cf9b5e87d->leave($__internal_1777868d31ed58a6490e70ce39c6da60f1982d56ac7dc983310ab44cf9b5e87d_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_19bbfff7ca7a1de3c12e8071d518e8023f2bd0c225461e01eac3b43c5b343fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bbfff7ca7a1de3c12e8071d518e8023f2bd0c225461e01eac3b43c5b343fd4->enter($__internal_19bbfff7ca7a1de3c12e8071d518e8023f2bd0c225461e01eac3b43c5b343fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_bc13e30cd5eefd45824ed41576bbba9e83fafba4aa710b8f1bd6fcef6cdba8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc13e30cd5eefd45824ed41576bbba9e83fafba4aa710b8f1bd6fcef6cdba8e2->enter($__internal_bc13e30cd5eefd45824ed41576bbba9e83fafba4aa710b8f1bd6fcef6cdba8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_bc13e30cd5eefd45824ed41576bbba9e83fafba4aa710b8f1bd6fcef6cdba8e2->leave($__internal_bc13e30cd5eefd45824ed41576bbba9e83fafba4aa710b8f1bd6fcef6cdba8e2_prof);

        
        $__internal_19bbfff7ca7a1de3c12e8071d518e8023f2bd0c225461e01eac3b43c5b343fd4->leave($__internal_19bbfff7ca7a1de3c12e8071d518e8023f2bd0c225461e01eac3b43c5b343fd4_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_53921c056c3616bf8da9ed6301d13d7f56421960dbed4c38a801731e65a10eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53921c056c3616bf8da9ed6301d13d7f56421960dbed4c38a801731e65a10eba->enter($__internal_53921c056c3616bf8da9ed6301d13d7f56421960dbed4c38a801731e65a10eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6247a8838da11760dd3db3abfc1d0beb706011b93f8ae500c7d6b4d560373b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6247a8838da11760dd3db3abfc1d0beb706011b93f8ae500c7d6b4d560373b39->enter($__internal_6247a8838da11760dd3db3abfc1d0beb706011b93f8ae500c7d6b4d560373b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_6247a8838da11760dd3db3abfc1d0beb706011b93f8ae500c7d6b4d560373b39->leave($__internal_6247a8838da11760dd3db3abfc1d0beb706011b93f8ae500c7d6b4d560373b39_prof);

        
        $__internal_53921c056c3616bf8da9ed6301d13d7f56421960dbed4c38a801731e65a10eba->leave($__internal_53921c056c3616bf8da9ed6301d13d7f56421960dbed4c38a801731e65a10eba_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4195b2adf2850b50afb4ff748e724c5f7430dcb2b06e487f15590abd6e98e132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4195b2adf2850b50afb4ff748e724c5f7430dcb2b06e487f15590abd6e98e132->enter($__internal_4195b2adf2850b50afb4ff748e724c5f7430dcb2b06e487f15590abd6e98e132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c9da442f529f43c0548f701313b4f69a3f01c286186f07949e0297ebad2cbc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9da442f529f43c0548f701313b4f69a3f01c286186f07949e0297ebad2cbc8d->enter($__internal_c9da442f529f43c0548f701313b4f69a3f01c286186f07949e0297ebad2cbc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_c9da442f529f43c0548f701313b4f69a3f01c286186f07949e0297ebad2cbc8d->leave($__internal_c9da442f529f43c0548f701313b4f69a3f01c286186f07949e0297ebad2cbc8d_prof);

        
        $__internal_4195b2adf2850b50afb4ff748e724c5f7430dcb2b06e487f15590abd6e98e132->leave($__internal_4195b2adf2850b50afb4ff748e724c5f7430dcb2b06e487f15590abd6e98e132_prof);

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
