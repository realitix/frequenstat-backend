<?php

/* TrackerPageBundle:Payment:anonymous.html.twig */
class __TwigTemplate_a9076e0e9bcae2c691eb09e59fba9b7a09d5089a38da1ddb4fb8a6f73e48626e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_clean.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_clean.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Paiement
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->env->loadTemplate("TrackerPageBundle:Payment:display.html.twig")->display($context);
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Payment:anonymous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
