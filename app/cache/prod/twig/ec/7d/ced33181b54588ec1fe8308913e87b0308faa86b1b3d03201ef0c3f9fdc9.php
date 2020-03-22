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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-info fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-info\"></i>
    \t<strong>Info</strong> ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "    <div class=\"alert alert-warning fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-warning\"></i>
    \t<strong>Attention</strong> ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "    <div class=\"alert alert-success fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-check\"></i>
    \t<strong>Succès</strong> ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "    <div class=\"alert alert-danger fade in\">
    \t<button class=\"close\" data-dismiss=\"alert\">
    \t\t×
    \t</button>
    \t<i class=\"fa-fw fa fa-times\"></i>
    \t<strong>Erreur</strong> ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
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
        return array (  99 => 37,  92 => 32,  85 => 30,  76 => 27,  69 => 22,  65 => 21,  62 => 20,  46 => 12,  39 => 10,  30 => 7,  23 => 2,  88 => 31,  84 => 37,  78 => 34,  74 => 33,  68 => 30,  57 => 25,  47 => 21,  42 => 11,  38 => 18,  19 => 1,  82 => 30,  79 => 29,  75 => 23,  72 => 22,  66 => 31,  63 => 28,  61 => 28,  55 => 24,  53 => 17,  50 => 21,  48 => 20,  35 => 10,  28 => 5,  26 => 4,  21 => 1,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
