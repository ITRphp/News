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
<body data-spy=\"scroll\" data-target=\"#affix-nav\" >
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo " </div>    
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("News"), "html", null, true);
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "   <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "82e4982_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/82e4982_bootstrap.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "82e4982"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/82e4982.js");
            echo "        <script src=\"";
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
        echo "       ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1820aaf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf_part_1_bootstrap.min_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
       ";
            // asset "1820aaf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf_part_1_style_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
       ";
        } else {
            // asset "1820aaf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
       ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "        <div class = \"container\" style=\"-webkit-box-shadow: 0px 0px 6px 6px rgba(50, 50, 50, 0.1);
\t\t\t\t\t\t\t\t\t\t-moz-box-shadow:    0px 0px 6px 6px rgba(50, 50, 50, 0.1);
\t\t\t\t\t\t\t\t\t\tbox-shadow:         0px 0px 6px 6px rgba(50, 50, 50, 0.1);

  \t\">
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                <div class=\"alert alert-warning alert-dismissable text-center\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                    <strong>";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</strong> 
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "            <div class=\"navbar-fixed-bottom row-fluid navbar-inverse\">
                <div class=\"navbar-inner\">
                    <div class=\"footer\">
                        <div class=\"container\">
                            <p class=\"text-muted\">Footer</p>                            
                        </div>
                    </div>
                </div>
            </div>
    ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "                <div id=\"logo\" class=\"col-md\" style=\"padding:5px\">
                    ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc97b69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69_logo_1.png");
            // line 37
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                    ";
        } else {
            // asset "fc97b69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69.png");
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "                    <hr>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "NewsBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 39,  181 => 37,  177 => 36,  174 => 35,  171 => 34,  158 => 42,  155 => 34,  146 => 31,  142 => 29,  138 => 28,  131 => 23,  128 => 22,  124 => 11,  104 => 9,  99 => 8,  96 => 7,  91 => 18,  71 => 16,  67 => 13,  62 => 7,  57 => 6,  54 => 5,  41 => 52,  39 => 22,  33 => 5,  29 => 4,  24 => 1,  64 => 12,  60 => 16,  56 => 15,  52 => 14,  48 => 4,  40 => 10,  35 => 20,  32 => 7,  27 => 4,  25 => 3,);
    }
}
