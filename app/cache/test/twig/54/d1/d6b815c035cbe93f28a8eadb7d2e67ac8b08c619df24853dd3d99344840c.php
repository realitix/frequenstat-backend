<?php

/* TrackerAdminBundle:Ticket:index.html.twig */
class __TwigTemplate_54d1d6b815c035cbe93f28a8eadb7d2e67ac8b08c619df24853dd3d99344840c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TrackerAdminBundle::layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TrackerAdminBundle::layout.html.twig";
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
    public function block_admin_body($context, array $blocks = array())
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
\t\t\t\t\t\t\t";
        // line 26
        if ((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets"))) {
            // line 27
            echo "\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t    <th>Client</th>
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
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t    ";
                $context["class"] = "";
                // line 42
                echo "\t\t\t\t\t\t\t\t\t    ";
                if ((!$this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "closed"))) {
                    echo " ";
                    $context["class"] = "warning";
                    echo " ";
                }
                // line 43
                echo "\t\t\t\t\t\t\t\t\t    ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "messages"), "isEmpty"))) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t        ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "messages"), "last"), "user"), "id") != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t            ";
                        $context["class"] = "success";
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t        ";
                    }
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t    ";
                }
                // line 48
                echo "\t\t\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t\t\t\t<tr class=\"";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "user"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "user"), "lastName"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "name"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "messages"), "count"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "typeDescription"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "created"), "d/m/Y H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 55
                if ($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "closed")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "closed"), "d/m/Y H:i"), "html", null, true);
                } else {
                    echo "Ouvert";
                }
                echo "</td>
\t\t\t\t\t\t\t\t\t\t    <td><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_ticket_view", array("id" => $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-circle\"><i class=\"glyphicon glyphicon-pencil\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-info alert-block\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-fw fa fa-info\"></i>
\t\t\t\t\t\t\t\t\tAucun ticket.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 67
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
        return "TrackerAdminBundle:Ticket:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 67,  167 => 62,  162 => 59,  153 => 56,  145 => 55,  141 => 54,  137 => 53,  133 => 52,  129 => 51,  123 => 50,  119 => 49,  116 => 48,  113 => 47,  110 => 46,  107 => 45,  104 => 44,  101 => 43,  94 => 42,  91 => 41,  87 => 40,  72 => 27,  70 => 26,  53 => 12,  48 => 9,  45 => 8,  39 => 5,  32 => 4,  29 => 3,);
    }
}
