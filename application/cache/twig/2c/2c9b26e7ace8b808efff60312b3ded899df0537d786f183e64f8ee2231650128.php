<?php

/* elements/footer/footer-widgets.twig */
class __TwigTemplate_ec72dd4bd0af386861f1de35e2338df9f880d7def258f17b9063d28f2cac401d extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgetLinks"]) ? $context["widgetLinks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $context["widget"], "html", null, true);
            echo "
    ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "display", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "<section id=\"widgets\" class=\"widgets-block\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appWidgetLinks"]) ? $context["appWidgetLinks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 9
            echo "            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "display", array()), "html", null, true);
            echo "</h3>
                    <ul>
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "value", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", array()), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                    </ul>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "elements/footer/footer-widgets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 16,  58 => 14,  54 => 13,  49 => 11,  45 => 9,  41 => 8,  36 => 5,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for widget in widgetLinks %}*/
/*     {{ widget }}*/
/*     {{ widget.display }}*/
/* {% endfor %}*/
/* <section id="widgets" class="widgets-block">*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             {% for widget in appWidgetLinks %}*/
/*             <div class="col-md-3 col-sm-6">*/
/*                 <div class="widget">*/
/*                     <h3>{{ widget.display }}</h3>*/
/*                     <ul>*/
/*                         {% for item in  widget.value %}*/
/*                             <li><a href="{{ item.url }}">{{ item.display }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
