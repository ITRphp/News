<?php

/* NewsBundle:User:edit.html.twig */
class __TwigTemplate_1236bae9e590fb668a40f3d97f202f5c13d926e5257b4d22cc650d340b805faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  110 => 40,  118 => 45,  113 => 41,  76 => 22,  53 => 18,  81 => 28,  84 => 27,  77 => 33,  65 => 23,  70 => 17,  129 => 24,  126 => 23,  105 => 8,  100 => 7,  97 => 6,  58 => 6,  49 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  171 => 61,  163 => 62,  159 => 61,  143 => 56,  138 => 54,  135 => 53,  119 => 10,  102 => 32,  91 => 27,  71 => 30,  67 => 16,  63 => 15,  59 => 15,  38 => 6,  94 => 28,  89 => 29,  85 => 38,  75 => 25,  68 => 23,  56 => 21,  87 => 31,  21 => 2,  26 => 3,  93 => 30,  88 => 6,  78 => 20,  46 => 14,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 21,  69 => 12,  47 => 8,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 22,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  101 => 34,  98 => 31,  96 => 31,  83 => 22,  74 => 24,  66 => 19,  55 => 15,  52 => 14,  50 => 11,  43 => 8,  41 => 6,  35 => 6,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 62,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 23,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 40,  106 => 42,  103 => 32,  99 => 37,  95 => 28,  92 => 28,  86 => 24,  82 => 31,  80 => 27,  73 => 18,  64 => 22,  60 => 17,  57 => 22,  54 => 13,  51 => 9,  48 => 12,  45 => 11,  42 => 10,  39 => 5,  36 => 5,  33 => 5,  30 => 3,);
    }
}
