<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_386ba1734a585f7f97a8ae61bb16af15c7ae3b015a72f26bd0ace924f549df83 extends Twig_Template
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
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
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
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('choice_label', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('radio_label', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 106
        echo "
";
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('form_row', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('button_row', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('choice_row', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('date_row', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('time_row', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('radio_row', $context, $blocks);
        // line 156
        echo "
";
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 6
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter((isset($context["type"]) ? $context["type"] : null), [0 => "file", 1 => "hidden"]))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        // line 18
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (isset($context["money_pattern"]) ? $context["money_pattern"] : null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 19
        echo "    ";
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (isset($context["money_pattern"]) ? $context["money_pattern"] : null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 20
        echo "    ";
        if (((isset($context["prepend"]) ? $context["prepend"] : null) || (isset($context["append"]) ? $context["append"] : null))) {
            // line 21
            echo "        <div class=\"input-group\">
            ";
            // line 22
            if ((isset($context["prepend"]) ? $context["prepend"] : null)) {
                // line 23
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null));
                echo "</span>
            ";
            }
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if ((isset($context["append"]) ? $context["append"] : null)) {
                // line 27
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 36
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : (""))));
        // line 37
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            echo "<div class=\"checkbox\">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            echo "</div>";
        }
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 47
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : (""))));
        // line 48
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            echo "<div class=\"radio\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            echo "</div>";
        }
    }

    // line 59
    public function block_form_label($context, array $blocks = [])
    {
        // line 60
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " control-label"))]);
        // line 61
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 64
    public function block_choice_label($context, array $blocks = [])
    {
        // line 66
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 67
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 70
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 71
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["for" => (isset($context["id"]) ? $context["id"] : null)]);
        // line 73
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 76
    public function block_radio_label($context, array $blocks = [])
    {
        // line 77
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["for" => (isset($context["id"]) ? $context["id"] : null)]);
        // line 79
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 82
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 84
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 85
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 86
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 88
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 89
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)))]);
            }
            // line 91
            if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
                // line 92
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                    // line 93
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), ["%name%" =>                     // line 94
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                     // line 95
(isset($context["id"]) ? $context["id"] : null)]);
                } else {
                    // line 98
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                }
            }
            // line 101
            echo "<label";
            $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ["attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)];
            if (!is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217)) {
                throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217);
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 102
            echo (isset($context["widget"]) ? $context["widget"] : null);
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : null) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null))))) : ("")), "html", null, true);
            // line 103
            echo "</label>";
        }
    }

    // line 109
    public function block_form_row($context, array $blocks = [])
    {
        // line 110
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo " has-error";
        }
        echo "\">";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 114
        echo "</div>";
    }

    // line 117
    public function block_button_row($context, array $blocks = [])
    {
        // line 118
        echo "<div class=\"form-group\">";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 120
        echo "</div>";
    }

    // line 123
    public function block_choice_row($context, array $blocks = [])
    {
        // line 124
        $context["force_error"] = true;
        // line 125
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 128
    public function block_date_row($context, array $blocks = [])
    {
        // line 129
        $context["force_error"] = true;
        // line 130
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 133
    public function block_time_row($context, array $blocks = [])
    {
        // line 134
        $context["force_error"] = true;
        // line 135
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 138
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 139
        $context["force_error"] = true;
        // line 140
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 143
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 144
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo " has-error";
        }
        echo "\">";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 147
        echo "</div>";
    }

    // line 150
    public function block_radio_row($context, array $blocks = [])
    {
        // line 151
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo " has-error";
        }
        echo "\">";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 154
        echo "</div>";
    }

    // line 159
    public function block_form_errors($context, array $blocks = [])
    {
        // line 160
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 161
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 162
            echo "    <ul class=\"list-unstyled\">";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 164
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "</ul>
    ";
            // line 167
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  471 => 167,  468 => 166,  460 => 164,  456 => 163,  454 => 162,  448 => 161,  446 => 160,  443 => 159,  439 => 154,  437 => 153,  435 => 152,  429 => 151,  426 => 150,  422 => 147,  420 => 146,  418 => 145,  412 => 144,  409 => 143,  405 => 140,  403 => 139,  400 => 138,  396 => 135,  394 => 134,  391 => 133,  387 => 130,  385 => 129,  382 => 128,  378 => 125,  376 => 124,  373 => 123,  369 => 120,  367 => 119,  365 => 118,  362 => 117,  358 => 114,  356 => 113,  354 => 112,  352 => 111,  346 => 110,  343 => 109,  338 => 103,  334 => 102,  323 => 101,  319 => 98,  316 => 95,  315 => 94,  314 => 93,  312 => 92,  310 => 91,  307 => 89,  305 => 88,  302 => 86,  300 => 85,  298 => 84,  295 => 82,  291 => 79,  289 => 77,  286 => 76,  282 => 73,  280 => 71,  277 => 70,  273 => 67,  271 => 66,  268 => 64,  264 => 61,  262 => 60,  259 => 59,  254 => 53,  252 => 52,  250 => 51,  247 => 49,  245 => 48,  243 => 47,  240 => 46,  235 => 42,  233 => 41,  231 => 40,  228 => 38,  226 => 37,  224 => 36,  221 => 35,  216 => 31,  212 => 29,  206 => 27,  204 => 26,  202 => 25,  196 => 23,  194 => 22,  191 => 21,  188 => 20,  185 => 19,  183 => 18,  180 => 17,  176 => 14,  174 => 13,  171 => 12,  167 => 9,  164 => 7,  162 => 6,  159 => 5,  155 => 159,  152 => 158,  149 => 156,  147 => 150,  144 => 149,  142 => 143,  139 => 142,  137 => 138,  134 => 137,  132 => 133,  129 => 132,  127 => 128,  124 => 127,  122 => 123,  119 => 122,  117 => 117,  114 => 116,  112 => 109,  109 => 108,  106 => 106,  104 => 82,  101 => 81,  99 => 76,  96 => 75,  94 => 70,  91 => 69,  89 => 64,  86 => 63,  84 => 59,  81 => 58,  78 => 56,  76 => 46,  73 => 45,  71 => 35,  68 => 34,  66 => 17,  63 => 16,  61 => 12,  58 => 11,  56 => 5,  53 => 4,  50 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_3_layout.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
