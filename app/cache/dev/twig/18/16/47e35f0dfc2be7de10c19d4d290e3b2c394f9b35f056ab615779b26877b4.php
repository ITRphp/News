<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_181647e35f0dfc2be7de10c19d4d290e3b2c394f9b35f056ab615779b26877b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed")) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  195 => 84,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  181 => 77,  179 => 76,  173 => 72,  165 => 69,  162 => 68,  156 => 64,  154 => 63,  149 => 60,  143 => 56,  137 => 52,  91 => 41,  89 => 40,  86 => 37,  84 => 36,  82 => 34,  59 => 23,  52 => 19,  50 => 18,  188 => 88,  176 => 73,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  163 => 79,  157 => 75,  153 => 73,  148 => 71,  141 => 55,  139 => 54,  134 => 51,  130 => 48,  126 => 57,  120 => 54,  116 => 53,  113 => 51,  111 => 44,  108 => 48,  106 => 47,  100 => 43,  97 => 41,  94 => 43,  92 => 38,  87 => 35,  85 => 34,  83 => 33,  80 => 33,  77 => 31,  75 => 28,  72 => 26,  67 => 23,  64 => 25,  60 => 19,  57 => 17,  49 => 12,  46 => 10,  44 => 9,  42 => 8,  40 => 13,  38 => 12,  36 => 5,  34 => 4,  31 => 3,  175 => 36,  171 => 37,  168 => 70,  159 => 66,  155 => 31,  151 => 61,  146 => 58,  132 => 25,  128 => 47,  125 => 23,  122 => 55,  117 => 10,  103 => 45,  98 => 8,  95 => 7,  90 => 37,  70 => 25,  66 => 13,  63 => 12,  61 => 24,  56 => 22,  53 => 15,  41 => 38,  35 => 11,  29 => 4,  24 => 1,  45 => 16,  28 => 3,  69 => 26,  62 => 20,  51 => 14,  47 => 17,  43 => 10,  39 => 22,  33 => 5,  30 => 5,  25 => 3,);
    }
}
