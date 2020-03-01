<?php

/* MainBundle:Category:read.html.twig */
class __TwigTemplate_08da588a2e2b7d311ac8069884a724ebc6e8e19ad27b7c0ffcc41210e8a637ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/template.html.twig", "MainBundle:Category:read.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 offset-md-4\">
                
                
                <div class=\"item\">
                    <div>
                        <a class=\"title\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_read", ["id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", [])]), "html", null, true);
        echo "\">
                            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", []), "html", null, true);
        echo "
                        </a>
                    </div>
                    <div>
                        ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "todos", [])) == 0)) {
            // line 19
            echo "                            No todo in this category.
                        ";
        } else {
            // line 21
            echo "                            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "todos", [])), "html", null, true);
            echo "
                        ";
        }
        // line 23
        echo "                    </div>
                </div>
                
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Category:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 21,  62 => 19,  60 => 18,  53 => 14,  49 => 13,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MainBundle:Category:read.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\src\\MainBundle/Resources/views/Category/read.html.twig");
    }
}
