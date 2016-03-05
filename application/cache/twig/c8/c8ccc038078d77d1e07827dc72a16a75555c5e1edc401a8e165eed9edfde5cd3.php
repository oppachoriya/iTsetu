<?php

/* elements/footer/footer-bottom.twig */
class __TwigTemplate_4d27278f453fc3ae2df80f1c9740a187f07a54be353f3025dd8fc723c217ddb4 extends Twig_Template
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
        echo "<footer id=\"footer-block\" class=\"footer-bottom\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                Copyright &copy; 2016
                <a href=\"http://www.itsetu.com\" target=\"_blank\" > ITSetu Media Lab Pvt. Ltd.</a>. All Rights Reserved.
            </div>
            <div class=\"col-sm-6\">
                <ul class=\"list-inline pull-right\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appFooterLinks"]) ? $context["appFooterLinks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 11
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "display", array()), "html", null, true);
            echo " </a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "elements/footer/footer-bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <footer id="footer-block" class="footer-bottom">*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/*                 Copyright &copy; 2016*/
/*                 <a href="http://www.itsetu.com" target="_blank" > ITSetu Media Lab Pvt. Ltd.</a>. All Rights Reserved.*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*                 <ul class="list-inline pull-right">*/
/*                     {% for link in appFooterLinks %}*/
/*                         <li><a href="{{ link.url }}" >{{ link.display }} </a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
