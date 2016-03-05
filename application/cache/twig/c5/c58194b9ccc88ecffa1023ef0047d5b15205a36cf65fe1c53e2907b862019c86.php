<?php

/* Home/home.twig */
class __TwigTemplate_b7ac055cf36dc5472845b11c1dead5cfa6d5e7dcfc847629849c7ca80c660e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default.twig", "Home/home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        echo "Digital Outdoor Advertising";
        echo "
";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->loadTemplate("elements/header/map-header.twig", "Home/home.twig", 13)->display($context);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("elements/footer/map-footer.twig", "Home/home.twig", 19)->display($context);
    }

    // line 22
    public function block_js($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  77 => 22,  72 => 19,  69 => 18,  64 => 16,  61 => 15,  56 => 13,  53 => 12,  46 => 9,  43 => 8,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends "default.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ "Digital Outdoor Advertising" }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block css %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     {% include "elements/header/map-header.twig" %}*/
/* {% endblock  %}*/
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*     {% include "elements/footer/map-footer.twig" %}*/
/* {% endblock  %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
