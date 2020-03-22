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
        return array (  228 => 66,  219 => 60,  215 => 59,  208 => 55,  204 => 54,  196 => 52,  192 => 51,  188 => 50,  184 => 49,  178 => 46,  174 => 45,  168 => 42,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  70 => 16,  58 => 13,  54 => 12,  24 => 3,  422 => 246,  412 => 244,  409 => 243,  403 => 242,  400 => 241,  397 => 240,  394 => 239,  391 => 238,  388 => 237,  383 => 236,  380 => 235,  376 => 234,  370 => 230,  368 => 229,  362 => 227,  329 => 196,  317 => 186,  315 => 185,  312 => 184,  294 => 168,  292 => 167,  289 => 166,  284 => 164,  275 => 158,  261 => 147,  250 => 139,  236 => 128,  225 => 120,  211 => 109,  200 => 53,  186 => 90,  175 => 82,  164 => 41,  162 => 72,  159 => 71,  149 => 63,  134 => 61,  130 => 60,  117 => 49,  102 => 47,  98 => 46,  77 => 33,  49 => 20,  41 => 17,  34 => 7,  20 => 1,  99 => 37,  92 => 23,  85 => 30,  76 => 27,  69 => 22,  65 => 26,  62 => 14,  46 => 10,  39 => 10,  30 => 6,  23 => 2,  88 => 22,  84 => 21,  78 => 18,  74 => 17,  68 => 30,  57 => 23,  47 => 21,  42 => 9,  38 => 8,  19 => 1,  82 => 30,  79 => 34,  75 => 23,  72 => 22,  66 => 15,  63 => 28,  61 => 28,  55 => 24,  53 => 17,  50 => 11,  48 => 20,  35 => 10,  28 => 5,  26 => 4,  21 => 2,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
