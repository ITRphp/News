<?php

/* NewsBundle:Mainpage:index.html.twig */
class __TwigTemplate_6114f375170ab56c137682383f0f084079a54fdccd205782b8339b64a4a82322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle:MainPage:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'news' => array($this, 'block_news'),
            'popular_news' => array($this, 'block_popular_news'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsBundle:MainPage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c82c251_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c82c251_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c82c251_news_1.js");
            // line 6
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c82c251"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c82c251") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c82c251.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 9
    public function block_news($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"center\" style=\"padding:4px\" class=\"col-md-7\">
    <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a data-toggle=\"tab\" id=\"date\" name=\"date\" class=\"btn\"";
        // line 12
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sort by date"), "html", null, true);
        echo "</a></li>
            <li><a data-toggle=\"tab\" id=\"popular\" name=\"popular\" class=\"btn\" ";
        // line 13
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sort by popularity"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"container col-md-12\" id=\"news_list\">        
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["news_item"]) {
            // line 17
            echo "            <div class=\"media\">
                <div class=\"media-body well\">
                    <h4 class=\"media-heading\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("current_news", array("id" => $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "title"), "html", null, true);
            echo "</a>
                    </h4>
                        <footer><h6>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "publicationDate"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></footer>
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "description"), "html", null, true);
            echo "</strong>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <h3>No news</h3>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        <div class=\"navigation\">
            ";
        // line 30
        echo $this->env->getExtension('knp_pagination')->render((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        echo "
        </div>
    </div>
        <div class=\"navigation\">
    ";
        // line 34
        echo $this->env->getExtension('knp_pagination')->render((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        echo "
</div>
</div>
";
    }

    // line 38
    public function block_popular_news($context, array $blocks = array())
    {
        // line 39
        echo "<div data-spy=\"affix\"  data-offset-top=\"227\" id=\"affix2\" style=\"background-color: whitesmoke\" class=\"col-md-3\">
    <p class=\"bg-primary text-center\">Popular news</p>
    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular_news"]) ? $context["popular_news"] : $this->getContext($context, "popular_news")));
        foreach ($context['_seq'] as $context["_key"] => $context["news_item"]) {
            echo "   
        <div class=\"media\">
            <div class=\"media-body\">
                <h4 class=\"media-heading\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("current_news", array("id" => $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "id"))), "html", null, true);
            echo "\"><span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "getUsersCount", array(), "method"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "title"), "html", null, true);
            echo "</a></h4>
                
                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "description"), "html", null, true);
            echo "
                
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>
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
        return array (  167 => 51,  156 => 46,  147 => 44,  139 => 41,  135 => 39,  132 => 38,  124 => 34,  117 => 30,  114 => 29,  107 => 27,  98 => 23,  94 => 22,  87 => 20,  82 => 17,  77 => 16,  70 => 13,  65 => 12,  61 => 10,  58 => 9,  42 => 6,  38 => 4,  33 => 3,  30 => 2,);
    }
}
