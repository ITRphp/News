<?php

/* NewsBundle:PasswordRecovery:MailBody.html.twig */
class __TwigTemplate_ef8751c1615c13fb4d6968ec3130fd60e54ff61f7197c98dac427659e08dc2b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Dear ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    We have received your request for resetting your account password, you can click the below link to change your password. 
    <p>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["access_hash"]) ? $context["access_hash"] : $this->getContext($context, "access_hash")), "html", null, true);
        echo "\">Click here</a>
    </p>
    <p>
        If you ignore this message, your password won't be changed.
    </p>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:PasswordRecovery:MailBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  114 => 46,  76 => 26,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 77,  165 => 69,  156 => 64,  137 => 52,  188 => 88,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  153 => 73,  148 => 71,  134 => 51,  126 => 57,  113 => 51,  100 => 43,  97 => 41,  77 => 31,  34 => 5,  65 => 22,  49 => 14,  58 => 22,  84 => 36,  175 => 36,  155 => 31,  151 => 61,  146 => 58,  117 => 10,  90 => 37,  70 => 24,  53 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 47,  107 => 36,  93 => 28,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 37,  163 => 79,  159 => 66,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 41,  78 => 21,  71 => 19,  63 => 21,  59 => 20,  38 => 6,  94 => 35,  89 => 32,  85 => 34,  75 => 28,  68 => 14,  56 => 21,  87 => 39,  21 => 2,  26 => 6,  67 => 23,  62 => 23,  27 => 4,  46 => 17,  44 => 11,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 26,  69 => 22,  47 => 12,  40 => 13,  37 => 7,  22 => 2,  246 => 90,  157 => 75,  145 => 46,  139 => 54,  131 => 52,  123 => 41,  120 => 54,  115 => 39,  111 => 44,  108 => 48,  101 => 40,  98 => 8,  96 => 31,  83 => 29,  74 => 14,  66 => 23,  55 => 19,  52 => 19,  50 => 18,  43 => 8,  41 => 11,  35 => 7,  32 => 4,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 49,  141 => 55,  133 => 42,  130 => 48,  125 => 23,  122 => 55,  116 => 53,  112 => 35,  109 => 34,  106 => 41,  103 => 45,  99 => 31,  95 => 7,  92 => 38,  86 => 37,  82 => 29,  80 => 33,  73 => 31,  64 => 10,  60 => 19,  57 => 17,  54 => 10,  51 => 9,  48 => 15,  45 => 9,  42 => 7,  39 => 8,  36 => 5,  33 => 6,  30 => 7,);
    }
}
