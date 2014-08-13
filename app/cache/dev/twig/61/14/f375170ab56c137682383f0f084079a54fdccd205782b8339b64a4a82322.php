<?php

/* NewsBundle:Mainpage:index.html.twig */
class __TwigTemplate_6114f375170ab56c137682383f0f084079a54fdccd205782b8339b64a4a82322 extends Twig_Template
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
        return "NewsBundle:Mainpage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  56 => 18,  52 => 16,  50 => 15,  46 => 14,  40 => 11,  31 => 4,  28 => 3,);
    }
}
