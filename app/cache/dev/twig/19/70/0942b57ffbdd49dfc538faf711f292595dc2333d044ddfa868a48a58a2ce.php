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
        // line 54
        echo "            </div>
            
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
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "82e4982_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/82e4982_bootstrap.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "82e4982"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_82e4982") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/82e4982.js");
            echo "            <script src=\"";
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
            echo "       <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
       ";
            // asset "1820aaf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf_part_1_style_2.css");
            echo "       <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
       ";
        } else {
            // asset "1820aaf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1820aaf") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1820aaf.css");
            echo "       <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
       ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "   ";
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
            echo "        <div class=\"alert alert-warning alert-dismissable text-center\">
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
        echo "                
        ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 44
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

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "            <div id=\"logo\" class=\"col-md\" style=\"padding:5px\">
                ";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc97b69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69_logo_1.png");
            // line 38
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                ";
        } else {
            // asset "fc97b69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69.png");
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "                <hr>
            </div>
                
        ";
    }

    public function getTemplateName()
    {
        return "NewsBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 40,  184 => 38,  180 => 37,  177 => 36,  174 => 35,  159 => 35,  156 => 34,  147 => 31,  143 => 29,  139 => 28,  132 => 23,  129 => 22,  105 => 9,  100 => 8,  97 => 7,  72 => 16,  68 => 13,  65 => 12,  63 => 7,  58 => 6,  55 => 5,  41 => 54,  39 => 22,  35 => 20,  29 => 4,  24 => 1,  212 => 39,  209 => 38,  205 => 37,  202 => 36,  188 => 65,  185 => 64,  176 => 62,  172 => 61,  166 => 58,  161 => 44,  158 => 55,  149 => 53,  141 => 51,  136 => 50,  131 => 48,  125 => 11,  118 => 40,  115 => 38,  113 => 36,  109 => 34,  102 => 32,  92 => 18,  87 => 29,  78 => 23,  74 => 21,  60 => 20,  56 => 19,  49 => 4,  43 => 12,  33 => 5,  30 => 3,);
    }
}
