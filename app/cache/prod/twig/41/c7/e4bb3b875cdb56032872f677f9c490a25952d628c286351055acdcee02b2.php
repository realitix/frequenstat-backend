<?php

/* TrackerPageBundle:Analysis:statBox/statBox.html.twig */
class __TwigTemplate_41c7e4bb3b875cdb56032872f677f9c490a25952d628c286351055acdcee02b2 extends Twig_Template
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
\t";
        // line 16
        if (((isset($context["nbDates"]) ? $context["nbDates"] : null) > 1)) {
            // line 17
            echo "\t    ";
            $this->env->loadTemplate("TrackerPageBundle:Analysis:statBox/formMultiple.html.twig")->display($context);
            // line 18
            echo "\t";
        } else {
            // line 19
            echo "\t    ";
            $this->env->loadTemplate("TrackerPageBundle:Analysis:statBox/formUnique.html.twig")->display($context);
            // line 20
            echo "\t";
        }
        // line 21
        echo "\t
    ";
        // line 22
        if ((isset($context["validDates"]) ? $context["validDates"] : null)) {
            // line 23
            echo "        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"well\">
                    <h1>
                        <a href=\"#\" class=\"btn btn-labeled btn-success\" id=\"displayFormInterval\">
    \t                    <span class=\"btn-label\"><i class=\"glyphicon glyphicon-pencil\"></i></span>
    \t                    Modifier
    \t                </a>
    \t                Intervalle sélectionné: <br /> 
    \t                ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 33
                echo "    \t                    Période ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo " : Du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), array(), "array"), "begin"), "Y-m-d H:i"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), array(), "array"), "end"), "Y-m-d H:i"), "html", null, true);
                echo " <br />
    \t                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    \t           </h1>
                </div>
            </div>
        </div>
\t";
        }
        // line 40
        echo "\t<hr />
\t
\t";
        // line 42
        if ((!(isset($context["validDates"]) ? $context["validDates"] : null))) {
            // line 43
            echo "\t    <section>
\t        <div class=\"row\">
\t            <article class=\"col-sm-12\">
\t                <div class=\"alert alert-info fade in\">
\t                    <i class=\"fa fa-fw fa-info\"></i>
\t                    <strong>Information </strong>
\t                    Sélectionnez un intervalle.
\t                </div>
\t            </article>
\t        </div>
\t    </section>
\t";
        } else {
            // line 55
            echo "\t    ";
            $context["ok"] = true;
            // line 56
            echo "\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 57
                echo "\t        ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), array(), "array"), "hasCapture"))) {
                    // line 58
                    echo "\t            ";
                    $context["ok"] = false;
                    // line 59
                    echo "    \t        <section>
        \t        <div class=\"row\">
        \t            <article class=\"col-sm-12\">
        \t                <div class=\"alert alert-info fade in\">
        \t                    <i class=\"fa fa-fw fa-info\"></i>
        \t                    <strong>Information </strong>
        \t                    Aucune information pour la première période sélectionnée.
        \t                </div>
        \t            </article>
        \t        </div>
        \t    </section>
\t        ";
                }
                // line 71
                echo "        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 72
                echo "            ";
                $context["ok"] = false;
                // line 73
                echo "\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t    
\t    ";
            // line 75
            if ((isset($context["ok"]) ? $context["ok"] : null)) {
                // line 76
                echo "\t    
    \t    <section>
        \t
        \t\t<div class=\"row\">
        \t\t\t<article class=\"col-sm-12\">
        \t\t\t\t<div class=\"jarviswidget\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
        \t\t\t\t\t<header>
        \t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
        \t\t\t\t\t\t<h2>Passage horaire</h2>
        \t\t\t\t\t</header>
        
    \t\t\t\t\t\t<div class=\"widget-body\">
    \t\t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t\t<div class=\"no-padding-bottom\">
    \t\t\t\t\t\t\t\t\t<div class=\"row no-space\">
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
    \t\t\t\t\t\t\t\t\t\t\t<div id=\"flot-placeholder-count\" class=\"chart-large txt-color-blue\"></div>
    \t\t\t\t\t\t\t\t\t\t\t";
                // line 93
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 94
                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["style"] = "margin-bottom: 5px; margin-top: 5px;";
                    // line 95
                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        $context["style"] = ((isset($context["style"]) ? $context["style"] : null) . " margin-top: 20px");
                    }
                    // line 96
                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t<h2 style=\"";
                    echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : null), "html", null, true);
                    echo "\">Nombre total de passages";
                    if (((isset($context["nbDates"]) ? $context["nbDates"] : null) > 1)) {
                        echo " dans la période ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    }
                    echo " : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "countChart"), "captures"), "sum"), "html", null, true);
                    echo "</h2>
    \t\t\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</article>
        \t\t</div>
        \t\t
        \t\t<div class=\"row\">
        \t\t\t<article class=\"col-sm-12\">
        \t\t\t\t<div class=\"jarviswidget\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
        \t\t\t\t\t<header>
        \t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
        \t\t\t\t\t\t<h2>Taux d'entrée horaire</h2>
        \t\t\t\t\t</header>
        
    \t\t\t\t\t\t<div class=\"widget-body\">
    \t\t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t\t<div class=\"no-padding-bottom\">
    \t\t\t\t\t\t\t\t\t<div class=\"row no-space\">
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
    \t\t\t\t\t\t\t\t\t\t\t<div id=\"flot-placeholder-ratio\" class=\"chart-large txt-color-blue\"></div>
    \t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 122
                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["style"] = "margin-bottom: 5px; margin-top: 5px;";
                    // line 123
                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        $context["style"] = ((isset($context["style"]) ? $context["style"] : null) . " margin-top: 20px");
                    }
                    // line 124
                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t<h2 style=\"";
                    echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : null), "html", null, true);
                    echo "\">Nombre total d'entrées";
                    if (((isset($context["nbDates"]) ? $context["nbDates"] : null) > 1)) {
                        echo "  dans la période ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    }
                    echo " : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "ratioChart"), "sumEntry"), "html", null, true);
                    echo "</h2>
    \t\t\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</article>
        \t\t</div>
        \t\t
        \t\t<div class=\"row\">
        \t\t    ";
                // line 136
                $context["class"] = ("col-sm-" . (twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : null)) * 3));
                // line 137
                echo "        \t\t    ";
                if ((twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : null)) == 3)) {
                    // line 138
                    echo "        \t\t        ";
                    $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " col-sm-offset-1");
                    // line 139
                    echo "        \t\t    ";
                }
                // line 140
                echo "        \t\t    ";
                if ((twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : null)) == 1)) {
                    // line 141
                    echo "        \t\t        ";
                    $context["class"] = "col-sm-4";
                    // line 142
                    echo "        \t\t    ";
                }
                // line 143
                echo "        \t\t\t<article class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\">
        \t\t\t\t<div class=\"jarviswidget\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
        \t\t\t\t\t<header>
        \t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
        \t\t\t\t\t\t<h2>Taux d'entrées</h2>
        \t\t\t\t\t</header>
        
    \t\t\t\t\t\t<div class=\"widget-body\">
    \t\t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t\t<div class=\"no-padding-bottom\">
    \t\t\t\t\t\t\t\t    ";
                // line 153
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 154
                    echo "    \t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                    echo twig_escape_filter($this->env, (12 / twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : null))), "html", null, true);
                    echo "\">
    \t\t\t\t\t\t\t\t\t\t\t<div id=\"flot-placeholder-ratio-pie-";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "\" class=\"chart-large txt-color-blue\"></div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</article>
        \t\t\t
        \t\t\t<article class=\"";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\">
        \t\t\t\t<div class=\"jarviswidget\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
        \t\t\t\t\t<header>
        \t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
        \t\t\t\t\t\t<h2>Taux de retour</h2>
        \t\t\t\t\t</header>
        
    \t\t\t\t\t\t<div class=\"widget-body\">
    \t\t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t\t<div class=\"no-padding-bottom\">
    \t\t\t\t\t\t\t\t    ";
                // line 174
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 175
                    echo "    \t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                    echo twig_escape_filter($this->env, (12 / twig_length_filter($this->env, (isset($context["dates"]) ? $context["dates"] : null))), "html", null, true);
                    echo "\">
    \t\t\t\t\t\t\t\t\t\t\t<div id=\"flot-placeholder-redemption-pie-";
                    // line 176
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo "\" class=\"chart-large txt-color-blue\"></div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</article>
        \t\t</div>
        \t\t
        \t\t<div class=\"row\">
        \t\t\t<article class=\"col-sm-12\">
        \t\t\t\t<div class=\"jarviswidget\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">
        \t\t\t\t\t<header>
        \t\t\t\t\t\t<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>
        \t\t\t\t\t\t<h2>Temps de présence moyen horaire</h2>
        \t\t\t\t\t</header>
        
    \t\t\t\t\t\t<div class=\"widget-body\">
    \t\t\t\t\t\t\t<div class=\"tab-content\">
    \t\t\t\t\t\t\t\t<div class=\"no-padding-bottom\">
    \t\t\t\t\t\t\t\t\t<div class=\"row no-space\">
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
    \t\t\t\t\t\t\t\t\t\t\t<div id=\"flot-placeholder-average-time\" class=\"chart-large txt-color-blue\"></div>
    \t\t\t\t\t\t\t\t\t\t\t    ";
                // line 200
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 201
                    echo "        \t\t\t\t\t\t\t\t\t\t\t    ";
                    $context["sumTime"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "averageTimeChart"), "sumTime");
                    // line 202
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["s"] = ((isset($context["sumTime"]) ? $context["sumTime"] : null) + (60 * 60));
                    // line 203
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["hours"] = ((isset($context["s"]) ? $context["s"] : null) / 3600);
                    // line 204
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["remainder"] = ((isset($context["s"]) ? $context["s"] : null) % 3600);
                    // line 205
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["minutes"] = ((isset($context["remainder"]) ? $context["remainder"] : null) / 60);
                    // line 206
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["seconds"] = ((isset($context["remainder"]) ? $context["remainder"] : null) % 60);
                    // line 207
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 208
                    $context["style"] = "margin-bottom: 5px; margin-top: 5px;";
                    // line 209
                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t    ";
                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                        $context["style"] = ((isset($context["style"]) ? $context["style"] : null) . " margin-top: 20px");
                    }
                    // line 210
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t
        \t\t\t\t\t\t\t\t\t\t\t\t<h2 style=\"";
                    // line 211
                    echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : null), "html", null, true);
                    echo "\">
        \t\t\t\t\t\t\t\t\t\t\t\t\tMoyenne globale";
                    // line 212
                    if (((isset($context["nbDates"]) ? $context["nbDates"] : null) > 1)) {
                        echo "  pour la période ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    }
                    echo " : 
        \t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 213
                    if (((isset($context["sumTime"]) ? $context["sumTime"] : null) == 0)) {
                        // line 214
                        echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t    Aucune entrée
        \t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif (((isset($context["s"]) ? $context["s"] : null) >= (60 * 60))) {
                        // line 216
                        echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["sumTime"]) ? $context["sumTime"] : null), "G"), "html", null, true);
                        echo " heure";
                        if (((isset($context["hours"]) ? $context["hours"] : null) >= 2)) {
                            echo "s";
                        }
                        echo " et
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 217
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["sumTime"]) ? $context["sumTime"] : null), "i"), "html", null, true);
                        echo " minute";
                        if (((isset($context["minutes"]) ? $context["minutes"] : null) >= 2)) {
                            echo "s";
                        }
                        // line 218
                        echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 219
                        echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["sumTime"]) ? $context["sumTime"] : null), "i"), "html", null, true);
                        echo " minute";
                        if (((isset($context["minutes"]) ? $context["minutes"] : null) >= 2)) {
                            echo "s";
                        }
                        echo " et 
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 220
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["sumTime"]) ? $context["sumTime"] : null), "s"), "html", null, true);
                        echo " seconde";
                        if (((isset($context["seconds"]) ? $context["seconds"] : null) >= 2)) {
                            echo "s";
                        }
                        // line 221
                        echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 222
                    echo "        \t\t\t\t\t\t\t\t\t\t\t\t</h2>
    \t\t\t\t\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</article>
        \t\t</div>
        \t\t
        \t</section>
\t    
\t    
\t    ";
            }
            // line 237
            echo "\t";
        }
        // line 238
        echo "</div>
";
    }

    // line 241
    public function block_javascript($context, array $blocks = array())
    {
        // line 242
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function() {
        
        // transforme le hidden en hide jquery
        \$('.hidden').hide().removeClass('hidden');
        
        ";
        // line 250
        echo "        var sInterval  = \$(\"#selectInterval\");
        var intervalPicker = \$(\"#intervalPicker\");
        
        // Init the options
        var idInterval = parseInt(sInterval.find(\":selected\").val());
        
        if( idInterval == 4 ) {
            intervalPicker.show();
        }
        
        sInterval.on('change', function() {
        \tvar idInterval = parseInt(\$(this).val());
        \tif( idInterval == 4 ) {
        \t    intervalPicker.show();
        \t}
        \telse {
        \t    intervalPicker.hide();
        \t}
        });
        
        ";
        // line 271
        echo "        \$('#displayFormInterval').on('click', function(event) {
            event.preventDefault();
            \$('#formInterval').show(500);
        });
    });
</script>


";
        // line 279
        $context["ok"] = true;
        // line 280
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 281
            echo "    ";
            if (((!$this->getAttribute((isset($context["d"]) ? $context["d"] : null), "hasCapture", array(), "any", true, true)) || (!$this->getAttribute((isset($context["d"]) ? $context["d"] : null), "hasCapture")))) {
                // line 282
                echo "        ";
                $context["ok"] = false;
                // line 283
                echo "    ";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 285
            echo "    ";
            $context["ok"] = false;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "
";
        // line 288
        if ((isset($context["ok"]) ? $context["ok"] : null)) {
            // line 289
            echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        
        var dataTransit = [];
        var dataEntry = [];
        var dataRatio = [];
        var dataAverage = [];
        ";
            // line 296
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 297
                echo "            dataTransit.push(";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "countChart"), "captures"), "real");
                echo ");
            dataEntry.push(";
                // line 298
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "ratioChart"), "entry");
                echo ");
            dataRatio.push(";
                // line 299
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "ratioChart"), "ratio");
                echo ");
            dataAverage.push(";
                // line 300
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "averageTimeChart"), "times");
                echo ");
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "        
        var options = {
\t\t    displayType: '";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), 0, array(), "array"), "stats"), "countChart"), "captures"), "displayType"), "html", null, true);
            echo "',
\t\t    dataTransit: dataTransit,
\t\t    dataEntry: dataEntry,
\t\t    dataRatio: dataRatio,
\t\t    dataAverage: dataAverage
\t\t};
\t\t
\t\t";
            // line 311
            if (((isset($context["nbDates"]) ? $context["nbDates"] : null) == 1)) {
                // line 312
                echo "\t\t\toptions['unique'] = true;
\t\t";
            }
            // line 314
            echo "        
\t\t\$(\"#flot-placeholder-count\").frequenStatChartCount(options);
\t\t\$(\"#flot-placeholder-ratio\").frequenStatChartRatio(options);
\t\t\$(\"#flot-placeholder-average-time\").frequenStatChartAverage(options);
        
        ";
            // line 319
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 320
                echo "        \t";
                // line 321
                echo "            options['dataSumEntry'] = ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "ratioChart"), "sumEntry"), "html", null, true);
                echo ";
\t\t    options['dataSumTransit'] = ";
                // line 322
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "ratioChart"), "sumTransit"), "html", null, true);
                echo ";
\t\t    options['dataSumRatio'] = ";
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "ratioChart"), "sumRatio"), "html", null, true);
                echo ";
            \$(\"#flot-placeholder-ratio-pie-";
                // line 324
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\").frequenStatChartRatioPie(options);
        \t
        \t";
                // line 327
                echo "        \toptions['dataSumMulti'] = ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "redemptionChart"), "nb_multi"), "html", null, true);
                echo ";
\t\t    options['dataSumUnique'] = ";
                // line 328
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "redemptionChart"), "nb_unique"), "html", null, true);
                echo ";
\t\t    options['dataRedemptionRate'] = ";
                // line 329
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "stats"), "redemptionChart"), "redemption_rate"), "html", null, true);
                echo ";
        \t\$(\"#flot-placeholder-redemption-pie-";
                // line 330
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\").frequenStatChartRedemptionPie(options);
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "    });
</script>
";
        }
        // line 335
        echo "
";
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Analysis:statBox/statBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  878 => 335,  873 => 332,  857 => 330,  853 => 329,  849 => 328,  844 => 327,  839 => 324,  835 => 323,  831 => 322,  826 => 321,  824 => 320,  807 => 319,  800 => 314,  796 => 312,  794 => 311,  784 => 304,  780 => 302,  772 => 300,  768 => 299,  764 => 298,  759 => 297,  755 => 296,  746 => 289,  744 => 288,  741 => 287,  734 => 285,  728 => 283,  725 => 282,  722 => 281,  717 => 280,  715 => 279,  705 => 271,  683 => 250,  674 => 242,  671 => 241,  666 => 238,  663 => 237,  648 => 224,  633 => 222,  630 => 221,  624 => 220,  615 => 219,  612 => 218,  606 => 217,  597 => 216,  593 => 214,  591 => 213,  584 => 212,  580 => 211,  577 => 210,  572 => 209,  570 => 208,  567 => 207,  564 => 206,  561 => 205,  558 => 204,  555 => 203,  552 => 202,  549 => 201,  532 => 200,  509 => 179,  492 => 176,  487 => 175,  470 => 174,  457 => 164,  449 => 158,  432 => 155,  427 => 154,  410 => 153,  396 => 143,  393 => 142,  390 => 141,  387 => 140,  384 => 139,  381 => 138,  378 => 137,  376 => 136,  364 => 126,  340 => 124,  335 => 123,  332 => 122,  315 => 121,  290 => 98,  266 => 96,  261 => 95,  258 => 94,  241 => 93,  222 => 76,  220 => 75,  217 => 74,  211 => 73,  208 => 72,  195 => 71,  181 => 59,  178 => 58,  175 => 57,  156 => 56,  153 => 55,  139 => 43,  137 => 42,  133 => 40,  126 => 35,  105 => 33,  88 => 32,  77 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  58 => 16,  51 => 12,  45 => 8,  42 => 7,  33 => 4,  30 => 3,);
    }
}
