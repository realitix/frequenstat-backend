<?php

/* TrackerPageBundle:Exportation:statBox.html.twig */
class __TwigTemplate_fe0b9b81d43a8c1a5df8215829508caf5b2865c4d34ac7a365b248422dbc82a8 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Exportation"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Exportation"), "html", null, true);
        echo " </span></h1>
\t\t</div>
\t</div>
\t
\t<div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"well\">
                <h1>Sélectionner les périodes à exporter</h1>
    \t        <form id=\"formDates\" class=\"smart-form\" method=\"GET\">
    \t            <header>Sélection des intervalles</header>
    \t            <fieldset>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col col-2\">
\t\t\t\t\t\t\t\t<label class=\"label\">Type de fichier</label>
\t\t\t\t\t\t\t\t<label class=\"select\">
\t\t\t\t\t\t\t\t\t<select name=\"export_type\">
\t\t\t\t\t\t\t\t\t    <option value=\"Excel2007\">Fichier Excel 2007 (.xlsx)</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Excel5\">Fichier Excel 5 (.xls)</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"CSV\">Fichier CSV</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col col-2\">
\t\t\t\t\t\t\t\t<label class=\"label\">Intervalle de découpage</label>
\t\t\t\t\t\t\t\t<label class=\"select\">
\t\t\t\t\t\t\t\t\t<select name=\"interval_type\">
\t\t\t\t\t\t\t\t\t    <option value=\"\">Automatique</option>
\t\t\t\t\t\t\t\t\t    <option value=\"minute\">Minute</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"hour\">Heure</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"day\">Jour</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"month\">Mois</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 51
            echo "\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"datetimepicker\" placeholder=\"Début\" type=\"text\" name=\"begin[]\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "begin"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"datetimepicker\" placeholder=\"Fin\" type=\"text\" name=\"end[]\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "end"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"datetimepicker\" placeholder=\"Début\" type=\"text\" name=\"begin[]\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"datetimepicker\" placeholder=\"Fin\" type=\"text\" name=\"end[]\" />
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
    \t\t\t\t<footer>
    \t\t\t\t    <input type=\"submit\" class=\"btn btn-primary pull-left\" value=\"Valider\" />
    \t\t\t\t    <a href=\"#\" id=\"buttonAddDate\" class=\"btn btn-primary pull-left\">Ajouter un intervalle</a>
    \t\t\t\t</footer>
    \t        </form>
            </div>

            ";
        // line 89
        if ((!(isset($context["validDates"]) ? $context["validDates"] : $this->getContext($context, "validDates")))) {
            // line 90
            echo "\t\t\t\t<div class=\"alert alert-danger fade in\">
\t\t\t\t\t<i class=\"fa-fw fa fa-times\"></i>
\t\t\t\t\t<strong>Erreur : </strong> Dates invalides 
\t\t\t\t</div>
\t\t\t";
        }
        // line 95
        echo "
\t\t\t";
        // line 96
        if ((!(isset($context["hasCapture"]) ? $context["hasCapture"] : $this->getContext($context, "hasCapture")))) {
            // line 97
            echo "\t\t\t\t<div class=\"alert alert-danger fade in\">
\t\t\t\t\t<i class=\"fa-fw fa fa-times\"></i>
\t\t\t\t\t<strong>Erreur : </strong> Aucun enregistrement dans l'intervalle 
\t\t\t\t</div>
\t\t\t";
        }
        // line 102
        echo "
        </div>
    </div>
</div>
";
    }

    // line 108
    public function block_javascript($context, array $blocks = array())
    {
        // line 109
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#buttonAddDate').on('click', function(e) {
        \te.preventDefault();
        \tvar fs = \$('#formDates fieldset:last-of-type');
        \tvar fs2 = fs.clone();
        \tfs.after(fs2);
        \t
        \t\$('.datetimepicker').datetimepicker({
        \t\tlang:'fr',
        \t\tformat: 'Y-m-d H:i'
        \t});
        \t\$('.datetimepicker').attr(\"autocomplete\", \"off\");
        });
        
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Exportation:statBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 109,  181 => 108,  173 => 102,  166 => 97,  164 => 96,  161 => 95,  154 => 90,  152 => 89,  142 => 81,  122 => 66,  111 => 60,  103 => 55,  97 => 51,  92 => 50,  51 => 12,  45 => 8,  42 => 7,  33 => 4,  30 => 3,);
    }
}
