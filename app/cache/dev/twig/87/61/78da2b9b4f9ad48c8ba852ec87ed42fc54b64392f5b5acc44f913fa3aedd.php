<?php

/* NewsBundle:PasswordRecovery:email.txt.twig */
class __TwigTemplate_876178da2b9b4f9ad48c8ba852ec87ed42fc54b64392f5b5acc44f913fa3aedd extends Twig_Template
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
        echo "Hello ";
        echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
        echo "!

Follow this link to update your password ";
        // line 3
        echo (isset($context["access_hash"]) ? $context["access_hash"] : $this->getContext($context, "access_hash"));
    }

    public function getTemplateName()
    {
        return "NewsBundle:PasswordRecovery:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
