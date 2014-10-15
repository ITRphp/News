<?php

/* NewsBundle:PasswordRecovery:email.html.twig */
class __TwigTemplate_5d04091f1b9ec9b1e2a02657044502eee5ecfa2cc9c94846a6d3c206023171c6 extends Twig_Template
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
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("password_recovery");
        echo "\" method=\"POST\" class=\"col-md-offset-4 col-md-4 well\">
        <div class=\"control-group\">
            <label for=\"_email\">Enter your email:</label>
            <div class=\"controls\">
                <input type=\"email\" placeholder=\"Your Email\" name=\"_email\" class=\"form-control\" required>
            </div>
            <br>
            <input type=\"submit\" value=\"Send\" class=\"form-control btn-primary\">
        </div>
    </form>    
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:PasswordRecovery:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
