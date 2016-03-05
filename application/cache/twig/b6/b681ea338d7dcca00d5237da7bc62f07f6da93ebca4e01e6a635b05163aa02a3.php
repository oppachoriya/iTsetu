<?php

/* elements/footer/footer-feature.twig */
class __TwigTemplate_a3e6023611423fa018fc6aad0ac4cd1cfbe1be00e39ea99063a0cae2ad2f53a8 extends Twig_Template
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
<div class=\"footer-feature\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featureList"]) ? $context["featureList"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 4
            echo "        ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 0)) {
                // line 5
                echo "
            <div class=\"col-md-4 border-left\">
                <div class=\"media \">
                    <div class=\"pull-left\">
                <span class=\"fa-stack fa-2x\">
                    <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                    <i class=\"fa ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "icon", array()), "html", null, true);
                echo " fa-stack-1x fa-inverse\"></i>
                </span>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "heading", array()), "html", null, true);
                echo "</h4>
                        <p>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "description", array()), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </div>

        ";
            } elseif ((($this->getAttribute(            // line 21
$context["loop"], "index", array()) % 3) == 1)) {
                // line 22
                echo "            <div class=\"row\">
            <div class=\"col-md-4 border-left\">
                <div class=\"media \">
                    <div class=\"pull-left\">
                    <span class=\"fa-stack fa-2x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "icon", array()), "html", null, true);
                echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "heading", array()), "html", null, true);
                echo "</h4>
                        <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "description", array()), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </div>
        ";
            } elseif ((($this->getAttribute(            // line 37
$context["loop"], "index", array()) % 3) == 2)) {
                // line 38
                echo "            <div class=\"col-md-4 border-left\">
                <div class=\"media \">
                    <div class=\"pull-left\">
                    <span class=\"fa-stack fa-2x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "icon", array()), "html", null, true);
                echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "heading", array()), "html", null, true);
                echo "</h4>
                        <p>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "description", array()), "html", null, true);
                echo "</p>
                    </div>
                </div>
            </div>
        ";
            }
            // line 53
            echo "        ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 0)) {
                // line 54
                echo "        </div>
        ";
            }
            // line 56
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "elements/footer/footer-feature.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  133 => 56,  129 => 54,  126 => 53,  118 => 48,  114 => 47,  107 => 43,  100 => 38,  98 => 37,  91 => 33,  87 => 32,  80 => 28,  72 => 22,  70 => 21,  62 => 16,  58 => 15,  51 => 11,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <div class="footer-feature">*/
/*     {% for feature in featureList %}*/
/*         {% if loop.index % 3 == 0 %}*/
/* */
/*             <div class="col-md-4 border-left">*/
/*                 <div class="media ">*/
/*                     <div class="pull-left">*/
/*                 <span class="fa-stack fa-2x">*/
/*                     <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                     <i class="fa {{ feature.icon }} fa-stack-1x fa-inverse"></i>*/
/*                 </span>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <h4 class="media-heading">{{ feature.heading }}</h4>*/
/*                         <p>{{ feature.description }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         {% elseif loop.index % 3 == 1 %}*/
/*             <div class="row">*/
/*             <div class="col-md-4 border-left">*/
/*                 <div class="media ">*/
/*                     <div class="pull-left">*/
/*                     <span class="fa-stack fa-2x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa {{ feature.icon }} fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <h4 class="media-heading">{{ feature.heading }}</h4>*/
/*                         <p>{{ feature.description }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% elseif loop.index % 3 == 2 %}*/
/*             <div class="col-md-4 border-left">*/
/*                 <div class="media ">*/
/*                     <div class="pull-left">*/
/*                     <span class="fa-stack fa-2x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa {{ feature.icon }} fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <h4 class="media-heading">{{ feature.heading }}</h4>*/
/*                         <p>{{ feature.description }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if loop.index % 3 == 0  %}*/
/*         </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* </div>*/
