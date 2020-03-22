<?php

/* TrackerPageBundle::layout.html.twig */
class __TwigTemplate_c74d92b299bc99a0ee6886e918a2ac7abef2edc495e2125db96e2a388f5359c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'page_body' => array($this, 'block_page_body'),
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
        echo "  Blog - ";
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
        // line 10
        echo "  ";
        $this->displayBlock('page_body', $context, $blocks);
        // line 12
        echo "
";
    }

    // line 10
    public function block_page_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  49 => 12,  46 => 10,  43 => 8,  40 => 7,  138 => 69,  130 => 63,  117 => 56,  113 => 55,  103 => 48,  97 => 44,  93 => 43,  81 => 34,  65 => 23,  51 => 12,  45 => 8,  42 => 7,  33 => 4,  30 => 3,);
    }
}
