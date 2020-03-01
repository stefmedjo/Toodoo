<?php

/* @Main/Todo/list.html.twig */
class __TwigTemplate_350d941e69987e6a08e8ca9f9bc670432d64eac7a960b5e826f456cdedb320d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/template.html.twig", "@Main/Todo/list.html.twig", 1);
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
        echo "    Todos
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

<div id=\"request-modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Toodoo</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\"><i class=\"icon ion-md-close\"></i></span>
                </button>
            </div>

            <div class=\"modal-body\">
                <p></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 offset-md-3\">

            <div class=\"row\">
                <div class=\"col-md-10 col-sm-10 text-left _title\">Todos</div>
                <div class=\"col-md-2 col-sm-2 text-right\">
                    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_create");
        echo "\" class=\"btn btn-danger\">Add</a>
                </div>
            </div>
            
            <div class=\"row mt-2\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 71
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : null)) > 0)) {
            echo "                            
                        <div class=\"card\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 75
                echo "                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-md-10 col-sm-10 text-left\">
                                                <a class=\"df-color\" href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_read", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
                echo "\">
                                                    ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "content", []), "html", null, true);
                echo "
                                                </a>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 text-right\">                                                    
                                                ";
                // line 83
                if (($this->getAttribute($context["e"], "isDone", []) == false)) {
                    // line 84
                    echo "                                                    <i todo-path=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_check");
                    echo "\" todo-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
                    echo "\" style=\"cursor: pointer;\" class=\"not-checked ion-ios-circle-outline\">
                                                    </i>
                                                ";
                } else {
                    // line 87
                    echo "                                                    <i class=\"icon ion-ios-checkmark text-success\"></i>
                                                ";
                }
                // line 88
                echo "  
                                                <img src=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("etc/loader/loader.gif"), "html", null, true);
                echo "\" class=\"hide\">                                                  
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\"> 
                                                ";
                // line 94
                if (($this->getAttribute($context["e"], "isDone", []) == false)) {
                    echo "                                                   
                                                    <a href=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_update", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
                    echo "\" class=\"actions\">
                                                        <i class=\"icon ion-android-create\"></i>
                                                    </a>
                                                ";
                }
                // line 99
                echo "                                                <a item-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_delete");
                echo "\" class=\"actions delete\">
                                                    <i class=\"icon ion-trash-a\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                            </ul>
                        </div>                             
                    ";
        } else {
            // line 109
            echo "                        <div class=\"text-center\">
                            No Todo yet created.
                        </div>
                    ";
        }
        // line 113
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Main/Todo/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 113,  194 => 109,  189 => 106,  173 => 99,  166 => 95,  162 => 94,  154 => 89,  151 => 88,  147 => 87,  138 => 84,  136 => 83,  129 => 79,  125 => 78,  120 => 75,  116 => 74,  110 => 71,  101 => 65,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Main/Todo/list.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\src\\MainBundle\\Resources\\views\\Todo\\list.html.twig");
    }
}
