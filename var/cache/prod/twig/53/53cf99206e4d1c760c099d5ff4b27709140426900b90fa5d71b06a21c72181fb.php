<?php

/* @KnpPaginator/Pagination/font_awesome_sortable_link.html.twig */
class __TwigTemplate_31609303e5bb82ee2c435109b4b7f057fb685702dff96088ccb210303f5184c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 9
        echo "
<a";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-right\">
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "sort"], "method") == (isset($context["key"]) ? $context["key"] : null))) {
            // line 13
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "direction"], "method") == "desc")) {
                // line 14
                echo "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 16
                echo "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 21
        echo "    </span>
    ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/font_awesome_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  58 => 21,  54 => 19,  51 => 18,  47 => 16,  43 => 14,  40 => 13,  38 => 12,  22 => 10,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@KnpPaginator/Pagination/font_awesome_sortable_link.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\font_awesome_sortable_link.html.twig");
    }
}
