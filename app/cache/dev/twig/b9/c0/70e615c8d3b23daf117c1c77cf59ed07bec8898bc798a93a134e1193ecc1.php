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
        echo "    <div>
<div class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome %username%", array("%username%" => (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))), "messages");
        echo "</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        ";
        // line 15
        echo $this->env->getExtension('knp_menu')->render("NewsBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "NewsBundle:Menu:knp_menu.html.twig"));
        echo "
    </div>
</div>
<div id=\"logo\" class=\"col-md\" style=\"padding:5px\">
                ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc97b69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69_logo_1.png");
            // line 20
            echo "                   <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                ";
        } else {
            // asset "fc97b69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69.png");
            echo "                   <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 21
        echo " 
</div>
<h4> ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "</h4>
<hr>
    </div>
     <style>
        

    </style>
<div  class=\"row\" style=\"padding:4px\" data-spy=\"scroll\" data-target=\"#affix-nav\">
    <div data-spy=\"affix\"  data-offset-top=\"227\" id=\"affix1\"  class=\"list-group affix-top col-md-2\">
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_news", array("category" => twig_lower_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))))), "html", null, true);
            echo "\"  class=\"list-group-item\"><span class=\"glyphicon glyphicon-heart-empty\"></span>";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "</a>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <h3>No news</h3>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
    ";
        // line 38
        $this->displayBlock('news', $context, $blocks);
        // line 40
        echo "    ";
        $this->displayBlock('popular_news', $context, $blocks);
        // line 42
        echo "</div>
<div class=\"modal fade\" id=\"basicModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\"><button class=\"close\" type=\"button\" data-dismiss=\"modal\">x</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subscribe"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You have subscribed to"), "html", null, true);
        echo "
                <ul>
                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dispatches"]) ? $context["dispatches"] : $this->getContext($context, "dispatches")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "                        <li>";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
            echo "</li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You are not subscribed to our newsletter"), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </ul>
                <a href=\"\" onclick=\"\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
        echo "</a>
                <div id=\"_edit\">
                    <form action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("subscribe");
        echo "\" method=\"POST\">
                        <div class=\"form-group\">
                            <select multiple class=\"form-control\" name=\"category[]\" required>
                            ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 64
            echo "                                <option>";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </select>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "\"></button>
                        </div>
                    </form>
                </div>
                        
            </div>
        </div>
    </div>
</div>
";
    }

    // line 38
    public function block_news($context, array $blocks = array())
    {
        // line 39
        echo "    ";
    }

    // line 40
    public function block_popular_news($context, array $blocks = array())
    {
        // line 41
        echo "    ";
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
        return array (  214 => 41,  211 => 40,  207 => 39,  204 => 38,  190 => 67,  187 => 66,  178 => 64,  174 => 63,  168 => 60,  163 => 58,  160 => 57,  151 => 55,  143 => 53,  138 => 52,  133 => 50,  127 => 47,  120 => 42,  117 => 40,  115 => 38,  112 => 37,  105 => 35,  95 => 33,  90 => 32,  78 => 23,  74 => 21,  60 => 20,  56 => 19,  49 => 15,  43 => 12,  33 => 4,  30 => 3,);
    }
}
