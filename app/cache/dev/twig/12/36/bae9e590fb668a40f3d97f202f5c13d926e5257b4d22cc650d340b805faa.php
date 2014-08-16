<?php

/* NewsBundle:User:edit.html.twig */
class __TwigTemplate_1236bae9e590fb668a40f3d97f202f5c13d926e5257b4d22cc650d340b805faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle:Admin:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "NewsBundle:Form:fields.html.twig"));
        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), array(0 => "NewsBundle:Form:delete.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\"  class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to the list", array(), "messages");
        echo "</a>   
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    <h1 class=\"text-center\">User edit</h1>    
    <div class=\"row\" >
        <div class=\"col-md-5 col-md-offset-4\">
        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal col-md-offset-1")));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "user_name"), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "user_email"), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "user_password"), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "user_role"), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit"), 'widget');
        echo "
        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>
                   
        

";
    }

    public function getTemplateName()
    {
        return "NewsBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  207 => 91,  205 => 90,  186 => 81,  183 => 78,  170 => 71,  165 => 69,  151 => 61,  146 => 58,  134 => 51,  244 => 108,  222 => 99,  218 => 97,  216 => 96,  212 => 94,  201 => 89,  188 => 85,  185 => 84,  137 => 52,  118 => 51,  104 => 28,  77 => 16,  150 => 50,  117 => 38,  76 => 20,  34 => 5,  49 => 14,  58 => 20,  84 => 36,  53 => 18,  195 => 84,  181 => 77,  174 => 38,  158 => 46,  156 => 64,  153 => 71,  136 => 30,  129 => 42,  126 => 55,  121 => 36,  70 => 29,  65 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 101,  220 => 98,  214 => 95,  177 => 80,  169 => 77,  140 => 31,  132 => 51,  128 => 47,  107 => 46,  93 => 28,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 103,  230 => 82,  227 => 100,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 78,  163 => 62,  159 => 66,  143 => 56,  138 => 46,  135 => 61,  119 => 42,  102 => 43,  91 => 21,  78 => 34,  71 => 15,  63 => 21,  59 => 20,  38 => 6,  94 => 35,  89 => 32,  85 => 38,  75 => 16,  68 => 18,  56 => 15,  87 => 20,  21 => 2,  26 => 6,  67 => 13,  62 => 23,  27 => 4,  46 => 9,  44 => 8,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 34,  72 => 19,  69 => 22,  47 => 12,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 48,  139 => 54,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 44,  108 => 29,  101 => 40,  98 => 31,  96 => 39,  83 => 29,  74 => 22,  66 => 14,  55 => 19,  52 => 14,  50 => 10,  43 => 8,  41 => 8,  35 => 8,  32 => 7,  29 => 5,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 68,  144 => 67,  141 => 47,  133 => 42,  130 => 48,  125 => 37,  122 => 53,  116 => 34,  112 => 49,  109 => 47,  106 => 41,  103 => 32,  99 => 26,  95 => 28,  92 => 37,  86 => 22,  82 => 18,  80 => 21,  73 => 27,  64 => 17,  60 => 16,  57 => 7,  54 => 11,  51 => 15,  48 => 8,  45 => 10,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 2,);
    }
}
