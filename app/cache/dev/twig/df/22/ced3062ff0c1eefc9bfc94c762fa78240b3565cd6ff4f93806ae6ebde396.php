<?php

/* NewsBundle:Menu:knp_menu.html.twig */
class __TwigTemplate_df22ced3062ff0c1eefc9bfc94c762fa78240b3565cd6ff4f93806ae6ebde396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown"), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend"), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append"), false)) : (false));
            // line 10
            echo " 
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo " 
";
            // line 19
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 20
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 21
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")), "method")) {
                // line 23
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 25
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 26
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 31
            echo " 
";
            // line 33
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 34
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 35
            echo " 
";
            // line 37
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 38
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level") > 1)) {
                    // line 39
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-submenu"));
                } else {
                    // line 41
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                }
                // line 43
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 45
            echo " 
";
            // line 47
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 48
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 50
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 51
            echo " 
";
            // line 53
            echo "    <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 54
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 55
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 57
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 59
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 62
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 65
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 66
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
    }

    // line 71
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 72
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level") == 1)) {
            // line 73
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 75
            echo "    <li class=\"divider\"></li>
";
        }
    }

    // line 79
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 80
        $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 81
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 82
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes");
        // line 83
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 84
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 85
        echo "    <a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level") <= 1)) {
            echo " <b class=\"caret\"></b>";
        }
        echo "</a>
";
    }

    // line 88
    public function block_label($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "NewsBundle:Menu:knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 88,  174 => 84,  172 => 83,  170 => 82,  166 => 80,  153 => 73,  151 => 72,  148 => 71,  134 => 62,  126 => 57,  113 => 51,  100 => 43,  97 => 41,  77 => 29,  62 => 20,  34 => 4,  49 => 12,  58 => 22,  84 => 32,  117 => 10,  90 => 37,  70 => 25,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 23,  128 => 24,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  171 => 61,  163 => 79,  159 => 61,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 37,  71 => 19,  67 => 23,  63 => 12,  59 => 23,  38 => 6,  94 => 39,  89 => 20,  85 => 34,  75 => 28,  68 => 14,  56 => 6,  87 => 35,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 9,  31 => 3,  28 => 3,  24 => 1,  25 => 3,  19 => 1,  79 => 30,  72 => 26,  69 => 12,  47 => 4,  40 => 7,  37 => 7,  22 => 2,  246 => 90,  157 => 75,  145 => 46,  139 => 65,  131 => 52,  123 => 41,  120 => 54,  115 => 39,  111 => 50,  108 => 48,  101 => 32,  98 => 8,  96 => 31,  83 => 33,  74 => 14,  66 => 27,  55 => 15,  52 => 10,  50 => 17,  43 => 8,  41 => 11,  35 => 20,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 85,  173 => 65,  168 => 81,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 66,  133 => 42,  130 => 59,  125 => 23,  122 => 55,  116 => 53,  112 => 35,  109 => 34,  106 => 47,  103 => 45,  99 => 31,  95 => 7,  92 => 38,  86 => 35,  82 => 22,  80 => 31,  73 => 31,  64 => 21,  60 => 19,  57 => 17,  54 => 10,  51 => 14,  48 => 15,  45 => 15,  42 => 8,  39 => 7,  36 => 5,  33 => 5,  30 => 7,);
    }
}
