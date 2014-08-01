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
        echo "    <h1 class=\"title\">Login</h1>
    ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    
    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>
        
        <div>
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>
         <input type=\"hidden\" name=\"_target_path\" value=\"/hello\" />

         <button type=\"submit\" class=\"sf-button\">
             <span class=\"border-l\">
                   <span class=\"border-r\">
                         <span class=\"btn-bg\">Login</span>
                   </span>
             </span>
         </button>
         
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
        return array (  51 => 12,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
