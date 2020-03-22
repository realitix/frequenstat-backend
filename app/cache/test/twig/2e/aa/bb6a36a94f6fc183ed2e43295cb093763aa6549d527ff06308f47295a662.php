<?php

/* TrackerAdminBundle:User:add.html.twig */
class __TwigTemplate_2eaabb6a36a94f6fc183ed2e43295cb093763aa6549d527ff06308f47295a662 extends Twig_Template
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
\t<li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Création"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Utilisateurs"), "html", null, true);
        echo " </span></h1>
\t\t</div>
\t</div>
\t
\t<section id=\"widget-grid\" class=\"\">
\t\t<div class=\"row\">
\t\t\t<article class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<div class=\"jarviswidget\">
\t\t\t\t\t<header>
\t\t\t\t\t\t<span class=\"widget-icon\"><i class=\"fa fa-edit\"></i></span>
\t\t\t\t\t\t<h2>Création d'un utilisateur</h2>
\t\t\t\t\t</header>
\t\t\t\t\t<div>
    \t\t\t\t\t<div class=\"widget-body no-padding\">
                            ";
        // line 27
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 28
            echo "                                <div class=\"alert alert-danger\">
                                    <button class=\"close\"> x </button>
                                    <i class=\"fa-fw fa fa-times\"></i>
                                    <strong>Une erreur est survenue!</strong>
                                    ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                                </div>
                            ";
        }
        // line 35
        echo "                            <form class=\"smart-form\" method=\"post\">
                                <fieldset>
                                    <section>
                                        <label class=\"input\">
                                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"input\"> 
                                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName"), 'widget');
        echo "
                                            <i></i>
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"input\"> 
                                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName"), 'widget');
        echo "
                                            <i></i>
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"input\"> 
                                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company"), 'widget');
        echo "
                                            <i></i>
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"input\"> 
                                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber1"), 'widget');
        echo "
                                            <i></i>
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"input\"> 
                                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber2"), 'widget');
        echo "
                                            <i></i>
                                        </label>
                                    </section>
                                    <section>
                                        <label class=\"textarea\">
                                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
                                        </label>
                                    </section>
                                </fieldset>
                                
                                ";
        // line 79
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
        return "TrackerAdminBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 79,  149 => 74,  140 => 68,  131 => 62,  122 => 56,  113 => 50,  104 => 44,  96 => 39,  90 => 35,  84 => 32,  78 => 28,  76 => 27,  59 => 13,  54 => 10,  51 => 9,  45 => 6,  39 => 5,  32 => 4,  29 => 3,);
    }
}
