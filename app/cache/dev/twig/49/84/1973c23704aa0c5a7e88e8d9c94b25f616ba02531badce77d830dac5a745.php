<?php

/* NewsBundle:News:my_page_grid.html.twig */
class __TwigTemplate_49841973c23704aa0c5a7e88e8d9c94b25f616ba02531badce77d830dac5a745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APYDataGridBundle::blocks.html.twig");

        $this->blocks = array(
            'grid_pager' => array($this, 'block_grid_pager'),
            'grid_column_id_address_filter' => array($this, 'block_grid_column_id_address_filter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_grid_pager($context, array $blocks = array())
    {
    }

    // line 5
    public function block_grid_column_id_address_filter($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:News:my_page_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  29 => 3,);
    }
}
