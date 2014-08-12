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
        return array (  132 => 23,  128 => 24,  125 => 23,  122 => 22,  117 => 10,  103 => 9,  98 => 8,  95 => 7,  90 => 18,  70 => 16,  66 => 13,  63 => 12,  61 => 7,  56 => 6,  53 => 5,  47 => 4,  41 => 25,  39 => 22,  35 => 20,  33 => 5,  29 => 4,  24 => 1,  84 => 20,  82 => 19,  78 => 18,  74 => 16,  72 => 15,  68 => 14,  62 => 11,  59 => 10,  50 => 8,  45 => 7,  42 => 6,  36 => 5,  30 => 3,);
    }
}
