<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_1ae48e242f3f2322f4bfd301cc5ddf15ed82a3030f16f2d24722293984f8319d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'seo' => [$this, 'block_seo'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "\tUne erreur est survenue.
";
    }

    // line 5
    public function block_seo($context, array $blocks = [])
    {
        // line 6
        echo "    <meta name=\"robots\" content=\"nnoindex, nofollow\">
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "    <div id=\"notfound\">
\t\t<div class=\"notfound\">
\t\t\t<div class=\"notfound-404\">
                <h3>Oops! Contenu non trouvé.</h3>
\t\t\t\t<h1><span>4</span><span>0</span><span>4</span></h1>
\t\t\t</div>
\t\t\t<h2>Désolé, la page que vous voulez atteindre est introuvable</h2>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\app\\Resources\\TwigBundle\\views\\Exception\\error404.html.twig");
    }
}
