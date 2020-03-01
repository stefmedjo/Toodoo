<?php

/* @Main/Todo/form.html.twig */
class __TwigTemplate_6bcf1de01ff8a5015000d542465afaedae821a373eab2ac2bb350aa2f755239b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/template.html.twig", "@Main/Todo/form.html.twig", 1);
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
        echo "    New Todo
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
                        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "hasPreviousSession", [])) {
            // line 16
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", []), "get", [0 => "error"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 17
                echo "                                <div class=\"alert alert-danger\">
                                    ";
                // line 18
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                        ";
        }
        // line 22
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", []), 'label');
        echo "
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", []), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", []), 'label');
        echo "
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "category", []), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dueDate", []), 'label');
        echo "
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dueDate", []), 'widget');
        echo "
                            </div>
                            <div class=\"form-group text-right\">
                                <button class=\"btn btn-danger\" type=\"submit\">Save</button>
                            </div>
                        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "                
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Main/Todo/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  108 => 37,  104 => 36,  98 => 33,  94 => 32,  88 => 29,  84 => 28,  79 => 26,  73 => 22,  70 => 21,  61 => 18,  58 => 17,  53 => 16,  51 => 15,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Main/Todo/form.html.twig", "D:\\UwAmp\\UwAmp\\www\\todo\\src\\MainBundle\\Resources\\views\\Todo\\form.html.twig");
    }
}
