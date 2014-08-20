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
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("password_recovery");
        echo "\" method=\"POST\" class=\"col-md-offset-4 col-md-4 well\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "            <div class=\"text-danger text-center\"> <h3>";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</h3></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        <div class=\"control-group\">
            <label for=\"_email\">";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Enter.email", array(), "messages");
        echo ":</label>
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
        return array (  56 => 10,  53 => 9,  44 => 7,  40 => 6,  36 => 5,  31 => 4,  28 => 3,);
    }
}
