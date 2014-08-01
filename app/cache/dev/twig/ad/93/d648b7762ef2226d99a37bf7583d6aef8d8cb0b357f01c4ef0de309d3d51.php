<?php

/* NewsBundle:Authentication:hello.html.twig */
class __TwigTemplate_ad93d648b7762ef2226d99a37bf7583d6aef8d8cb0b357f01c4ef0de309d3d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "                        <li>
                            <a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                                Выход
                            </a>
                        </li>
 ";
        }
        // line 8
        echo " ";
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "     Hello !
 ";
    }

    public function getTemplateName()
    {
        return "NewsBundle:Authentication:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 8,  25 => 3,  22 => 2,  20 => 1,);
    }
}
