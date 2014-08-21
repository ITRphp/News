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
        return array (  269 => 6,  267 => 5,  263 => 4,  252 => 3,  242 => 101,  231 => 99,  218 => 97,  209 => 92,  207 => 91,  205 => 90,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  186 => 81,  183 => 78,  179 => 76,  173 => 72,  168 => 70,  165 => 69,  156 => 64,  154 => 63,  151 => 61,  149 => 60,  141 => 55,  137 => 52,  86 => 37,  59 => 23,  56 => 22,  50 => 18,  47 => 17,  192 => 90,  180 => 87,  178 => 86,  176 => 73,  172 => 83,  170 => 71,  167 => 81,  161 => 77,  157 => 75,  145 => 68,  143 => 56,  134 => 51,  130 => 48,  126 => 57,  120 => 55,  110 => 49,  107 => 47,  98 => 41,  94 => 43,  89 => 40,  87 => 35,  84 => 36,  81 => 31,  79 => 30,  77 => 31,  74 => 27,  72 => 26,  69 => 26,  66 => 22,  53 => 15,  51 => 14,  49 => 12,  46 => 10,  40 => 13,  36 => 5,  34 => 4,  31 => 3,  19 => 1,  181 => 77,  177 => 36,  155 => 74,  146 => 58,  142 => 29,  138 => 64,  128 => 47,  91 => 41,  71 => 16,  67 => 13,  62 => 20,  57 => 17,  54 => 5,  48 => 4,  41 => 52,  39 => 22,  35 => 11,  29 => 4,  24 => 1,  198 => 38,  195 => 84,  191 => 36,  188 => 35,  174 => 84,  171 => 34,  162 => 68,  158 => 42,  152 => 73,  147 => 55,  144 => 54,  135 => 52,  122 => 49,  117 => 53,  111 => 44,  104 => 45,  101 => 43,  99 => 8,  93 => 32,  88 => 29,  82 => 34,  78 => 23,  64 => 25,  60 => 19,  52 => 19,  44 => 9,  159 => 66,  148 => 41,  139 => 54,  131 => 23,  127 => 50,  124 => 56,  115 => 52,  112 => 50,  105 => 25,  96 => 40,  92 => 20,  85 => 18,  80 => 33,  75 => 14,  70 => 13,  65 => 12,  61 => 24,  58 => 9,  42 => 8,  38 => 12,  33 => 5,  30 => 3,);
    }
}
