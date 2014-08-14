<?php

/* NewsBundle:Secured:login.html.twig */
class __TwigTemplate_d990fb72b3813a6fa2c1c835615a2c779b1a9270c052d0577ff3ef14016d11c5 extends Twig_Template
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
            <input type=\"hidden\" name=\"_target_path\" value=\"/mainpage\" />
            
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
        return array (  65 => 19,  118 => 43,  23 => 1,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 77,  165 => 69,  156 => 64,  146 => 58,  137 => 52,  188 => 88,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  153 => 73,  151 => 61,  148 => 71,  134 => 51,  100 => 43,  97 => 41,  90 => 37,  77 => 31,  70 => 29,  34 => 4,  49 => 14,  58 => 15,  84 => 27,  155 => 32,  152 => 31,  126 => 57,  121 => 9,  113 => 41,  76 => 22,  62 => 23,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 47,  107 => 36,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 61,  163 => 79,  159 => 66,  143 => 56,  138 => 10,  135 => 53,  119 => 42,  102 => 32,  91 => 41,  71 => 25,  67 => 19,  63 => 21,  59 => 14,  38 => 7,  94 => 35,  89 => 29,  85 => 38,  75 => 26,  68 => 14,  56 => 21,  87 => 39,  21 => 2,  26 => 3,  93 => 30,  88 => 6,  78 => 34,  46 => 11,  27 => 4,  44 => 10,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 21,  69 => 22,  47 => 12,  40 => 7,  37 => 7,  22 => 2,  246 => 90,  157 => 75,  145 => 46,  139 => 54,  131 => 52,  123 => 41,  120 => 54,  115 => 39,  111 => 44,  108 => 43,  101 => 35,  98 => 31,  96 => 31,  83 => 29,  74 => 14,  66 => 23,  55 => 13,  52 => 13,  50 => 11,  43 => 9,  41 => 6,  35 => 6,  32 => 4,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 11,  141 => 55,  133 => 9,  130 => 48,  125 => 44,  122 => 55,  116 => 53,  112 => 35,  109 => 40,  106 => 47,  103 => 45,  99 => 31,  95 => 28,  92 => 38,  86 => 37,  82 => 29,  80 => 28,  73 => 31,  64 => 10,  60 => 22,  57 => 17,  54 => 18,  51 => 14,  48 => 15,  45 => 15,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
