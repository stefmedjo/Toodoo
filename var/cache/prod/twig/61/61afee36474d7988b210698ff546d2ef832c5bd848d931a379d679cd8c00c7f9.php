<?php

/* templates/admin_template.html.twig */
class __TwigTemplate_33a929a8a2ec21babc495e033550e33dd0cbdb0c73c0c370f29504429d0957d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/template.html.twig", "templates/admin_template.html.twig", 1);
        $this->blocks = [
            'seo' => [$this, 'block_seo'],
            'wrapper' => [$this, 'block_wrapper'],
            '_title_' => [$this, 'block__title_'],
            '_btns_' => [$this, 'block__btns_'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
    public function block_seo($context, array $blocks = [])
    {
        // line 3
        echo "  <meta name=\"robots\" content=\"noindex,nofollow\">
  <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("etc/date/date.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_wrapper($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $this->loadTemplate("tools/admin_navbar.html.twig", "templates/admin_template.html.twig", 7)->display($context);
        // line 8
        echo "        <div class=\"header-block pt-5 pb-5 mb-5\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-10 col-sm-12 fs-md\">
                ";
        // line 12
        $this->displayBlock('_title_', $context, $blocks);
        // line 13
        echo "              </div>
              <div class=\"col-md-2 col-sm-12\">
                ";
        // line 15
        $this->displayBlock('_btns_', $context, $blocks);
        // line 16
        echo "              </div>
            </div>
          </div>
        </div>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
    }

    // line 12
    public function block__title_($context, array $blocks = [])
    {
    }

    // line 15
    public function block__btns_($context, array $blocks = [])
    {
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        // line 21
        echo "        ";
    }

    // line 23
    public function block_js($context, array $blocks = [])
    {
        // line 24
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("etc/date/date.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("etc/main/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "templates/admin_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  95 => 24,  92 => 23,  88 => 21,  85 => 20,  80 => 15,  75 => 12,  71 => 20,  65 => 16,  63 => 15,  59 => 13,  57 => 12,  51 => 8,  48 => 7,  45 => 6,  39 => 4,  36 => 3,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templates/admin_template.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\app\\Resources\\views\\templates\\admin_template.html.twig");
    }
}
