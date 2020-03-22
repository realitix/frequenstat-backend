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
        return array (  228 => 66,  215 => 59,  200 => 53,  184 => 49,  174 => 45,  168 => 42,  160 => 40,  148 => 37,  140 => 35,  132 => 33,  120 => 30,  112 => 28,  70 => 16,  1082 => 340,  1076 => 338,  1070 => 336,  1068 => 335,  1066 => 334,  1062 => 333,  1053 => 332,  1050 => 331,  1038 => 326,  1032 => 324,  1026 => 322,  1024 => 321,  1022 => 320,  1018 => 319,  1012 => 318,  1009 => 317,  997 => 312,  991 => 310,  985 => 308,  983 => 307,  981 => 306,  977 => 305,  973 => 304,  969 => 303,  965 => 302,  959 => 301,  956 => 300,  948 => 296,  944 => 295,  941 => 294,  932 => 287,  930 => 286,  926 => 285,  923 => 284,  918 => 280,  910 => 278,  906 => 277,  904 => 276,  902 => 275,  899 => 274,  893 => 271,  890 => 270,  886 => 267,  883 => 265,  881 => 264,  878 => 263,  871 => 259,  869 => 258,  845 => 257,  842 => 255,  839 => 253,  837 => 252,  835 => 251,  832 => 250,  828 => 247,  826 => 246,  824 => 245,  821 => 244,  817 => 239,  814 => 238,  810 => 235,  808 => 234,  806 => 233,  803 => 232,  799 => 229,  797 => 228,  795 => 227,  793 => 226,  791 => 225,  788 => 224,  784 => 221,  781 => 216,  776 => 212,  756 => 208,  753 => 206,  750 => 205,  747 => 203,  744 => 202,  741 => 200,  739 => 199,  737 => 198,  734 => 197,  730 => 192,  728 => 191,  725 => 190,  721 => 187,  719 => 186,  716 => 185,  706 => 182,  703 => 180,  701 => 179,  698 => 178,  694 => 175,  692 => 174,  689 => 173,  685 => 170,  683 => 169,  680 => 168,  675 => 165,  673 => 164,  670 => 163,  665 => 160,  663 => 159,  660 => 158,  656 => 155,  654 => 154,  651 => 153,  647 => 150,  645 => 149,  642 => 148,  638 => 145,  635 => 144,  631 => 141,  629 => 140,  626 => 139,  622 => 136,  619 => 135,  616 => 133,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 118,  579 => 116,  578 => 115,  577 => 114,  576 => 113,  572 => 112,  569 => 110,  567 => 109,  564 => 108,  558 => 104,  556 => 103,  554 => 102,  552 => 101,  550 => 100,  546 => 99,  543 => 97,  541 => 96,  538 => 95,  524 => 92,  521 => 91,  507 => 88,  504 => 87,  479 => 82,  476 => 80,  474 => 79,  472 => 78,  467 => 77,  465 => 76,  448 => 75,  445 => 74,  441 => 71,  439 => 70,  437 => 69,  431 => 66,  429 => 65,  427 => 64,  425 => 63,  423 => 62,  414 => 60,  412 => 59,  404 => 58,  401 => 57,  399 => 56,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  381 => 48,  377 => 47,  373 => 46,  370 => 45,  365 => 41,  362 => 39,  360 => 38,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  337 => 27,  334 => 26,  330 => 23,  328 => 22,  326 => 21,  323 => 19,  321 => 18,  317 => 17,  314 => 16,  300 => 13,  298 => 12,  295 => 11,  290 => 7,  287 => 5,  285 => 4,  282 => 3,  278 => 331,  275 => 330,  273 => 317,  270 => 316,  268 => 300,  265 => 299,  263 => 294,  260 => 293,  255 => 284,  252 => 283,  250 => 274,  245 => 270,  242 => 269,  240 => 263,  237 => 262,  232 => 249,  227 => 243,  224 => 241,  222 => 238,  219 => 60,  214 => 231,  209 => 223,  207 => 216,  204 => 54,  201 => 213,  199 => 212,  194 => 197,  191 => 196,  188 => 50,  186 => 190,  181 => 185,  176 => 178,  173 => 177,  171 => 173,  166 => 167,  164 => 41,  159 => 158,  154 => 153,  151 => 152,  149 => 148,  146 => 147,  144 => 36,  141 => 143,  139 => 139,  134 => 133,  131 => 132,  129 => 122,  126 => 121,  116 => 29,  109 => 87,  104 => 26,  101 => 73,  79 => 26,  71 => 15,  64 => 3,  20 => 1,  99 => 54,  85 => 30,  69 => 11,  65 => 21,  62 => 14,  23 => 2,  303 => 120,  294 => 116,  288 => 115,  280 => 109,  277 => 108,  271 => 104,  267 => 103,  261 => 100,  257 => 291,  251 => 96,  247 => 273,  239 => 90,  235 => 250,  230 => 244,  226 => 86,  221 => 84,  217 => 232,  212 => 224,  208 => 55,  196 => 52,  192 => 51,  189 => 69,  183 => 189,  180 => 65,  178 => 46,  169 => 168,  161 => 162,  156 => 39,  152 => 38,  150 => 48,  147 => 47,  142 => 45,  138 => 44,  136 => 34,  133 => 42,  128 => 32,  124 => 31,  119 => 95,  110 => 34,  108 => 27,  105 => 32,  100 => 25,  82 => 24,  77 => 22,  72 => 20,  66 => 15,  54 => 12,  52 => 13,  49 => 12,  44 => 10,  35 => 7,  26 => 2,  73 => 19,  61 => 2,  58 => 13,  50 => 11,  41 => 10,  34 => 7,  28 => 3,  25 => 4,  21 => 2,  31 => 6,  24 => 3,  88 => 22,  84 => 21,  74 => 17,  68 => 19,  63 => 17,  47 => 21,  38 => 8,  19 => 1,  121 => 107,  118 => 53,  111 => 90,  103 => 23,  96 => 24,  94 => 45,  91 => 44,  89 => 37,  83 => 47,  81 => 32,  76 => 25,  57 => 25,  55 => 23,  42 => 9,  37 => 8,  27 => 4,  22 => 1,  53 => 17,  48 => 12,  46 => 10,  43 => 17,  40 => 9,  33 => 8,  30 => 6,  122 => 38,  114 => 91,  106 => 86,  98 => 40,  92 => 23,  86 => 36,  80 => 23,  78 => 18,  59 => 11,  56 => 10,  45 => 6,  39 => 10,  32 => 4,  29 => 5,);
    }
}
