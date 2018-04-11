<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_5f20d1e6a1d1ee93187ee4bedd2e20baca27edc00a47dfbd4e928d34b3bc3317 extends Twig_Template
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
        $__internal_0d4bc9344ac90aebe27e4c4e6c307095b07c0b1c752fc7be3536364b5cb953b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4bc9344ac90aebe27e4c4e6c307095b07c0b1c752fc7be3536364b5cb953b5->enter($__internal_0d4bc9344ac90aebe27e4c4e6c307095b07c0b1c752fc7be3536364b5cb953b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_8f8e4e3d89767258e1e9c3bfa96860a1a90437b11c2512a03873c905d1a46fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8e4e3d89767258e1e9c3bfa96860a1a90437b11c2512a03873c905d1a46fd9->enter($__internal_8f8e4e3d89767258e1e9c3bfa96860a1a90437b11c2512a03873c905d1a46fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_0d4bc9344ac90aebe27e4c4e6c307095b07c0b1c752fc7be3536364b5cb953b5->leave($__internal_0d4bc9344ac90aebe27e4c4e6c307095b07c0b1c752fc7be3536364b5cb953b5_prof);

        
        $__internal_8f8e4e3d89767258e1e9c3bfa96860a1a90437b11c2512a03873c905d1a46fd9->leave($__internal_8f8e4e3d89767258e1e9c3bfa96860a1a90437b11c2512a03873c905d1a46fd9_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_eafdcab6777c0510470ad575852a41acf36963395f3bbfa7f752dbe9853578fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafdcab6777c0510470ad575852a41acf36963395f3bbfa7f752dbe9853578fe->enter($__internal_eafdcab6777c0510470ad575852a41acf36963395f3bbfa7f752dbe9853578fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_915c65dfe66960e8887c8807f9f8e11bb39f64f27f92b3dffbcce85774afc137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915c65dfe66960e8887c8807f9f8e11bb39f64f27f92b3dffbcce85774afc137->enter($__internal_915c65dfe66960e8887c8807f9f8e11bb39f64f27f92b3dffbcce85774afc137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_915c65dfe66960e8887c8807f9f8e11bb39f64f27f92b3dffbcce85774afc137->leave($__internal_915c65dfe66960e8887c8807f9f8e11bb39f64f27f92b3dffbcce85774afc137_prof);

        
        $__internal_eafdcab6777c0510470ad575852a41acf36963395f3bbfa7f752dbe9853578fe->leave($__internal_eafdcab6777c0510470ad575852a41acf36963395f3bbfa7f752dbe9853578fe_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_77ad9b52cbd4db308c049107729b8f86cd5bb96a07986afc1dcf06e2c10e1f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ad9b52cbd4db308c049107729b8f86cd5bb96a07986afc1dcf06e2c10e1f0a->enter($__internal_77ad9b52cbd4db308c049107729b8f86cd5bb96a07986afc1dcf06e2c10e1f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_36a2b21385559d6e15ca47da0bc10b3792e7bac560a037e01db9a2ab64d5419c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a2b21385559d6e15ca47da0bc10b3792e7bac560a037e01db9a2ab64d5419c->enter($__internal_36a2b21385559d6e15ca47da0bc10b3792e7bac560a037e01db9a2ab64d5419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_fe5479e2fe3f9656d7f71a938feb6bbb94be18bec1bd73d917dbc7b13bbb11b7 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_9371a73991069b755e69c3ad829840674d48819ab0e6a606b05d8d155a4aa0a4 = "{{") && ('' === $__internal_9371a73991069b755e69c3ad829840674d48819ab0e6a606b05d8d155a4aa0a4 || 0 === strpos($__internal_fe5479e2fe3f9656d7f71a938feb6bbb94be18bec1bd73d917dbc7b13bbb11b7, $__internal_9371a73991069b755e69c3ad829840674d48819ab0e6a606b05d8d155a4aa0a4)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_f293fad0a0517210f76b5fee2660cb9fa8c9cdbe9804b51501df0d03c49d50c9 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_748fcdf1b8f1c8d14a37fe3599f25aa4c474b3765242e414a438dd326b88ec3d = "}}") && ('' === $__internal_748fcdf1b8f1c8d14a37fe3599f25aa4c474b3765242e414a438dd326b88ec3d || $__internal_748fcdf1b8f1c8d14a37fe3599f25aa4c474b3765242e414a438dd326b88ec3d === substr($__internal_f293fad0a0517210f76b5fee2660cb9fa8c9cdbe9804b51501df0d03c49d50c9, -strlen($__internal_748fcdf1b8f1c8d14a37fe3599f25aa4c474b3765242e414a438dd326b88ec3d))));
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
        
        $__internal_36a2b21385559d6e15ca47da0bc10b3792e7bac560a037e01db9a2ab64d5419c->leave($__internal_36a2b21385559d6e15ca47da0bc10b3792e7bac560a037e01db9a2ab64d5419c_prof);

        
        $__internal_77ad9b52cbd4db308c049107729b8f86cd5bb96a07986afc1dcf06e2c10e1f0a->leave($__internal_77ad9b52cbd4db308c049107729b8f86cd5bb96a07986afc1dcf06e2c10e1f0a_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_59fea7119ba47b64cc3738e6e1e1cd787f0a2314fffd7e1904d5a579f4a34676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fea7119ba47b64cc3738e6e1e1cd787f0a2314fffd7e1904d5a579f4a34676->enter($__internal_59fea7119ba47b64cc3738e6e1e1cd787f0a2314fffd7e1904d5a579f4a34676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a615497eb065def153363003a3ee63ba755404a7b6a3a1e5418bb5058733eef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a615497eb065def153363003a3ee63ba755404a7b6a3a1e5418bb5058733eef9->enter($__internal_a615497eb065def153363003a3ee63ba755404a7b6a3a1e5418bb5058733eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a615497eb065def153363003a3ee63ba755404a7b6a3a1e5418bb5058733eef9->leave($__internal_a615497eb065def153363003a3ee63ba755404a7b6a3a1e5418bb5058733eef9_prof);

        
        $__internal_59fea7119ba47b64cc3738e6e1e1cd787f0a2314fffd7e1904d5a579f4a34676->leave($__internal_59fea7119ba47b64cc3738e6e1e1cd787f0a2314fffd7e1904d5a579f4a34676_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_80d4b2f5a9978bd18c5c6bf74f2b11979049b65d9275d887688fe8f4a27f099e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d4b2f5a9978bd18c5c6bf74f2b11979049b65d9275d887688fe8f4a27f099e->enter($__internal_80d4b2f5a9978bd18c5c6bf74f2b11979049b65d9275d887688fe8f4a27f099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_7c8b3f4e11cbfc34f9431f30601b571b72f905a4692eceb7fb8f1908cb5ca9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8b3f4e11cbfc34f9431f30601b571b72f905a4692eceb7fb8f1908cb5ca9cd->enter($__internal_7c8b3f4e11cbfc34f9431f30601b571b72f905a4692eceb7fb8f1908cb5ca9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_7c8b3f4e11cbfc34f9431f30601b571b72f905a4692eceb7fb8f1908cb5ca9cd->leave($__internal_7c8b3f4e11cbfc34f9431f30601b571b72f905a4692eceb7fb8f1908cb5ca9cd_prof);

        
        $__internal_80d4b2f5a9978bd18c5c6bf74f2b11979049b65d9275d887688fe8f4a27f099e->leave($__internal_80d4b2f5a9978bd18c5c6bf74f2b11979049b65d9275d887688fe8f4a27f099e_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_421ea103372b3117772e125e9aac96d1fba603e4a129f61df4ad256737f6d1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421ea103372b3117772e125e9aac96d1fba603e4a129f61df4ad256737f6d1b5->enter($__internal_421ea103372b3117772e125e9aac96d1fba603e4a129f61df4ad256737f6d1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_105a3a0bca13d9c8999d6dcd6df7cd1820bc4681e27eeb36bcbeb27bd0e3b88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105a3a0bca13d9c8999d6dcd6df7cd1820bc4681e27eeb36bcbeb27bd0e3b88d->enter($__internal_105a3a0bca13d9c8999d6dcd6df7cd1820bc4681e27eeb36bcbeb27bd0e3b88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_105a3a0bca13d9c8999d6dcd6df7cd1820bc4681e27eeb36bcbeb27bd0e3b88d->leave($__internal_105a3a0bca13d9c8999d6dcd6df7cd1820bc4681e27eeb36bcbeb27bd0e3b88d_prof);

        
        $__internal_421ea103372b3117772e125e9aac96d1fba603e4a129f61df4ad256737f6d1b5->leave($__internal_421ea103372b3117772e125e9aac96d1fba603e4a129f61df4ad256737f6d1b5_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_45e2b00db16ceb748bb1ea3c43e16dad0bface6511249538db150c4af00c4989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e2b00db16ceb748bb1ea3c43e16dad0bface6511249538db150c4af00c4989->enter($__internal_45e2b00db16ceb748bb1ea3c43e16dad0bface6511249538db150c4af00c4989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0c1676e77e2984ca1c7de982619690f0c07282fd1df04120ec0d943a76190d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1676e77e2984ca1c7de982619690f0c07282fd1df04120ec0d943a76190d73->enter($__internal_0c1676e77e2984ca1c7de982619690f0c07282fd1df04120ec0d943a76190d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_0c1676e77e2984ca1c7de982619690f0c07282fd1df04120ec0d943a76190d73->leave($__internal_0c1676e77e2984ca1c7de982619690f0c07282fd1df04120ec0d943a76190d73_prof);

        
        $__internal_45e2b00db16ceb748bb1ea3c43e16dad0bface6511249538db150c4af00c4989->leave($__internal_45e2b00db16ceb748bb1ea3c43e16dad0bface6511249538db150c4af00c4989_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_573d456763b07e6957179d68cad61a41a5de1ba7f2ac4375f7201e5c418229ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573d456763b07e6957179d68cad61a41a5de1ba7f2ac4375f7201e5c418229ff->enter($__internal_573d456763b07e6957179d68cad61a41a5de1ba7f2ac4375f7201e5c418229ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_eea5123b3779bf9f8319564130142df1e4f8b2ee87e63e06f289815a1ee39719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea5123b3779bf9f8319564130142df1e4f8b2ee87e63e06f289815a1ee39719->enter($__internal_eea5123b3779bf9f8319564130142df1e4f8b2ee87e63e06f289815a1ee39719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_eea5123b3779bf9f8319564130142df1e4f8b2ee87e63e06f289815a1ee39719->leave($__internal_eea5123b3779bf9f8319564130142df1e4f8b2ee87e63e06f289815a1ee39719_prof);

        
        $__internal_573d456763b07e6957179d68cad61a41a5de1ba7f2ac4375f7201e5c418229ff->leave($__internal_573d456763b07e6957179d68cad61a41a5de1ba7f2ac4375f7201e5c418229ff_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f8be8df2a60ec66ab3539334f440bd245e6f904aa682b4d92c96589f156fa47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8be8df2a60ec66ab3539334f440bd245e6f904aa682b4d92c96589f156fa47b->enter($__internal_f8be8df2a60ec66ab3539334f440bd245e6f904aa682b4d92c96589f156fa47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7f0aba0d1884c7d7d1deaa2c2abdeb75189f5d1b9c3c1adf70eba3d1496064fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0aba0d1884c7d7d1deaa2c2abdeb75189f5d1b9c3c1adf70eba3d1496064fc->enter($__internal_7f0aba0d1884c7d7d1deaa2c2abdeb75189f5d1b9c3c1adf70eba3d1496064fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_7f0aba0d1884c7d7d1deaa2c2abdeb75189f5d1b9c3c1adf70eba3d1496064fc->leave($__internal_7f0aba0d1884c7d7d1deaa2c2abdeb75189f5d1b9c3c1adf70eba3d1496064fc_prof);

        
        $__internal_f8be8df2a60ec66ab3539334f440bd245e6f904aa682b4d92c96589f156fa47b->leave($__internal_f8be8df2a60ec66ab3539334f440bd245e6f904aa682b4d92c96589f156fa47b_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5190b50cef514fbbdcb37bb45ae6b75499e7bf77a9e2caf463521e0cd492353e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5190b50cef514fbbdcb37bb45ae6b75499e7bf77a9e2caf463521e0cd492353e->enter($__internal_5190b50cef514fbbdcb37bb45ae6b75499e7bf77a9e2caf463521e0cd492353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f2a0e77102580e6f2f8820e4d608e76c63b6b5302d501402da73f71d35f4011a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a0e77102580e6f2f8820e4d608e76c63b6b5302d501402da73f71d35f4011a->enter($__internal_f2a0e77102580e6f2f8820e4d608e76c63b6b5302d501402da73f71d35f4011a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_f2a0e77102580e6f2f8820e4d608e76c63b6b5302d501402da73f71d35f4011a->leave($__internal_f2a0e77102580e6f2f8820e4d608e76c63b6b5302d501402da73f71d35f4011a_prof);

        
        $__internal_5190b50cef514fbbdcb37bb45ae6b75499e7bf77a9e2caf463521e0cd492353e->leave($__internal_5190b50cef514fbbdcb37bb45ae6b75499e7bf77a9e2caf463521e0cd492353e_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a1daaf88c3083ae2dc80bae75d112e79d7f47d3bd518acc50c0f66a044939faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1daaf88c3083ae2dc80bae75d112e79d7f47d3bd518acc50c0f66a044939faa->enter($__internal_a1daaf88c3083ae2dc80bae75d112e79d7f47d3bd518acc50c0f66a044939faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e4914d8c4b2c297eaf30f883c92fe339c04ff6657aee6de541c825b988b87eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4914d8c4b2c297eaf30f883c92fe339c04ff6657aee6de541c825b988b87eec->enter($__internal_e4914d8c4b2c297eaf30f883c92fe339c04ff6657aee6de541c825b988b87eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e4914d8c4b2c297eaf30f883c92fe339c04ff6657aee6de541c825b988b87eec->leave($__internal_e4914d8c4b2c297eaf30f883c92fe339c04ff6657aee6de541c825b988b87eec_prof);

        
        $__internal_a1daaf88c3083ae2dc80bae75d112e79d7f47d3bd518acc50c0f66a044939faa->leave($__internal_a1daaf88c3083ae2dc80bae75d112e79d7f47d3bd518acc50c0f66a044939faa_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_cb9904b3598b2554a89207c4a261d763a2f50a95d441416950141a5ab1e8c6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9904b3598b2554a89207c4a261d763a2f50a95d441416950141a5ab1e8c6b7->enter($__internal_cb9904b3598b2554a89207c4a261d763a2f50a95d441416950141a5ab1e8c6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4f1a60dfae34a5fc64622930a8f9d1959a504f728044a5e5966a0b942b6bdbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1a60dfae34a5fc64622930a8f9d1959a504f728044a5e5966a0b942b6bdbd5->enter($__internal_4f1a60dfae34a5fc64622930a8f9d1959a504f728044a5e5966a0b942b6bdbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4f1a60dfae34a5fc64622930a8f9d1959a504f728044a5e5966a0b942b6bdbd5->leave($__internal_4f1a60dfae34a5fc64622930a8f9d1959a504f728044a5e5966a0b942b6bdbd5_prof);

        
        $__internal_cb9904b3598b2554a89207c4a261d763a2f50a95d441416950141a5ab1e8c6b7->leave($__internal_cb9904b3598b2554a89207c4a261d763a2f50a95d441416950141a5ab1e8c6b7_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_6f1f452c3d3f1673629e5d44ed26d9077851b843faf046321de015ad5d6f8675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1f452c3d3f1673629e5d44ed26d9077851b843faf046321de015ad5d6f8675->enter($__internal_6f1f452c3d3f1673629e5d44ed26d9077851b843faf046321de015ad5d6f8675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_00090e95317bfc8fb433a5ad54da8648117ec33ee7b95098e212b42ef93e9c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00090e95317bfc8fb433a5ad54da8648117ec33ee7b95098e212b42ef93e9c48->enter($__internal_00090e95317bfc8fb433a5ad54da8648117ec33ee7b95098e212b42ef93e9c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_00090e95317bfc8fb433a5ad54da8648117ec33ee7b95098e212b42ef93e9c48->leave($__internal_00090e95317bfc8fb433a5ad54da8648117ec33ee7b95098e212b42ef93e9c48_prof);

        
        $__internal_6f1f452c3d3f1673629e5d44ed26d9077851b843faf046321de015ad5d6f8675->leave($__internal_6f1f452c3d3f1673629e5d44ed26d9077851b843faf046321de015ad5d6f8675_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_32d540ff2af48242a221ff7fe34f6221199a4c0bc668b558296af81a483979a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d540ff2af48242a221ff7fe34f6221199a4c0bc668b558296af81a483979a6->enter($__internal_32d540ff2af48242a221ff7fe34f6221199a4c0bc668b558296af81a483979a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_38f03e80460029d7ef88ce502feb06513bf8ce3b1354dd6b93925d04c462459f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f03e80460029d7ef88ce502feb06513bf8ce3b1354dd6b93925d04c462459f->enter($__internal_38f03e80460029d7ef88ce502feb06513bf8ce3b1354dd6b93925d04c462459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_38f03e80460029d7ef88ce502feb06513bf8ce3b1354dd6b93925d04c462459f->leave($__internal_38f03e80460029d7ef88ce502feb06513bf8ce3b1354dd6b93925d04c462459f_prof);

        
        $__internal_32d540ff2af48242a221ff7fe34f6221199a4c0bc668b558296af81a483979a6->leave($__internal_32d540ff2af48242a221ff7fe34f6221199a4c0bc668b558296af81a483979a6_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0b4fdb7d7027fd31ef00eabd8d0bfbc013f6156fefd164aa66376595d5941cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4fdb7d7027fd31ef00eabd8d0bfbc013f6156fefd164aa66376595d5941cd8->enter($__internal_0b4fdb7d7027fd31ef00eabd8d0bfbc013f6156fefd164aa66376595d5941cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0e1a7a1f5f00eb4002f1458ab505217e22978653b46d3e44e10e1398eaa71764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1a7a1f5f00eb4002f1458ab505217e22978653b46d3e44e10e1398eaa71764->enter($__internal_0e1a7a1f5f00eb4002f1458ab505217e22978653b46d3e44e10e1398eaa71764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0e1a7a1f5f00eb4002f1458ab505217e22978653b46d3e44e10e1398eaa71764->leave($__internal_0e1a7a1f5f00eb4002f1458ab505217e22978653b46d3e44e10e1398eaa71764_prof);

        
        $__internal_0b4fdb7d7027fd31ef00eabd8d0bfbc013f6156fefd164aa66376595d5941cd8->leave($__internal_0b4fdb7d7027fd31ef00eabd8d0bfbc013f6156fefd164aa66376595d5941cd8_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_96a79331b9613aad949383719205221c8999bd441d513085ba3f8459472c42c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a79331b9613aad949383719205221c8999bd441d513085ba3f8459472c42c8->enter($__internal_96a79331b9613aad949383719205221c8999bd441d513085ba3f8459472c42c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_da4d49a5075f94ed141c52b87d374770efe48ad5c7c5f732b02682a240ae4f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4d49a5075f94ed141c52b87d374770efe48ad5c7c5f732b02682a240ae4f7d->enter($__internal_da4d49a5075f94ed141c52b87d374770efe48ad5c7c5f732b02682a240ae4f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_da4d49a5075f94ed141c52b87d374770efe48ad5c7c5f732b02682a240ae4f7d->leave($__internal_da4d49a5075f94ed141c52b87d374770efe48ad5c7c5f732b02682a240ae4f7d_prof);

        
        $__internal_96a79331b9613aad949383719205221c8999bd441d513085ba3f8459472c42c8->leave($__internal_96a79331b9613aad949383719205221c8999bd441d513085ba3f8459472c42c8_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1c84de227d5e136d16d5586cfc9f1ee34c4e1f6d34ad28ce478ac3d1e2a60792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c84de227d5e136d16d5586cfc9f1ee34c4e1f6d34ad28ce478ac3d1e2a60792->enter($__internal_1c84de227d5e136d16d5586cfc9f1ee34c4e1f6d34ad28ce478ac3d1e2a60792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b2b64d2ea01571e5a31109ec9d136d5dd19abc9a0fb94155486a365137b98dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b64d2ea01571e5a31109ec9d136d5dd19abc9a0fb94155486a365137b98dc6->enter($__internal_b2b64d2ea01571e5a31109ec9d136d5dd19abc9a0fb94155486a365137b98dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b2b64d2ea01571e5a31109ec9d136d5dd19abc9a0fb94155486a365137b98dc6->leave($__internal_b2b64d2ea01571e5a31109ec9d136d5dd19abc9a0fb94155486a365137b98dc6_prof);

        
        $__internal_1c84de227d5e136d16d5586cfc9f1ee34c4e1f6d34ad28ce478ac3d1e2a60792->leave($__internal_1c84de227d5e136d16d5586cfc9f1ee34c4e1f6d34ad28ce478ac3d1e2a60792_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_cd1d2785c327af65b9ff1c28a9610e21827a774aee6acb2adf2b08eac490cbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1d2785c327af65b9ff1c28a9610e21827a774aee6acb2adf2b08eac490cbe7->enter($__internal_cd1d2785c327af65b9ff1c28a9610e21827a774aee6acb2adf2b08eac490cbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c81177dd4f5ccdbdaad7e83658fa4c281ff06290929f3d4e905702304d3c07c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81177dd4f5ccdbdaad7e83658fa4c281ff06290929f3d4e905702304d3c07c7->enter($__internal_c81177dd4f5ccdbdaad7e83658fa4c281ff06290929f3d4e905702304d3c07c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c81177dd4f5ccdbdaad7e83658fa4c281ff06290929f3d4e905702304d3c07c7->leave($__internal_c81177dd4f5ccdbdaad7e83658fa4c281ff06290929f3d4e905702304d3c07c7_prof);

        
        $__internal_cd1d2785c327af65b9ff1c28a9610e21827a774aee6acb2adf2b08eac490cbe7->leave($__internal_cd1d2785c327af65b9ff1c28a9610e21827a774aee6acb2adf2b08eac490cbe7_prof);

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
