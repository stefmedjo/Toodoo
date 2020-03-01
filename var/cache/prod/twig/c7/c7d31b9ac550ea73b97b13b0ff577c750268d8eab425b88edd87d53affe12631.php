<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_661edac8c9b0dc0c706abf91b51e9e20608618972c7d2e937d98a8b81bfc8034 extends Twig_Template
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
            [
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
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
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('date_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('time_widget', $context, $blocks);
        // line 102
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 140
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 164
        echo "
";
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('choice_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('radio_label', $context, $blocks);
        // line 180
        echo "
";
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('button_row', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('choice_row', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('date_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('time_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('datetime_row', $context, $blocks);
    }

    // line 5
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control"))]);
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 10
    public function block_money_widget($context, array $blocks = [])
    {
        // line 11
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (isset($context["money_pattern"]) ? $context["money_pattern"] : null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (isset($context["money_pattern"]) ? $context["money_pattern"] : null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 13
        echo "    ";
        if (((isset($context["prepend"]) ? $context["prepend"] : null) || (isset($context["append"]) ? $context["append"] : null))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, (((isset($context["group_class"]) || array_key_exists("group_class", $context))) ? (_twig_default_filter((isset($context["group_class"]) ? $context["group_class"] : null), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if ((isset($context["prepend"]) ? $context["prepend"] : null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null));
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if ((isset($context["append"]) ? $context["append"] : null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null));
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
    }

    // line 28
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 35
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 36
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'errors');
            // line 44
            echo "<div class=\"sr-only\">";
            // line 45
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", [], "any", false, true), "year", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), "year", []), 'label');
            }
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", [], "any", false, true), "month", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), "month", []), 'label');
            }
            // line 47
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", [], "any", false, true), "day", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), "day", []), 'label');
            }
            // line 48
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", [], "any", false, true), "hour", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), "hour", []), 'label');
            }
            // line 49
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", [], "any", false, true), "minute", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), "minute", []), 'label');
            }
            // line 50
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", [], "any", false, true), "second", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), "second", []), 'label');
            }
            // line 51
            echo "</div>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'widget', ["datetime" => true]);
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'widget', ["datetime" => true]);
            // line 55
            echo "</div>";
        }
    }

    // line 59
    public function block_date_widget($context, array $blocks = [])
    {
        // line 60
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 61
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 63
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 64
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 65
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 67
            echo "            <div class=\"sr-only\">
                ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", []), 'label');
            echo "
                ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", []), 'label');
            echo "
                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", []), 'label');
            echo "
            </div>";
            // line 73
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), ["{{ year }}" =>             // line 74
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", []), 'widget'), "{{ month }}" =>             // line 75
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", []), 'widget'), "{{ day }}" =>             // line 76
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", []), 'widget')]);
            // line 78
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 79
                echo "</div>";
            }
        }
    }

    // line 84
    public function block_time_widget($context, array $blocks = [])
    {
        // line 85
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 86
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 88
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 89
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 90
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 92
            echo "<div class=\"sr-only\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", []), 'label');
            echo "</div>";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", []), 'widget');
            // line 94
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", []), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", []), 'widget');
            }
            // line 95
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", []), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", []), 'widget');
            }
            // line 96
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 97
                echo "</div>";
            }
        }
    }

    // line 102
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        // line 103
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 104
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 106
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 107
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            // line 109
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 110
            echo twig_escape_filter($this->env, (((isset($context["table_class"]) || array_key_exists("table_class", $context))) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 113
            if ((isset($context["with_years"]) ? $context["with_years"] : null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "years", []), 'label');
                echo "</th>";
            }
            // line 114
            if ((isset($context["with_months"]) ? $context["with_months"] : null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "months", []), 'label');
                echo "</th>";
            }
            // line 115
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weeks", []), 'label');
                echo "</th>";
            }
            // line 116
            if ((isset($context["with_days"]) ? $context["with_days"] : null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "days", []), 'label');
                echo "</th>";
            }
            // line 117
            if ((isset($context["with_hours"]) ? $context["with_hours"] : null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hours", []), 'label');
                echo "</th>";
            }
            // line 118
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minutes", []), 'label');
                echo "</th>";
            }
            // line 119
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seconds", []), 'label');
                echo "</th>";
            }
            // line 120
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 124
            if ((isset($context["with_years"]) ? $context["with_years"] : null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "years", []), 'widget');
                echo "</td>";
            }
            // line 125
            if ((isset($context["with_months"]) ? $context["with_months"] : null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "months", []), 'widget');
                echo "</td>";
            }
            // line 126
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weeks", []), 'widget');
                echo "</td>";
            }
            // line 127
            if ((isset($context["with_days"]) ? $context["with_days"] : null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "days", []), 'widget');
                echo "</td>";
            }
            // line 128
            if ((isset($context["with_hours"]) ? $context["with_hours"] : null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hours", []), 'widget');
                echo "</td>";
            }
            // line 129
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minutes", []), 'widget');
                echo "</td>";
            }
            // line 130
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seconds", []), 'widget');
                echo "</td>";
            }
            // line 131
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 135
            if ((isset($context["with_invert"]) ? $context["with_invert"] : null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "invert", []), 'widget');
            }
            // line 136
            echo "</div>";
        }
    }

    // line 140
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 141
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control"))]);
        // line 142
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 145
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 146
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) {
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 148
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 149
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), "translation_domain" =>                 // line 150
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 154
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 157
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), "translation_domain" =>                 // line 158
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "</div>";
        }
    }

    // line 167
    public function block_choice_label($context, array $blocks = [])
    {
        // line 169
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => ""]))]);
        // line 170
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 173
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 177
    public function block_radio_label($context, array $blocks = [])
    {
        // line 178
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 183
    public function block_button_row($context, array $blocks = [])
    {
        // line 184
        echo "<div class=\"form-group\">";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 186
        echo "</div>";
    }

    // line 189
    public function block_choice_row($context, array $blocks = [])
    {
        // line 190
        $context["force_error"] = true;
        // line 191
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 194
    public function block_date_row($context, array $blocks = [])
    {
        // line 195
        $context["force_error"] = true;
        // line 196
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 199
    public function block_time_row($context, array $blocks = [])
    {
        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 204
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  588 => 206,  586 => 205,  583 => 204,  579 => 201,  577 => 200,  574 => 199,  570 => 196,  568 => 195,  565 => 194,  561 => 191,  559 => 190,  556 => 189,  552 => 186,  550 => 185,  548 => 184,  545 => 183,  541 => 178,  538 => 177,  534 => 174,  531 => 173,  527 => 170,  525 => 169,  522 => 167,  517 => 161,  511 => 158,  510 => 157,  509 => 156,  505 => 155,  501 => 154,  494 => 150,  493 => 149,  492 => 148,  488 => 147,  486 => 146,  483 => 145,  479 => 142,  477 => 141,  474 => 140,  469 => 136,  465 => 135,  460 => 131,  454 => 130,  448 => 129,  442 => 128,  436 => 127,  430 => 126,  424 => 125,  418 => 124,  413 => 120,  407 => 119,  401 => 118,  395 => 117,  389 => 116,  383 => 115,  377 => 114,  371 => 113,  366 => 110,  363 => 109,  361 => 108,  357 => 107,  355 => 106,  352 => 104,  350 => 103,  347 => 102,  341 => 97,  339 => 96,  332 => 95,  325 => 94,  323 => 93,  319 => 92,  314 => 90,  312 => 89,  310 => 88,  307 => 86,  305 => 85,  302 => 84,  296 => 79,  294 => 78,  292 => 76,  291 => 75,  290 => 74,  289 => 73,  285 => 70,  281 => 69,  277 => 68,  274 => 67,  269 => 65,  267 => 64,  265 => 63,  262 => 61,  260 => 60,  257 => 59,  252 => 55,  250 => 54,  248 => 53,  246 => 51,  242 => 50,  238 => 49,  234 => 48,  230 => 47,  226 => 46,  222 => 45,  220 => 44,  218 => 42,  216 => 41,  212 => 40,  210 => 39,  207 => 37,  205 => 36,  202 => 35,  197 => 31,  195 => 30,  193 => 29,  190 => 28,  185 => 24,  181 => 22,  175 => 20,  173 => 19,  171 => 18,  165 => 16,  163 => 15,  158 => 14,  155 => 13,  152 => 12,  150 => 11,  147 => 10,  143 => 7,  141 => 6,  138 => 5,  134 => 204,  131 => 203,  129 => 199,  126 => 198,  124 => 194,  121 => 193,  119 => 189,  116 => 188,  114 => 183,  111 => 182,  108 => 180,  106 => 177,  103 => 176,  101 => 173,  98 => 172,  96 => 167,  93 => 166,  90 => 164,  88 => 145,  85 => 144,  83 => 140,  81 => 102,  79 => 84,  76 => 83,  74 => 59,  71 => 58,  69 => 35,  66 => 34,  64 => 28,  61 => 27,  59 => 10,  56 => 9,  54 => 5,  51 => 4,  48 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_base_layout.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
