<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_ef313c632fd90a332361e42af624c8bfd0667ddf49bfdbf8570aea2f10e668db extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  32 => 6,  228 => 66,  219 => 60,  215 => 59,  204 => 54,  200 => 53,  188 => 50,  184 => 49,  174 => 45,  168 => 42,  164 => 41,  160 => 40,  148 => 37,  144 => 36,  140 => 35,  132 => 33,  120 => 30,  116 => 29,  112 => 28,  104 => 26,  70 => 26,  99 => 37,  92 => 23,  85 => 30,  69 => 22,  62 => 24,  23 => 2,  303 => 120,  294 => 116,  288 => 115,  280 => 109,  277 => 108,  271 => 104,  267 => 103,  261 => 100,  257 => 99,  251 => 96,  247 => 95,  239 => 90,  235 => 89,  230 => 87,  226 => 86,  221 => 84,  217 => 83,  212 => 81,  208 => 55,  196 => 52,  192 => 51,  189 => 69,  183 => 66,  180 => 65,  178 => 46,  169 => 58,  161 => 52,  156 => 39,  152 => 38,  150 => 48,  147 => 47,  142 => 45,  136 => 34,  133 => 42,  128 => 32,  124 => 31,  122 => 38,  119 => 37,  110 => 34,  108 => 27,  105 => 32,  100 => 25,  86 => 25,  82 => 24,  80 => 23,  77 => 22,  72 => 20,  66 => 25,  52 => 13,  44 => 10,  35 => 7,  26 => 3,  73 => 19,  61 => 16,  58 => 13,  50 => 15,  48 => 12,  41 => 10,  34 => 7,  28 => 5,  25 => 4,  21 => 2,  31 => 6,  24 => 2,  88 => 22,  84 => 21,  74 => 17,  68 => 19,  63 => 17,  53 => 17,  47 => 21,  38 => 8,  19 => 1,  121 => 54,  118 => 53,  114 => 35,  111 => 45,  106 => 24,  96 => 24,  94 => 28,  91 => 35,  89 => 51,  83 => 30,  78 => 18,  76 => 27,  55 => 23,  39 => 10,  37 => 8,  29 => 5,  27 => 4,  22 => 1,  57 => 25,  54 => 12,  49 => 12,  46 => 14,  43 => 17,  40 => 9,  138 => 44,  130 => 63,  117 => 56,  113 => 55,  103 => 23,  97 => 44,  93 => 43,  81 => 45,  65 => 21,  51 => 12,  45 => 8,  42 => 12,  33 => 8,  30 => 5,);
    }
}
