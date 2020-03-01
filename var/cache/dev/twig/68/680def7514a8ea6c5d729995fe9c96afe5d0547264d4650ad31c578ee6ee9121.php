<?php

/* @Main/Todo/list.html.twig */
class __TwigTemplate_918f78717147b5e20e39ceb41cdf9f2d61397c48bd1ff3a39ba645c35134352d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Todo/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Todo/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Todos
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            echo "                            
                        <div class=\"card\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  230 => 113,  224 => 109,  219 => 106,  203 => 99,  196 => 95,  192 => 94,  184 => 89,  181 => 88,  177 => 87,  168 => 84,  166 => 83,  159 => 79,  155 => 78,  150 => 75,  146 => 74,  140 => 71,  131 => 65,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"templates/template.html.twig\" %}
{% block title %}
    Todos
{% endblock %}
{% block body %}


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
                    <a href=\"{{ path(\"todo_create\") }}\" class=\"btn btn-danger\">Add</a>
                </div>
            </div>
            
            <div class=\"row mt-2\">
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    {% if entities|length > 0 %}                            
                        <div class=\"card\">
                            <ul class=\"list-group list-group-flush\">
                                {% for e in entities %}
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-md-10 col-sm-10 text-left\">
                                                <a class=\"df-color\" href=\"{{ path(\"todo_read\",{'id': e.id }) }}\">
                                                    {{ e.content }}
                                                </a>
                                            </div>
                                            <div class=\"col-md-2 col-sm-2 text-right\">                                                    
                                                {% if e.isDone == false %}
                                                    <i todo-path=\"{{ path(\"todo_check\") }}\" todo-id=\"{{ e.id }}\" style=\"cursor: pointer;\" class=\"not-checked ion-ios-circle-outline\">
                                                    </i>
                                                {% else %}
                                                    <i class=\"icon ion-ios-checkmark text-success\"></i>
                                                {% endif %}  
                                                <img src=\"{{ asset(\"etc/loader/loader.gif\") }}\" class=\"hide\">                                                  
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\"> 
                                                {% if e.isDone == false %}                                                   
                                                    <a href=\"{{ path(\"todo_update\",{'id': e.id }) }}\" class=\"actions\">
                                                        <i class=\"icon ion-android-create\"></i>
                                                    </a>
                                                {% endif %}
                                                <a item-id=\"{{ e.id }}\" href=\"{{ path('todo_delete') }}\" class=\"actions delete\">
                                                    <i class=\"icon ion-trash-a\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>                             
                    {% else %}
                        <div class=\"text-center\">
                            No Todo yet created.
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "@Main/Todo/list.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\src\\MainBundle\\Resources\\views\\Todo\\list.html.twig");
    }
}
