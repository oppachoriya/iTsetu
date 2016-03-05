<?php

/* elements/footer/footer.twig */
class __TwigTemplate_a74ca6d5541bb2e45e3da45beb7ef87df98302ca27a6b97eec202c67183ca002 extends Twig_Template
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
        echo "<hr/>

";
        // line 3
        $this->loadTemplate("elements/join-us.twig", "elements/footer/footer.twig", 3)->display($context);
        // line 4
        $this->loadTemplate("elements/footer/footer-feature.twig", "elements/footer/footer.twig", 4)->display($context);
        // line 5
        $this->loadTemplate("elements/footer/footer-widgets.twig", "elements/footer/footer.twig", 5)->display($context);
        // line 6
        $this->loadTemplate("elements/footer/footer-bottom.twig", "elements/footer/footer.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "elements/footer/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <hr/>*/
/* */
/* {% include 'elements/join-us.twig' %}*/
/* {% include 'elements/footer/footer-feature.twig' %}*/
/* {% include 'elements/footer/footer-widgets.twig' %}*/
/* {% include 'elements/footer/footer-bottom.twig' %}*/
/* */
