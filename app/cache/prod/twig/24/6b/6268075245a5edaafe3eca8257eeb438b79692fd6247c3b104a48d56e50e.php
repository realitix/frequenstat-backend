<?php

/* TrackerPageBundle:Payment:display.html.twig */
class __TwigTemplate_246b6268075245a5edaafe3eca8257eeb438b79692fd6247c3b104a48d56e50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
\t<article class=\"col-sm-12 col-md-12 col-lg-8 col-lg-offset-2\">
\t\t<div class=\"jarviswidget\" data-widget-editbutton=\"false\" data-widget-deletebutton=\"false\">
\t\t\t<header>
\t\t\t\t<span class=\"widget-icon\"> <i class=\"fa fa-check\"></i> </span>
\t\t\t\t<h2>Paiement</h2>
\t\t\t</header>
\t\t\t
\t\t\t<div>
\t\t\t\t<div class=\"widget-body\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_page_payment_mainProcess", array("step" => (isset($context["step"]) ? $context["step"] : null))), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"form-bootstrapWizard\">
\t\t\t\t\t\t\t\t\t<ul class=\"bootstrapWizard form-wizard\">
\t\t\t\t\t\t\t\t\t\t<li ";
        // line 17
        if (((isset($context["step"]) ? $context["step"] : null) == 1)) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"?step=1\"> <span class=\"step\">1</span> <span class=\"title\">Offre</span> </a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li ";
        // line 20
        if (((isset($context["step"]) ? $context["step"] : null) == 2)) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"?step=2\"> <span class=\"step\">2</span> <span class=\"title\">Inscription</span> </a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li ";
        // line 23
        if (((isset($context["step"]) ? $context["step"] : null) == 3)) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"?step=3\"> <span class=\"step\">3</span> <span class=\"title\">Paiement</span> </a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li ";
        // line 26
        if (((isset($context["step"]) ? $context["step"] : null) == 4)) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"?step=4\"> <span class=\"step\">4</span> <span class=\"title\">Finalisation</span> </a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t    ";
        // line 33
        if (((isset($context["step"]) ? $context["step"] : null) == 1)) {
            // line 34
            echo "    \t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\">
    \t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t\t<h3><strong>Etape 1 </strong> - Choisissez votre offre</h3>
    
    \t\t\t\t\t\t\t\t\t\t<div class=\"row\">
    
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t    <span class=\"input-group-addon\"><i class=\"fa fa-th-list fa-fg fa-fw\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <select class=\"form-control input-lg\" id=\"selectOffer\" name=\"offer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" disabled=\"disabled\" ";
            // line 45
            if (((isset($context["idOffer"]) ? $context["idOffer"] : null) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">Offre</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) ? $context["offers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "id"), "html", null, true);
                echo "\" ";
                if (((isset($context["idOffer"]) ? $context["idOffer"] : null) == $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t    <span class=\"input-group-addon\"><i class=\"fa fa-th-list fa-fg fa-fw\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <select class=\"form-control input-lg\" id=\"selectOption\" name=\"option\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" disabled=\"disabled\">Options</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "offer"), "name"), "html", null, true);
                echo " - &euro;";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "price"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "name"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 72
        if (((isset($context["step"]) ? $context["step"] : null) == 2)) {
            // line 73
            echo "    \t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\">
    \t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t\t<h3><strong>Etape 2</strong> - Inscrivez vous</h3>
    
    \t\t\t\t\t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-envelope-o fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-asterisk fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "company"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"), "first"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"), "second"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-phone fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phoneNumber1"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-mobile fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 147
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phoneNumber2"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-home fa-lg fa-fw\"></i></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 158
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t";
            // line 164
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 166
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 167
        if (((isset($context["step"]) ? $context["step"] : null) == 3)) {
            // line 168
            echo "    \t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\">
    \t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t\t<h3><strong>Etape 3</strong> - Paiement</h3>
    \t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info fade in\">
    \t\t\t\t\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\">
    \t\t\t\t\t\t\t\t\t\t\t\t×
    \t\t\t\t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-fw fa fa-info\"></i>
    \t\t\t\t\t\t\t\t\t\t\t<strong>Info!</strong> Place an info message box if you wish.
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
    \t\t\t\t\t\t\t\t\t\t\t<label>This is a label</label>
    \t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control input-lg\" placeholder=\"Another input box here...\" type=\"text\" name=\"etc\" id=\"etc\">
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 185
        if (((isset($context["step"]) ? $context["step"] : null) == 4)) {
            // line 186
            echo "    \t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\">
    \t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t\t<h3><strong>Etape 4</strong> - Finalisation</h3>
    \t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t\t<h1 class=\"text-center text-success\"><strong><i class=\"fa fa-check fa-lg\"></i> Complete</strong></h1>
    \t\t\t\t\t\t\t\t\t\t<h4 class=\"text-center\">Click next to finish</h4>
    \t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t\t<br>
    \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 196
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"pager wizard no-margin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"next\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-lg txt-color-darken\" value=\"Valider\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- end widget content -->

\t\t\t</div>
\t\t\t<!-- end widget div -->

\t\t</div>
\t\t<!-- end widget -->

\t</article>
\t<!-- WIDGET END -->
</div>

";
        // line 227
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = array())
    {
        // line 229
        if (((isset($context["step"]) ? $context["step"] : null) == 1)) {
            // line 230
            echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var tab = {};
            tab['0'] = '<option value=\"0\" selected=\"selected\" disabled=\"disabled\">Sélectionner une offre</option>';
            ";
            // line 234
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) ? $context["offers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                // line 235
                echo "                ";
                $context["str"] = "<option value=\"\" disabled=\"disabled\" selected=\"selected\">Sélectionner une option</option>";
                // line 236
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "options"));
                foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
                    // line 237
                    echo "                    ";
                    if ($this->getAttribute((isset($context["op"]) ? $context["op"] : null), "description")) {
                        // line 238
                        echo "                        ";
                        $context["str"] = ((((((isset($context["str"]) ? $context["str"] : null) . "<option value=\"") . $this->getAttribute((isset($context["op"]) ? $context["op"] : null), "id")) . "\">") . $this->getAttribute((isset($context["op"]) ? $context["op"] : null), "description")) . "</option>");
                        // line 239
                        echo "                    ";
                    } else {
                        // line 240
                        echo "                        ";
                        $context["str"] = ((((((((isset($context["str"]) ? $context["str"] : null) . "<option value=\"") . $this->getAttribute((isset($context["op"]) ? $context["op"] : null), "id")) . "\">") . $this->getAttribute((isset($context["op"]) ? $context["op"] : null), "price")) . "&euro; - ") . $this->getAttribute((isset($context["op"]) ? $context["op"] : null), "name")) . "</option>");
                        // line 241
                        echo "                    ";
                    }
                    // line 242
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                echo "                
                tab['";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "id"), "html", null, true);
                echo "'] = '";
                echo (isset($context["str"]) ? $context["str"] : null);
                echo "';
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "            
            var sOffer  = \$(\"#selectOffer\");
            var sOption = \$(\"#selectOption\");
            
            // Init the options
            var idOffer = sOffer.find(\":selected\").val();
            sOption.html(tab[idOffer]);
            
            sOffer.on('change', function() {
            \tvar idOffer = \$(this).val();
            \tsOption.html(tab[idOffer]);
            });
        });
        
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Payment:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 246,  412 => 244,  409 => 243,  403 => 242,  400 => 241,  397 => 240,  394 => 239,  391 => 238,  388 => 237,  383 => 236,  380 => 235,  376 => 234,  370 => 230,  368 => 229,  362 => 227,  329 => 196,  317 => 186,  315 => 185,  312 => 184,  294 => 168,  292 => 167,  289 => 166,  284 => 164,  275 => 158,  261 => 147,  250 => 139,  236 => 128,  225 => 120,  211 => 109,  200 => 101,  186 => 90,  175 => 82,  164 => 73,  162 => 72,  159 => 71,  149 => 63,  134 => 61,  130 => 60,  117 => 49,  102 => 47,  98 => 46,  77 => 33,  49 => 20,  41 => 17,  34 => 13,  20 => 1,  99 => 37,  92 => 45,  85 => 30,  76 => 27,  69 => 22,  65 => 26,  62 => 20,  46 => 12,  39 => 10,  30 => 7,  23 => 2,  88 => 31,  84 => 37,  78 => 34,  74 => 33,  68 => 30,  57 => 23,  47 => 21,  42 => 11,  38 => 18,  19 => 1,  82 => 30,  79 => 34,  75 => 23,  72 => 22,  66 => 31,  63 => 28,  61 => 28,  55 => 24,  53 => 17,  50 => 21,  48 => 20,  35 => 10,  28 => 5,  26 => 4,  21 => 1,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
