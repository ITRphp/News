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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "NewsBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        echo "    
         
        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_registration");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"col-md-offset-4 col-md-4 well\">
            <div class=\"control-group\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_name"), 'label', array("attr" => array("class" => "label"), "label" => "Username"));
        echo "
                <div class=\"controls\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_name"), 'widget', array("attr" => array("pattern" => "^[a-zA-Z0-9_]+\$", "placeholder" => "Your name", "class" => "form-control")));
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_name"), 'errors');
        echo "
                </div>
            </div>
                <p></p>
            <div class=\"control-group\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_email"), 'label', array("attr" => array("class" => "label"), "label" => "Email"));
        echo "
                <div class=\"controls\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_email"), 'widget', array("attr" => array("placeholder" => "example@example.com", "class" => "form-control")));
        echo "
                     ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_email"), 'errors');
        echo "
                  </div>
            </div>
                <p></p>
            <div class=\"control-group\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_password"), 'label', array("label" => "Password", "attr" => array("class" => "label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_password"), 'widget', array("attr" => array("placeholder" => "Password", "class" => "password1 form-control")));
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user_password"), 'errors');
        echo "
                </div>
            </div>     
                <p></p>
            <div class=\"control-group\">
                <label for=\"password2\">";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("Repeat password", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                     <input class=\"form-control\" type=\"password\" id=\"password2\" name=\"_password\" placeholder=\"Repeat password\" />
                </div>
            </div>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <p></p>
            <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
        echo "\"/>
        </form>    
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
        return array (  118 => 43,  113 => 41,  109 => 40,  101 => 35,  93 => 30,  89 => 29,  84 => 27,  76 => 22,  72 => 21,  67 => 19,  59 => 14,  55 => 13,  50 => 11,  43 => 9,  37 => 7,  31 => 5,  26 => 3,);
    }
}
