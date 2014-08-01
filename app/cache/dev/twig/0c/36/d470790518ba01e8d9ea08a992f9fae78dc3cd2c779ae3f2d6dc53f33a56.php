<?php

/* NewsBundle:Welcome:index.html.twig */
class __TwigTemplate_0c36d470790518ba01e8d9ea08a992f9fae78dc3cd2c779ae3f2d6dc53f33a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " News ";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        <h1 class=\"title\">Welcom!</h1>
        
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_registration");
        echo "\" class=\"sf-button sf-button-selected\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Registration</span>
                </span>
            </span>
        </a>
        
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" class=\"sf-button sf-button-selected\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Authorization</span>
                </span>
            </span>
        </a>
            
    ";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  49 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
