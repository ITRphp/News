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
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 8
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
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
        return array (  65 => 13,  55 => 6,  38 => 8,  32 => 6,  27 => 4,  22 => 1,  54 => 11,  45 => 13,  34 => 4,  31 => 3,  103 => 28,  98 => 26,  94 => 25,  90 => 24,  85 => 22,  79 => 21,  73 => 18,  70 => 17,  67 => 16,  60 => 7,  51 => 10,  47 => 14,  44 => 7,  41 => 6,  39 => 5,  36 => 7,  30 => 3,);
    }
}
