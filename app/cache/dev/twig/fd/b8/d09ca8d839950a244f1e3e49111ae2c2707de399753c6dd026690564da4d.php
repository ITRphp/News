<?php

/* NewsBundle:Form:errors.html.twig */
class __TwigTemplate_fdb8d09ca8d839950a244f1e3e49111ae2c2707de399753c6dd026690564da4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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
    public function block_form_errors($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 6
            echo "        
            ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                <div class=\"text-danger\" style=\"display: inline\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "       
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "NewsBundle:Form:errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  58 => 22,  84 => 32,  175 => 36,  155 => 31,  151 => 30,  146 => 27,  117 => 10,  90 => 18,  70 => 16,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 24,  107 => 36,  93 => 28,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  171 => 37,  163 => 62,  159 => 33,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 37,  78 => 21,  71 => 19,  63 => 12,  59 => 23,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 6,  87 => 25,  21 => 2,  26 => 6,  67 => 24,  62 => 6,  27 => 4,  46 => 16,  44 => 11,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 30,  72 => 26,  69 => 12,  47 => 4,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  101 => 32,  98 => 8,  96 => 31,  83 => 25,  74 => 14,  66 => 27,  55 => 15,  52 => 10,  50 => 17,  43 => 8,  41 => 11,  35 => 20,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 36,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 23,  122 => 22,  116 => 41,  112 => 35,  109 => 34,  106 => 36,  103 => 9,  99 => 31,  95 => 7,  92 => 21,  86 => 35,  82 => 22,  80 => 19,  73 => 31,  64 => 17,  60 => 14,  57 => 11,  54 => 10,  51 => 18,  48 => 15,  45 => 15,  42 => 7,  39 => 7,  36 => 6,  33 => 5,  30 => 7,);
    }
}
