<?php

/* NewsBundle::layout.html.twig */
class __TwigTemplate_19700942b57ffbdd49dfc538faf711f292595dc2333d044ddfa868a48a58a2ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html> 
    <head>
       <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
            ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("News", array(), "messages");
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "           <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
           ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "           
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "82e4982_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/82e4982_jquery-1.11.1_1.js");
            // line 16
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "82e4982_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/82e4982_bootstrap.min_2.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "82e4982"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/82e4982.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
        ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "               ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1820aaf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf_part_1_bootstrap.min_1.css");
            // line 9
            echo "               <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
        } else {
            // asset "1820aaf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf.css");
            echo "               <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "           
           ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "            ";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NewsBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 10,  90 => 18,  70 => 16,  53 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 23,  128 => 24,  107 => 36,  61 => 7,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  171 => 61,  163 => 62,  159 => 61,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 27,  71 => 19,  67 => 15,  63 => 12,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 6,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 12,  47 => 4,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  101 => 32,  98 => 8,  96 => 31,  83 => 25,  74 => 14,  66 => 13,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 25,  35 => 20,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 62,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 23,  122 => 22,  116 => 41,  112 => 35,  109 => 34,  106 => 36,  103 => 9,  99 => 31,  95 => 7,  92 => 21,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 16,  42 => 7,  39 => 22,  36 => 5,  33 => 5,  30 => 7,);
    }
}
