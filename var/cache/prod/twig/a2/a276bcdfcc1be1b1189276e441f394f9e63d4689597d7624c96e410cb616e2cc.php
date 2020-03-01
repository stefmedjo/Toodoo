<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_a1721a58476c0682ec8c388ba06455ac2757cb29ed0513933606008673ed2ffc extends Twig_Template
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
            [
                'money_widget' => [$this, 'block_money_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'button_widget' => [$this, 'block_button_widget'],
                'submit_widget' => [$this, 'block_submit_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_errors' => [$this, 'block_form_label_errors'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'form_errors' => [$this, 'block_form_errors'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('date_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('time_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 128
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 135
        $this->displayBlock('button_widget', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 186
        echo "
";
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 257
        echo "
";
        // line 259
        echo "
";
        // line 260
        $this->displayBlock('form_row', $context, $blocks);
        // line 269
        echo "
";
        // line 271
        echo "
";
        // line 272
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 5
    public function block_money_widget($context, array $blocks = [])
    {
        // line 6
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (isset($context["money_pattern"]) ? $context["money_pattern"] : null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 7
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (isset($context["money_pattern"]) ? $context["money_pattern"] : null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 8
        if (((isset($context["prepend"]) ? $context["prepend"] : null) || (isset($context["append"]) ? $context["append"] : null))) {
            // line 9
            echo "<div class=\"input-group";
            echo twig_escape_filter($this->env, (((isset($context["group_class"]) || array_key_exists("group_class", $context))) ? (_twig_default_filter((isset($context["group_class"]) ? $context["group_class"] : null), "")) : ("")), "html", null, true);
            echo "\">";
            // line 10
            if ((isset($context["prepend"]) ? $context["prepend"] : null)) {
                // line 11
                echo "<div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">";
                // line 12
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null));
                echo "</span>
                </div>";
            }
            // line 15
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 16
            if ((isset($context["append"]) ? $context["append"] : null)) {
                // line 17
                echo "<div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null));
                echo "</span>
                </div>";
            }
            // line 21
            echo "</div>";
        } else {
            // line 23
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 27
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 28
        if ((((isset($context["widget"]) ? $context["widget"] : null) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            // line 29
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control is-invalid"))]);
            // line 30
            $context["valid"] = true;
        }
        // line 32
        $this->displayParentBlock("datetime_widget", $context, $blocks);
    }

    // line 35
    public function block_date_widget($context, array $blocks = [])
    {
        // line 36
        if ((((isset($context["widget"]) ? $context["widget"] : null) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            // line 37
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control is-invalid"))]);
            // line 38
            $context["valid"] = true;
        }
        // line 40
        $this->displayParentBlock("date_widget", $context, $blocks);
    }

    // line 43
    public function block_time_widget($context, array $blocks = [])
    {
        // line 44
        if ((((isset($context["widget"]) ? $context["widget"] : null) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            // line 45
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control is-invalid"))]);
            // line 46
            $context["valid"] = true;
        }
        // line 48
        $this->displayParentBlock("time_widget", $context, $blocks);
    }

    // line 51
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        // line 52
        if ((((isset($context["widget"]) ? $context["widget"] : null) != "single_text") &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            // line 53
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control is-invalid"))]);
            // line 54
            $context["valid"] = true;
        }
        // line 56
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 60
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 61
            if ((isset($context["with_years"]) ? $context["with_years"] : null)) {
                // line 62
                echo "<div class=\"col-auto\">
                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "years", []), 'label');
                echo "
                ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "years", []), 'widget');
                echo "
            </div>";
            }
            // line 67
            if ((isset($context["with_months"]) ? $context["with_months"] : null)) {
                // line 68
                echo "<div class=\"col-auto\">
                ";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "months", []), 'label');
                echo "
                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "months", []), 'widget');
                echo "
            </div>";
            }
            // line 73
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : null)) {
                // line 74
                echo "<div class=\"col-auto\">
                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weeks", []), 'label');
                echo "
                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weeks", []), 'widget');
                echo "
            </div>";
            }
            // line 79
            if ((isset($context["with_days"]) ? $context["with_days"] : null)) {
                // line 80
                echo "<div class=\"col-auto\">
                ";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "days", []), 'label');
                echo "
                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "days", []), 'widget');
                echo "
            </div>";
            }
            // line 85
            if ((isset($context["with_hours"]) ? $context["with_hours"] : null)) {
                // line 86
                echo "<div class=\"col-auto\">
                ";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hours", []), 'label');
                echo "
                ";
                // line 88
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hours", []), 'widget');
                echo "
            </div>";
            }
            // line 91
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                // line 92
                echo "<div class=\"col-auto\">
                ";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minutes", []), 'label');
                echo "
                ";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minutes", []), 'widget');
                echo "
            </div>";
            }
            // line 97
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                // line 98
                echo "<div class=\"col-auto\">
                ";
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seconds", []), 'label');
                echo "
                ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seconds", []), 'widget');
                echo "
            </div>";
            }
            // line 103
            if ((isset($context["with_invert"]) ? $context["with_invert"] : null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "invert", []), 'widget');
            }
            // line 104
            echo "</div>";
        }
    }

    // line 108
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 109
        echo "<div class=\"input-group\">";
        // line 110
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 111
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 117
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 118
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ((isset($context["type"]) ? $context["type"] : null) != "hidden"))) {
            // line 119
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control") . ((((((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "")) : ("")) == "file")) ? ("-file") : (""))))]);
        }
        // line 121
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (((isset($context["type"]) ? $context["type"] : null) == "range") || ((isset($context["type"]) ? $context["type"] : null) == "color")))) {
            // line 122
            echo "        ";
            // line 123
            $context["required"] = false;
        }
        // line 125
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 128
    public function block_widget_attributes($context, array $blocks = [])
    {
        // line 129
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            // line 130
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " is-invalid"))]);
            // line 131
            echo "    ";
        }
        // line 132
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 135
    public function block_button_widget($context, array $blocks = [])
    {
        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        // line 137
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 140
    public function block_submit_widget($context, array $blocks = [])
    {
        // line 141
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "btn-primary")) : ("btn-primary")))]);
        // line 142
        $this->displayParentBlock("submit_widget", $context, $blocks);
    }

    // line 145
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 146
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : (""))));
        // line 147
        if (twig_in_filter("checkbox-custom", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 148
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " custom-control-input"))]);
            // line 149
            echo "<div class=\"custom-control custom-checkbox";
            echo ((twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 151
            echo "</div>";
        } else {
            // line 153
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-check-input"))]);
            // line 154
            echo "<div class=\"form-check";
            echo ((twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 156
            echo "</div>";
        }
    }

    // line 160
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 161
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : (""))));
        // line 162
        if (twig_in_filter("radio-custom", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 163
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " custom-control-input"))]);
            // line 164
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 166
            echo "</div>";
        } else {
            // line 168
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-check-input"))]);
            // line 169
            echo "<div class=\"form-check";
            echo ((twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 171
            echo "</div>";
        }
    }

    // line 175
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 176
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(            // line 179
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), "translation_domain" =>             // line 180
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null), "valid" =>             // line 181
(isset($context["valid"]) ? $context["valid"] : null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "</div>";
    }

    // line 189
    public function block_form_label($context, array $blocks = [])
    {
        // line 190
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 191
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && (isset($context["compound"]) ? $context["compound"] : null))) {
                // line 192
                $context["element"] = "legend";
                // line 193
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 195
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["for" => (isset($context["id"]) ? $context["id"] : null)]);
            }
            // line 197
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 198
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 200
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 201
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                    // line 202
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), ["%name%" =>                     // line 203
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                     // line 204
(isset($context["id"]) ? $context["id"] : null)]);
                } else {
                    // line 207
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                }
            }
            // line 210
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) ? $context["element"] : null), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) ? $context["label_attr"] : null)) {
                $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ["attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)];
                if (!is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
            $this->displayBlock('form_label_errors', $context, $blocks);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) ? $context["element"] : null), "label")) : ("label")), "html", null, true);
            echo ">";
        } else {
            // line 212
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 213
                echo "<div id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "_errors\" class=\"mb-2\">";
                // line 214
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                // line 215
                echo "</div>";
            }
        }
    }

    // line 210
    public function block_form_label_errors($context, array $blocks = [])
    {
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
    }

    // line 220
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 222
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 223
            $context["is_parent_custom"] = ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context)) && (twig_in_filter("checkbox-custom", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)) || twig_in_filter("radio-custom", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))));
            // line 224
            echo "        ";
            $context["is_custom"] = ($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true) && (twig_in_filter("checkbox-custom", $this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [])) || twig_in_filter("radio-custom", $this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []))));
            // line 225
            if (((isset($context["is_parent_custom"]) ? $context["is_parent_custom"] : null) || (isset($context["is_custom"]) ? $context["is_custom"] : null))) {
                // line 226
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " custom-control-label"))]);
            } else {
                // line 228
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " form-check-label"))]);
            }
            // line 230
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 231
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["for" => (isset($context["id"]) ? $context["id"] : null)]);
            }
            // line 233
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 234
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 236
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 237
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(twig_replace_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => ""]))]);
            }
            // line 239
            if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
                // line 240
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                    // line 241
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), ["%name%" =>                     // line 242
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                     // line 243
(isset($context["id"]) ? $context["id"] : null)]);
                } else {
                    // line 246
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                }
            }
            // line 250
            echo (isset($context["widget"]) ? $context["widget"] : null);
            echo "
        <label";
            // line 251
            $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ["attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)];
            if (!is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105);
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 252
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : null) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null))))) : ("")), "html", null, true);
            // line 253
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            // line 254
            echo "</label>";
        }
    }

    // line 260
    public function block_form_row($context, array $blocks = [])
    {
        // line 261
        if (((isset($context["compound"]) || array_key_exists("compound", $context)) && (isset($context["compound"]) ? $context["compound"] : null))) {
            // line 262
            $context["element"] = "fieldset";
        }
        // line 264
        echo "<";
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) ? $context["element"] : null), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 267
        echo "</";
        echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter((isset($context["element"]) ? $context["element"] : null), "div")) : ("div")), "html", null, true);
        echo ">";
    }

    // line 272
    public function block_form_errors($context, array $blocks = [])
    {
        // line 273
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 274
            echo "<span class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : null))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo " d-block\">";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 276
                echo "<span class=\"d-block\">
                    <span class=\"form-error-icon badge badge-danger text-uppercase\">";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error", [], "validators"), "html", null, true);
                echo "</span> <span class=\"form-error-message\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</span>
                </span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  701 => 280,  691 => 277,  688 => 276,  684 => 275,  676 => 274,  674 => 273,  671 => 272,  665 => 267,  663 => 266,  661 => 265,  657 => 264,  654 => 262,  652 => 261,  649 => 260,  644 => 254,  642 => 253,  640 => 252,  630 => 251,  626 => 250,  622 => 246,  619 => 243,  618 => 242,  617 => 241,  615 => 240,  613 => 239,  610 => 237,  608 => 236,  605 => 234,  603 => 233,  600 => 231,  598 => 230,  595 => 228,  592 => 226,  590 => 225,  587 => 224,  585 => 223,  583 => 222,  580 => 220,  574 => 210,  568 => 215,  566 => 214,  562 => 213,  560 => 212,  540 => 210,  536 => 207,  533 => 204,  532 => 203,  531 => 202,  529 => 201,  527 => 200,  524 => 198,  522 => 197,  519 => 195,  516 => 193,  514 => 192,  512 => 191,  510 => 190,  507 => 189,  503 => 184,  497 => 181,  496 => 180,  495 => 179,  494 => 178,  490 => 177,  486 => 176,  483 => 175,  478 => 171,  476 => 170,  472 => 169,  470 => 168,  467 => 166,  465 => 165,  461 => 164,  459 => 163,  457 => 162,  455 => 161,  452 => 160,  447 => 156,  445 => 155,  441 => 154,  439 => 153,  436 => 151,  434 => 150,  430 => 149,  428 => 148,  426 => 147,  424 => 146,  421 => 145,  417 => 142,  415 => 141,  412 => 140,  408 => 137,  406 => 136,  403 => 135,  399 => 132,  396 => 131,  393 => 130,  391 => 129,  388 => 128,  384 => 125,  381 => 123,  379 => 122,  377 => 121,  374 => 119,  372 => 118,  369 => 117,  362 => 111,  360 => 110,  358 => 109,  355 => 108,  350 => 104,  346 => 103,  341 => 100,  337 => 99,  334 => 98,  332 => 97,  327 => 94,  323 => 93,  320 => 92,  318 => 91,  313 => 88,  309 => 87,  306 => 86,  304 => 85,  299 => 82,  295 => 81,  292 => 80,  290 => 79,  285 => 76,  281 => 75,  278 => 74,  276 => 73,  271 => 70,  267 => 69,  264 => 68,  262 => 67,  257 => 64,  253 => 63,  250 => 62,  248 => 61,  244 => 60,  242 => 59,  239 => 57,  237 => 56,  234 => 54,  232 => 53,  230 => 52,  227 => 51,  223 => 48,  220 => 46,  218 => 45,  216 => 44,  213 => 43,  209 => 40,  206 => 38,  204 => 37,  202 => 36,  199 => 35,  195 => 32,  192 => 30,  190 => 29,  188 => 28,  185 => 27,  180 => 23,  177 => 21,  172 => 18,  169 => 17,  167 => 16,  165 => 15,  160 => 12,  157 => 11,  155 => 10,  151 => 9,  149 => 8,  147 => 7,  145 => 6,  142 => 5,  138 => 272,  135 => 271,  132 => 269,  130 => 260,  127 => 259,  124 => 257,  122 => 220,  119 => 219,  117 => 189,  114 => 188,  111 => 186,  109 => 175,  106 => 174,  104 => 160,  101 => 159,  99 => 145,  96 => 144,  94 => 140,  91 => 139,  89 => 135,  87 => 128,  85 => 117,  82 => 116,  80 => 108,  77 => 107,  75 => 51,  72 => 50,  70 => 43,  67 => 42,  65 => 35,  62 => 34,  60 => 27,  57 => 26,  55 => 5,  52 => 4,  49 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_layout.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
