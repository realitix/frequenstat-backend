<?php

/* TrackerPageBundle:Analysis:noPlace.html.twig */
class __TwigTemplate_7e8ac6605475404bbd0f7b235e8af6177ae120ef9e04052a53b3c62ffd68d24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TrackerPageBundle::layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TrackerPageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "\t<li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil"), "html", null, true);
        echo "</li><li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vue d'ensemble"), "html", null, true);
        echo "</li>
";
    }

    // line 7
    public function block_page_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"content\">

\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-4\">
\t\t\t<h1 class=\"page-title txt-color-blueDark\"><i class=\"fa-fw fa fa-home\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Pas de point de vente"), "html", null, true);
        echo " </span></h1>
\t\t</div>
\t</div>
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Analysis:noPlace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  44 => 8,  41 => 7,  32 => 4,  29 => 3,);
    }
}
