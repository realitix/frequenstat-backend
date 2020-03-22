<?php

/* ::layout.html.twig */
class __TwigTemplate_7988df079e9be41f19e364961abcf0c80cea9dd25c6bbfc257643121c19f350f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t";
        // line 4
        $this->env->loadTemplate("head.html.twig")->display($context);
        // line 5
        echo "\t</head>
\t<body class=\"\">
\t\t";
        // line 8
        echo "
\t\t
\t\t";
        // line 10
        $this->env->loadTemplate("header.html.twig")->display($context);
        // line 11
        echo "\t\t";
        $this->env->loadTemplate("menu.html.twig")->display($context);
        // line 12
        echo "\t\t
\t\t<!-- MAIN PANEL -->
\t\t<div id=\"main\" role=\"main\">
\t\t
\t\t\t<!-- RIBBON -->
\t\t\t<div id=\"ribbon\">
\t\t
\t\t\t\t<span class=\"ribbon-button-alignment\"> <span class=\"fa fa-lg fa-fw fa-chevron-right\"></span></span>
\t\t
\t\t\t\t<!-- breadcrumb -->
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t";
        // line 23
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 26
        echo "\t\t\t\t</ol>
\t\t\t\t<!-- end breadcrumb -->
\t\t
\t\t\t\t<!-- You can also add more buttons to the
\t\t\t\tribbon for further usability
\t\t
\t\t\t\tExample below:
\t\t
\t\t\t\t<span class=\"ribbon-button-alignment pull-right\">
\t\t\t\t<span id=\"search\" class=\"btn btn-ribbon hidden-xs\" data-title=\"search\"><i class=\"fa-grid\"></i> Change Grid</span>
\t\t\t\t<span id=\"add\" class=\"btn btn-ribbon hidden-xs\" data-title=\"add\"><i class=\"fa-plus\"></i> Add</span>
\t\t\t\t<span id=\"search\" class=\"btn btn-ribbon\" data-title=\"search\"><i class=\"fa-search\"></i> <span class=\"hidden-mobile\">Search</span></span>
\t\t\t\t</span> -->
\t\t
\t\t\t</div>
\t\t\t<!-- END RIBBON -->
\t\t
\t\t    ";
        // line 43
        $this->env->loadTemplate("session.html.twig")->display($context);
        // line 44
        echo "\t\t    
\t\t\t";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t\t
\t\t</div>
\t\t<!-- END MAIN PANEL -->
\t\t
\t\t";
        // line 51
        $this->env->loadTemplate("foot.html.twig")->display($context);
        // line 52
        echo "\t\t
\t\t";
        // line 53
        $this->displayBlock('javascript', $context, $blocks);
        // line 55
        echo "
\t</body>

</html>";
    }

    // line 23
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t\t\t\t<li>Home</li>
\t\t\t\t\t";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "\t\t  \t";
    }

    // line 53
    public function block_javascript($context, array $blocks = array())
    {
        // line 54
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  118 => 53,  114 => 46,  111 => 45,  106 => 24,  96 => 55,  94 => 53,  91 => 52,  89 => 51,  83 => 47,  78 => 44,  76 => 43,  55 => 23,  39 => 11,  37 => 10,  29 => 5,  27 => 4,  22 => 1,  57 => 26,  54 => 10,  49 => 12,  46 => 10,  43 => 8,  40 => 7,  138 => 69,  130 => 63,  117 => 56,  113 => 55,  103 => 23,  97 => 44,  93 => 43,  81 => 45,  65 => 23,  51 => 12,  45 => 8,  42 => 12,  33 => 8,  30 => 3,);
    }
}
