<?php

/* TrackerAdminBundle:Place:addBox.html.twig */
class __TwigTemplate_a6302d29768dc2aff23d794cbc4875c2d8a666638dffd9e5373884113b546179 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("tracker_admin_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateurs"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_admin_user_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "user"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "user"), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "user"), "lastName"), "html", null, true);
        echo "</a></li>
\t<li>Création d'une box</li>
";
    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"content\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-4\">
\t\t\t<h1 class=\"page-title txt-color-blueDark\"><i class=\"fa-fw fa fa-table\"></i> Création d'une box </span></h1>
\t\t</div>
\t</div>
\t
\t<section id=\"widget-grid\" class=\"\">
\t\t<div class=\"row\">
\t\t\t<article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<div class=\"jarviswidget\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<span class=\"widget-icon\"><i class=\"fa fa-edit\"></i></span>
\t\t\t\t\t\t<h2>Création d'une box</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<div>
    \t\t\t\t\t<div class=\"widget-body no-padding\">
                            ";
        // line 28
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 29
            echo "                                <div class=\"alert alert-danger\">
                                    <button class=\"close\"> x </button>
                                    <i class=\"fa-fw fa fa-times\"></i>
                                    <strong>Une erreur est survenue!</strong>
                                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 36
        echo "                            <form class=\"smart-form\" method=\"post\">
                                <fieldset>
                                    <section>
                                        <label class=\"input\">
                                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"input\">
                                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serialNumber"), 'widget');
        echo "
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"input\">
                                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "version"), 'widget');
        echo "
                                        </label>
                                    </section>
                                </fieldset>
                                
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                
                                <footer>
                                    <button class=\"btn btn-primary\" type=\"submit\">Valider</button>
                                </footer>
                            </form>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</div>
\t</section>
</div>
";
    }

    public function getTemplateName()
    {
        return "TrackerAdminBundle:Place:addBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 55,  114 => 50,  106 => 45,  98 => 40,  92 => 36,  86 => 33,  80 => 29,  78 => 28,  59 => 11,  56 => 10,  45 => 6,  39 => 5,  32 => 4,  29 => 3,);
    }
}
