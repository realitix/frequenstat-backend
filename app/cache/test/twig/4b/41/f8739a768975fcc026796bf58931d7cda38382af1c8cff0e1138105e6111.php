<?php

/* TrackerAdminBundle:Ticket:view.html.twig */
class __TwigTemplate_4b41f8739a768975fcc026796bf58931d7cda38382af1c8cff0e1138105e6111 extends Twig_Template
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
\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tracker_admin_ticket_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tickets"), "html", null, true);
        echo "</a></li>
\t<li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ticket"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id"), "html", null, true);
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
\t\t\t<h1 class=\"page-title txt-color-blueDark\"><i class=\"fa fa-comments txt-color-white\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Conversation"), "html", null, true);
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
\t\t\t\t\t\t<h2>Conversation</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"widget-body widget-hide-overflow no-padding\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"chat-body custom-scroll\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"message\">
\t\t\t\t\t\t\t\t\t\t<img class=\"online\" alt=\"\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatars/male.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"message-text\">
\t\t\t\t\t\t\t\t\t\t\t<time>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "created"), "d/m/Y H:i"), "html", null, true);
        echo "</time>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"username\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "user"), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "user"), "lastName"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 35
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "description"), "html", null, true));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["avatar"] = "male.png";
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "user"), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["avatar"] = "4.png";
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 45
            echo "
    \t\t\t\t\t\t\t\t\t<li class=\"message\">
    \t\t\t\t\t\t\t\t\t\t<img class=\"online\" alt=\"\" src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/avatars/" . (isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar")))), "html", null, true);
            echo "\" />
    \t\t\t\t\t\t\t\t\t\t<div class=\"message-text\">
    \t\t\t\t\t\t\t\t\t\t\t<time>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "created"), "d/m/Y H:i"), "html", null, true);
            echo "</time>
    \t\t\t\t\t\t\t\t\t\t\t<a class=\"username\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "user"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "user"), "lastName"), "html", null, true);
            echo "</a>
    \t\t\t\t\t\t\t\t\t\t\t";
            // line 51
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "content"), "html", null, true));
            echo "
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 58
        if ((!$this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "closed"))) {
            // line 59
            echo "    \t\t\t\t\t\t\t<div class=\"chat-footer\">
    \t\t\t\t\t\t\t<form method=\"POST\">
    \t\t\t\t\t\t\t\t<div class=\"textarea-div\">
    \t\t\t\t\t\t\t\t\t<div class=\"typearea\">
    \t\t\t\t\t\t\t\t\t    ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<span class=\"textarea-controls\">
    \t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-primary pull-right\">Répondre</button>
    \t\t\t\t\t\t\t\t\t<span class=\"pull-right smart-form\" style=\"margin-top: 3px; margin-right: 10px;\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"checkbox pull-right\">
    \t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "close"), 'widget');
            echo "
    \t\t\t\t\t\t\t\t\t\t\t<i></i>
    \t\t\t\t\t\t\t\t\t\t\tFermer le ticket
    \t\t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
    \t\t\t\t\t\t\t</form>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t";
        } else {
            // line 80
            echo "    \t\t\t\t\t\t    <hr />
    \t\t\t\t\t\t    <div class=\"alert alert-info alert-block\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-fw fa fa-info\"></i>
\t\t\t\t\t\t\t\t\tLe ticket est fermé.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t    
\t\t\t\t\t\t    ";
        // line 87
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 88
            echo "                                <div class=\"alert alert-danger\">
                                    <button class=\"close\"> x </button>
                                    <i class=\"fa-fw fa fa-times\"></i>
                                    <strong>Une erreur est survenue!</strong>
                                    ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 95
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</div>
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
        return "TrackerAdminBundle:Ticket:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 95,  208 => 92,  202 => 88,  200 => 87,  197 => 86,  189 => 80,  182 => 76,  173 => 70,  163 => 63,  157 => 59,  155 => 58,  150 => 55,  140 => 51,  134 => 50,  130 => 49,  125 => 47,  121 => 45,  118 => 44,  115 => 43,  112 => 42,  109 => 41,  104 => 40,  97 => 35,  91 => 34,  87 => 33,  82 => 31,  61 => 13,  56 => 10,  53 => 9,  45 => 6,  39 => 5,  32 => 4,  29 => 3,);
    }
}
