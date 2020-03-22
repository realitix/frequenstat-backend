<?php

/* TrackerPlaceBundle:Place:listMenu.html.twig */
class __TwigTemplate_8180c1f8d389fa0064f0cf4e5153e71277f654470826d916a0530a868d4b288c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((!(isset($context["place"]) ? $context["place"] : null))) {
            // line 2
            echo "    <span class=\"label\">Aucun point de vente</span>
";
        } else {
            // line 4
            echo "    ";
            $context["arrow"] = "";
            // line 5
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["places"]) ? $context["places"] : null)) >= 2)) {
                // line 6
                echo "        ";
                $context["arrow"] = "<i class=\"fa fa-angle-down\"></i>";
                // line 7
                echo "    ";
            }
            // line 8
            echo "    
    <span class=\"label\">Point de vente:</span>
    <span id=\"project-selector\" class=\"popover-trigger-element dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : null), "name"), "html", null, true);
            echo " ";
            echo (isset($context["arrow"]) ? $context["arrow"] : null);
            echo "</span>
    
    ";
            // line 12
            if ((twig_length_filter($this->env, (isset($context["places"]) ? $context["places"] : null)) >= 2)) {
                // line 13
                echo "        <ul class=\"dropdown-menu\">
            ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id") != $this->getAttribute((isset($context["place"]) ? $context["place"] : null), "id"))) {
                        // line 15
                        echo "            \t<li>
            \t\t<a href=\"";
                        // line 16
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tracker_place_place_change", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "name"), "html", null, true);
                        echo "</a>
            \t</li>
        \t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TrackerPlaceBundle:Place:listMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  61 => 16,  58 => 15,  53 => 14,  50 => 13,  48 => 12,  41 => 10,  34 => 7,  28 => 5,  25 => 4,  21 => 2,  31 => 6,  24 => 4,  19 => 1,  121 => 54,  118 => 53,  114 => 46,  111 => 45,  106 => 24,  96 => 55,  94 => 53,  91 => 52,  89 => 51,  83 => 47,  78 => 44,  76 => 43,  55 => 23,  39 => 11,  37 => 8,  29 => 5,  27 => 4,  22 => 1,  57 => 26,  54 => 10,  49 => 12,  46 => 10,  43 => 17,  40 => 7,  138 => 69,  130 => 63,  117 => 56,  113 => 55,  103 => 23,  97 => 44,  93 => 43,  81 => 45,  65 => 23,  51 => 12,  45 => 8,  42 => 12,  33 => 8,  30 => 3,);
    }
}
