<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_e66328c6cfe6fcee487d89a1c5e3df80ea8c66ef5257bbbec0dfba029732803a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9' => [$this, 'block___internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == (isset($context["index"]) ? $context["index"] : null))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if (((isset($context["num_exceptions"]) ? $context["num_exceptions"] : null) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, (((isset($context["num_exceptions"]) ? $context["num_exceptions"] : null) - (isset($context["index"]) ? $context["index"] : null)) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["num_exceptions"]) ? $context["num_exceptions"] : null), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class", []), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace", []))) {
            // line 21
            echo "                <pre class=\"stacktrace\">";
            // line 22
            echo twig_escape_filter($this->env,             $this->renderBlock("__internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9", $context, $blocks), "html");
            // line 25
            echo "                </pre>
                ";
        }
        // line 27
        echo "            </td>
        </tr>
    </tbody>
</table>
";
    }

    // line 22
    public function block___internal_d5afdb4d416834b87583c682b00d8753600b7f187c0622c823982651738f61f9($context, array $blocks = [])
    {
        // line 23
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", ["exception" => (isset($context["exception"]) ? $context["exception"] : null), "format" => "html"], false);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  84 => 22,  76 => 27,  72 => 25,  70 => 22,  68 => 21,  66 => 20,  60 => 17,  51 => 11,  47 => 10,  42 => 9,  34 => 7,  32 => 6,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/traces_text.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces_text.html.twig");
    }
}
