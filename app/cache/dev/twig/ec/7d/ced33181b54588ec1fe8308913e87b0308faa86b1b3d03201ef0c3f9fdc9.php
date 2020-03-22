<?php

/* session.html.twig */
class __TwigTemplate_ec7dced33181b54588ec1fe8308913e87b0308faa86b1b3d03201ef0c3f9fdc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-info fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-info\"></i>
    \t<strong>Info</strong> ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "    <div class=\"alert alert-warning fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-warning\"></i>
    \t<strong>Attention</strong> ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "    <div class=\"alert alert-success fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-check\"></i>
    \t<strong>Succès</strong> ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "    <div class=\"alert alert-danger fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-times\"></i>
    \t<strong>Erreur</strong> ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  92 => 32,  85 => 30,  69 => 22,  62 => 20,  23 => 2,  303 => 120,  294 => 116,  288 => 115,  280 => 109,  277 => 108,  271 => 104,  267 => 103,  261 => 100,  257 => 99,  251 => 96,  247 => 95,  239 => 90,  235 => 89,  230 => 87,  226 => 86,  221 => 84,  217 => 83,  212 => 81,  208 => 80,  196 => 71,  192 => 70,  189 => 69,  183 => 66,  180 => 65,  178 => 64,  169 => 58,  161 => 52,  156 => 50,  152 => 49,  150 => 48,  147 => 47,  142 => 45,  136 => 43,  133 => 42,  128 => 40,  124 => 39,  122 => 38,  119 => 37,  110 => 34,  108 => 33,  105 => 32,  100 => 30,  86 => 25,  82 => 24,  80 => 23,  77 => 22,  72 => 20,  66 => 18,  52 => 13,  44 => 10,  35 => 7,  26 => 4,  73 => 19,  61 => 16,  58 => 15,  50 => 13,  48 => 12,  41 => 10,  34 => 7,  28 => 5,  25 => 4,  21 => 2,  31 => 6,  24 => 3,  88 => 31,  84 => 37,  74 => 33,  68 => 19,  63 => 17,  53 => 17,  47 => 21,  38 => 8,  19 => 1,  121 => 54,  118 => 53,  114 => 35,  111 => 45,  106 => 24,  96 => 29,  94 => 28,  91 => 27,  89 => 51,  83 => 47,  78 => 34,  76 => 27,  55 => 23,  39 => 10,  37 => 8,  29 => 5,  27 => 4,  22 => 1,  57 => 25,  54 => 14,  49 => 12,  46 => 12,  43 => 17,  40 => 9,  138 => 44,  130 => 63,  117 => 56,  113 => 55,  103 => 23,  97 => 44,  93 => 43,  81 => 45,  65 => 21,  51 => 12,  45 => 8,  42 => 11,  33 => 8,  30 => 7,);
    }
}
