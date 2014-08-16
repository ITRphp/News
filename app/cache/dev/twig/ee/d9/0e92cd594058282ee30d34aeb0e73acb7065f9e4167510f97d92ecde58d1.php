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
        return array (  23 => 1,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  207 => 91,  205 => 90,  186 => 81,  183 => 78,  170 => 71,  165 => 69,  151 => 61,  146 => 58,  134 => 51,  244 => 108,  222 => 99,  218 => 97,  216 => 96,  212 => 94,  201 => 89,  188 => 85,  185 => 84,  137 => 52,  118 => 51,  104 => 44,  77 => 16,  150 => 51,  117 => 38,  76 => 26,  34 => 5,  49 => 14,  58 => 20,  84 => 36,  53 => 18,  195 => 84,  181 => 77,  174 => 38,  158 => 46,  156 => 64,  153 => 71,  136 => 30,  129 => 42,  126 => 55,  121 => 40,  70 => 29,  65 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 101,  220 => 98,  214 => 95,  177 => 80,  169 => 77,  140 => 31,  132 => 51,  128 => 47,  107 => 46,  93 => 28,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 103,  230 => 82,  227 => 100,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 78,  163 => 62,  159 => 66,  143 => 56,  138 => 46,  135 => 61,  119 => 42,  102 => 43,  91 => 41,  78 => 34,  71 => 18,  63 => 21,  59 => 20,  38 => 12,  94 => 35,  89 => 32,  85 => 38,  75 => 17,  68 => 14,  56 => 10,  87 => 39,  21 => 2,  26 => 6,  67 => 13,  62 => 23,  27 => 3,  46 => 14,  44 => 6,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 14,  69 => 22,  47 => 12,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 48,  139 => 54,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 44,  108 => 36,  101 => 40,  98 => 31,  96 => 39,  83 => 29,  74 => 26,  66 => 23,  55 => 19,  52 => 19,  50 => 18,  43 => 8,  41 => 11,  35 => 6,  32 => 4,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 68,  144 => 67,  141 => 55,  133 => 42,  130 => 48,  125 => 41,  122 => 53,  116 => 50,  112 => 49,  109 => 47,  106 => 41,  103 => 32,  99 => 41,  95 => 28,  92 => 37,  86 => 22,  82 => 29,  80 => 33,  73 => 27,  64 => 12,  60 => 22,  57 => 7,  54 => 19,  51 => 15,  48 => 8,  45 => 8,  42 => 10,  39 => 5,  36 => 4,  33 => 6,  30 => 2,);
    }
}
