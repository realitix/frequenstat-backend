<?php

/* TrackerTicketBundle:Ticket:index.html.twig */
class __TwigTemplate_9ea5c04fa842287c0e58adac51b90715f3d0daa6d4a1398aca64922544bf5f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TrackerTicketBundle::layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'ticket_body' => array($this, 'block_ticket_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TrackerTicketBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tracker_page_dashboard");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil"), "html", null, true);
        echo "</a></li>
\t<li>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tickets"), "html", null, true);
        echo "</li>
";
    }

    // line 8
    public function block_ticket_body($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"content\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-4\">
\t\t\t<h1 class=\"page-title txt-color-blueDark\"><i class=\"fa-fw fa fa-table\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tickets"), "html", null, true);
        echo " </span></h1>
\t\t</div>
\t</div>
\t
\t<section id=\"widget-grid\" class=\"\">
\t\t<div class=\"row\">
\t\t\t<article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<div class=\"jarviswidget jarviswidget-color-blueDark\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<span class=\"widget-icon\"><i class=\"fa fa-table\"></i></span>
\t\t\t\t\t\t<h2>Liste des tickets</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("tracker_ticket_ticket_add");
        echo "\" class=\"btn btn-labeled btn-primary\">
\t\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"glyphicon glyphicon-plus\"></i></span>
\t\t\t\t\t\t\t\tOuvrir un nouveau ticket
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 32
        if ((isset($context["tickets"]) ? $context["tickets"] : null)) {
            // line 33
            echo "\t\t\t\t\t\t\t<p>Retrouver ci dessous tous vos tickets.</p>
\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t<th>Réponses</th>
\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de création</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de fermeture</th>
\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t    ";
                $context["class"] = "";
                // line 48
                echo "\t\t\t\t\t\t\t\t\t    ";
                if ((!$this->getAttribute((isset($context["t"]) ? $context["t"] : null), "closed"))) {
                    echo " ";
                    $context["class"] = "warning";
                    echo " ";
                }
                // line 49
                echo "\t\t\t\t\t\t\t\t\t    ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "messages"), "isEmpty"))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t        ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "messages"), "last"), "user"), "id") != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id"))) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t            ";
                        $context["class"] = "success";
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t        ";
                    }
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t    ";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t\t<tr class=\"";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "name"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "messages"), "count"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "typeDescription"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "created"), "d/m/Y H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 60
                if ($this->getAttribute((isset($context["t"]) ? $context["t"] : null), "closed")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "closed"), "d/m/Y H:i"), "html", null, true);
                } else {
                    echo "Ouvert";
                }
                echo "</td>
\t\t\t\t\t\t\t\t\t\t    <td><a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_ticket_ticket_view", array("id" => $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-circle\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-info alert-block\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-fw fa fa-info\"></i>
\t\t\t\t\t\t\t\t\tVous n'avez aucun ticket.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</section>
</div>
";
    }

    public function getTemplateName()
    {
        return "TrackerTicketBundle:Ticket:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 72,  170 => 67,  165 => 64,  156 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  125 => 54,  122 => 53,  119 => 52,  116 => 51,  113 => 50,  110 => 49,  103 => 48,  100 => 47,  96 => 46,  81 => 33,  79 => 32,  70 => 26,  53 => 12,  48 => 9,  45 => 8,  39 => 5,  32 => 4,  29 => 3,);
    }
}
