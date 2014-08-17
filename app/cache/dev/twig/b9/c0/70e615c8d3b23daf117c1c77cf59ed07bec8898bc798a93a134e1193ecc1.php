<?php

/* NewsBundle:MainPage:layout.html.twig */
class __TwigTemplate_b9c070e615c8d3b23daf117c1c77cf59ed07bec8898bc798a93a134e1193ecc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'news' => array($this, 'block_news'),
            'popular_news' => array($this, 'block_popular_news'),
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
            echo $this->env->getExtension('routing')->getPath("news");
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
   <div id=\"logo\" class=\"col-md\" style=\"padding:5px\">
                    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc97b69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69_logo_1.png");
            // line 26
            echo "                       <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                    ";
        } else {
            // asset "fc97b69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69.png");
            echo "                       <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo " 
  </div>
                    <h4> ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "</h4>
    <hr>
    <div class=\"row\" style=\"padding:4px\">
        
        <div id=\"left\" class=\"list-group col-md-2 col-md-offset-0\">
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_news", array("category" => twig_lower_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))))), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "</a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                <h3>No news</h3>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
        ";
        // line 40
        $this->displayBlock('news', $context, $blocks);
        // line 42
        echo "        ";
        $this->displayBlock('popular_news', $context, $blocks);
        // line 44
        echo "    </div>
";
    }

    // line 40
    public function block_news($context, array $blocks = array())
    {
        // line 41
        echo "        ";
    }

    // line 42
    public function block_popular_news($context, array $blocks = array())
    {
        // line 43
        echo "        ";
    }

    public function getTemplateName()
    {
        return "NewsBundle:MainPage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  144 => 42,  140 => 41,  137 => 40,  132 => 44,  129 => 42,  127 => 40,  124 => 39,  117 => 37,  107 => 35,  102 => 34,  94 => 29,  90 => 27,  76 => 26,  72 => 25,  67 => 22,  58 => 18,  54 => 16,  52 => 15,  48 => 14,  42 => 11,  33 => 4,  30 => 3,);
    }
}
