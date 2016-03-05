<?php

/* elements/footer.twig */
class __TwigTemplate_b674c50fc2018c2b98a5c030f77bebd7bf5e5ba3aa01bb6f93a752ebe2627724 extends Twig_Template
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
        // line 6
        $this->loadTemplate("elements/footer-feature.twig", "elements/footer.twig", 6)->display($context);
        // line 7
        $this->loadTemplate("elements/join-us.twig", "elements/footer.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "elements/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <hr/>*/
/* */
/* */
/* */
/* */
/* {% include 'elements/footer-feature.twig' %}*/
/* {% include 'elements/join-us.twig' %}*/
