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
        return array (  57 => 11,  54 => 10,  49 => 12,  46 => 10,  43 => 8,  40 => 7,  878 => 335,  873 => 332,  857 => 330,  853 => 329,  849 => 328,  844 => 327,  839 => 324,  835 => 323,  831 => 322,  826 => 321,  824 => 320,  807 => 319,  800 => 314,  796 => 312,  794 => 311,  784 => 304,  780 => 302,  772 => 300,  768 => 299,  764 => 298,  759 => 297,  755 => 296,  746 => 289,  744 => 288,  741 => 287,  734 => 285,  728 => 283,  725 => 282,  722 => 281,  717 => 280,  715 => 279,  705 => 271,  683 => 250,  674 => 242,  671 => 241,  666 => 238,  663 => 237,  648 => 224,  633 => 222,  630 => 221,  624 => 220,  615 => 219,  612 => 218,  606 => 217,  597 => 216,  593 => 214,  591 => 213,  584 => 212,  580 => 211,  577 => 210,  572 => 209,  570 => 208,  567 => 207,  564 => 206,  561 => 205,  558 => 204,  555 => 203,  552 => 202,  549 => 201,  532 => 200,  509 => 179,  492 => 176,  487 => 175,  470 => 174,  457 => 164,  449 => 158,  432 => 155,  427 => 154,  410 => 153,  396 => 143,  393 => 142,  390 => 141,  387 => 140,  384 => 139,  381 => 138,  378 => 137,  376 => 136,  364 => 126,  340 => 124,  335 => 123,  332 => 122,  315 => 121,  290 => 98,  266 => 96,  261 => 95,  258 => 94,  241 => 93,  222 => 76,  220 => 75,  217 => 74,  211 => 73,  208 => 72,  195 => 71,  181 => 59,  178 => 58,  175 => 57,  156 => 56,  153 => 55,  139 => 43,  137 => 42,  133 => 40,  126 => 35,  105 => 33,  88 => 32,  77 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  58 => 16,  51 => 12,  45 => 8,  42 => 7,  33 => 4,  30 => 3,);
    }
}
