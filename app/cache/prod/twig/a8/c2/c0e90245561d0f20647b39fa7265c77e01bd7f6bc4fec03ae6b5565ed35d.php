<?php

/* TrackerAdminBundle:Place:testEditor.html.twig */
class __TwigTemplate_a8c2c0e90245561d0f20647b39fa7265c77e01bd7f6bc4fec03ae6b5565ed35d extends Twig_Template
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
\t";
        // line 7
        echo "\t<li>Modélisation de la salle</li>
";
    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        // line 11
        echo "<style media=\"screen\" type=\"text/css\">
iframe {
   display:block;
   width: 100%;
   border:none;
}
</style>


\t    <iframe src=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("tracker_admin_place_testEditorIFrame");
        echo "\"></iframe> 

";
    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        // line 25
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
    \tvar hTop = \$(\"#header\").height();
    \thTop = hTop + \$(\"#ribbon\").height();
        \$(\"iframe\").height( \$(document).height() - hTop );
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "TrackerAdminBundle:Place:testEditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  72 => 24,  65 => 20,  54 => 11,  51 => 10,  46 => 7,  40 => 5,  33 => 4,  30 => 3,);
    }
}
