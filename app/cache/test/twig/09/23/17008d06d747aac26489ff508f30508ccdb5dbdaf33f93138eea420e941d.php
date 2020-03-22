<?php

/* TrackerPlaceBundle:Form:fields.html.twig */
class __TwigTemplate_092317008d06d747aac26489ff508f30508ccdb5dbdaf33f93138eea420e941d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'geometry_widget' => array($this, 'block_geometry_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('geometry_widget', $context, $blocks);
    }

    public function block_geometry_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TrackerPlaceBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  99 => 37,  85 => 30,  69 => 22,  65 => 21,  62 => 20,  23 => 2,  303 => 120,  294 => 116,  288 => 115,  280 => 109,  277 => 108,  271 => 104,  267 => 103,  261 => 100,  257 => 99,  251 => 96,  247 => 95,  239 => 90,  235 => 89,  230 => 87,  226 => 86,  221 => 84,  217 => 83,  212 => 81,  208 => 80,  196 => 71,  192 => 70,  189 => 69,  183 => 66,  180 => 65,  178 => 64,  169 => 58,  161 => 52,  156 => 50,  152 => 49,  150 => 48,  147 => 47,  142 => 45,  138 => 44,  136 => 43,  133 => 42,  128 => 40,  124 => 39,  119 => 37,  110 => 34,  108 => 33,  105 => 32,  100 => 30,  82 => 24,  77 => 22,  72 => 20,  66 => 18,  54 => 14,  52 => 13,  49 => 12,  44 => 10,  35 => 7,  26 => 2,  73 => 19,  61 => 16,  58 => 15,  50 => 13,  41 => 10,  34 => 7,  28 => 3,  25 => 4,  21 => 2,  31 => 6,  24 => 3,  88 => 31,  84 => 37,  74 => 33,  68 => 19,  63 => 17,  47 => 21,  38 => 8,  19 => 1,  121 => 54,  118 => 53,  111 => 45,  103 => 23,  96 => 29,  94 => 28,  91 => 27,  89 => 51,  83 => 47,  81 => 45,  76 => 27,  57 => 25,  55 => 23,  42 => 11,  37 => 8,  27 => 4,  22 => 1,  53 => 17,  48 => 12,  46 => 12,  43 => 17,  40 => 9,  33 => 8,  30 => 7,  122 => 38,  114 => 35,  106 => 24,  98 => 40,  92 => 32,  86 => 25,  80 => 23,  78 => 34,  59 => 11,  56 => 10,  45 => 6,  39 => 10,  32 => 4,  29 => 5,);
    }
}
