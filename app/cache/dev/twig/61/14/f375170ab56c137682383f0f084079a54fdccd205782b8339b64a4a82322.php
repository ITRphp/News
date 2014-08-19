<?php

/* NewsBundle:Mainpage:index.html.twig */
class __TwigTemplate_6114f375170ab56c137682383f0f084079a54fdccd205782b8339b64a4a82322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle:MainPage:layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_news($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"center\" style=\"padding:4px\" class=\"col-md-7\">
    <div class=\"container col-md-12\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["news_item"]) {
            // line 7
            echo "            <div class=\"media\">
                <div class=\"media-body well\">
                    <h4 class=\"media-heading\">
                        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("current_news", array("id" => $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "title"), "html", null, true);
            echo "</a>
                    </h4>
                        <footer><h6>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "publicationDate"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></footer>
                    <strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "description"), "html", null, true);
            echo "</strong>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "            <h3>No news</h3>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    </div>
    <div class=\"navigation\">
        ";
        // line 22
        echo $this->env->getExtension('knp_pagination')->render((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        echo "
    </div>
</div>
";
    }

    // line 26
    public function block_popular_news($context, array $blocks = array())
    {
        // line 27
        echo "<div data-spy=\"affix\"  data-offset-top=\"227\" id=\"affix2\" style=\"background-color: whitesmoke\" class=\"col-md-3\">
    <p class=\"bg-primary text-center\">Popular news</p>
    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular_news"]) ? $context["popular_news"] : $this->getContext($context, "popular_news")));
        foreach ($context['_seq'] as $context["_key"] => $context["news_item"]) {
            echo "   
        <div class=\"media\">
            <div class=\"media-body\">
                <h4 class=\"media-heading\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("current_news", array("id" => $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "id"))), "html", null, true);
            echo "\"><span class=\"badge pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "getUsersCount", array(), "method"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "title"), "html", null, true);
            echo "</a></h4>
                
                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "description"), "html", null, true);
            echo "
                
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        return array (  121 => 39,  110 => 34,  101 => 32,  93 => 29,  89 => 27,  86 => 26,  78 => 22,  73 => 19,  66 => 17,  57 => 13,  53 => 12,  46 => 10,  41 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
