<?php

/* TrackerPageBundle:Realtime:index.html.twig */
class __TwigTemplate_8a90a73fba86b23ec37f2500160586a901a0bbf8980aa214ad76f216f543cfd9 extends Twig_Template
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
        echo "\t<li>Accueil</li><li>Temps réel</li>
";
    }

    // line 7
    public function block_page_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"content\">

\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-4\">
\t\t\t<h1 class=\"page-title txt-color-blueDark\"><i class=\"fa-fw fa fa-home\"></i> Temps réel </span></h1>
\t\t</div>
\t</div>
\t
\t";
        // line 16
        if ((!(isset($context["placeOk"]) ? $context["placeOk"] : null))) {
            // line 17
            echo "\t    <div class=\"alert alert-warning\">
\t        <i class=\"fa fa-fw fa-warning\"></i>
\t        <strong>Attention</strong>
\t        Ce point de vente ne permet pas l'affichage en temps réel.
\t    </div>
\t";
        } elseif ((!(isset($context["confOk"]) ? $context["confOk"] : null))) {
            // line 23
            echo "\t    <div class=\"alert alert-warning\">
\t        <i class=\"fa fa-fw fa-warning\"></i>
\t        <strong>Attention</strong>
\t        Vous ne possédez pas l'option temps réel pour ce point de vente.
\t    </div>
\t";
        } else {
            // line 29
            echo "    \t<section>
    \t\t<div class=\"row\">
    \t\t\t<article class=\"col-sm-12\">
    \t\t\t\t<div class=\"jarviswidget\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
    \t\t\t\t\t<header>
    \t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
    \t\t\t\t\t\t<h2>Affichage temps réel</h2>
    \t\t\t\t\t</header>
    \t\t\t\t\t<div class=\"widget-body\">
    \t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t<div class=\"no-padding-bottom\">
    \t\t\t\t\t\t\t\t<div class=\"row no-space\">
    \t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
    \t\t\t\t\t\t\t\t\t\t<div id=\"flot-placeholder-realtime\" class=\"chart-large txt-color-blue\"></div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</article>
    \t\t</div>
    \t</section>
\t";
        }
        // line 53
        echo "</div>
";
    }

    // line 56
    public function block_javascript($context, array $blocks = array())
    {
        // line 57
        echo "<script type=\"text/javascript\">
\t\$(\"#flot-placeholder-realtime\").frequenStatChartRealtime({
\t    captureUrl: '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_ajax_capture_getLastMinute", array("id" => $this->getAttribute((isset($context["place"]) ? $context["place"] : null), "id"))), "html", null, true);
        echo "'
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Realtime:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 59,  103 => 57,  100 => 56,  95 => 53,  69 => 29,  61 => 23,  53 => 17,  51 => 16,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
