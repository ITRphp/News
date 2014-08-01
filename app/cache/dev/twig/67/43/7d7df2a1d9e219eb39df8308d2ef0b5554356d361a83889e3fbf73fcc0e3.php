<?php

/* NewsBundle:Secured:hello.html.twig */
class __TwigTemplate_67437d7df2a1d9e219eb39df8308d2ef0b5554356d361a83889e3fbf73fcc0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            echo "                            <li>
                                <a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                                    Выход
                                </a>
                            </li>
     ";
        }
        // line 10
        echo "
     Hello !
";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  37 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
