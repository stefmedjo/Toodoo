<?php

/* @KnpPaginator/Pagination/bulma_pagination.html.twig */
class __TwigTemplate_b7d3fe87ee8542515a5742b0430a029e336ca18485badbdf802c7f0deaecadfd extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["position"] = (((isset($context["position"]) || array_key_exists("position", $context))) ? (_twig_default_filter((isset($context["position"]) ? $context["position"] : null), "left")) : ("left"));
        // line 4
        $context["rounded"] = (((isset($context["rounded"]) || array_key_exists("rounded", $context))) ? (_twig_default_filter((isset($context["rounded"]) ? $context["rounded"] : null), false)) : (false));
        // line 5
        $context["size"] = (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : null), null)) : (null));
        // line 6
        echo "
";
        // line 7
        $context["classes"] = [0 => "pagination"];
        // line 8
        echo "
";
        // line 9
        if (((isset($context["position"]) ? $context["position"] : null) != "left")) {
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => ("is-" . (isset($context["position"]) ? $context["position"] : null))]);
        }
        // line 10
        if ((isset($context["rounded"]) ? $context["rounded"] : null)) {
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => "is-rounded"]);
        }
        // line 11
        if (((isset($context["size"]) ? $context["size"] : null) != null)) {
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => ("is-" . (isset($context["size"]) ? $context["size"] : null))]);
        }
        // line 12
        echo "
";
        // line 13
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 14
            echo "    <nav class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " "), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 16
                echo "            <a class=\"pagination-previous\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 18
                echo "            <a class=\"pagination-previous\" disabled>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 22
                echo "            <a class=\"pagination-next\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 24
                echo "            <a class=\"pagination-next\" disabled>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 26
            echo "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if (((isset($context["current"]) ? $context["current"] : null) == (isset($context["first"]) ? $context["first"] : null))) {
                // line 30
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : null), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["first"]) ? $context["first"] : null)])), "html", null, true);
                echo "\">1</a>
                ";
            } else {
                // line 32
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["first"]) ? $context["first"] : null)])), "html", null, true);
                echo "\">1</a>
                ";
            }
            // line 34
            echo "            </li>

            ";
            // line 36
            if ((($this->getAttribute((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null), 0, [], "array") - (isset($context["first"]) ? $context["first"] : null)) >= 2)) {
                // line 37
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "                ";
                if ((((isset($context["first"]) ? $context["first"] : null) != $context["page"]) && ($context["page"] != (isset($context["last"]) ? $context["last"] : null)))) {
                    // line 44
                    echo "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == (isset($context["current"]) ? $context["current"] : null))) {
                        // line 46
                        echo "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : null), "html", null, true);
                        echo "\" aria-current=\"page\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 48
                        echo "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 50
                    echo "                    </li>
                ";
                }
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if ((((isset($context["last"]) ? $context["last"] : null) - $this->getAttribute((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null), (twig_length_filter($this->env, (isset($context["pagesInRange"]) ? $context["pagesInRange"] : null)) - 1), [], "array")) >= 2)) {
                // line 55
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            echo "
            <li>
                ";
            // line 61
            if (((isset($context["current"]) ? $context["current"] : null) == (isset($context["last"]) ? $context["last"] : null))) {
                // line 62
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : null), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["last"]) ? $context["last"] : null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : null), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 64
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), [(isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["last"]) ? $context["last"] : null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : null), "html", null, true);
                echo "</a>
                ";
            }
            // line 66
            echo "            </li>
        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 66,  198 => 64,  188 => 62,  186 => 61,  182 => 59,  176 => 55,  174 => 54,  171 => 53,  165 => 52,  161 => 50,  151 => 48,  141 => 46,  139 => 45,  136 => 44,  133 => 43,  129 => 42,  126 => 41,  120 => 37,  118 => 36,  114 => 34,  108 => 32,  100 => 30,  98 => 29,  93 => 26,  87 => 24,  79 => 22,  77 => 21,  74 => 20,  68 => 18,  60 => 16,  58 => 15,  53 => 14,  51 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  33 => 8,  31 => 7,  28 => 6,  26 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@KnpPaginator/Pagination/bulma_pagination.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\bulma_pagination.html.twig");
    }
}
