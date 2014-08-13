<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_7224b8ee0dd348d3997720e496faafd4725150d171563b917377f3db69a58cda extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  197 => 71,  194 => 70,  191 => 77,  185 => 75,  150 => 55,  178 => 64,  167 => 71,  152 => 74,  124 => 62,  105 => 34,  88 => 37,  81 => 23,  129 => 64,  121 => 50,  104 => 42,  23 => 1,  114 => 59,  76 => 31,  267 => 101,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 75,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 65,  165 => 60,  156 => 58,  137 => 65,  188 => 76,  174 => 74,  172 => 62,  170 => 77,  166 => 79,  153 => 69,  148 => 69,  134 => 54,  126 => 63,  113 => 48,  100 => 33,  97 => 52,  77 => 31,  34 => 26,  65 => 35,  49 => 14,  58 => 32,  84 => 24,  175 => 36,  155 => 75,  151 => 70,  146 => 49,  117 => 35,  90 => 27,  70 => 19,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  93 => 47,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 78,  179 => 84,  171 => 73,  163 => 78,  159 => 66,  143 => 56,  138 => 56,  135 => 53,  119 => 40,  102 => 41,  91 => 50,  78 => 17,  71 => 15,  63 => 34,  59 => 14,  38 => 6,  94 => 51,  89 => 28,  85 => 38,  75 => 43,  68 => 36,  56 => 35,  87 => 34,  21 => 2,  26 => 6,  67 => 24,  62 => 19,  27 => 3,  46 => 13,  44 => 26,  31 => 25,  28 => 20,  24 => 18,  25 => 3,  19 => 1,  79 => 25,  72 => 26,  69 => 40,  47 => 11,  40 => 7,  37 => 7,  22 => 17,  246 => 93,  157 => 75,  145 => 46,  139 => 54,  131 => 61,  123 => 42,  120 => 57,  115 => 39,  111 => 47,  108 => 56,  101 => 40,  98 => 8,  96 => 37,  83 => 33,  74 => 39,  66 => 39,  55 => 16,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 6,  32 => 5,  29 => 24,  209 => 92,  203 => 73,  199 => 86,  193 => 83,  189 => 82,  187 => 84,  182 => 85,  176 => 63,  173 => 72,  168 => 61,  164 => 70,  162 => 59,  154 => 71,  149 => 73,  147 => 54,  144 => 49,  141 => 51,  133 => 42,  130 => 46,  125 => 51,  122 => 55,  116 => 39,  112 => 33,  109 => 34,  106 => 43,  103 => 34,  99 => 31,  95 => 25,  92 => 38,  86 => 45,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 13,  57 => 17,  54 => 34,  51 => 33,  48 => 7,  45 => 10,  42 => 29,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
