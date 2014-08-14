<?php

/* NewsBundle:Registration:index.html.twig */
class __TwigTemplate_83c36b4ee68747a1f12940cee71cb41b48135950c9a7e485c3843bb7f20cc9e9 extends Twig_Template
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
        return array (  118 => 43,  23 => 1,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 77,  165 => 69,  156 => 64,  146 => 58,  137 => 52,  188 => 88,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  153 => 73,  151 => 61,  148 => 71,  134 => 51,  100 => 43,  97 => 41,  90 => 37,  77 => 31,  70 => 29,  34 => 4,  49 => 14,  58 => 22,  84 => 27,  155 => 32,  152 => 31,  126 => 57,  121 => 9,  113 => 41,  76 => 22,  62 => 23,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 47,  107 => 36,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 61,  163 => 79,  159 => 66,  143 => 56,  138 => 10,  135 => 53,  119 => 42,  102 => 32,  91 => 41,  71 => 25,  67 => 19,  63 => 21,  59 => 14,  38 => 12,  94 => 35,  89 => 29,  85 => 38,  75 => 28,  68 => 14,  56 => 21,  87 => 39,  21 => 2,  26 => 3,  93 => 30,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 21,  69 => 22,  47 => 12,  40 => 7,  37 => 7,  22 => 2,  246 => 90,  157 => 75,  145 => 46,  139 => 54,  131 => 52,  123 => 41,  120 => 54,  115 => 39,  111 => 44,  108 => 43,  101 => 35,  98 => 31,  96 => 31,  83 => 29,  74 => 14,  66 => 23,  55 => 13,  52 => 19,  50 => 11,  43 => 9,  41 => 11,  35 => 6,  32 => 4,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 11,  141 => 55,  133 => 9,  130 => 48,  125 => 44,  122 => 55,  116 => 53,  112 => 35,  109 => 40,  106 => 47,  103 => 45,  99 => 31,  95 => 28,  92 => 38,  86 => 37,  82 => 29,  80 => 33,  73 => 31,  64 => 10,  60 => 22,  57 => 17,  54 => 18,  51 => 14,  48 => 15,  45 => 15,  42 => 10,  39 => 10,  36 => 6,  33 => 6,  30 => 7,);
    }
}
