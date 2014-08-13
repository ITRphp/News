<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_1ded2d1ff04c3721f55df546913c9d14abd830125222d9524a98d2558c6641ea extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  88 => 37,  81 => 33,  129 => 41,  121 => 36,  104 => 28,  23 => 1,  114 => 39,  76 => 27,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 77,  165 => 69,  156 => 64,  137 => 46,  188 => 88,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  153 => 73,  148 => 71,  134 => 51,  126 => 57,  113 => 51,  100 => 33,  97 => 41,  77 => 31,  34 => 5,  65 => 20,  49 => 19,  58 => 12,  84 => 36,  175 => 36,  155 => 31,  151 => 61,  146 => 49,  117 => 35,  90 => 37,  70 => 17,  53 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 47,  107 => 36,  93 => 28,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 37,  163 => 79,  159 => 66,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 29,  78 => 17,  71 => 15,  63 => 21,  59 => 18,  38 => 10,  94 => 30,  89 => 28,  85 => 38,  75 => 28,  68 => 16,  56 => 21,  87 => 32,  21 => 2,  26 => 6,  67 => 25,  62 => 19,  27 => 5,  46 => 13,  44 => 11,  31 => 4,  28 => 3,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 26,  69 => 24,  47 => 11,  40 => 7,  37 => 7,  22 => 3,  246 => 90,  157 => 75,  145 => 46,  139 => 54,  131 => 52,  123 => 41,  120 => 54,  115 => 39,  111 => 44,  108 => 36,  101 => 40,  98 => 8,  96 => 31,  83 => 19,  74 => 29,  66 => 23,  55 => 17,  52 => 16,  50 => 11,  43 => 12,  41 => 11,  35 => 6,  32 => 7,  29 => 6,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 49,  141 => 47,  133 => 42,  130 => 48,  125 => 23,  122 => 55,  116 => 53,  112 => 33,  109 => 34,  106 => 43,  103 => 34,  99 => 38,  95 => 25,  92 => 38,  86 => 27,  82 => 28,  80 => 33,  73 => 23,  64 => 15,  60 => 13,  57 => 17,  54 => 11,  51 => 12,  48 => 7,  45 => 7,  42 => 6,  39 => 9,  36 => 5,  33 => 5,  30 => 3,);
    }
}
