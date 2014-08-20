<?php

/* NewsBundle:Form:errors.html.twig */
class __TwigTemplate_fdb8d09ca8d839950a244f1e3e49111ae2c2707de399753c6dd026690564da4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsBundle::layout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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
    public function block_form_errors($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 6
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "            <div class=\"text-danger\" style=\"display: inline\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "NewsBundle:Form:errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  33 => 5,  31 => 4,  28 => 3,  150 => 50,  145 => 48,  141 => 47,  133 => 42,  125 => 37,  121 => 36,  116 => 34,  108 => 29,  104 => 28,  99 => 26,  91 => 21,  87 => 20,  82 => 18,  75 => 16,  71 => 15,  66 => 14,  50 => 9,  46 => 9,  41 => 7,  38 => 7,  32 => 5,  27 => 3,);
    }
}
