<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_69d72676c1ea5af5f5a96232250f3660ef80caf373e0ae0d0c942d6b63c98f48 extends Twig_Template
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
        return array (  79 => 29,  66 => 25,  32 => 6,  26 => 3,  187 => 84,  178 => 80,  167 => 76,  131 => 61,  125 => 59,  123 => 58,  104 => 51,  96 => 48,  93 => 47,  68 => 36,  63 => 34,  58 => 32,  55 => 31,  33 => 22,  30 => 5,  22 => 17,  19 => 1,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  179 => 76,  173 => 72,  165 => 75,  162 => 74,  159 => 66,  149 => 60,  146 => 58,  143 => 56,  91 => 35,  89 => 40,  86 => 45,  84 => 36,  82 => 34,  69 => 26,  61 => 24,  59 => 23,  47 => 17,  188 => 88,  176 => 73,  172 => 83,  170 => 77,  168 => 70,  163 => 79,  157 => 75,  151 => 70,  148 => 69,  139 => 54,  134 => 51,  130 => 48,  120 => 57,  116 => 53,  113 => 55,  111 => 44,  108 => 48,  106 => 47,  103 => 45,  97 => 41,  90 => 46,  87 => 35,  85 => 34,  83 => 30,  80 => 43,  77 => 31,  75 => 28,  72 => 26,  64 => 25,  62 => 24,  53 => 30,  49 => 12,  44 => 26,  42 => 12,  38 => 12,  36 => 5,  34 => 4,  195 => 84,  181 => 81,  177 => 39,  174 => 84,  171 => 37,  158 => 46,  156 => 64,  153 => 73,  144 => 33,  140 => 66,  136 => 30,  129 => 25,  126 => 57,  121 => 12,  107 => 52,  102 => 10,  99 => 9,  94 => 43,  67 => 23,  60 => 19,  57 => 17,  51 => 14,  43 => 56,  41 => 25,  37 => 22,  35 => 11,  29 => 4,  24 => 2,  166 => 80,  161 => 54,  154 => 71,  145 => 48,  141 => 55,  137 => 65,  133 => 44,  128 => 60,  122 => 55,  115 => 37,  105 => 35,  100 => 43,  92 => 38,  88 => 27,  74 => 39,  70 => 26,  65 => 35,  56 => 22,  52 => 19,  50 => 15,  46 => 14,  40 => 13,  31 => 3,  28 => 20,);
    }
}
