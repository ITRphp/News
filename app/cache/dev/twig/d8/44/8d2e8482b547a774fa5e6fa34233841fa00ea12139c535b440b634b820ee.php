<?php

/* NewsBundle:Admin:layout.html.twig */
class __TwigTemplate_d8448d2e8482b547a774fa5e6fa34233841fa00ea12139c535b440b634b820ee extends Twig_Template
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
        echo "  
  <nav class=\"navbar navbar-default\" role=\"navigation\">
         <div class=\"container-fluid\">
             <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">LocalNews</a>
            </div>
             <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                ";
        // line 16
        echo $this->env->getExtension('knp_menu')->render("NewsBundle:Builder:adminMenu", array("currentClass" => "active", "template" => "NewsBundle:Menu:knp_menu.html.twig"));
        echo "      
             </div>
         </div>
    </nav>
    
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  28 => 3,);
    }
}
