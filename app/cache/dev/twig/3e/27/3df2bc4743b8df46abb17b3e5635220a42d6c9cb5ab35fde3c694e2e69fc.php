<?php

/* SensioDistributionBundle:Configurator:steps.html.twig */
class __TwigTemplate_3e273df2bc4743b8df46abb17b3e5635220a42d6c9cb5ab35fde3c694e2e69fc extends Twig_Template
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
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  971 => 304,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  826 => 247,  822 => 245,  819 => 244,  808 => 235,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  751 => 206,  748 => 205,  739 => 200,  735 => 198,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  687 => 173,  683 => 170,  681 => 169,  673 => 165,  663 => 160,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  645 => 150,  643 => 149,  633 => 144,  627 => 140,  624 => 139,  617 => 135,  614 => 133,  609 => 129,  599 => 128,  594 => 127,  592 => 126,  589 => 124,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  575 => 114,  570 => 112,  562 => 108,  556 => 104,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  519 => 91,  505 => 88,  502 => 87,  477 => 82,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  443 => 74,  425 => 64,  421 => 62,  412 => 60,  410 => 59,  399 => 56,  397 => 55,  383 => 49,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  339 => 28,  330 => 23,  317 => 17,  295 => 11,  287 => 5,  282 => 3,  260 => 293,  257 => 291,  250 => 274,  245 => 270,  110 => 38,  306 => 286,  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 174,  679 => 466,  677 => 465,  660 => 464,  649 => 153,  634 => 456,  629 => 141,  625 => 453,  620 => 136,  606 => 449,  601 => 446,  567 => 110,  549 => 411,  532 => 410,  529 => 409,  522 => 92,  517 => 404,  202 => 94,  196 => 211,  389 => 51,  386 => 159,  378 => 157,  367 => 339,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 26,  331 => 140,  326 => 21,  321 => 18,  307 => 128,  302 => 125,  296 => 121,  290 => 7,  288 => 118,  265 => 299,  259 => 103,  255 => 284,  253 => 100,  184 => 63,  175 => 58,  127 => 35,  417 => 143,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 47,  371 => 156,  359 => 123,  356 => 122,  353 => 328,  350 => 327,  347 => 119,  333 => 115,  328 => 22,  324 => 112,  313 => 110,  308 => 287,  281 => 114,  274 => 110,  237 => 262,  234 => 90,  232 => 249,  210 => 77,  180 => 70,  161 => 162,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 334,  1055 => 648,  1051 => 332,  1048 => 331,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 305,  972 => 608,  970 => 607,  967 => 303,  963 => 302,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 287,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 271,  888 => 270,  884 => 267,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 250,  828 => 538,  824 => 246,  815 => 239,  812 => 238,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 212,  770 => 507,  764 => 505,  762 => 504,  754 => 208,  745 => 203,  742 => 202,  740 => 491,  737 => 199,  732 => 197,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 178,  692 => 175,  686 => 468,  682 => 467,  678 => 168,  676 => 467,  671 => 164,  668 => 163,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 148,  636 => 145,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 123,  578 => 432,  574 => 113,  565 => 109,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 95,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  293 => 120,  280 => 194,  276 => 111,  271 => 190,  251 => 182,  249 => 92,  88 => 28,  462 => 202,  449 => 198,  446 => 75,  441 => 196,  439 => 71,  431 => 189,  429 => 66,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 54,  380 => 158,  373 => 46,  361 => 152,  351 => 141,  348 => 140,  342 => 30,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 19,  320 => 127,  315 => 131,  303 => 122,  300 => 13,  289 => 196,  286 => 112,  275 => 330,  270 => 316,  262 => 93,  256 => 96,  248 => 97,  233 => 87,  226 => 84,  213 => 78,  200 => 72,  197 => 69,  194 => 197,  191 => 196,  172 => 57,  178 => 184,  167 => 71,  148 => 69,  113 => 40,  90 => 27,  166 => 167,  155 => 47,  152 => 46,  124 => 108,  97 => 52,  81 => 30,  114 => 91,  105 => 25,  100 => 36,  23 => 1,  267 => 101,  263 => 294,  242 => 269,  231 => 99,  207 => 216,  205 => 90,  186 => 190,  183 => 189,  170 => 84,  165 => 83,  151 => 152,  146 => 147,  134 => 133,  244 => 108,  222 => 238,  218 => 97,  216 => 79,  212 => 224,  201 => 213,  188 => 194,  185 => 75,  137 => 65,  118 => 49,  104 => 74,  77 => 25,  150 => 55,  117 => 37,  76 => 25,  34 => 4,  49 => 12,  58 => 14,  84 => 33,  53 => 11,  195 => 84,  181 => 185,  174 => 74,  158 => 80,  156 => 157,  153 => 77,  136 => 138,  129 => 122,  126 => 121,  121 => 107,  70 => 19,  65 => 17,  480 => 162,  474 => 80,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 70,  435 => 69,  430 => 144,  427 => 65,  423 => 63,  413 => 134,  409 => 132,  407 => 138,  402 => 58,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 41,  362 => 39,  360 => 38,  355 => 329,  341 => 117,  337 => 27,  322 => 101,  314 => 16,  312 => 130,  309 => 129,  305 => 108,  298 => 12,  294 => 90,  285 => 4,  283 => 115,  278 => 331,  268 => 300,  264 => 84,  258 => 187,  252 => 283,  247 => 273,  241 => 93,  229 => 87,  220 => 81,  214 => 231,  177 => 69,  169 => 168,  140 => 66,  132 => 65,  128 => 42,  107 => 37,  93 => 28,  61 => 2,  273 => 317,  269 => 107,  254 => 92,  243 => 88,  240 => 263,  238 => 85,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 80,  219 => 237,  217 => 232,  208 => 76,  204 => 215,  179 => 84,  171 => 173,  163 => 82,  159 => 158,  143 => 56,  138 => 47,  135 => 46,  119 => 95,  102 => 30,  91 => 44,  78 => 24,  71 => 15,  63 => 21,  59 => 17,  38 => 6,  94 => 45,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  67 => 16,  62 => 14,  27 => 7,  46 => 10,  44 => 8,  31 => 5,  28 => 3,  24 => 2,  25 => 4,  19 => 1,  79 => 26,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 56,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 40,  111 => 90,  108 => 33,  101 => 73,  98 => 29,  96 => 53,  83 => 30,  74 => 16,  66 => 10,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 4,  209 => 223,  203 => 73,  199 => 212,  193 => 83,  189 => 66,  187 => 84,  182 => 87,  176 => 178,  173 => 177,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 45,  130 => 46,  125 => 41,  122 => 53,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 34,  99 => 54,  95 => 39,  92 => 31,  86 => 36,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 11,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
