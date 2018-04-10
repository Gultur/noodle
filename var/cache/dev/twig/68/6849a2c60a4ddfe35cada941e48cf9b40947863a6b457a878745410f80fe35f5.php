<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_286242e8c3e48e499c7834b2b474bbb3c322e817f1dd6fb95900e0107b1e8042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e13c3144a435686475a509f55dc4aafa65857a4a8b3ea8b70799436fe0e6483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e13c3144a435686475a509f55dc4aafa65857a4a8b3ea8b70799436fe0e6483->enter($__internal_8e13c3144a435686475a509f55dc4aafa65857a4a8b3ea8b70799436fe0e6483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e13c3144a435686475a509f55dc4aafa65857a4a8b3ea8b70799436fe0e6483->leave($__internal_8e13c3144a435686475a509f55dc4aafa65857a4a8b3ea8b70799436fe0e6483_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e9095a3b5c3a43976df457d4b560a60ab5886cdf1ee962bbe04139ed76753466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9095a3b5c3a43976df457d4b560a60ab5886cdf1ee962bbe04139ed76753466->enter($__internal_e9095a3b5c3a43976df457d4b560a60ab5886cdf1ee962bbe04139ed76753466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e9095a3b5c3a43976df457d4b560a60ab5886cdf1ee962bbe04139ed76753466->leave($__internal_e9095a3b5c3a43976df457d4b560a60ab5886cdf1ee962bbe04139ed76753466_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6364ad7884e6ab7e1148b9421e22246c7be375e8972e70fad8503838556d447b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6364ad7884e6ab7e1148b9421e22246c7be375e8972e70fad8503838556d447b->enter($__internal_6364ad7884e6ab7e1148b9421e22246c7be375e8972e70fad8503838556d447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6364ad7884e6ab7e1148b9421e22246c7be375e8972e70fad8503838556d447b->leave($__internal_6364ad7884e6ab7e1148b9421e22246c7be375e8972e70fad8503838556d447b_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0bc5e8877e4c5dc536a37ed4fc1af2100ee26c912126ec4b1b215470b6652ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc5e8877e4c5dc536a37ed4fc1af2100ee26c912126ec4b1b215470b6652ae2->enter($__internal_0bc5e8877e4c5dc536a37ed4fc1af2100ee26c912126ec4b1b215470b6652ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0bc5e8877e4c5dc536a37ed4fc1af2100ee26c912126ec4b1b215470b6652ae2->leave($__internal_0bc5e8877e4c5dc536a37ed4fc1af2100ee26c912126ec4b1b215470b6652ae2_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6f211bb55bea65cbea714411330832b627dffc8c9acc0c996f4116af58a12738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f211bb55bea65cbea714411330832b627dffc8c9acc0c996f4116af58a12738->enter($__internal_6f211bb55bea65cbea714411330832b627dffc8c9acc0c996f4116af58a12738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? null)) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_6f211bb55bea65cbea714411330832b627dffc8c9acc0c996f4116af58a12738->leave($__internal_6f211bb55bea65cbea714411330832b627dffc8c9acc0c996f4116af58a12738_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_778b902be37a71015b76b9a7647a76649440b9ec76e9a307dd614c54ace6c116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778b902be37a71015b76b9a7647a76649440b9ec76e9a307dd614c54ace6c116->enter($__internal_778b902be37a71015b76b9a7647a76649440b9ec76e9a307dd614c54ace6c116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_778b902be37a71015b76b9a7647a76649440b9ec76e9a307dd614c54ace6c116->leave($__internal_778b902be37a71015b76b9a7647a76649440b9ec76e9a307dd614c54ace6c116_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0d48573298bfb3c5b17b4debd07006b6706a2d99b41bca0cd7dd1994f243a25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d48573298bfb3c5b17b4debd07006b6706a2d99b41bca0cd7dd1994f243a25a->enter($__internal_0d48573298bfb3c5b17b4debd07006b6706a2d99b41bca0cd7dd1994f243a25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_0d48573298bfb3c5b17b4debd07006b6706a2d99b41bca0cd7dd1994f243a25a->leave($__internal_0d48573298bfb3c5b17b4debd07006b6706a2d99b41bca0cd7dd1994f243a25a_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2b3bdd11d8fb92ac12e8e5c66185e8c638f5a6d872f4cb9d5011818e4248a0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3bdd11d8fb92ac12e8e5c66185e8c638f5a6d872f4cb9d5011818e4248a0c2->enter($__internal_2b3bdd11d8fb92ac12e8e5c66185e8c638f5a6d872f4cb9d5011818e4248a0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_2b3bdd11d8fb92ac12e8e5c66185e8c638f5a6d872f4cb9d5011818e4248a0c2->leave($__internal_2b3bdd11d8fb92ac12e8e5c66185e8c638f5a6d872f4cb9d5011818e4248a0c2_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b6e5affd42df6cd82a197e609e7679e1334fbaa72a031619dfdc0562666a49b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e5affd42df6cd82a197e609e7679e1334fbaa72a031619dfdc0562666a49b0->enter($__internal_b6e5affd42df6cd82a197e609e7679e1334fbaa72a031619dfdc0562666a49b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? null)) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_b6e5affd42df6cd82a197e609e7679e1334fbaa72a031619dfdc0562666a49b0->leave($__internal_b6e5affd42df6cd82a197e609e7679e1334fbaa72a031619dfdc0562666a49b0_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_eb841a5a08b3b9e92e4b32de4afa67efd77889b84d86c6244e7e9664cf89b5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb841a5a08b3b9e92e4b32de4afa67efd77889b84d86c6244e7e9664cf89b5ba->enter($__internal_eb841a5a08b3b9e92e4b32de4afa67efd77889b84d86c6244e7e9664cf89b5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? null)) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? null);
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_eb841a5a08b3b9e92e4b32de4afa67efd77889b84d86c6244e7e9664cf89b5ba->leave($__internal_eb841a5a08b3b9e92e4b32de4afa67efd77889b84d86c6244e7e9664cf89b5ba_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5e8d5e82f815f7b8b436a125b93a20a3f6a456d0adbb835b0de7b680cfc53ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8d5e82f815f7b8b436a125b93a20a3f6a456d0adbb835b0de7b680cfc53ee3->enter($__internal_5e8d5e82f815f7b8b436a125b93a20a3f6a456d0adbb835b0de7b680cfc53ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_5e8d5e82f815f7b8b436a125b93a20a3f6a456d0adbb835b0de7b680cfc53ee3->leave($__internal_5e8d5e82f815f7b8b436a125b93a20a3f6a456d0adbb835b0de7b680cfc53ee3_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d4a2640cacfa7c2fbec3f71636714ca764baf8f0e429a9128fda3ffbc9f2e0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a2640cacfa7c2fbec3f71636714ca764baf8f0e429a9128fda3ffbc9f2e0c1->enter($__internal_d4a2640cacfa7c2fbec3f71636714ca764baf8f0e429a9128fda3ffbc9f2e0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_d4a2640cacfa7c2fbec3f71636714ca764baf8f0e429a9128fda3ffbc9f2e0c1->leave($__internal_d4a2640cacfa7c2fbec3f71636714ca764baf8f0e429a9128fda3ffbc9f2e0c1_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8e6288a2e617dcd59415cd6a6eb96c19be490f418227d7417d4c4f23662e2171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6288a2e617dcd59415cd6a6eb96c19be490f418227d7417d4c4f23662e2171->enter($__internal_8e6288a2e617dcd59415cd6a6eb96c19be490f418227d7417d4c4f23662e2171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_8e6288a2e617dcd59415cd6a6eb96c19be490f418227d7417d4c4f23662e2171->leave($__internal_8e6288a2e617dcd59415cd6a6eb96c19be490f418227d7417d4c4f23662e2171_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c9b6c187b7fe42ba4f25faa5b7c24922fe228cbf535791d118d7b2d548b83d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b6c187b7fe42ba4f25faa5b7c24922fe228cbf535791d118d7b2d548b83d79->enter($__internal_c9b6c187b7fe42ba4f25faa5b7c24922fe228cbf535791d118d7b2d548b83d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c9b6c187b7fe42ba4f25faa5b7c24922fe228cbf535791d118d7b2d548b83d79->leave($__internal_c9b6c187b7fe42ba4f25faa5b7c24922fe228cbf535791d118d7b2d548b83d79_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5c70a4c34c2382dd520abd073ad85654d7debbb88b8d50965e481467a96536f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c70a4c34c2382dd520abd073ad85654d7debbb88b8d50965e481467a96536f4->enter($__internal_5c70a4c34c2382dd520abd073ad85654d7debbb88b8d50965e481467a96536f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_5c70a4c34c2382dd520abd073ad85654d7debbb88b8d50965e481467a96536f4->leave($__internal_5c70a4c34c2382dd520abd073ad85654d7debbb88b8d50965e481467a96536f4_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7d44aa49111f8f1ee5595922142347bf2bd75c9a871b012621f64e4122413f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d44aa49111f8f1ee5595922142347bf2bd75c9a871b012621f64e4122413f7b->enter($__internal_7d44aa49111f8f1ee5595922142347bf2bd75c9a871b012621f64e4122413f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7d44aa49111f8f1ee5595922142347bf2bd75c9a871b012621f64e4122413f7b->leave($__internal_7d44aa49111f8f1ee5595922142347bf2bd75c9a871b012621f64e4122413f7b_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a2eaf3e062f77586299502f3214e4cf734f4a99c03d49d372f3214c8bb593341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2eaf3e062f77586299502f3214e4cf734f4a99c03d49d372f3214c8bb593341->enter($__internal_a2eaf3e062f77586299502f3214e4cf734f4a99c03d49d372f3214c8bb593341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a2eaf3e062f77586299502f3214e4cf734f4a99c03d49d372f3214c8bb593341->leave($__internal_a2eaf3e062f77586299502f3214e4cf734f4a99c03d49d372f3214c8bb593341_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_86a3a87ddc4c24c81232f1dbd1b7ca2cd7326267a23ab1af4b769d23dd25aea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a3a87ddc4c24c81232f1dbd1b7ca2cd7326267a23ab1af4b769d23dd25aea7->enter($__internal_86a3a87ddc4c24c81232f1dbd1b7ca2cd7326267a23ab1af4b769d23dd25aea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? null)) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? null)))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                 // line 254
($context["name"] ?? null), "%id%" =>                 // line 255
($context["id"] ?? null)));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? null);
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
        echo "
    </label>";
        
        $__internal_86a3a87ddc4c24c81232f1dbd1b7ca2cd7326267a23ab1af4b769d23dd25aea7->leave($__internal_86a3a87ddc4c24c81232f1dbd1b7ca2cd7326267a23ab1af4b769d23dd25aea7_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_309786770ef6cf8025f0006510936fb2d3f6dc536809a4b1c70fc1de4f7d4006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309786770ef6cf8025f0006510936fb2d3f6dc536809a4b1c70fc1de4f7d4006->enter($__internal_309786770ef6cf8025f0006510936fb2d3f6dc536809a4b1c70fc1de4f7d4006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_309786770ef6cf8025f0006510936fb2d3f6dc536809a4b1c70fc1de4f7d4006->leave($__internal_309786770ef6cf8025f0006510936fb2d3f6dc536809a4b1c70fc1de4f7d4006_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_410fa3b16f038d64bf5e0d601ef9ae69385c4c77011dcf3fe283030ced156377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410fa3b16f038d64bf5e0d601ef9ae69385c4c77011dcf3fe283030ced156377->enter($__internal_410fa3b16f038d64bf5e0d601ef9ae69385c4c77011dcf3fe283030ced156377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_410fa3b16f038d64bf5e0d601ef9ae69385c4c77011dcf3fe283030ced156377->leave($__internal_410fa3b16f038d64bf5e0d601ef9ae69385c4c77011dcf3fe283030ced156377_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ff441ceaaec2b0410f9918b18a6565476784ec6e682cb2038037bb8d71af803f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff441ceaaec2b0410f9918b18a6565476784ec6e682cb2038037bb8d71af803f->enter($__internal_ff441ceaaec2b0410f9918b18a6565476784ec6e682cb2038037bb8d71af803f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ff441ceaaec2b0410f9918b18a6565476784ec6e682cb2038037bb8d71af803f->leave($__internal_ff441ceaaec2b0410f9918b18a6565476784ec6e682cb2038037bb8d71af803f_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ccc04f8bd02a9cb337d4613a261713f7873c212f69c5940bc2f4dd1d16b38cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc04f8bd02a9cb337d4613a261713f7873c212f69c5940bc2f4dd1d16b38cb8->enter($__internal_ccc04f8bd02a9cb337d4613a261713f7873c212f69c5940bc2f4dd1d16b38cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ccc04f8bd02a9cb337d4613a261713f7873c212f69c5940bc2f4dd1d16b38cb8->leave($__internal_ccc04f8bd02a9cb337d4613a261713f7873c212f69c5940bc2f4dd1d16b38cb8_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_33816ff0850335af9f115172d3eb0cd602043dfb2702338d874484af5121abac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33816ff0850335af9f115172d3eb0cd602043dfb2702338d874484af5121abac->enter($__internal_33816ff0850335af9f115172d3eb0cd602043dfb2702338d874484af5121abac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_33816ff0850335af9f115172d3eb0cd602043dfb2702338d874484af5121abac->leave($__internal_33816ff0850335af9f115172d3eb0cd602043dfb2702338d874484af5121abac_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ee2b8789cbe6fb082630c9b06a149a30b768afe95ab08076fd1c568b79125215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2b8789cbe6fb082630c9b06a149a30b768afe95ab08076fd1c568b79125215->enter($__internal_ee2b8789cbe6fb082630c9b06a149a30b768afe95ab08076fd1c568b79125215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ee2b8789cbe6fb082630c9b06a149a30b768afe95ab08076fd1c568b79125215->leave($__internal_ee2b8789cbe6fb082630c9b06a149a30b768afe95ab08076fd1c568b79125215_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9f380bb41a3e70207c4f008102251b915cb4d6398f401997d2d2f7811011de5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f380bb41a3e70207c4f008102251b915cb4d6398f401997d2d2f7811011de5e->enter($__internal_9f380bb41a3e70207c4f008102251b915cb4d6398f401997d2d2f7811011de5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_9f380bb41a3e70207c4f008102251b915cb4d6398f401997d2d2f7811011de5e->leave($__internal_9f380bb41a3e70207c4f008102251b915cb4d6398f401997d2d2f7811011de5e_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4db7436c41f898d31ded02526fa1a44b5620eb6f9f216e9013d61a8a20c1626e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db7436c41f898d31ded02526fa1a44b5620eb6f9f216e9013d61a8a20c1626e->enter($__internal_4db7436c41f898d31ded02526fa1a44b5620eb6f9f216e9013d61a8a20c1626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_4db7436c41f898d31ded02526fa1a44b5620eb6f9f216e9013d61a8a20c1626e->leave($__internal_4db7436c41f898d31ded02526fa1a44b5620eb6f9f216e9013d61a8a20c1626e_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  925 => 326,  909 => 324,  905 => 323,  888 => 322,  882 => 321,  880 => 320,  874 => 319,  864 => 312,  860 => 311,  854 => 310,  851 => 309,  845 => 308,  835 => 303,  831 => 302,  825 => 301,  822 => 300,  816 => 299,  808 => 296,  806 => 295,  800 => 294,  792 => 291,  790 => 290,  784 => 289,  776 => 286,  774 => 285,  768 => 284,  760 => 281,  758 => 280,  752 => 279,  742 => 274,  738 => 273,  734 => 272,  728 => 271,  725 => 270,  719 => 269,  710 => 263,  706 => 262,  690 => 261,  686 => 258,  683 => 255,  682 => 254,  681 => 253,  679 => 252,  676 => 251,  673 => 250,  670 => 249,  667 => 248,  664 => 247,  662 => 246,  659 => 245,  656 => 244,  653 => 243,  651 => 242,  645 => 241,  638 => 238,  632 => 237,  625 => 234,  619 => 233,  612 => 230,  609 => 229,  607 => 228,  604 => 227,  602 => 226,  600 => 225,  594 => 224,  587 => 221,  584 => 220,  582 => 219,  580 => 218,  574 => 217,  563 => 210,  560 => 209,  557 => 208,  555 => 207,  552 => 206,  546 => 204,  543 => 203,  541 => 202,  535 => 201,  524 => 196,  521 => 195,  515 => 193,  512 => 192,  509 => 191,  507 => 190,  504 => 189,  502 => 188,  496 => 187,  487 => 183,  480 => 181,  478 => 180,  476 => 179,  472 => 178,  467 => 177,  463 => 175,  456 => 173,  454 => 172,  452 => 171,  448 => 170,  445 => 169,  443 => 168,  437 => 167,  430 => 164,  428 => 163,  426 => 162,  420 => 159,  418 => 158,  416 => 157,  414 => 156,  412 => 155,  403 => 153,  401 => 152,  393 => 151,  390 => 149,  388 => 148,  385 => 147,  382 => 146,  380 => 145,  378 => 144,  375 => 143,  372 => 142,  370 => 141,  368 => 140,  362 => 139,  354 => 136,  350 => 134,  347 => 133,  339 => 128,  328 => 121,  320 => 116,  307 => 106,  296 => 99,  293 => 98,  287 => 96,  284 => 95,  281 => 94,  278 => 92,  276 => 91,  270 => 90,  262 => 87,  258 => 85,  256 => 84,  254 => 82,  253 => 81,  252 => 80,  251 => 79,  245 => 77,  242 => 76,  239 => 75,  236 => 73,  234 => 72,  228 => 71,  217 => 66,  213 => 65,  209 => 64,  204 => 62,  200 => 61,  197 => 60,  194 => 59,  191 => 57,  189 => 56,  183 => 55,  172 => 48,  170 => 47,  167 => 45,  161 => 44,  154 => 41,  148 => 38,  145 => 37,  143 => 36,  140 => 35,  138 => 34,  136 => 33,  130 => 30,  127 => 29,  124 => 28,  122 => 27,  119 => 26,  113 => 25,  106 => 22,  104 => 21,  98 => 20,  91 => 17,  88 => 16,  86 => 15,  84 => 14,  78 => 13,  71 => 10,  68 => 9,  66 => 8,  64 => 7,  58 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "foundation_5_layout.html.twig", "/home/gultur/noodleclean/Noodle/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
