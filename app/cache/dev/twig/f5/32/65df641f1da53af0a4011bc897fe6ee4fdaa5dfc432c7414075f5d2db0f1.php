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
        return array (  32 => 6,  26 => 3,  187 => 84,  140 => 66,  125 => 59,  123 => 58,  113 => 55,  90 => 46,  83 => 30,  68 => 36,  63 => 34,  55 => 31,  28 => 20,  22 => 17,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  179 => 76,  173 => 72,  168 => 70,  165 => 75,  156 => 64,  154 => 71,  151 => 70,  149 => 60,  141 => 55,  137 => 65,  86 => 45,  59 => 23,  56 => 22,  50 => 15,  47 => 17,  192 => 90,  180 => 87,  178 => 80,  176 => 73,  172 => 83,  170 => 77,  167 => 76,  161 => 77,  157 => 75,  145 => 68,  143 => 56,  134 => 51,  130 => 48,  126 => 57,  120 => 57,  110 => 49,  107 => 52,  98 => 41,  94 => 43,  89 => 40,  87 => 35,  84 => 36,  81 => 31,  79 => 29,  77 => 31,  74 => 39,  72 => 26,  69 => 26,  66 => 25,  53 => 30,  51 => 14,  49 => 12,  46 => 14,  40 => 13,  36 => 5,  34 => 4,  31 => 3,  19 => 1,  181 => 81,  177 => 36,  155 => 74,  146 => 58,  142 => 29,  138 => 64,  128 => 60,  91 => 35,  71 => 16,  67 => 13,  62 => 24,  57 => 17,  54 => 5,  48 => 4,  41 => 25,  39 => 22,  35 => 11,  29 => 4,  24 => 2,  198 => 38,  195 => 84,  191 => 36,  188 => 35,  174 => 84,  171 => 34,  162 => 74,  158 => 42,  152 => 73,  147 => 55,  144 => 54,  135 => 52,  122 => 49,  117 => 53,  111 => 44,  104 => 51,  101 => 43,  99 => 8,  93 => 47,  88 => 29,  82 => 34,  78 => 23,  64 => 25,  60 => 19,  52 => 19,  44 => 26,  159 => 66,  148 => 69,  139 => 54,  131 => 61,  127 => 50,  124 => 56,  115 => 52,  112 => 50,  105 => 25,  96 => 48,  92 => 20,  85 => 18,  80 => 43,  75 => 28,  70 => 26,  65 => 35,  61 => 24,  58 => 32,  42 => 12,  38 => 12,  33 => 22,  30 => 5,);
    }
}
