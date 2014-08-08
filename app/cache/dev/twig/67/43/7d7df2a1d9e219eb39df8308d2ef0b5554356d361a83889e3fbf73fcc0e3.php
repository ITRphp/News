<?php

/* NewsBundle:Secured:hello.html.twig */
class __TwigTemplate_67437d7df2a1d9e219eb39df8308d2ef0b5554356d361a83889e3fbf73fcc0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Welcome</a>
    </div>
            ";
        // line 15
        echo $this->env->getExtension('knp_menu')->render("NewsBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "NewsBundle:Menu:knp_menu.html.twig"));
        echo "
        </div>
        </div>    
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  31 => 4,  28 => 3,);
    }
}
