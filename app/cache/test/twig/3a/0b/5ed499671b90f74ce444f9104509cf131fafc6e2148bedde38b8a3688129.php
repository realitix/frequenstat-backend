<?php

/* TrackerAdminBundle:User:view.html.twig */
class __TwigTemplate_3a0b5ed499671b90f74ce444f9104509cf131fafc6e2148bedde38b8a3688129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TrackerAdminBundle::layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'admin_body' => array($this, 'block_admin_body'),
            'javascript' => array($this, 'block_javascript'),
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
\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tracker_admin_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateurs"), "html", null, true);
        echo "</a></li>
\t<li>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "</li>
";
    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"content\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-4\">
\t\t\t<h1 class=\"page-title txt-color-blueDark\"><i class=\"fa-fw fa fa-table\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
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
\t\t\t\t\t\t<h2>Propiétés de ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t    <li>Id: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Clé de sécurité: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "securityKey"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Prénom: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Nom: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Société: ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "company"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Tel1: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber1"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Tel2: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber2"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Adresse: ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Date de création: ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created"), "d/m/Y H:i"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t    <li>Date de modification: ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "modified"), "d/m/Y H:i"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</section>
\t
\t<section id=\"widget-grid\" class=\"\">
\t\t<div class=\"row\">
\t\t\t<article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<div class=\"jarviswidget jarviswidget-color-blueDark\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<span class=\"widget-icon\"><i class=\"fa fa-table\"></i></span>
\t\t\t\t\t\t<h2>Points de vente</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_place_add", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-labeled btn-primary\">
\t\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"glyphicon glyphicon-plus\"></i></span>
\t\t\t\t\t\t\t\tCréer un nouveau point de vente
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "places"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 62
            echo "\t\t\t\t\t\t\t    <hr />
\t\t\t\t\t\t\t    <h3>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "name"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_place_edit", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"))), "html", null, true);
            echo "\">(Modifier)</a></h3>
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <h4>Propriétés :</h4>
\t\t\t\t\t\t\t    <ul>
\t\t\t\t\t\t\t        <li>Nom: ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "name"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t        <li>Adresse: ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "address"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t        <li>Date de création: ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "created"), "d/m/Y H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t        <li>Date de modification: ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "modified"), "d/m/Y H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t        <li>Type: ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "typeName"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <h4>Configurations :</h4>
\t\t\t\t\t\t\t    <ul>
    \t\t\t\t\t\t\t    ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "configurations"));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 77
                echo "    \t\t\t\t\t\t\t        <li>
    \t\t\t\t\t\t\t            ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "configuration"), "name"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "content"), "html", null, true);
                echo " 
    \t\t\t\t\t\t\t            (<a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_place_deleteConfiguration", array("id" => $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "id"))), "html", null, true);
                echo "\">Supprimer</a>)
    \t\t\t\t\t\t\t                
                                        </li>
    \t\t\t\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    \t\t\t\t\t\t\t    <li>
    \t\t\t\t\t\t\t        <a href=\"#\" class=\"addConfigurationLink\">Ajouter une configuration</a>
    \t\t\t\t\t\t\t        <form class=\"hidden\" method=\"POST\" action=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_place_addConfiguration", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"))), "html", null, true);
            echo "\">
    \t\t\t\t\t\t\t            <select name=\"configurationId\">
                                                ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configurations"]) ? $context["configurations"] : $this->getContext($context, "configurations")));
            foreach ($context['_seq'] as $context["_key"] => $context["conf"]) {
                // line 88
                echo "                                                    <option class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "contentType"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "name"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conf"]) ? $context["conf"] : $this->getContext($context, "conf")), "description"), "html", null, true);
                echo ")</option>
    \t\t\t\t\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    \t\t\t\t\t\t\t            </select>
    \t\t\t\t\t\t\t            <input type=\"text\" placeholder=\"Valeur\" name=\"content\" />
    \t\t\t\t\t\t\t            <input type=\"submit\" class=\"btn btn-primary btn-xs\"/>
    \t\t\t\t\t\t\t        </form>
    \t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t    
\t\t\t\t\t\t\t    <h4>Liste des boxes :<a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_box_add", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"))), "html", null, true);
            echo "\">(Créer une nouvelle box)</a></h4>
\t\t\t\t\t\t        ";
            // line 98
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "boxes"));
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 99
                echo "\t\t\t\t\t\t            <h5>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "name"), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_box_edit", array("id" => $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "id"))), "html", null, true);
                echo "\">(Modifier)</a></h5>
\t\t\t\t\t\t            <ul>
\t\t\t\t\t\t                <li>Numéro de série: ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "serialNumber"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t                <li>Version: ";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "version"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t                <li>Date de création: ";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "created"), "d/m/Y H:i"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t            <li>Date de modification: ";
                // line 104
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "modified"), "d/m/Y H:i"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t            </ul>
\t\t\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</section>
</div>
";
    }

    // line 117
    public function block_javascript($context, array $blocks = array())
    {
        // line 118
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('.addConfigurationLink').on('click', function(event) {
            event.preventDefault();
            var form = \$(this).next();
            \$(this).hide();
            form.show();
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "TrackerAdminBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 118,  307 => 117,  296 => 108,  290 => 107,  281 => 104,  277 => 103,  273 => 102,  269 => 101,  261 => 99,  257 => 98,  253 => 97,  244 => 90,  229 => 88,  225 => 87,  220 => 85,  216 => 83,  206 => 79,  200 => 78,  197 => 77,  193 => 76,  185 => 71,  181 => 70,  177 => 69,  173 => 68,  169 => 67,  160 => 63,  157 => 62,  153 => 61,  145 => 56,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  77 => 23,  62 => 13,  57 => 10,  54 => 9,  46 => 6,  40 => 5,  33 => 4,  30 => 3,);
    }
}
