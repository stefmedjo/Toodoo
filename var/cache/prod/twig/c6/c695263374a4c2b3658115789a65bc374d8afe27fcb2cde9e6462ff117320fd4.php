<?php

/* MainBundle:Todo:read.html.twig */
class __TwigTemplate_6cbb55eb3b054f13a8e44ac30d5fe155687af1a9fd6f99af3d7bcf4dee29bf35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/template.html.twig", "MainBundle:Todo:read.html.twig", 1);
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
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", []), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">               
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"details\">
                            <div class=\"label\">Content</div>
                            <div class=\"value\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", []), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"details\">
                            <div class=\"label\">Due date</div>
                            <div class=\"value\">";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dueDate", []), "m/d/Y"), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"details\">
                            <div class=\"label\">Status</div>
                            <div class=\"value\">
                                ";
        // line 22
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "isDone", [])) {
            // line 23
            echo "                                    Done.
                                ";
        } else {
            // line 25
            echo "                                    Not yet done.
                                ";
        }
        // line 27
        echo "                            </div>
                        </div>
                        ";
        // line 29
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", [])) {
            // line 30
            echo "                        <div class=\"details\">
                            <div class=\"label\">
                                Category
                            </div>
                            <div class=\"value\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_read", ["id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", []), "id", [])]), "html", null, true);
            echo "\">
                                    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category", []), "name", []), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>
                        ";
        }
        // line 41
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Todo:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  93 => 36,  89 => 35,  82 => 30,  80 => 29,  76 => 27,  72 => 25,  68 => 23,  66 => 22,  58 => 17,  51 => 13,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MainBundle:Todo:read.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\src\\MainBundle/Resources/views/Todo/read.html.twig");
    }
}
