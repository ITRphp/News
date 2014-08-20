<?php

/* NewsBundle:PasswordRecovery:update.html.twig */
class __TwigTemplate_eed90e92cd594058282ee30d34aeb0e73acb7065f9e4167510f97d92ecde58d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Update.password", array(), "messages");
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "50e4156_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50e4156_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/50e4156_repeatPassword_1.js");
            // line 8
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "50e4156"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_50e4156") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/50e4156.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
 <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_new_password");
        echo "\" method=\"POST\" class=\"col-md-offset-4 col-md-4 well\">
        <div class=\"control-group\">
            <label for=\"password1\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Enter.new.password", array(), "messages");
        echo ":</label>
            <div class=\"controls\">
                <input type=\"password\" placeholder=\"your password\" name=\"password1\" class=\"form-control password1\" required>
            </div>
        </div>
        <div class=\"control-group\">
            <label for=\"password2\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Repeat.new.password", array(), "messages");
        echo ":</label>
            <div class=\"controls\">
                <input type=\"password\" placeholder=\"repeat password\" name=\"password2\" class=\"form-control\" id=\"password2\" required>
            </div>
        </div>
     <br>
            <input type=\"submit\" value=\"Send\" class=\"form-control btn-primary\">
    </form>   
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:PasswordRecovery:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  77 => 16,  72 => 14,  67 => 13,  64 => 12,  48 => 8,  44 => 6,  39 => 5,  36 => 4,  30 => 2,);
    }
}
