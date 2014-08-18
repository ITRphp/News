<?php

/* NewsBundle:Menu:input.html.twig */
class __TwigTemplate_d8aac2f4641b27804fac189ffa2d0327d43956249dee501cd42a35b6208008ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<form class=\"navbar-form navbar-left\" action=\"\" role=\"search\">
  <div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Отправить</button>
</form>";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Menu:input.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
