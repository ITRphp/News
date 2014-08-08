<?php

/* NewsBundle:Secured:hello.html.twig */
class __TwigTemplate_4f303710f2fde5c9b751631612229af88d79083036f44bf3168e5daf5bf0ab50 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "                            <li>
                                <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">
                                    Выход
                                </a>
                            </li>
     ";
        }
        // line 11
        echo "     ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "         я админ!
    ";
        }
        // line 14
        echo "
     Hello ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo " !
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
        return array (  55 => 15,  52 => 14,  48 => 12,  45 => 11,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}