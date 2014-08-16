<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_f53265df641f1da53af0a4011bc897fe6ee4fdaa5dfc432c7414075f5d2db0f1 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  66 => 25,  32 => 6,  26 => 3,  187 => 84,  178 => 80,  167 => 76,  131 => 61,  125 => 59,  123 => 58,  104 => 51,  96 => 48,  93 => 47,  68 => 36,  63 => 34,  58 => 32,  55 => 31,  33 => 22,  30 => 5,  22 => 17,  19 => 1,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  179 => 76,  173 => 72,  165 => 75,  162 => 74,  159 => 66,  149 => 60,  146 => 58,  143 => 56,  91 => 35,  89 => 40,  86 => 45,  84 => 36,  82 => 34,  69 => 26,  61 => 24,  59 => 23,  47 => 17,  188 => 88,  176 => 73,  172 => 83,  170 => 77,  168 => 70,  163 => 79,  157 => 75,  151 => 70,  148 => 69,  139 => 54,  134 => 51,  130 => 48,  120 => 57,  116 => 53,  113 => 55,  111 => 44,  108 => 48,  106 => 47,  103 => 45,  97 => 41,  90 => 46,  87 => 35,  85 => 34,  83 => 30,  80 => 43,  77 => 31,  75 => 28,  72 => 26,  64 => 25,  62 => 24,  53 => 30,  49 => 12,  44 => 26,  42 => 12,  38 => 12,  36 => 5,  34 => 4,  195 => 84,  181 => 81,  177 => 39,  174 => 84,  171 => 37,  158 => 46,  156 => 64,  153 => 73,  144 => 33,  140 => 66,  136 => 30,  129 => 25,  126 => 57,  121 => 12,  107 => 52,  102 => 10,  99 => 9,  94 => 43,  67 => 23,  60 => 19,  57 => 17,  51 => 14,  43 => 56,  41 => 25,  37 => 22,  35 => 11,  29 => 4,  24 => 2,  166 => 80,  161 => 54,  154 => 71,  145 => 48,  141 => 55,  137 => 65,  133 => 44,  128 => 60,  122 => 55,  115 => 37,  105 => 35,  100 => 43,  92 => 38,  88 => 27,  74 => 39,  70 => 26,  65 => 35,  56 => 22,  52 => 19,  50 => 15,  46 => 14,  40 => 13,  31 => 3,  28 => 20,);
    }
}
