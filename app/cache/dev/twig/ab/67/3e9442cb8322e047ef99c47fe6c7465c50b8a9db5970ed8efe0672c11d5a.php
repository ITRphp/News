<?php

/* NewsBundle:MainPage:index.html.twig */
class __TwigTemplate_ab673e9442cb8322e047ef99c47fe6c7465c50b8a9db5970ed8efe0672c11d5a extends Twig_Template
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
        echo "    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome %username%", array("%username%" => (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))), "messages");
        echo "</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            ";
        // line 14
        echo $this->env->getExtension('knp_menu')->render("NewsBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "NewsBundle:Menu:knp_menu.html.twig"));
        echo "
            ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"first\">
                        <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("_admin");
            echo "\" class=\"nav navbar-nav\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("edit.mode", array(), "messages");
            echo "</a>
                    </li>
                </ul>
            ";
        }
        // line 22
        echo "        </div>
    </div>
        <hr>
    <div class=\"row\">
        <div class=\"col-md-12 col-md-offset-0\">
            <div class=\"media\">
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">First news</h4>
                    newsnewsnewsnewsnews
                </div>
            </div>
            <div class=\"media\">
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Second news</h4>
                    newsnewsnewsnewsnews
                </div>
            </div>
        </div>
    </div>
        <hr>
    <div class=\"row\" style=\"padding:4px\">
       
            <div id=\"left\" class=\"list-group col-md-2 col-md-offset-0\">
                <a href=\"#\" class=\"list-group-item active\">Cats</a>
                <a href=\"#\" class=\"list-group-item\">Dogs</a>
                <a href=\"#\" class=\"list-group-item\">Sport</a>
                <a href=\"#\" class=\"list-group-item\">Art</a>
                <a href=\"#\" class=\"list-group-item\">Music</a>
            </div>
        <div id=\"center\" style=\"padding:4px\" class=\"col-md-9 jumbotron\">
            <div class=\"container\">
                <h1>News about cats</h1>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate odio ut velit pharetra ullamcorper. In sem sem, aliquam quis sodales a, dapibus vel elit. Vivamus placerat nisi nulla, scelerisque venenatis orci dictum eu. Sed ut ultrices purus, sit amet feugiat quam. Curabitur cursus odio enim, at volutpat risus lobortis id. Integer ante nisi, tincidunt dapibus mollis in, commodo tincidunt quam. Aenean sit amet orci a lacus eleifend euismod. Etiam aliquam, nulla vitae scelerisque lobortis, mauris metus venenatis magna, vitae posuere lacus dolor et libero. Proin elit quam, ullamcorper ac lectus et, accumsan aliquam arcu. Donec vitae fringilla quam, sed condimentum purus. Vivamus rhoncus pulvinar magna, quis congue velit varius id. Morbi condimentum a lorem a ornare. Quisque eget suscipit ipsum. Vivamus eget ligula commodo, sollicitudin urna et, aliquet orci. Nulla purus erat, elementum sit amet elementum sit amet, pellentesque a diam.</p>

                <p>Aliquam dictum, magna non bibendum euismod, risus augue vestibulum turpis, hendrerit commodo metus eros quis leo. Fusce mattis eros nunc, id pulvinar libero tempor eu. Sed luctus tempus velit, convallis viverra nisi suscipit sed. Aliquam scelerisque orci nec congue tempus. Pellentesque rhoncus lobortis sem, id molestie sem. Nunc adipiscing eu felis non sodales. Phasellus mollis elit quam, nec imperdiet lectus aliquet ut. Nulla cursus fermentum magna. Maecenas ut sapien orci.</p>

                <p>Aliquam imperdiet dapibus egestas. Vivamus id tristique diam. Integer sit amet erat mi. Nunc sagittis risus sed augue sollicitudin pretium. Etiam non vestibulum lectus. Ut a ante ultrices, sodales nulla eu, venenatis quam. Vestibulum aliquet magna est, nec sodales elit tincidunt eget. Aliquam vehicula feugiat venenatis. Cras cursus et purus sed iaculis. Ut auctor sollicitudin condimentum. Curabitur molestie, urna nec fermentum posuere, lectus ligula aliquam libero, vitae mattis est leo vel ligula. Fusce quis lectus id libero dapibus convallis sit amet eget enim. Nullam semper porta sem a mollis. Etiam scelerisque nibh sem, quis aliquet diam faucibus a.</p>

                <p>Aenean et enim vel lacus aliquet vestibulum a sit amet arcu. Pellentesque dictum dui et lacinia porta. Vivamus accumsan justo et ligula auctor dictum. Vestibulum non varius nisi. Quisque tempor tellus nec elementum porttitor. Mauris nibh libero, volutpat vitae volutpat nec, blandit ac urna. Vivamus adipiscing ipsum eget ornare facilisis. Nullam eleifend facilisis ligula ut suscipit. Ut nec massa eu leo hendrerit iaculis vel in velit. Fusce rutrum elementum nisi non ullamcorper. Cras malesuada id turpis et lobortis. Donec hendrerit dolor leo, ac placerat justo pretium vitae. Maecenas euismod purus at tempor ultricies.</p>

                <p>Donec aliquam arcu quis porttitor posuere. Fusce ultricies enim a risus porttitor adipiscing. Etiam posuere id nisl sit amet dapibus. In ut magna at quam faucibus mattis. Mauris semper purus id justo pharetra posuere. Vestibulum a congue erat. Integer eu massa imperdiet mi adipiscing imperdiet. Etiam ac purus nulla.</p>
            </div>
        </div>
        
            
    </div>
    <div class=\"footer\">
        <div class=\"container\" >
            <p class=\"text-muted\">Footer</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:MainPage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  49 => 16,  58 => 22,  84 => 32,  175 => 36,  155 => 31,  151 => 30,  146 => 27,  117 => 10,  90 => 18,  70 => 16,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 25,  128 => 24,  107 => 36,  93 => 28,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  171 => 37,  163 => 62,  159 => 33,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 37,  78 => 21,  71 => 19,  63 => 12,  59 => 23,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 18,  87 => 25,  21 => 2,  26 => 6,  67 => 24,  62 => 6,  27 => 4,  46 => 14,  44 => 11,  31 => 4,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 30,  72 => 26,  69 => 12,  47 => 4,  40 => 11,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 36,  101 => 32,  98 => 8,  96 => 31,  83 => 25,  74 => 14,  66 => 27,  55 => 15,  52 => 16,  50 => 15,  43 => 8,  41 => 11,  35 => 20,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 36,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 23,  122 => 22,  116 => 41,  112 => 35,  109 => 34,  106 => 36,  103 => 9,  99 => 31,  95 => 7,  92 => 21,  86 => 35,  82 => 22,  80 => 19,  73 => 31,  64 => 17,  60 => 14,  57 => 11,  54 => 10,  51 => 18,  48 => 15,  45 => 9,  42 => 7,  39 => 7,  36 => 6,  33 => 5,  30 => 7,);
    }
}
