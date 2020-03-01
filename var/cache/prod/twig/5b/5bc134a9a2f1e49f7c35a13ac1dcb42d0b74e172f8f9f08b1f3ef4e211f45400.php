<?php

/* base.html.twig */
class __TwigTemplate_2360889748a3e97fc5b56aebff0b4f6be4924a0b80f020cb06aadedfeb728902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/template.html.twig", "base.html.twig", 1);
        $this->blocks = [
            'wrapper' => [$this, 'block_wrapper'],
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
    public function block_wrapper($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        $this->loadTemplate("tools/navbar.html.twig", "base.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "    ";
        $this->loadTemplate("tools/footer.html.twig", "base.html.twig", 6)->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  43 => 4,  38 => 6,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\app\\Resources\\views\\base.html.twig");
    }
}
