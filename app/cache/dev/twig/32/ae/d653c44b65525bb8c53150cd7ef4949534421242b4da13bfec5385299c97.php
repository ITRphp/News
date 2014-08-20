<?php

/* NewsBundle:Category:new.html.twig */
class __TwigTemplate_32aed653c44b65525bb8c53150cd7ef4949534421242b4da13bfec5385299c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "NewsBundle:Form:errors.html.twig"));
        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "NewsBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <h1>Category creation</h1>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\"  class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to the list", array(), "messages");
        echo "</a> 
    <div class=\"row\" >
        <div class=\"col-md-5 col-md-offset-4\">
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')), "html", null, true);
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category_name"), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  40 => 10,  35 => 8,  32 => 7,  27 => 4,  25 => 3,);
    }
}
