<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_eaba6d4df3f00637b943dd6af51a89d41412c59115514e69650f6fadb769b98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"sf-reset\">
                ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "            </div>
        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  60 => 8,  55 => 7,  47 => 14,  45 => 13,  39 => 9,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
