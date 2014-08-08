<?php

/* NewsBundle:Mainpage:index.html.twig */
class __TwigTemplate_296a46f6248cb2c7f320967d5fc434c273b1c060ea8f0fbaafbf41d453cb58d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Mainpage";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "      <div id=\"logo\" class=\"col-md\" style=\"padding:5px\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/newsbundle/images/logo.png"), "html", null, true);
        echo "\" />
            <font size=\"13\">Modern media portal</font>
      </div>
      <div id=\"menu\" class \"raw\">
            <div class=\"navbar navbar-default\">
                <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                  </button>
                  <a class=\"navbar-brand\" href=\"#\">Welcome</a>
                </div>
            </div>
      </div>
      <div class=\"row\" style=\"padding:4px\">
          <div id=\"left\"class=\"col-md-2\">
                <button class=\"btn btn-primary btn-block\">Politics</button>
                <button class=\"btn btn-primary btn-block\">Sports</button>
                <button class=\"btn btn-primary btn-block\">News</button>
                <button class=\"btn btn-primary btn-block\">Cat4</button>
                <button class=\"btn btn-primary btn-block\">Cat5</button>
                <button class=\"btn btn-primary btn-block\">Cat6</button>
                <button class=\"btn btn-primary btn-block\">Cat7</button>
                <button class=\"btn btn-primary btn-block\">Cat8</button>
                <button class=\"btn btn-primary btn-block\">Cat9</button>
                <button class=\"btn btn-primary btn-block\">Cat10</button>
                <button class=\"btn btn-primary btn-block\">Cat11</button>
          </div>
          <div id=\"center\" style=\"padding:4px\"class=\"col-md-8\">
                <h1>Lorem Ipsum</h1>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate odio ut velit pharetra ullamcorper. In sem sem, aliquam quis sodales a, dapibus vel elit. Vivamus placerat nisi nulla, scelerisque venenatis orci dictum eu. Sed ut ultrices purus, sit amet feugiat quam. Curabitur cursus odio enim, at volutpat risus lobortis id. Integer ante nisi, tincidunt dapibus mollis in, commodo tincidunt quam. Aenean sit amet orci a lacus eleifend euismod. Etiam aliquam, nulla vitae scelerisque lobortis, mauris metus venenatis magna, vitae posuere lacus dolor et libero. Proin elit quam, ullamcorper ac lectus et, accumsan aliquam arcu. Donec vitae fringilla quam, sed condimentum purus. Vivamus rhoncus pulvinar magna, quis congue velit varius id. Morbi condimentum a lorem a ornare. Quisque eget suscipit ipsum. Vivamus eget ligula commodo, sollicitudin urna et, aliquet orci. Nulla purus erat, elementum sit amet elementum sit amet, pellentesque a diam.</p>

                <p>Aliquam dictum, magna non bibendum euismod, risus augue vestibulum turpis, hendrerit commodo metus eros quis leo. Fusce mattis eros nunc, id pulvinar libero tempor eu. Sed luctus tempus velit, convallis viverra nisi suscipit sed. Aliquam scelerisque orci nec congue tempus. Pellentesque rhoncus lobortis sem, id molestie sem. Nunc adipiscing eu felis non sodales. Phasellus mollis elit quam, nec imperdiet lectus aliquet ut. Nulla cursus fermentum magna. Maecenas ut sapien orci.</p>

                <p>Aliquam imperdiet dapibus egestas. Vivamus id tristique diam. Integer sit amet erat mi. Nunc sagittis risus sed augue sollicitudin pretium. Etiam non vestibulum lectus. Ut a ante ultrices, sodales nulla eu, venenatis quam. Vestibulum aliquet magna est, nec sodales elit tincidunt eget. Aliquam vehicula feugiat venenatis. Cras cursus et purus sed iaculis. Ut auctor sollicitudin condimentum. Curabitur molestie, urna nec fermentum posuere, lectus ligula aliquam libero, vitae mattis est leo vel ligula. Fusce quis lectus id libero dapibus convallis sit amet eget enim. Nullam semper porta sem a mollis. Etiam scelerisque nibh sem, quis aliquet diam faucibus a.</p>

                <p>Aenean et enim vel lacus aliquet vestibulum a sit amet arcu. Pellentesque dictum dui et lacinia porta. Vivamus accumsan justo et ligula auctor dictum. Vestibulum non varius nisi. Quisque tempor tellus nec elementum porttitor. Mauris nibh libero, volutpat vitae volutpat nec, blandit ac urna. Vivamus adipiscing ipsum eget ornare facilisis. Nullam eleifend facilisis ligula ut suscipit. Ut nec massa eu leo hendrerit iaculis vel in velit. Fusce rutrum elementum nisi non ullamcorper. Cras malesuada id turpis et lobortis. Donec hendrerit dolor leo, ac placerat justo pretium vitae. Maecenas euismod purus at tempor ultricies.</p>

                <p>Donec aliquam arcu quis porttitor posuere. Fusce ultricies enim a risus porttitor adipiscing. Etiam posuere id nisl sit amet dapibus. In ut magna at quam faucibus mattis. Mauris semper purus id justo pharetra posuere. Vestibulum a congue erat. Integer eu massa imperdiet mi adipiscing imperdiet. Etiam ac purus nulla.</p>
          </div>
          <div id=\"right\" style=\"background-color:yellow\"class=\"col-md-2\">
                text
          </div>
      </div>


      <div id=\"footer\" style=\"background-color: grey;\">
            text
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
        return array (  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
