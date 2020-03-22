<?php

/* TrackerPageBundle:Dashboard:index.html.twig */
class __TwigTemplate_1b07e7877e5098cee4c827fd80278f08e08744d493982c85bb9f59fc4e46d3fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TrackerPageBundle::layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'page_body' => array($this, 'block_page_body'),
            'javascript' => array($this, 'block_javascript'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vue d'ensemble"), "html", null, true);
        echo " </span></h1>
\t\t</div>
\t</div>
\t
\t<section id=\"widget-grid\">

\t\t<div class=\"row\">
\t\t\t<article class=\"col-sm-12\">
\t\t\t\t<div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
\t\t\t\t\t\t<h2>Bienvenue ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</header>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tVous trouverez ici les informations récapitulatives sur tous vos points de ventes.
\t\t\t\t\t\t\t\tCi dessous les informations générales puis les informations détaillées.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Etat général: Aucun problème</li>
\t\t\t\t\t\t\t\t<li>Nombre de Smartphones détectés: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["global"]) ? $context["global"] : null), "stations"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "\t\t\t\t<article class=\"col-sm-6\">
\t\t\t\t\t<div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
\t\t\t\t\t\t\t<h2>Point de vente: ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name"), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t</header>
\t
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Etat : Inconnu</li>
\t\t\t\t\t\t\t\t\t<li>Dernière mise à jour : ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "modified"), "d/m/Y à H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t<li>Nombre de Smartphones détectés: ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stations"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t</div>
\t\t
\t</section>
</div>
";
    }

    // line 69
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 69,  130 => 63,  117 => 56,  113 => 55,  103 => 48,  97 => 44,  93 => 43,  81 => 34,  65 => 23,  51 => 12,  45 => 8,  42 => 7,  33 => 4,  30 => 3,);
    }
}
