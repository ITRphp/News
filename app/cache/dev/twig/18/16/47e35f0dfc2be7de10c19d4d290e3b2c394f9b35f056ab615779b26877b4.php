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
        return array (  19 => 1,  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  179 => 76,  173 => 72,  165 => 69,  162 => 68,  159 => 66,  149 => 60,  146 => 58,  143 => 56,  91 => 41,  89 => 40,  86 => 37,  84 => 36,  82 => 34,  69 => 26,  61 => 24,  59 => 23,  47 => 17,  188 => 88,  176 => 73,  172 => 83,  170 => 71,  168 => 70,  163 => 79,  157 => 75,  151 => 61,  148 => 71,  139 => 54,  134 => 51,  130 => 48,  120 => 54,  116 => 53,  113 => 51,  111 => 44,  108 => 48,  106 => 47,  103 => 45,  97 => 41,  90 => 37,  87 => 35,  85 => 34,  83 => 33,  80 => 33,  77 => 31,  75 => 28,  72 => 26,  64 => 25,  62 => 20,  53 => 15,  49 => 12,  44 => 9,  42 => 8,  38 => 12,  36 => 5,  34 => 4,  195 => 84,  181 => 77,  177 => 39,  174 => 84,  171 => 37,  158 => 46,  156 => 64,  153 => 73,  144 => 33,  140 => 31,  136 => 30,  129 => 25,  126 => 57,  121 => 12,  107 => 11,  102 => 10,  99 => 9,  94 => 43,  67 => 23,  60 => 19,  57 => 17,  51 => 14,  43 => 56,  41 => 24,  37 => 22,  35 => 11,  29 => 4,  24 => 1,  166 => 80,  161 => 54,  154 => 63,  145 => 48,  141 => 55,  137 => 52,  133 => 44,  128 => 47,  122 => 55,  115 => 37,  105 => 35,  100 => 43,  92 => 38,  88 => 27,  74 => 18,  70 => 25,  65 => 9,  56 => 22,  52 => 19,  50 => 18,  46 => 10,  40 => 13,  31 => 3,  28 => 3,);
    }
}
