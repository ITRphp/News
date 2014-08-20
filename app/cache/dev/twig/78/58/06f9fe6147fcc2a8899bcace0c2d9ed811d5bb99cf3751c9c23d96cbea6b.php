<?php

/* NewsBundle:Mainpage:news.html.twig */
class __TwigTemplate_785806f9fe6147fcc2a8899bcace0c2d9ed811d5bb99cf3751c9c23d96cbea6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["news_item"]) {
            // line 2
            echo "    <div class=\"media\">
        <div class=\"media-body well\">
            <h4 class=\"media-heading\">
                <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("current_news", array("id" => $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "title"), "html", null, true);
            echo "</a>
            </h4>
                <footer><h6>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "publicationDate"), "Y-m-d H:i:s"), "html", null, true);
            echo "</h6></footer>
            <strong>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news_item"]) ? $context["news_item"] : $this->getContext($context, "news_item")), "description"), "html", null, true);
            echo "</strong>
        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    <h3>No news</h3>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "NewsBundle:Mainpage:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  40 => 8,  36 => 7,  29 => 5,  24 => 2,  19 => 1,);
    }
}
