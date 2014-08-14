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
        // line 18
        echo "    </head>
    <body>
       <div id=\"content\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
    </body>
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
        echo "           ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "               ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "82e4982_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982_0") : $this->env->getExtension('assets')->getAssetUrl("js/82e4982_jquery-1.11.1_1.js");
            // line 14
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "82e4982_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982_1") : $this->env->getExtension('assets')->getAssetUrl("js/82e4982_bootstrap.min_2.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "82e4982"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982") : $this->env->getExtension('assets')->getAssetUrl("js/82e4982.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
        ";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "               ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1820aaf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf_0") : $this->env->getExtension('assets')->getAssetUrl("css/1820aaf_part_1_bootstrap.min_1.css");
            // line 8
            echo "               <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
               ";
        } else {
            // asset "1820aaf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf") : $this->env->getExtension('assets')->getAssetUrl("css/1820aaf.css");
            echo "               <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
               ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "           ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "            ";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NewsBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 22,  123 => 23,  120 => 22,  117 => 21,  113 => 10,  99 => 8,  94 => 7,  91 => 6,  86 => 16,  66 => 14,  61 => 11,  58 => 6,  55 => 5,  49 => 4,  42 => 24,  40 => 21,  35 => 18,  33 => 5,  29 => 4,  24 => 1,);
    }
}
