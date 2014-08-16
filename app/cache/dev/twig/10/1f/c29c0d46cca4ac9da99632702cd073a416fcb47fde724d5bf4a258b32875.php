<?php

/* NewsBundle:Category:show.html.twig */
class __TwigTemplate_101fc29c0d46cca4ac9da99632702cd073a416fcb47fde724d5bf4a258b32875 extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), array(0 => "NewsBundle:Form:delete.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <h1>Category</h1>
    <div class=\"btn-toolbar\" role=\"toolbar\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to the list", array(), "messages");
        echo "</a>
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-default\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo "</a>
        </div>
    </div>
        
    <table class=\"records_list table table-hover table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category_name</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoryname"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  84 => 32,  53 => 18,  195 => 42,  181 => 40,  174 => 38,  158 => 46,  156 => 37,  153 => 36,  136 => 30,  129 => 25,  126 => 24,  121 => 12,  70 => 15,  65 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 39,  169 => 60,  140 => 31,  132 => 51,  128 => 49,  107 => 11,  93 => 28,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  171 => 37,  163 => 62,  159 => 61,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 10,  91 => 27,  78 => 21,  71 => 18,  63 => 16,  59 => 19,  38 => 7,  94 => 20,  89 => 35,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  67 => 17,  62 => 14,  27 => 3,  46 => 11,  44 => 12,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 26,  69 => 12,  47 => 9,  40 => 10,  37 => 22,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 18,  66 => 23,  55 => 14,  52 => 14,  50 => 11,  43 => 56,  41 => 8,  35 => 5,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 62,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 33,  141 => 48,  133 => 42,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 9,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 19,  73 => 27,  64 => 17,  60 => 8,  57 => 7,  54 => 12,  51 => 4,  48 => 13,  45 => 16,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 5,);
    }
}
