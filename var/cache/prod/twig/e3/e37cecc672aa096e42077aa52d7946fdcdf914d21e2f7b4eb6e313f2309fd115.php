<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_9c2af6c8977c6b0233d52ec458254db719373a38d48a49c2dd802861df26d11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error.html.twig", 1);
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
        echo "<meta name=\"robots\" content=\"nnoindex, nofollow\">
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "    <div id=\"notfound\">
\t\t<div class=\"notfound\">
\t\t\t<div class=\"notfound-404\">
\t\t\t\t<h3>Oops! Contenu non trouvé.</h3>
\t\t\t</div>
\t\t\t<h2>Désolé, la page que vous voulez atteindre est introuvable</h2>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:error.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
