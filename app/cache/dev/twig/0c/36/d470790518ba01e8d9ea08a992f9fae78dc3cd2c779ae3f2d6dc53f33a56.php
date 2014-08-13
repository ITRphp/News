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
        echo $this->env->getExtension('translator')->getTranslator()->trans("News", array(), "messages");
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "            <div class=\"text-center \">
                <h1> ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome", array(), "messages");
        echo " </h1>
            </div>  
            <div class=\"text-center btn-group-lg\">
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_registration");
        echo "\" class=\"btn btn-success\">
                    ";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
        // line 13
        echo "                </a>

                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" class=\"btn btn-success\">
                   ";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Log in", array(), "messages");
        // line 17
        echo "                </a>     
            </div>
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
        return array (  70 => 17,  68 => 16,  64 => 15,  60 => 13,  58 => 12,  54 => 11,  48 => 8,  45 => 7,  42 => 6,  36 => 5,  30 => 3,);
    }
}
