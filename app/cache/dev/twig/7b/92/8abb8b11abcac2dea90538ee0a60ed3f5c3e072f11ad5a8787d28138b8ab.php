<?php

/* NewsBundle:Mainpage:archive.html.twig */
class __TwigTemplate_7b928abb8b11abcac2dea90538ee0a60ed3f5c3e072f11ad5a8787d28138b8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle:MainPage:index.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'news' => array($this, 'block_news'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsBundle:MainPage:index.html.twig";
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
    <div class=\"container col-md-12\" id=\"news_list\">        
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["news_item"]) {
            // line 13
            echo "            <div class=\"media\">
                <div class=\"media-body well\">
                    <h4 class=\"media-heading\">
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("current_news", array("id" => $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "title"), "html", null, true);
            echo "</a>
                    </h4>
                        <footer><h6>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "publicationDate"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></footer>
                    <strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "description"), "html", null, true);
            echo "</strong>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <h3>No news</h3>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        <div class=\"navigation\">
            ";
        // line 26
        echo $this->env->getExtension('knp_pagination')->render((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        echo "
        </div>
    </div>
        <div class=\"navigation\">
    ";
        // line 30
        echo $this->env->getExtension('knp_pagination')->render((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        echo "
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Mainpage:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  104 => 26,  101 => 25,  94 => 23,  85 => 19,  81 => 18,  74 => 16,  69 => 13,  64 => 12,  60 => 10,  57 => 9,  41 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}
