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
        return array (  23 => 1,  114 => 46,  76 => 25,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 77,  165 => 69,  156 => 64,  137 => 52,  188 => 88,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  153 => 73,  148 => 71,  134 => 51,  126 => 57,  113 => 51,  100 => 43,  97 => 41,  77 => 31,  34 => 5,  65 => 22,  49 => 14,  58 => 22,  84 => 36,  175 => 36,  155 => 31,  151 => 61,  146 => 58,  117 => 10,  90 => 37,  70 => 24,  53 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 47,  107 => 36,  93 => 28,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 37,  163 => 79,  159 => 66,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 41,  78 => 21,  71 => 19,  63 => 12,  59 => 6,  38 => 6,  94 => 43,  89 => 32,  85 => 34,  75 => 28,  68 => 14,  56 => 21,  87 => 39,  21 => 2,  26 => 6,  67 => 23,  62 => 23,  27 => 4,  46 => 10,  44 => 11,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 26,  69 => 11,  47 => 12,  40 => 13,  37 => 7,  22 => 2,  246 => 90,  157 => 75,  145 => 46,  139 => 54,  131 => 52,  123 => 41,  120 => 54,  115 => 39,  111 => 44,  108 => 48,  101 => 38,  98 => 8,  96 => 31,  83 => 29,  74 => 14,  66 => 23,  55 => 19,  52 => 19,  50 => 18,  43 => 8,  41 => 11,  35 => 7,  32 => 4,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 49,  141 => 55,  133 => 42,  130 => 48,  125 => 23,  122 => 55,  116 => 53,  112 => 35,  109 => 34,  106 => 41,  103 => 45,  99 => 31,  95 => 7,  92 => 38,  86 => 37,  82 => 34,  80 => 33,  73 => 31,  64 => 10,  60 => 19,  57 => 17,  54 => 10,  51 => 9,  48 => 15,  45 => 9,  42 => 7,  39 => 7,  36 => 5,  33 => 6,  30 => 7,);
    }
}
