<?php

/* menu.html.twig */
class __TwigTemplate_ba115733fd9d8b88c293448ce496b23cc25bb32799bbadcea3d8b38544a4281c extends Twig_Template
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
        $context["r"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 2
        echo "
";
        // line 3
        $context["classDashboard"] = "";
        // line 4
        if (((isset($context["r"]) ? $context["r"] : null) == "tracker_page_dashboard")) {
            echo " 
    ";
            // line 5
            $context["classDashboard"] = "active";
            echo " 
";
        }
        // line 7
        echo "
";
        // line 8
        $context["classAnalysisAnalyze"] = "";
        // line 9
        if (((isset($context["r"]) ? $context["r"] : null) == "tracker_page_analysis_analyze")) {
            echo " 
    ";
            // line 10
            $context["classAnalysisAnalyze"] = "active";
            echo " 
";
        }
        // line 12
        echo "
";
        // line 13
        $context["classAnalysisCompare2"] = "";
        // line 14
        if (((isset($context["r"]) ? $context["r"] : null) == "tracker_page_analysis_compare2")) {
            echo " 
    ";
            // line 15
            $context["classAnalysisCompare2"] = "active";
            echo " 
";
        }
        // line 17
        echo "
";
        // line 18
        $context["classAnalysisCompare3"] = "";
        // line 19
        if (((isset($context["r"]) ? $context["r"] : null) == "tracker_page_analysis_compare3")) {
            echo " 
    ";
            // line 20
            $context["classAnalysisCompare3"] = "active";
            echo " 
";
        }
        // line 22
        echo "
";
        // line 23
        $context["classAnalysisCompare4"] = "";
        // line 24
        if (((isset($context["r"]) ? $context["r"] : null) == "tracker_page_analysis_compare4")) {
            echo " 
    ";
            // line 25
            $context["classAnalysisCompare4"] = "active";
            echo " 
";
        }
        // line 27
        echo "
";
        // line 28
        $context["classExportation"] = "";
        // line 29
        if (((isset($context["r"]) ? $context["r"] : null) == "tracker_page_exportation_export")) {
            echo " 
    ";
            // line 30
            $context["classExportation"] = "active";
            echo " 
";
        }
        // line 32
        echo "
";
        // line 33
        $context["classRealtime"] = "";
        // line 34
        if (((isset($context["r"]) ? $context["r"] : null) == "tracker_page_realtime_index")) {
            echo " 
    ";
            // line 35
            $context["classRealtime"] = "active";
            echo " 
";
        }
        // line 37
        echo "
";
        // line 38
        $context["classTicket"] = "";
        // line 39
        if (((((isset($context["r"]) ? $context["r"] : null) == "tracker_ticket_ticket_index") || ((isset($context["r"]) ? $context["r"] : null) == "tracker_ticket_ticket_add")) || ((isset($context["r"]) ? $context["r"] : null) == "tracker_ticket_ticket_view"))) {
            echo " 
    ";
            // line 40
            $context["classTicket"] = "active";
            echo " 
";
        }
        // line 42
        echo "
";
        // line 43
        $context["classAdminUser"] = "";
        // line 44
        if ((((((isset($context["r"]) ? $context["r"] : null) == "tracker_admin_user_index") || ((isset($context["r"]) ? $context["r"] : null) == "tracker_admin_user_add")) || ((isset($context["r"]) ? $context["r"] : null) == "tracker_admin_user_view")) || ((isset($context["r"]) ? $context["r"] : null) == "tracker_admin_user_edit"))) {
            echo " 
    ";
            // line 45
            $context["classAdminUser"] = "active";
            echo " 
";
        }
        // line 47
        echo "
";
        // line 48
        $context["classAdminTicket"] = "";
        // line 49
        if ((((isset($context["r"]) ? $context["r"] : null) == "tracker_admin_ticket_index") || ((isset($context["r"]) ? $context["r"] : null) == "tracker_admin_ticket_view"))) {
            echo " 
    ";
            // line 50
            $context["classAdminTicket"] = "active";
            echo " 
";
        }
        // line 52
        echo "
<aside id=\"left-panel\">
\t<div class=\"login-info\">
\t\t<span> 
\t\t\t<a href=\"#\" onclick=\"return false\" style=\"text-transform:none\">
\t\t\t\t<i class=\"fa fa-lg fa-fw fa-user\" ></i>
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "email"), 24), "html", null, true);
        echo " 
\t\t\t</a>
\t\t</span>
\t</div>
\t<nav>
\t\t<ul>
\t\t\t";
        // line 64
        if ($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 65
            echo "\t\t\t\t<li>
\t\t\t\t\t<a class=\"alert-danger\" href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("tracker_page_dashboard", array("_become_user" => "_exit"));
            echo "\" title=\"Redevenir admin\"><i class=\"fa fa-lg fa-fw fa-repeat\"></i> <span class=\"menu-item-parent\">Redevenir admin</span></a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 69
        echo "\t\t\t
\t\t\t<li class=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["classDashboard"]) ? $context["classDashboard"] : null), "html", null, true);
        echo "\">
\t\t\t\t<a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("tracker_page_dashboard");
        echo "\" title=\"Dashboard\"><i class=\"fa fa-lg fa-fw fa-home\"></i> <span class=\"menu-item-parent\">Dashboard</span></a>
\t\t\t</li>
\t\t\t
\t\t\t<li>
\t\t\t\t<a href=\"#\">
    \t\t\t\t<i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> 
    \t\t\t\t<span class=\"menu-item-parent\">Analyses</span>
\t\t\t\t</a>
\t\t\t\t<ul>
\t\t\t\t    <li class=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["classAnalysisAnalyze"]) ? $context["classAnalysisAnalyze"] : null), "html", null, true);
        echo "\">
        \t\t\t\t<a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("tracker_page_analysis_analyze");
        echo "\" title=\"Analyser une période\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Analyser</span></a>
        \t\t\t</li>
    \t\t\t\t<li class=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["classAnalysisCompare2"]) ? $context["classAnalysisCompare2"] : null), "html", null, true);
        echo "\">
        \t\t\t\t<a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("tracker_page_analysis_compare2");
        echo "\" title=\"Comparer deux périodes\"><i class=\"fa fa-lg fa-fw fa-code-fork\"></i> <span class=\"menu-item-parent\">Comparer deux</span></a>
        \t\t\t</li>
        \t\t\t<li class=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["classAnalysisCompare3"]) ? $context["classAnalysisCompare3"] : null), "html", null, true);
        echo "\">
        \t\t\t\t<a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("tracker_page_analysis_compare3");
        echo "\" title=\"Comparer trois périodes\"><i class=\"fa fa-lg fa-fw fa-code-fork\"></i> <span class=\"menu-item-parent\">Comparer trois</span></a>
        \t\t\t</li>
        \t\t\t<li class=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["classAnalysisCompare4"]) ? $context["classAnalysisCompare4"] : null), "html", null, true);
        echo "\">
        \t\t\t\t<a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("tracker_page_analysis_compare4");
        echo "\" title=\"Comparer quatre périodes\"><i class=\"fa fa-lg fa-fw fa-code-fork\"></i> <span class=\"menu-item-parent\">Comparer quatre</span></a>
        \t\t\t</li>
\t\t\t\t</ul>
    \t\t</li>
    \t\t
    \t\t<li class=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["classExportation"]) ? $context["classExportation"] : null), "html", null, true);
        echo "\">
\t\t\t\t<a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("tracker_page_exportation_export");
        echo "\" title=\"Exportation\"><i class=\"fa fa-lg fa-fw fa-download\"></i> <span class=\"menu-item-parent\">Exportation</span></a>
\t\t\t</li>
\t\t\t
\t\t\t<li class=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["classRealtime"]) ? $context["classRealtime"] : null), "html", null, true);
        echo "\">
\t\t\t\t<a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("tracker_page_realtime_index");
        echo "\" title=\"Temps réel\"><i class=\"fa fa-lg fa-fw fa-bolt\"></i> <span class=\"menu-item-parent\">Temps réel</span></a>
\t\t\t</li>
\t\t\t
\t\t\t<li class=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["classTicket"]) ? $context["classTicket"] : null), "html", null, true);
        echo "\">
\t\t\t\t<a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("tracker_ticket_ticket_index");
        echo "\" title=\"Tickets\"><i class=\"fa fa-lg fa-fw fa-list-alt\"></i> <span class=\"menu-item-parent\">Tickets</span></a>
\t\t\t</li>
\t\t\t
\t\t\t";
        // line 108
        echo "\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 109
            echo "\t\t\t    <li>
    \t\t\t\t<a href=\"#\">
        \t\t\t\t<i class=\"fa fa-lg fa-fw fa-user\"></i> 
        \t\t\t\t<span class=\"menu-item-parent\">Administration</span>
    \t\t\t\t</a>
    \t\t\t\t<ul>
    \t\t\t\t    <li class=\"";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["classAdminUser"]) ? $context["classAdminUser"] : null), "html", null, true);
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("tracker_admin_user_index");
            echo "\">Utilisateurs</a></li>
    \t\t\t\t    <li class=\"";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["classAdminTicket"]) ? $context["classAdminTicket"] : null), "html", null, true);
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("tracker_admin_ticket_index");
            echo "\">Tickets</a></li>
    \t\t\t\t</ul>
    \t\t\t</li>
\t\t\t";
        }
        // line 120
        echo "\t\t</ul>
\t</nav>
\t<span class=\"minifyme\"> <i class=\"fa fa-arrow-circle-left hit\"></i> </span>

</aside>
<!-- END NAVIGATION -->";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 120,  294 => 116,  288 => 115,  280 => 109,  277 => 108,  271 => 104,  267 => 103,  261 => 100,  257 => 99,  251 => 96,  247 => 95,  239 => 90,  235 => 89,  230 => 87,  226 => 86,  221 => 84,  217 => 83,  212 => 81,  208 => 80,  196 => 71,  192 => 70,  189 => 69,  183 => 66,  180 => 65,  178 => 64,  169 => 58,  161 => 52,  156 => 50,  152 => 49,  150 => 48,  147 => 47,  142 => 45,  136 => 43,  133 => 42,  128 => 40,  124 => 39,  122 => 38,  119 => 37,  110 => 34,  108 => 33,  105 => 32,  100 => 30,  86 => 25,  82 => 24,  80 => 23,  77 => 22,  72 => 20,  68 => 19,  66 => 18,  63 => 17,  52 => 13,  44 => 10,  38 => 8,  35 => 7,  26 => 4,  73 => 19,  61 => 16,  58 => 15,  53 => 14,  50 => 13,  48 => 12,  41 => 10,  34 => 7,  28 => 5,  25 => 4,  21 => 2,  31 => 6,  24 => 3,  19 => 1,  121 => 54,  118 => 53,  114 => 35,  111 => 45,  106 => 24,  96 => 29,  94 => 28,  91 => 27,  89 => 51,  83 => 47,  78 => 44,  76 => 43,  55 => 23,  39 => 11,  37 => 8,  29 => 5,  27 => 4,  22 => 1,  57 => 26,  54 => 14,  49 => 12,  46 => 10,  43 => 17,  40 => 9,  138 => 44,  130 => 63,  117 => 56,  113 => 55,  103 => 23,  97 => 44,  93 => 43,  81 => 45,  65 => 23,  51 => 12,  45 => 8,  42 => 12,  33 => 8,  30 => 5,);
    }
}
