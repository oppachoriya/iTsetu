<?php

/* elements/slider.twig */
class __TwigTemplate_0265d548dc194abe3ab81cea892c52129102033acd4ce1b423ce7da6f84f739c extends Twig_Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
    <div class=\"carousel slide\">
        <ol class=\"carousel-indicators\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliderData"]) ? $context["sliderData"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "                <li data-target=\"#main-slider\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" class=\"active\"></li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliderData"]) ? $context["sliderData"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                <div class=\"item ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "active", array()), "html", null, true);
            echo "\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "path", array()), "html", null, true);
            echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "heading", array()), "html", null, true);
            echo "</h1>
                                    <h2 class=\"animation animated-item-2\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "shortDescription", array()), "html", null, true);
            echo "</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "landingUrl", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonText", array()), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "animatationImgPath", array()), "html", null, true);
            echo "\" class=\"img-responsive\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>";
    }

    public function getTemplateName()
    {
        return "elements/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  95 => 22,  85 => 17,  81 => 16,  77 => 15,  66 => 10,  62 => 9,  58 => 7,  41 => 5,  24 => 4,  19 => 1,);
    }
}
/* <section id="main-slider" class="no-margin">*/
/*     <div class="carousel slide">*/
/*         <ol class="carousel-indicators">*/
/*             {% for item in sliderData %}*/
/*                 <li data-target="#main-slider" data-slide-to="{{ loop.index0 }}" class="active"></li>*/
/*             {% endfor %}*/
/*         </ol>*/
/*         <div class="carousel-inner">*/
/*             {% for item in sliderData %}*/
/*                 <div class="item {{ item.active }}" style="background-image: url({{ item.path }})">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">{{ item.heading }}</h1>*/
/*                                     <h2 class="animation animated-item-2">{{ item.shortDescription }}</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="{{ item.landingUrl }}">{{ item.buttonText }}</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="{{ item.animatationImgPath }}" class="img-responsive">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     <a class="prev hidden-xs" href="#main-slider" data-slide="prev">*/
/*         <i class="fa fa-chevron-left"></i>*/
/*     </a>*/
/*     <a class="next hidden-xs" href="#main-slider" data-slide="next">*/
/*         <i class="fa fa-chevron-right"></i>*/
/*     </a>*/
/* </section>*/
