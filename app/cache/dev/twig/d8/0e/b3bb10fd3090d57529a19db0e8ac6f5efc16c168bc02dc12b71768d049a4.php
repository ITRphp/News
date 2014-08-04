<?php

/* NewsBundle:Registration:index.html.twig */
class __TwigTemplate_d80eb3bb10fd3090d57529a19db0e8ac6f5efc16c168bc02dc12b71768d049a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <form method=\"POST\" action=\"\" accept-charset=\"UTF-8\" class=\"form-signin\">
            <div class=\"control-group\">
                <label for=\"username\">";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("User name", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" class=\"span4\" name=\"username\" placeholder=\"Username\">
                </div>
            </div>
            <div class=\"control-group\">
                <label for=\"email\">";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email:", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"email\" id=\"email\" name=\"_username\" placeholder=\"email@example.com\"/>
                </div>
            </div> 
            <div class=\"control-group\">
                <label for=\"password\">";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"password\" id=\"password\" class=\"span4\" name=\"password\" placeholder=\"Password\">
                </div>
            </div>
            <div class=\"control-group\">
                <label for=\"password2\">";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Repeat password", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"password\" id=\"password2\" name=\"_password\" placeholder=\"Password\" />
                </div>
            </div>
            <button type=\"submit\" name=\"submit\" class=\"btn btn-info btn-block\">";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
        echo "</button>
\t</form>    
    </div>
\t
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Registration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  70 => 27,  61 => 21,  52 => 15,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
