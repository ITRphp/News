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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class=\"text-danger text-center\"> <h3>";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</h3></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            <div class=\"text-center \">
                <h1> ";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome", array(), "messages");
        echo " </h1>
            </div>  
            <div class=\"text-center btn-group-lg\">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_registration");
        echo "\" class=\"btn btn-success\">
                    ";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
        // line 16
        echo "                </a>

                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" class=\"btn btn-success\">
                   ";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Log in", array(), "messages");
        // line 20
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
        return array (  84 => 20,  82 => 19,  78 => 18,  74 => 16,  72 => 15,  68 => 14,  62 => 11,  59 => 10,  50 => 8,  45 => 7,  42 => 6,  36 => 5,  30 => 3,);
    }
}
