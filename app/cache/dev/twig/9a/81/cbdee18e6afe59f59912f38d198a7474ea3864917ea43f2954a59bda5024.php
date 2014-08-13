<?php

/* NewsBundle:Secured:login.html.twig */
class __TwigTemplate_9a81cbdee18e6afe59f59912f38d198a7474ea3864917ea43f2954a59bda5024 extends Twig_Template
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
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "                    <div class=\"alert alert-warning text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array(), "messages"), "html", null, true);
            echo "</div>
        ";
        }
        // line 7
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"col-md-offset-4 col-md-4 well\">
            <div class=\"control-group\">
                <label for=\"username\" class=\"text-muted\">";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("User name", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </div>
            </div>
                <p></p>
            <div class=\"control-group\">
                <label for=\"password\" class=\"text-muted\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                </div>
            </div>
            <input type=\"hidden\" name=\"_target_path\" value=\"/mainpage\" />
            <p></p>
            <div class=\"row\">
                <input type=\"submit\" class=\"btn btn-success col-md-6 col-md-offset-3\" value=\"";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Log in", array(), "messages");
        echo "\" />                   
            </div>
            <p>
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("password_recovery");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forgot.password", array(), "messages");
        echo "</a>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_registration");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
        echo "</a>
            </p>   
        
        </form>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 27,  70 => 24,  59 => 16,  51 => 11,  46 => 9,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
