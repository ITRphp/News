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
        return array (  32 => 6,  26 => 3,  187 => 84,  140 => 66,  125 => 59,  123 => 58,  113 => 55,  90 => 46,  83 => 30,  68 => 36,  63 => 34,  55 => 31,  28 => 20,  22 => 17,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  179 => 76,  173 => 72,  168 => 70,  165 => 75,  156 => 64,  154 => 71,  151 => 70,  149 => 60,  141 => 55,  137 => 65,  86 => 45,  59 => 23,  56 => 22,  50 => 15,  47 => 17,  192 => 90,  180 => 87,  178 => 80,  176 => 73,  172 => 83,  170 => 77,  167 => 76,  161 => 77,  157 => 75,  145 => 68,  143 => 56,  134 => 51,  130 => 48,  126 => 57,  120 => 57,  110 => 49,  107 => 52,  98 => 41,  94 => 43,  89 => 40,  87 => 35,  84 => 36,  81 => 31,  79 => 29,  77 => 31,  74 => 39,  72 => 26,  69 => 26,  66 => 25,  53 => 30,  51 => 14,  49 => 12,  46 => 14,  40 => 13,  36 => 5,  34 => 4,  31 => 3,  19 => 1,  181 => 81,  177 => 36,  155 => 74,  146 => 58,  142 => 29,  138 => 64,  128 => 60,  91 => 35,  71 => 16,  67 => 13,  62 => 24,  57 => 17,  54 => 5,  48 => 4,  41 => 25,  39 => 22,  35 => 11,  29 => 4,  24 => 2,  198 => 38,  195 => 84,  191 => 36,  188 => 35,  174 => 84,  171 => 34,  162 => 74,  158 => 42,  152 => 73,  147 => 55,  144 => 54,  135 => 52,  122 => 49,  117 => 53,  111 => 44,  104 => 51,  101 => 43,  99 => 8,  93 => 47,  88 => 29,  82 => 34,  78 => 23,  64 => 25,  60 => 19,  52 => 19,  44 => 26,  159 => 66,  148 => 69,  139 => 54,  131 => 61,  127 => 50,  124 => 56,  115 => 52,  112 => 50,  105 => 25,  96 => 48,  92 => 20,  85 => 18,  80 => 43,  75 => 28,  70 => 26,  65 => 35,  61 => 24,  58 => 32,  42 => 12,  38 => 12,  33 => 22,  30 => 5,);
    }
}
