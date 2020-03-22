<?php

/* header.html.twig */
class __TwigTemplate_30017ba8b27aeb02a2ac60f952d96c4803797e56dc40c1a689f21affcf172c66 extends Twig_Template
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
        echo "<!-- HEADER -->
<header id=\"header\">
\t<div id=\"logo-group\">
\t\t<span id=\"logo\"> <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"FrequenStat\"> </span>
\t</div>

\t<div id=\"project-context\">
\t\t";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TrackerPlaceBundle:Place:listMenu", array("user" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))));
        echo "
\t</div>

\t<div class=\"pull-right\">
\t\t<div id=\"hide-menu\" class=\"btn-header pull-right\">
\t\t\t<span> <a href=\"#\" onclick=\"return false;\" title=\"Cacher le menu\"><i class=\"fa fa-reorder\"></i></a> </span>
\t\t</div>

\t\t<div id=\"logout\" class=\"btn-header transparent pull-right\">
\t\t\t<span> <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" title=\"Se déconnecter\"><i class=\"fa fa-sign-out\"></i></a> </span>
\t\t</div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  24 => 4,  88 => 38,  84 => 37,  74 => 33,  68 => 30,  63 => 28,  53 => 24,  47 => 21,  38 => 18,  19 => 1,  121 => 54,  118 => 53,  114 => 46,  111 => 45,  106 => 24,  96 => 55,  94 => 53,  91 => 52,  89 => 51,  83 => 47,  78 => 34,  76 => 43,  55 => 23,  39 => 11,  37 => 10,  29 => 5,  27 => 4,  22 => 1,  57 => 25,  54 => 10,  49 => 12,  46 => 10,  43 => 17,  40 => 7,  138 => 69,  130 => 63,  117 => 56,  113 => 55,  103 => 23,  97 => 44,  93 => 43,  81 => 45,  65 => 23,  51 => 12,  45 => 8,  42 => 19,  33 => 8,  30 => 3,);
    }
}
