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
        echo "Registration";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"form-type\">
        <form method=\"POST\" action=\"\" accept-charset=\"UTF-8\" id=\"contact_form\">
            <div>
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" class=\"span4\" name=\"username\" placeholder=\"Username\">
            </div>
            <div>
                <label for=\"email\">Email:</label>
                <input type=\"email\" id=\"email\" class=\"span4\" name=\"email\" placeholder=\"email@example.com\">
            </div>
            <div>
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" class=\"span4\" name=\"password\" placeholder=\"Password\">
            </div>
            <button type=\"submit\" name=\"submit\" class=\"btn btn-info btn-block\">Registration</button>
\t\t</form>    
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
        return array (  38 => 5,  35 => 4,  29 => 3,);
    }
}
