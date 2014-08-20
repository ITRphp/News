<?php

/* NewsBundle:PasswordRecovery:MailBody.html.twig */
class __TwigTemplate_ef8751c1615c13fb4d6968ec3130fd60e54ff61f7197c98dac427659e08dc2b0 extends Twig_Template
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
        echo "    <h1>Dear ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    We have received your request for resetting your account password, you can click the below link to change your password. 
    <p>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["access_hash"]) ? $context["access_hash"] : $this->getContext($context, "access_hash")), "html", null, true);
        echo "\">Click here</a>
    </p>
    <p>
        If you ignore this message, your password won't be changed.
    </p>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:PasswordRecovery:MailBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  31 => 4,  28 => 3,);
    }
}
