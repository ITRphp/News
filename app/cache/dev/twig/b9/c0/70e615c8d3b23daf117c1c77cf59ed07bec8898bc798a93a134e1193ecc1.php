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
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Welcome %username%", array("%username%" => (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))), "messages");
        echo "</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    ";
        // line 16
        echo $this->env->getExtension('knp_menu')->render("NewsBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "NewsBundle:Menu:knp_menu.html.twig"));
        echo "
                </div>
            </div>
        </div>
        <div id=\"logo\" class=\"col-md\" style=\"padding:5px\">
                        ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc97b69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69_logo_1.png");
            // line 22
            echo "                           <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                        ";
        } else {
            // asset "fc97b69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc97b69") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/fc97b69.png");
            echo "                           <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Example\"/>
                        ";
        }
        unset($context["asset_url"]);
        // line 23
        echo " 
        </div>
        <h4> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "</h4>
        <hr>
    </div>
        ";
        // line 29
        echo "    <div  class=\"row\" style=\"padding:4px\">
        <div id=\"affix-nav\" class=\"col-md-2 col-sm-2 hidden-xs container\">
                <nav data-spy=\"affix\" class=\"sidebar\"  data-offset-top=\"227\" id=\"affix1\">
                    <ul class=\"nav nav-pills nav-stacked \">
                        <li><a name=\"all\" data-toggle=\"pill\" >All news</a></li>
                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 35
            echo "                           
                           <li><a data-toggle=\"pill\" name=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "</a></li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                        <h3>No news</h3>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </ul>
                </nav>
        </div>
    ";
        // line 43
        $this->displayBlock('news', $context, $blocks);
        // line 45
        echo "    ";
        $this->displayBlock('popular_news', $context, $blocks);
        // line 47
        echo "    </div>
<div class=\"modal fade\" id=\"basicModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\"><button class=\"close\" type=\"button\" data-dismiss=\"modal\">x</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Subscribe"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You have subscribed to"), "html", null, true);
        echo "
                <ul>
                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dispatches"]) ? $context["dispatches"] : $this->getContext($context, "dispatches")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "                        <li>";
            echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
            echo "</li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You are not subscribed to our newsletter"), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </ul>
                <a href=\"\" onclick=\"\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
        echo "</a>
                <div id=\"_edit\">
                    <form action=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("subscribe");
        echo "\" method=\"POST\">
                        <div class=\"form-group\">
                            <select multiple class=\"form-control\" name=\"category[]\" required>
                            ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 69
            echo "                                <option>";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </select>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 72
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

    // line 43
    public function block_news($context, array $blocks = array())
    {
        // line 44
        echo "    ";
    }

    // line 45
    public function block_popular_news($context, array $blocks = array())
    {
        // line 46
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
        return array (  221 => 46,  218 => 45,  214 => 44,  211 => 43,  197 => 72,  194 => 71,  185 => 69,  181 => 68,  175 => 65,  170 => 63,  167 => 62,  158 => 60,  150 => 58,  145 => 57,  140 => 55,  134 => 52,  127 => 47,  124 => 45,  122 => 43,  117 => 40,  110 => 38,  101 => 36,  98 => 35,  93 => 34,  86 => 29,  80 => 25,  76 => 23,  62 => 22,  58 => 21,  50 => 16,  44 => 13,  33 => 4,  30 => 3,);
    }
}
