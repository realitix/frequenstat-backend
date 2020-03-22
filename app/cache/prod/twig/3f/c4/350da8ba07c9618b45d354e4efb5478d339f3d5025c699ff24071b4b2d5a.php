<?php

/* ::layout_clean.html.twig */
class __TwigTemplate_3fc4350da8ba07c9618b45d354e4efb5478d339f3d5025c699ff24071b4b2d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
\t<body id=\"login\" class=\"animated fadeInDown\">
\t
\t\t<header id=\"header\">
\t\t\t<div id=\"logo-group\" style=\"width: auto; height: auto;\">
\t\t\t\t<span id=\"logo\" style=\"width: auto; height: auto; margin-top:18px;\"> <a href=\"http://frequenstat.com\"><img style=\"width: auto;\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"FrequenStat\"></a></span>
\t\t\t</div>
\t\t</header>

\t\t<!-- MAIN PANEL -->
\t\t<div id=\"main\" role=\"main\">
\t\t
\t\t\t<!-- MAIN CONTENT -->
\t\t\t<div id=\"content\" class=\"container\">
\t\t\t
\t\t\t    ";
        // line 20
        $this->env->loadTemplate("session.html.twig")->display($context);
        // line 21
        echo "\t\t\t
    \t\t\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            
\t\t\t</div>
\t\t</div>
\t\t
\t\t";
        // line 28
        $this->env->loadTemplate("foot.html.twig")->display($context);
        // line 29
        echo "\t\t";
        $this->displayBlock('javascript', $context, $blocks);
        // line 31
        echo "\t\t
\t</body>
</html>";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "                ";
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        // line 30
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::layout_clean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  79 => 29,  75 => 23,  72 => 22,  66 => 31,  63 => 29,  61 => 28,  55 => 24,  53 => 22,  50 => 21,  48 => 20,  35 => 10,  28 => 5,  26 => 4,  21 => 1,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
