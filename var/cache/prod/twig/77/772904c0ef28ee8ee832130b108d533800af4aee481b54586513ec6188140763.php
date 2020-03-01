<?php

/* :tools:navbar.html.twig */
class __TwigTemplate_0876ac03e4a2084e3d0d9a9e70dc4bb72077c5702644cc055f4f64622ac6d901 extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark navbar-red\">
  <div class=\"container\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_list");
        echo "\" class=\"nav-link\">Categories</a>
        </li>
        <li class=\"nav-item\">
          <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_list");
        echo "\" class=\"nav-link\">Todos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return ":tools:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":tools:navbar.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\app/Resources\\views/tools/navbar.html.twig");
    }
}
