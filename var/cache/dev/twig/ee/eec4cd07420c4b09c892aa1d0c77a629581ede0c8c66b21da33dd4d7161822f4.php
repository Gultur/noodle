<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_ea3748bea30f4f56a36cf14fbf69d5b0aff6a9a3cff660166b0e27a667c3bad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d838b26508d5f935d8a9fae0fac7a9bd0f098489571cd660c3dee72d6be4ed0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d838b26508d5f935d8a9fae0fac7a9bd0f098489571cd660c3dee72d6be4ed0d->enter($__internal_d838b26508d5f935d8a9fae0fac7a9bd0f098489571cd660c3dee72d6be4ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_d838b26508d5f935d8a9fae0fac7a9bd0f098489571cd660c3dee72d6be4ed0d->leave($__internal_d838b26508d5f935d8a9fae0fac7a9bd0f098489571cd660c3dee72d6be4ed0d_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0991cbcee255dd0c5f2dc10a0ee31c5a79c71ef2618f815646e45d13e6c0d98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0991cbcee255dd0c5f2dc10a0ee31c5a79c71ef2618f815646e45d13e6c0d98c->enter($__internal_0991cbcee255dd0c5f2dc10a0ee31c5a79c71ef2618f815646e45d13e6c0d98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? null)) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_0991cbcee255dd0c5f2dc10a0ee31c5a79c71ef2618f815646e45d13e6c0d98c->leave($__internal_0991cbcee255dd0c5f2dc10a0ee31c5a79c71ef2618f815646e45d13e6c0d98c_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_771a72b9624b332674eb89d4234f0efd8c919599d768da5469b26d7f92379872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771a72b9624b332674eb89d4234f0efd8c919599d768da5469b26d7f92379872->enter($__internal_771a72b9624b332674eb89d4234f0efd8c919599d768da5469b26d7f92379872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_771a72b9624b332674eb89d4234f0efd8c919599d768da5469b26d7f92379872->leave($__internal_771a72b9624b332674eb89d4234f0efd8c919599d768da5469b26d7f92379872_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_bc9f985e5dbfd60730d5f4ac8fdf7bbb4287f8add81e3104738b5efd52060157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9f985e5dbfd60730d5f4ac8fdf7bbb4287f8add81e3104738b5efd52060157->enter($__internal_bc9f985e5dbfd60730d5f4ac8fdf7bbb4287f8add81e3104738b5efd52060157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_bc9f985e5dbfd60730d5f4ac8fdf7bbb4287f8add81e3104738b5efd52060157->leave($__internal_bc9f985e5dbfd60730d5f4ac8fdf7bbb4287f8add81e3104738b5efd52060157_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b136db9ce92312cc20946bc87d1a1c08531c883594fc1b6723f11b0556390af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b136db9ce92312cc20946bc87d1a1c08531c883594fc1b6723f11b0556390af5->enter($__internal_b136db9ce92312cc20946bc87d1a1c08531c883594fc1b6723f11b0556390af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_b136db9ce92312cc20946bc87d1a1c08531c883594fc1b6723f11b0556390af5->leave($__internal_b136db9ce92312cc20946bc87d1a1c08531c883594fc1b6723f11b0556390af5_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_4dccea846f6f381b2a6f0eda2a32b47f8438a6f79d9ab97c737b394185a341d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dccea846f6f381b2a6f0eda2a32b47f8438a6f79d9ab97c737b394185a341d9->enter($__internal_4dccea846f6f381b2a6f0eda2a32b47f8438a6f79d9ab97c737b394185a341d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? null) != "single_text") &&  !($context["valid"] ?? null))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_4dccea846f6f381b2a6f0eda2a32b47f8438a6f79d9ab97c737b394185a341d9->leave($__internal_4dccea846f6f381b2a6f0eda2a32b47f8438a6f79d9ab97c737b394185a341d9_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a3065e74079a935543c5bfccd3d43e78ef9dbc04e72a5dc0695c8b787a8ae94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3065e74079a935543c5bfccd3d43e78ef9dbc04e72a5dc0695c8b787a8ae94e->enter($__internal_a3065e74079a935543c5bfccd3d43e78ef9dbc04e72a5dc0695c8b787a8ae94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? null)) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a3065e74079a935543c5bfccd3d43e78ef9dbc04e72a5dc0695c8b787a8ae94e->leave($__internal_a3065e74079a935543c5bfccd3d43e78ef9dbc04e72a5dc0695c8b787a8ae94e_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bb753855e80e120a4e285a2f8203a2fdb0ccad5df360e6877e928e1242b231e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb753855e80e120a4e285a2f8203a2fdb0ccad5df360e6877e928e1242b231e2->enter($__internal_bb753855e80e120a4e285a2f8203a2fdb0ccad5df360e6877e928e1242b231e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? null) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bb753855e80e120a4e285a2f8203a2fdb0ccad5df360e6877e928e1242b231e2->leave($__internal_bb753855e80e120a4e285a2f8203a2fdb0ccad5df360e6877e928e1242b231e2_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_380b974cada763bb5f7a5d78bbfe19ee3e24030874eadadd433844216d1c3afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380b974cada763bb5f7a5d78bbfe19ee3e24030874eadadd433844216d1c3afc->enter($__internal_380b974cada763bb5f7a5d78bbfe19ee3e24030874eadadd433844216d1c3afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? null)) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_380b974cada763bb5f7a5d78bbfe19ee3e24030874eadadd433844216d1c3afc->leave($__internal_380b974cada763bb5f7a5d78bbfe19ee3e24030874eadadd433844216d1c3afc_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2674e479e874923a4457e3be8b45f6a73011aeb105bd1441154c0ba3464b8a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2674e479e874923a4457e3be8b45f6a73011aeb105bd1441154c0ba3464b8a0c->enter($__internal_2674e479e874923a4457e3be8b45f6a73011aeb105bd1441154c0ba3464b8a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2674e479e874923a4457e3be8b45f6a73011aeb105bd1441154c0ba3464b8a0c->leave($__internal_2674e479e874923a4457e3be8b45f6a73011aeb105bd1441154c0ba3464b8a0c_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_72aa7a45b8db1ab772857ea50c956635071cbca1ace13f63d9a216bfbb417659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72aa7a45b8db1ab772857ea50c956635071cbca1ace13f63d9a216bfbb417659->enter($__internal_72aa7a45b8db1ab772857ea50c956635071cbca1ace13f63d9a216bfbb417659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
($context["parent_label_class"] ?? null))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !($context["valid"] ?? null)) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? null)) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_72aa7a45b8db1ab772857ea50c956635071cbca1ace13f63d9a216bfbb417659->leave($__internal_72aa7a45b8db1ab772857ea50c956635071cbca1ace13f63d9a216bfbb417659_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a5d67ef53c3ccfc0f2a613561aacefd5b9641c858c55d608a9859cc6738de3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d67ef53c3ccfc0f2a613561aacefd5b9641c858c55d608a9859cc6738de3be->enter($__internal_a5d67ef53c3ccfc0f2a613561aacefd5b9641c858c55d608a9859cc6738de3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? null)) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_a5d67ef53c3ccfc0f2a613561aacefd5b9641c858c55d608a9859cc6738de3be->leave($__internal_a5d67ef53c3ccfc0f2a613561aacefd5b9641c858c55d608a9859cc6738de3be_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_971a0d857204110a55d61516c24fe32d982c93f12f8a33a3651fce583ae114f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971a0d857204110a55d61516c24fe32d982c93f12f8a33a3651fce583ae114f1->enter($__internal_971a0d857204110a55d61516c24fe32d982c93f12f8a33a3651fce583ae114f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 106
($context["valid"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !($context["valid"] ?? null)) {
                // line 111
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
($context["choice_translation_domain"] ?? null), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_971a0d857204110a55d61516c24fe32d982c93f12f8a33a3651fce583ae114f1->leave($__internal_971a0d857204110a55d61516c24fe32d982c93f12f8a33a3651fce583ae114f1_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_18884238c323f5946bf644aa583c5a569ae8d660054d45cc69a9d7e1ab4e6731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18884238c323f5946bf644aa583c5a569ae8d660054d45cc69a9d7e1ab4e6731->enter($__internal_18884238c323f5946bf644aa583c5a569ae8d660054d45cc69a9d7e1ab4e6731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_18884238c323f5946bf644aa583c5a569ae8d660054d45cc69a9d7e1ab4e6731->leave($__internal_18884238c323f5946bf644aa583c5a569ae8d660054d45cc69a9d7e1ab4e6731_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_14f8458e1f31ec44da217008dfe2b60e3ad8e12a036db746fe871dbf8960019c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f8458e1f31ec44da217008dfe2b60e3ad8e12a036db746fe871dbf8960019c->enter($__internal_14f8458e1f31ec44da217008dfe2b60e3ad8e12a036db746fe871dbf8960019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if (($context["required"] ?? null)) {
                // line 142
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
            }
            // line 147
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 148
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 149
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 150
($context["name"] ?? null), "%id%" =>                     // line 151
($context["id"] ?? null)));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 157
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
            // line 158
            echo ($context["widget"] ?? null);
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_14f8458e1f31ec44da217008dfe2b60e3ad8e12a036db746fe871dbf8960019c->leave($__internal_14f8458e1f31ec44da217008dfe2b60e3ad8e12a036db746fe871dbf8960019c_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cdef89855b67166572029b6d2641bc944f60c3cf17c0ce12a8739dccadb2cff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdef89855b67166572029b6d2641bc944f60c3cf17c0ce12a8739dccadb2cff7->enter($__internal_cdef89855b67166572029b6d2641bc944f60c3cf17c0ce12a8739dccadb2cff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_cdef89855b67166572029b6d2641bc944f60c3cf17c0ce12a8739dccadb2cff7->leave($__internal_cdef89855b67166572029b6d2641bc944f60c3cf17c0ce12a8739dccadb2cff7_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7ea6c0afeef4b188ddfd75ca4b2e9bc666fdb0d0bf8c22f9e2fb8d3c4f1a1644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea6c0afeef4b188ddfd75ca4b2e9bc666fdb0d0bf8c22f9e2fb8d3c4f1a1644->enter($__internal_7ea6c0afeef4b188ddfd75ca4b2e9bc666fdb0d0bf8c22f9e2fb8d3c4f1a1644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_7ea6c0afeef4b188ddfd75ca4b2e9bc666fdb0d0bf8c22f9e2fb8d3c4f1a1644->leave($__internal_7ea6c0afeef4b188ddfd75ca4b2e9bc666fdb0d0bf8c22f9e2fb8d3c4f1a1644_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  584 => 185,  576 => 183,  572 => 182,  563 => 180,  561 => 179,  555 => 178,  546 => 173,  544 => 172,  542 => 171,  540 => 170,  536 => 169,  533 => 167,  531 => 166,  525 => 165,  517 => 159,  513 => 158,  498 => 157,  494 => 154,  491 => 151,  490 => 150,  489 => 149,  487 => 148,  485 => 147,  482 => 145,  480 => 144,  477 => 142,  475 => 141,  473 => 140,  471 => 139,  465 => 137,  458 => 134,  455 => 132,  452 => 130,  450 => 129,  448 => 128,  442 => 127,  434 => 121,  428 => 117,  427 => 116,  426 => 115,  422 => 114,  418 => 113,  415 => 111,  413 => 110,  406 => 106,  405 => 105,  404 => 104,  403 => 103,  399 => 102,  397 => 101,  391 => 100,  383 => 96,  381 => 95,  377 => 94,  374 => 92,  372 => 91,  370 => 90,  368 => 89,  362 => 88,  354 => 84,  352 => 83,  348 => 82,  344 => 80,  342 => 79,  338 => 78,  336 => 77,  334 => 76,  332 => 75,  330 => 74,  328 => 73,  322 => 72,  315 => 69,  313 => 68,  307 => 67,  300 => 64,  297 => 63,  294 => 62,  292 => 61,  286 => 60,  279 => 57,  276 => 55,  274 => 54,  268 => 53,  260 => 49,  258 => 48,  256 => 47,  251 => 46,  245 => 45,  238 => 42,  235 => 40,  233 => 39,  231 => 38,  225 => 37,  218 => 34,  215 => 32,  213 => 31,  211 => 30,  205 => 29,  198 => 26,  195 => 24,  193 => 23,  191 => 22,  185 => 21,  178 => 18,  175 => 16,  173 => 15,  171 => 14,  165 => 13,  158 => 10,  155 => 9,  152 => 8,  149 => 7,  147 => 6,  141 => 5,  134 => 178,  131 => 177,  128 => 175,  126 => 165,  123 => 164,  120 => 162,  118 => 137,  115 => 136,  113 => 127,  110 => 126,  107 => 124,  105 => 100,  102 => 99,  100 => 88,  97 => 87,  95 => 72,  92 => 71,  90 => 67,  88 => 60,  86 => 53,  83 => 52,  81 => 45,  78 => 44,  76 => 37,  73 => 36,  71 => 29,  68 => 28,  66 => 21,  63 => 20,  61 => 13,  58 => 12,  56 => 5,  53 => 4,  50 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
