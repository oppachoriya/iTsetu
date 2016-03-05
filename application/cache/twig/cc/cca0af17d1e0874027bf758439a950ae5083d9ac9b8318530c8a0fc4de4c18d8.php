<?php

/* elements/header/header.twig */
class __TwigTemplate_053d5b9f66af27c10c459a05ba7c4a31950b6b132a6fc0b496a4825ec857a97f extends Twig_Template
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
        echo "
<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\" padding-bottom: 5px; \">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appNavigationLinks"]) ? $context["appNavigationLinks"] : null), "Home", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["appName"]) ? $context["appName"] : null), "html", null, true);
        echo "</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appNavigationLinks"]) ? $context["appNavigationLinks"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["navigationLinks"]) {
            // line 19
            echo "                    ";
            if (twig_test_iterable($context["navigationLinks"])) {
                // line 20
                echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 21
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["navigationLinks"]);
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 24
                    echo "                                    <li>
                                        <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                            </ul>
                        </li>
                    ";
            } else {
                // line 31
                echo "                        <li>
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $context["navigationLinks"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            // line 35
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['navigationLinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "elements/header/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  92 => 35,  84 => 32,  81 => 31,  76 => 28,  65 => 25,  62 => 24,  58 => 23,  53 => 21,  50 => 20,  47 => 19,  43 => 18,  33 => 13,  19 => 1,);
    }
}
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style=" padding-bottom: 5px; ">*/
/*     <div class="container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ appNavigationLinks.Home }}">{{ appName }}</a>*/
/*         </div>*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {% for key, navigationLinks in  appNavigationLinks %}*/
/*                     {% if navigationLinks is iterable %}*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ key }} <b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% for key, item in  navigationLinks %}*/
/*                                     <li>*/
/*                                         <a href="{{ item }}">{{ key }}</a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li>*/
/*                             <a href="{{ navigationLinks }}">{{ key }}</a>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </nav>*/
