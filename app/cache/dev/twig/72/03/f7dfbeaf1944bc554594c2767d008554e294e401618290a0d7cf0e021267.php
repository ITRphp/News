<?php

/* NewsBundle:Mainpage:currentNews.html.twig */
class __TwigTemplate_7203f7dfbeaf1944bc554594c2767d008554e294e401618290a0d7cf0e021267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle:MainPage:layout.html.twig");

        $this->blocks = array(
            'news' => array($this, 'block_news'),
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
    public function block_news($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"center\" style=\"padding:4px\" class=\"col-md-10 \">
    <div class=\"container col-md-12\">
        <div class=\"media\">
            <div class=\"media-body well\">
                <h2 class=\"media-heading\">
                    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title"), "html", null, true);
        echo "
                </h2>
                    <footer><h6>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "publicationDate"), "Y-m-d H:i:s"), "html", null, true);
        echo " <i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Author"), "html", null, true);
        echo ":</i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "author"), "html", null, true);
        echo "</h6></footer>
                    <p>";
        // line 11
        echo $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "content");
        echo "  </p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Mainpage:currentNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  43 => 10,  38 => 8,  31 => 3,  28 => 2,);
    }
}
