<?php

/* foot.html.twig */
class __TwigTemplate_d2f19ce831fd648397bc1a818d8c76ab9f146f50bbc9971f623bf2c2397e6232 extends Twig_Template
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
        $this->env->loadTemplate("shortcut.html.twig")->display($context);
        // line 2
        echo "
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-ui-1.10.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src=\"js/plugin/jquery-touch/jquery.ui.touch-punch.min.js\"></script> -->
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/notification/SmartNotification.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/smartwidgets/jarvis.widget.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/jquery-datetimepicker/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/masked-input/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/bootstrap-slider/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/msie-fix/jquery.mb.browser.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/smartclick/smartclick.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

<!-- Flot Chart -->
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.colorhelpers.min.js"), "html", null, true);
        echo "\"></script>
<!--[if lte IE 8]><script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/excanvas.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.fillbetween.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.crosshair.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.image.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.canvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.errorbars.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.navigate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.selection.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.stack.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.symbol.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.threshold.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.barnumbers.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.curvedlines.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/flot/jquery.flot.pointnumber.js"), "html", null, true);
        echo "\"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>

<!-- Frequenstat Plugin -->
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frequenstat/chart/count.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frequenstat/chart/ratio.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frequenstat/chart/ratio_pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frequenstat/chart/redemption_pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frequenstat/chart/os_pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frequenstat/chart/average.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/frequenstat/chart/realtime.js"), "html", null, true);
        echo "\"></script>


<!-- Three.js -->
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/build/three.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/controls/TrackballControls.js"), "html", null, true);
        echo "\"></script>

<!-- Three.js Editor -->


<!-- APP -->
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\tpageSetUp();
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "foot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 66,  219 => 60,  215 => 59,  204 => 54,  200 => 53,  188 => 50,  184 => 49,  174 => 45,  168 => 42,  164 => 41,  160 => 40,  148 => 37,  144 => 36,  140 => 35,  132 => 33,  120 => 30,  116 => 29,  112 => 28,  104 => 26,  70 => 16,  99 => 37,  92 => 23,  85 => 30,  69 => 22,  62 => 14,  23 => 2,  303 => 120,  294 => 116,  288 => 115,  280 => 109,  277 => 108,  271 => 104,  267 => 103,  261 => 100,  257 => 99,  251 => 96,  247 => 95,  239 => 90,  235 => 89,  230 => 87,  226 => 86,  221 => 84,  217 => 83,  212 => 81,  208 => 55,  196 => 52,  192 => 51,  189 => 69,  183 => 66,  180 => 65,  178 => 46,  169 => 58,  161 => 52,  156 => 39,  152 => 38,  150 => 48,  147 => 47,  142 => 45,  136 => 34,  133 => 42,  128 => 32,  124 => 31,  122 => 38,  119 => 37,  110 => 34,  108 => 27,  105 => 32,  100 => 25,  86 => 25,  82 => 24,  80 => 23,  77 => 22,  72 => 20,  66 => 15,  52 => 13,  44 => 10,  35 => 7,  26 => 4,  73 => 19,  61 => 16,  58 => 13,  50 => 11,  48 => 12,  41 => 10,  34 => 7,  28 => 5,  25 => 4,  21 => 2,  31 => 6,  24 => 3,  88 => 22,  84 => 21,  74 => 17,  68 => 19,  63 => 17,  53 => 17,  47 => 21,  38 => 8,  19 => 1,  121 => 54,  118 => 53,  114 => 35,  111 => 45,  106 => 24,  96 => 24,  94 => 28,  91 => 27,  89 => 51,  83 => 47,  78 => 18,  76 => 27,  55 => 23,  39 => 10,  37 => 8,  29 => 5,  27 => 4,  22 => 1,  57 => 25,  54 => 12,  49 => 12,  46 => 10,  43 => 17,  40 => 9,  138 => 44,  130 => 63,  117 => 56,  113 => 55,  103 => 23,  97 => 44,  93 => 43,  81 => 45,  65 => 21,  51 => 12,  45 => 8,  42 => 9,  33 => 8,  30 => 6,);
    }
}
