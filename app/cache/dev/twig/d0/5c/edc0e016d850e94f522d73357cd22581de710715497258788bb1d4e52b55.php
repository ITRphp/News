<?php

/* NewsBundle::layout.html.twig */
class __TwigTemplate_d05cedc0e016d850e94f522d73357cd22581de710715497258788bb1d4e52b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/newsbundle/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/newsbundle/css/signing.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("News", array(), "messages");
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t<div id=\"content\" class = \"container\" style=\"-webkit-box-shadow: 0px 0px 6px 6px rgba(50, 50, 50, 0.13);
\t\t\t\t\t\t\t\t\t-moz-box-shadow:    0px 0px 6px 6px rgba(50, 50, 50, 0.13);
\t\t\t\t\t\t\t\t\tbox-shadow:         0px 0px 6px 6px rgba(50, 50, 50, 0.13);\">
\t";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "   \t</div>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t";
    }

    public function getTemplateName()
    {
        return "NewsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  66 => 14,  61 => 16,  59 => 14,  54 => 11,  51 => 10,  45 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
