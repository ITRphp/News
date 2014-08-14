<?php

/* NewsBundle::layout.html.twig */
class __TwigTemplate_d05cedc0e016d850e94f522d73357cd22581de710715497258788bb1d4e52b55 extends Twig_Template
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
        // line 23
        echo "    </head>
    <body>
    \t<div class = \"container\" style=\"-webkit-box-shadow: 0px 0px 6px 6px rgba(50, 50, 50, 0.1);
\t\t\t\t\t\t\t\t\t\t-moz-box-shadow:    0px 0px 6px 6px rgba(50, 50, 50, 0.1);
\t\t\t\t\t\t\t\t\t\tbox-shadow:         0px 0px 6px 6px rgba(50, 50, 50, 0.1);

  \t\t\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
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
        echo "           <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
           ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "           
            ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d8a33b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d8a33b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5d8a33b_jquery-1.11.1_1.js");
            // line 19
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "5d8a33b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d8a33b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5d8a33b_repeatPassword_2.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "5d8a33b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d8a33b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5d8a33b_bootstrap.min_3.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "5d8a33b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d8a33b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5d8a33b_jquery.hotkeys_4.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "5d8a33b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5d8a33b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5d8a33b.js");
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 21
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
               <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
        } else {
            // asset "1820aaf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf.css");
            // line 9
            echo "               <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
               <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
           ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "           
           ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "            ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NewsBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 31,  155 => 32,  152 => 31,  149 => 30,  144 => 11,  138 => 10,  133 => 9,  126 => 10,  121 => 9,  116 => 8,  113 => 7,  108 => 21,  76 => 19,  72 => 14,  67 => 7,  59 => 5,  53 => 4,  46 => 33,  44 => 30,  35 => 23,  33 => 5,  29 => 4,  24 => 1,  45 => 16,  94 => 43,  87 => 39,  79 => 34,  69 => 13,  62 => 6,  55 => 19,  48 => 15,  41 => 11,  31 => 4,  28 => 3,);
    }
}
