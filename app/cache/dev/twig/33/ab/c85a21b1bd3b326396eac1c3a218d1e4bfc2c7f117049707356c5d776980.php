<?php

/* NewsBundle:News:show.html.twig */
class __TwigTemplate_33abc85a21b1bd3b326396eac1c3a218d1e4bfc2c7f117049707356c5d776980 extends Twig_Template
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
        echo "<h1>News</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "author"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publication_date</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "publicationdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descroption</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descroption"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 77,  165 => 69,  156 => 64,  146 => 58,  137 => 52,  188 => 88,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  153 => 73,  151 => 61,  148 => 71,  134 => 51,  126 => 57,  113 => 51,  100 => 43,  97 => 41,  90 => 37,  62 => 20,  34 => 4,  84 => 36,  77 => 33,  65 => 23,  70 => 25,  49 => 14,  121 => 11,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 47,  107 => 9,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 61,  163 => 79,  159 => 66,  143 => 56,  138 => 54,  135 => 23,  119 => 42,  102 => 8,  91 => 41,  71 => 30,  67 => 26,  63 => 12,  59 => 23,  38 => 12,  94 => 43,  89 => 40,  85 => 38,  75 => 28,  68 => 23,  56 => 22,  87 => 31,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 26,  69 => 26,  47 => 18,  40 => 13,  37 => 10,  22 => 2,  246 => 90,  157 => 75,  145 => 46,  139 => 54,  131 => 24,  123 => 41,  120 => 54,  115 => 39,  111 => 44,  108 => 48,  101 => 32,  98 => 31,  96 => 31,  83 => 33,  74 => 24,  66 => 15,  55 => 15,  52 => 19,  50 => 18,  43 => 8,  41 => 25,  35 => 6,  32 => 4,  29 => 4,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 49,  141 => 55,  133 => 42,  130 => 48,  125 => 22,  122 => 55,  116 => 53,  112 => 35,  109 => 34,  106 => 42,  103 => 45,  99 => 37,  95 => 28,  92 => 42,  86 => 37,  82 => 34,  80 => 33,  73 => 19,  64 => 22,  60 => 22,  57 => 17,  54 => 20,  51 => 19,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 5,  30 => 7,);
    }
}
