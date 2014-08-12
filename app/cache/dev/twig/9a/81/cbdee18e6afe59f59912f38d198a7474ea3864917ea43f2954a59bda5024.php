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
        echo "    <h1 class=\"text-muted\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Log in", array(), "messages");
        echo "</h1>
    <br>
    <div class=\"container\">
        <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"login\" role=\"form\" class=\"form-signin\">
            <div class=\"control-group\">
                
                ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                    <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array(), "messages"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "                <label for=\"username\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("User name", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </div>
            </div>
            <div class=\"control-group\">
                <label for=\"password\">";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </div>
            </div>
            <input type=\"hidden\" name=\"_target_path\" value=\"/hello\" />
            
            <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Log in", array(), "messages");
        echo "\"/>                      
            <p>
                 <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("password_recovery");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forgot.password", array(), "messages");
        echo "</a>
            </p>   
        
        </form>
    </div>
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
        return array (  80 => 28,  75 => 26,  65 => 19,  58 => 15,  52 => 13,  46 => 11,  44 => 10,  38 => 7,  31 => 4,  28 => 3,);
    }
}
