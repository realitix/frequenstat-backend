<?php

/* TrackerTicketBundle::layout.html.twig */
class __TwigTemplate_3330634c48f96b76ced4d362b55103c990c7af413315abd39321d4ad7539043d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ticket_body' => array($this, 'block_ticket_body'),
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
        // line 9
        $this->displayBlock('ticket_body', $context, $blocks);
        // line 11
        echo "
";
    }

    // line 9
    public function block_ticket_body($context, array $blocks = array())
    {
        // line 10
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TrackerTicketBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  177 => 72,  170 => 67,  165 => 64,  156 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  125 => 54,  122 => 53,  119 => 52,  116 => 51,  113 => 50,  110 => 49,  103 => 48,  100 => 47,  96 => 46,  81 => 33,  79 => 32,  70 => 26,  53 => 9,  48 => 11,  45 => 8,  39 => 5,  32 => 4,  29 => 3,);
    }
}
