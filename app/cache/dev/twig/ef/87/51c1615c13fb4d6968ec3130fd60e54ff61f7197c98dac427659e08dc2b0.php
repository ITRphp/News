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
        return array (  23 => 1,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  207 => 91,  205 => 90,  186 => 81,  183 => 78,  170 => 71,  165 => 69,  151 => 61,  146 => 58,  134 => 51,  244 => 108,  222 => 99,  218 => 97,  216 => 96,  212 => 94,  201 => 89,  188 => 85,  185 => 84,  137 => 52,  118 => 51,  104 => 44,  77 => 31,  150 => 51,  117 => 38,  76 => 26,  34 => 5,  49 => 14,  58 => 20,  84 => 36,  53 => 19,  195 => 84,  181 => 77,  174 => 38,  158 => 46,  156 => 64,  153 => 71,  136 => 30,  129 => 42,  126 => 55,  121 => 40,  70 => 24,  65 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 101,  220 => 98,  214 => 95,  177 => 80,  169 => 77,  140 => 31,  132 => 51,  128 => 47,  107 => 46,  93 => 28,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 103,  230 => 82,  227 => 100,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 78,  163 => 62,  159 => 66,  143 => 56,  138 => 46,  135 => 61,  119 => 42,  102 => 43,  91 => 41,  78 => 21,  71 => 18,  63 => 21,  59 => 20,  38 => 12,  94 => 35,  89 => 32,  85 => 33,  75 => 17,  68 => 14,  56 => 10,  87 => 39,  21 => 2,  26 => 6,  67 => 24,  62 => 23,  27 => 3,  46 => 17,  44 => 7,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 25,  69 => 22,  47 => 12,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 48,  139 => 54,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 44,  108 => 36,  101 => 40,  98 => 31,  96 => 39,  83 => 29,  74 => 26,  66 => 23,  55 => 19,  52 => 19,  50 => 18,  43 => 8,  41 => 11,  35 => 7,  32 => 4,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 68,  144 => 67,  141 => 55,  133 => 42,  130 => 48,  125 => 41,  122 => 53,  116 => 50,  112 => 49,  109 => 47,  106 => 41,  103 => 32,  99 => 41,  95 => 28,  92 => 37,  86 => 37,  82 => 29,  80 => 33,  73 => 27,  64 => 10,  60 => 8,  57 => 7,  54 => 19,  51 => 15,  48 => 15,  45 => 8,  42 => 10,  39 => 8,  36 => 5,  33 => 6,  30 => 5,);
    }
}
