<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_becd80afdc6a20f62ca8071551befcd176454d20bbde309ffc60f5f03580894f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
</head>
<body>
    <h1>Oops! An Error Occurred</h1>
    <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 41,  78 => 40,  46 => 10,  44 => 9,  36 => 7,  32 => 9,  27 => 4,  22 => 1,  57 => 12,  54 => 11,  43 => 8,  40 => 8,  33 => 4,  30 => 3,);
    }
}
