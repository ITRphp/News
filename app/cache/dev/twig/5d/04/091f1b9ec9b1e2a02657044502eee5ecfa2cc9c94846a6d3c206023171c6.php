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
        return array (  23 => 1,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  207 => 91,  205 => 90,  186 => 81,  183 => 78,  170 => 71,  165 => 69,  151 => 61,  146 => 58,  134 => 51,  244 => 108,  222 => 99,  218 => 97,  216 => 96,  212 => 94,  201 => 89,  188 => 85,  185 => 84,  137 => 52,  118 => 51,  104 => 44,  77 => 31,  150 => 51,  117 => 38,  76 => 25,  34 => 5,  49 => 14,  58 => 20,  84 => 36,  53 => 9,  195 => 84,  181 => 77,  174 => 38,  158 => 46,  156 => 64,  153 => 71,  136 => 30,  129 => 42,  126 => 55,  121 => 40,  70 => 24,  65 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 101,  220 => 98,  214 => 95,  177 => 80,  169 => 77,  140 => 31,  132 => 51,  128 => 47,  107 => 46,  93 => 28,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 103,  230 => 82,  227 => 100,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 78,  163 => 62,  159 => 66,  143 => 56,  138 => 46,  135 => 61,  119 => 42,  102 => 43,  91 => 41,  78 => 21,  71 => 18,  63 => 16,  59 => 6,  38 => 12,  94 => 43,  89 => 32,  85 => 33,  75 => 17,  68 => 14,  56 => 10,  87 => 39,  21 => 2,  26 => 6,  67 => 24,  62 => 23,  27 => 3,  46 => 9,  44 => 7,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 25,  69 => 11,  47 => 12,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 48,  139 => 54,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 44,  108 => 36,  101 => 38,  98 => 31,  96 => 39,  83 => 29,  74 => 26,  66 => 23,  55 => 19,  52 => 19,  50 => 18,  43 => 8,  41 => 11,  35 => 7,  32 => 4,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 68,  144 => 67,  141 => 55,  133 => 42,  130 => 48,  125 => 41,  122 => 53,  116 => 50,  112 => 49,  109 => 47,  106 => 41,  103 => 32,  99 => 41,  95 => 28,  92 => 37,  86 => 37,  82 => 34,  80 => 33,  73 => 27,  64 => 10,  60 => 8,  57 => 7,  54 => 19,  51 => 15,  48 => 15,  45 => 8,  42 => 10,  39 => 7,  36 => 5,  33 => 6,  30 => 5,);
    }
}
