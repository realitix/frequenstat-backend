<?php

/* TrackerAdminBundle::layout.html.twig */
class __TwigTemplate_45714963165964f9de13b85dc1be4165613024237293d255ea46083efd65ce6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Admin - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        $this->displayBlock('admin_body', $context, $blocks);
        // line 11
        echo "
";
    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        // line 10
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TrackerAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  151 => 66,  144 => 61,  139 => 58,  129 => 54,  125 => 53,  121 => 52,  116 => 50,  112 => 49,  108 => 48,  102 => 47,  99 => 46,  95 => 45,  81 => 33,  79 => 32,  70 => 26,  53 => 9,  48 => 11,  45 => 8,  39 => 5,  32 => 4,  29 => 3,);
    }
}
