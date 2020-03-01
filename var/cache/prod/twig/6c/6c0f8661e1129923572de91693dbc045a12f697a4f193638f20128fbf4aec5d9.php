<?php

/* @Main/Category/list.html.twig */
class __TwigTemplate_73d68f0f4e10dff963f7caaba5b6cd534b1d8affd2925db7fec963f8e7e803d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/template.html.twig", "@Main/Category/list.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "templates/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "    Categories
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "
    
<div id=\"delete-modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\">Toodoo</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\"><i class=\"icon ion-md-close\"></i></span>
            </button>
        </div>
        <form 
        action=\"#\" 
        method=\"POST\">
            <div class=\"modal-body\">
                <p>
                    Do you really want to delete this item?
                </p>
                <input 
                type=\"hidden\" 
                name=\"id\"
                />
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                <button type=\"submit\" class=\"btn btn-danger\">Yes</button>
            </div>
        </form>
        </div>
    </div>
</div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 offset-md-4\">
                
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 43
            echo "                    <div class=\"item\">
                        <div>
                            <a class=\"title\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_read", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\">
                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", []), "html", null, true);
            echo "
                            </a>
                        </div>
                        <div>
                            ";
            // line 50
            if ((twig_length_filter($this->env, $this->getAttribute($context["e"], "todos", [])) == 0)) {
                // line 51
                echo "                                No todo in this category.
                            ";
            } else {
                // line 53
                echo "                                ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["e"], "todos", [])), "html", null, true);
                echo "
                            ";
            }
            // line 55
            echo "                        </div>
                        <div>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_update", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "\">Edit</a>
                            <a item-id=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_delete");
            echo "\" class=\"delete\">Delete</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Main/Category/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 62,  117 => 58,  113 => 57,  109 => 55,  103 => 53,  99 => 51,  97 => 50,  90 => 46,  86 => 45,  82 => 43,  78 => 42,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Main/Category/list.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\src\\MainBundle\\Resources\\views\\Category\\list.html.twig");
    }
}
