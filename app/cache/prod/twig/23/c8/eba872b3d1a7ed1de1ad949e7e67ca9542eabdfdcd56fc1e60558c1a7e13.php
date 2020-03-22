<?php

/* TrackerAdminBundle:User:index.html.twig */
class __TwigTemplate_23c8eba872b3d1a7ed1de1ad949e7e67ca9542eabdfdcd56fc1e60558c1a7e13 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateurs"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateurs"), "html", null, true);
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
\t\t\t\t\t\t<h2>Liste des utilisateurs</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("tracker_admin_user_add");
        echo "\" class=\"btn btn-labeled btn-primary\">
\t\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"glyphicon glyphicon-plus\"></i></span>
\t\t\t\t\t\t\t\tCréer un nouvel utilisateur
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 32
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 33
            echo "\t\t\t\t\t\t\t<p>Retrouver ci dessous tous les utilisateurs.</p>
\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t<th>Société</th>
\t\t\t\t\t\t\t\t\t\t<th>Tel1</th>
\t\t\t\t\t\t\t\t\t\t<th>Date de création</th>
\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "lastName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "firstName"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "company"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "phoneNumber1"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "created"), "d/m/Y H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t    <td>
\t\t\t\t\t\t\t\t\t\t        <a title=\"Voir\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_user_view", array("id" => $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-circle\"><i class=\"glyphicon glyphicon-eye-open\"></i></a>
\t\t\t\t\t\t\t\t\t\t        <a title=\"Modifier\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_user_edit", array("id" => $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-circle\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t        <a title=\"Voir à la place\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_page_dashboard", array("_become_user" => $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "username"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-circle\"><i class=\"glyphicon glyphicon-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t\t    </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-info alert-block\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-fw fa fa-info\"></i>
\t\t\t\t\t\t\t\t\tIl n'y a aucun utilisateur.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 66
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
        return "TrackerAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 66,  144 => 61,  139 => 58,  129 => 54,  125 => 53,  121 => 52,  116 => 50,  112 => 49,  108 => 48,  102 => 47,  99 => 46,  95 => 45,  81 => 33,  79 => 32,  70 => 26,  53 => 12,  48 => 9,  45 => 8,  39 => 5,  32 => 4,  29 => 3,);
    }
}
