<?php

/* payment/payment.twig */
class __TwigTemplate_9e1597a311bb6cd813ba4ac95bb7629a90052e7e2be859ad1fa7a579aef31ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default.twig", "payment/payment.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo "Payment options, we have";
        echo "
";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo "Learning page";
        echo "
";
    }

    // line 17
    public function block_js($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "payment/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  61 => 17,  54 => 13,  51 => 12,  44 => 9,  41 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "default.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ "Payment options, we have" }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block css %}*/
/*         {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {{ "Learning page" }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
