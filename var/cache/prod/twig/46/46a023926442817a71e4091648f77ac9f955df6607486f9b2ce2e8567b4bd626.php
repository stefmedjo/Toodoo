<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_d0155da923e8a8a146a10f53ec0c476c1f349c670a28ebc7aac4ee1346df58f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", []), "")) : ("")) . " form-horizontal"))]);
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        // line 11
        if (((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 19
    public function block_form_label_class($context, array $blocks = [])
    {
        // line 20
        echo "col-sm-2";
    }

    // line 25
    public function block_form_row($context, array $blocks = [])
    {
        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
    }

    // line 35
    public function block_submit_row($context, array $blocks = [])
    {
        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
    }

    // line 44
    public function block_reset_row($context, array $blocks = [])
    {
        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
    }

    // line 53
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 54
        echo "col-sm-10";
    }

    // line 57
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  218 => 64,  216 => 63,  214 => 62,  212 => 61,  208 => 60,  204 => 59,  198 => 58,  195 => 57,  191 => 54,  188 => 53,  184 => 50,  182 => 49,  180 => 48,  176 => 47,  172 => 46,  170 => 45,  167 => 44,  163 => 41,  161 => 40,  159 => 39,  155 => 38,  151 => 37,  149 => 36,  146 => 35,  142 => 32,  139 => 31,  137 => 30,  135 => 29,  131 => 28,  129 => 27,  123 => 26,  120 => 25,  116 => 20,  113 => 19,  108 => 15,  106 => 14,  101 => 12,  99 => 11,  96 => 10,  92 => 5,  90 => 4,  87 => 3,  83 => 57,  80 => 56,  78 => 53,  75 => 52,  73 => 44,  70 => 43,  68 => 35,  65 => 34,  63 => 25,  60 => 24,  57 => 22,  55 => 19,  52 => 18,  50 => 10,  47 => 9,  44 => 7,  42 => 3,  39 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_3_horizontal_layout.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
