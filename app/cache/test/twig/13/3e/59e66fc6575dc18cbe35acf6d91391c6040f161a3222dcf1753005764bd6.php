<?php

/* TrackerPageBundle:Analysis:statBox/formMultiple.html.twig */
class __TwigTemplate_133e59e66fc6575dc18cbe35acf6d91391c6040f161a3222dcf1753005764bd6 extends Twig_Template
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
        echo "<div class=\"row ";
        if ((isset($context["validDates"]) ? $context["validDates"] : $this->getContext($context, "validDates"))) {
            echo "hidden";
        }
        echo "\" id=\"formInterval\">
    <div class=\"col-sm-12\">
        <div class=\"well\">
            <h1>Sélectionner les périodes à comparer</h1>
\t        <form class=\"smart-form\" method=\"GET\">
\t            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nbDates"]) ? $context["nbDates"] : $this->getContext($context, "nbDates")) - 1)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "\t                ";
            $context["valueBegin"] = "";
            // line 8
            echo "\t                ";
            $context["valueEnd"] = "";
            // line 9
            echo "\t                ";
            if (($this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array", true, true) && $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"))) {
                // line 10
                echo "                        ";
                if (($this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array", false, true), "begin", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "begin"))) {
                    // line 11
                    echo "\t                        ";
                    $context["valueBegin"] = $this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "begin");
                    // line 12
                    echo "                        ";
                }
                // line 13
                echo "                        ";
                if (($this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array", false, true), "end", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "end"))) {
                    // line 14
                    echo "\t                        ";
                    $context["valueEnd"] = $this->getAttribute($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "end");
                    // line 15
                    echo "                        ";
                }
                // line 16
                echo "\t                ";
            }
            // line 17
            echo "    \t        \t<header>Période ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</header>
    \t            <fieldset>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t<input class=\"datetimepicker\" placeholder=\"Début\" type=\"text\" name=\"begin[]\" ";
            // line 22
            if ((isset($context["valueBegin"]) ? $context["valueBegin"] : $this->getContext($context, "valueBegin"))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["valueBegin"]) ? $context["valueBegin"] : $this->getContext($context, "valueBegin")), "Y-m-d H:i"), "html", null, true);
                echo "\" ";
            }
            echo "/>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col col-6\">
\t\t\t\t\t\t\t\t<label class=\"input\">
\t\t\t\t\t\t\t\t\t<input class=\"datetimepicker\" placeholder=\"Fin\" type=\"text\" name=\"end[]\" ";
            // line 27
            if ((isset($context["valueEnd"]) ? $context["valueEnd"] : $this->getContext($context, "valueEnd"))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["valueEnd"]) ? $context["valueEnd"] : $this->getContext($context, "valueEnd")), "Y-m-d H:i"), "html", null, true);
                echo "\" ";
            }
            echo "/>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t<footer>
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary pull-left\" value=\"Valider\" />
\t\t\t\t</footer>
\t        </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TrackerPageBundle:Analysis:statBox/formMultiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  98 => 27,  86 => 22,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  30 => 6,  19 => 1,);
    }
}
