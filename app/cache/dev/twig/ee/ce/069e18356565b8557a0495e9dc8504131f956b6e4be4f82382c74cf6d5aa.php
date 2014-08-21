<?php

/* NewsBundle:Mainpage:empty.html.twig */
class __TwigTemplate_eece069e18356565b8557a0495e9dc8504131f956b6e4be4f82382c74cf6d5aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle:MainPage:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsBundle:MainPage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, (isset($context["date1"]) ? $context["date1"] : $this->getContext($context, "date1")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Mainpage:empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
