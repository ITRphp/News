<?php

/* NewsBundle:News:show.html.twig */
class __TwigTemplate_33abc85a21b1bd3b326396eac1c3a218d1e4bfc2c7f117049707356c5d776980 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), array(0 => "NewsBundle:Form:delete.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <h1  class=\"text-center\">News</h1>
    <div class=\"btn-toolbar\" role=\"toolbar\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to the list", array(), "messages");
        echo "</a>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo "</a>
        </div>
     </div>
        <div class=\"row jumbotron\">
            <div class=\"row col-md-10 col-md-offset-1 well-sm\">
                <h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Title"), "html", null, true);
        echo ": </h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "
            </div>
            <div class=\"row col-md-offset-1 col-md-10 well-sm\">
                <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Author"), "html", null, true);
        echo ":</h3> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "author"), "html", null, true);
        echo "
                <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Publication date"), "html", null, true);
        echo ":</h3> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "publicationdate"), "Y-m-d H:i:s"), "html", null, true);
        echo "
            </div>
            <div class=\"row col-md-offset-1 col-md-10 well-sm\">
                <strong><h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
        echo ":</h3> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</strong>
            </div>
                <div class=\"row col-md-offset-1 col-md-10 -sm\">
                    <h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Content"), "html", null, true);
        echo ":</h3> ";
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content");
        echo "
                </div>
        </div>
 ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "NewsBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  86 => 24,  78 => 21,  70 => 18,  64 => 17,  56 => 14,  46 => 9,  40 => 8,  33 => 4,  30 => 3,  25 => 2,);
    }
}
