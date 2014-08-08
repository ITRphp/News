<?php

/* NewsBundle:Registration:index.htm_1l.twig */
class __TwigTemplate_f02a48580fd04f1339713a52afeb2a18c6b5b4978077698793667b2243861bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'form_errors' => array($this, 'block_form_errors'),
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
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
    }

    // line 4
    public function block_form_errors($context, array $blocks = array())
    {
        // line 5
        ob_start();
        // line 6
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 7
            echo "        <ul class=\"error_list\">
            ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "   
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/repeatPassword.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <div class=\"container\">
        <form method=\"POST\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_registration");
        echo "\" accept-charset=\"UTF-8\" class=\"form-signin\">
            <div class=\"control-group\">
                <label for=\"username\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"text\" id=\"username\" class=\"span4\" name=\"username\" placeholder=\"Username\" required pattern=\"^[a-zA-Z0-9_]+\$\">
                </div>
            </div>
            <div class=\"control-group\">                
                <label for=\"email\">";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email:", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"email\" id=\"email\" name=\"_username\" placeholder=\"email@example.com\" required />
                </div>
            </div> 
            <div class=\"control-group\">
                <label for=\"password\">";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"password\" id=\"password1\" class=\"span4\" name=\"password\" placeholder=\"Password\">
                </div>
            </div>
            <div class=\"control-group\">
                <label for=\"password2\">";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Repeat password", array(), "messages");
        echo "</label>
                <div class=\"controls\">
                    <input type=\"password\" id=\"password2\" name=\"_password\" placeholder=\"Repeat password\" />
                </div>
            </div>
            <button type=\"submit\" name=\"submit\" class=\"btn btn-info btn-block\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Registration", array(), "messages");
        echo "</button>
\t</form>    
    </div>
\t
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Registration:index.htm_1l.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  118 => 45,  76 => 22,  81 => 28,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  205 => 90,  195 => 84,  186 => 81,  183 => 78,  181 => 77,  165 => 69,  156 => 64,  146 => 58,  137 => 52,  188 => 88,  174 => 84,  172 => 83,  170 => 71,  166 => 80,  153 => 73,  151 => 61,  148 => 71,  134 => 51,  126 => 57,  113 => 41,  100 => 43,  97 => 41,  90 => 37,  62 => 20,  34 => 4,  84 => 27,  77 => 33,  65 => 23,  70 => 17,  49 => 14,  121 => 11,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 47,  107 => 9,  61 => 24,  273 => 96,  269 => 6,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 76,  171 => 61,  163 => 79,  159 => 66,  143 => 56,  138 => 54,  135 => 23,  119 => 42,  102 => 8,  91 => 41,  71 => 30,  67 => 16,  63 => 12,  59 => 14,  38 => 12,  94 => 43,  89 => 29,  85 => 38,  75 => 28,  68 => 23,  56 => 22,  87 => 31,  21 => 2,  26 => 3,  93 => 30,  88 => 6,  78 => 20,  46 => 14,  27 => 4,  44 => 7,  31 => 5,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 21,  69 => 26,  47 => 8,  40 => 13,  37 => 7,  22 => 2,  246 => 90,  157 => 75,  145 => 46,  139 => 54,  131 => 24,  123 => 41,  120 => 54,  115 => 39,  111 => 44,  108 => 48,  101 => 34,  98 => 31,  96 => 31,  83 => 22,  74 => 24,  66 => 15,  55 => 13,  52 => 19,  50 => 11,  43 => 9,  41 => 6,  35 => 6,  32 => 4,  29 => 4,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 70,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 59,  162 => 68,  154 => 63,  149 => 60,  147 => 58,  144 => 49,  141 => 55,  133 => 42,  130 => 48,  125 => 22,  122 => 55,  116 => 53,  112 => 35,  109 => 40,  106 => 42,  103 => 45,  99 => 37,  95 => 28,  92 => 28,  86 => 37,  82 => 34,  80 => 33,  73 => 18,  64 => 22,  60 => 11,  57 => 17,  54 => 20,  51 => 9,  48 => 16,  45 => 16,  42 => 10,  39 => 5,  36 => 4,  33 => 5,  30 => 3,);
    }
}
