<?php

/* default.twig */
class __TwigTemplate_f2aec7b9be4b2291dba688a757a109f362646457065e6f5c3266b30b70cdcfe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metatag' => array($this, 'block_metatag'),
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        ";
        // line 6
        $this->displayBlock('metatag', $context, $blocks);
        // line 11
        echo "        <title>
            AdsCottage
            ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "        </title>

        ";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 23
        echo "
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"homepage\">
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\" style=\"margin-top: 40px\">
                    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "                </div>
            </div>
            ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "        </div>
        ";
        // line 50
        $this->displayBlock('js', $context, $blocks);
        // line 55
        echo "    </body>
</html>";
    }

    // line 6
    public function block_metatag($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appMetaHeaderList"]) ? $context["appMetaHeaderList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 8
            echo "                <meta name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "content", array()), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        ";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
            ";
    }

    // line 18
    public function block_css($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appCssList"]) ? $context["appCssList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 20
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "?appVersion=";
            echo twig_escape_filter($this->env, (isset($context["appVersion"]) ? $context["appVersion"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        ";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        $this->loadTemplate("elements/header/header.twig", "default.twig", 33)->display($context);
        // line 34
        echo "        ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "                    ";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 45
        $this->loadTemplate("elements/footer/footer.twig", "default.twig", 45)->display($context);
        // line 46
        echo "                </div>
            </div>
            ";
    }

    // line 50
    public function block_js($context, array $blocks = array())
    {
        // line 51
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appJSList"]) ? $context["appJSList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["jscript"]) {
            // line 52
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $context["jscript"], "html", null, true);
            echo "?appVersion=";
            echo twig_escape_filter($this->env, (isset($context["appVersion"]) ? $context["appVersion"] : null), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jscript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 54,  179 => 52,  174 => 51,  171 => 50,  165 => 46,  163 => 45,  159 => 43,  156 => 42,  152 => 39,  149 => 38,  145 => 34,  142 => 33,  139 => 32,  135 => 22,  124 => 20,  119 => 19,  116 => 18,  109 => 14,  106 => 13,  102 => 10,  91 => 8,  86 => 7,  83 => 6,  78 => 55,  76 => 50,  73 => 49,  71 => 42,  67 => 40,  65 => 38,  60 => 35,  58 => 32,  47 => 23,  45 => 18,  41 => 16,  39 => 13,  35 => 11,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         {% block metatag %}*/
/*             {% for tag in appMetaHeaderList %}*/
/*                 <meta name="{{ tag.name }}" content="{{ tag.content }}">*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/*         <title>*/
/*             AdsCottage*/
/*             {% block title %}*/
/*                 {{ title }}*/
/*             {% endblock %}*/
/*         </title>*/
/* */
/*         {% block css %}*/
/*             {% for css in appCssList %}*/
/*                 <link href="{{ css }}?appVersion={{ appVersion }}" rel="stylesheet" type="text/css">*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body class="homepage">*/
/*         {% block header %}*/
/*             {% include "elements/header/header.twig" %}*/
/*         {% endblock %}*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12" style="margin-top: 40px">*/
/*                     {% block content %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*             {% block footer %}*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     {% include "elements/footer/footer.twig" %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% block js %}*/
/*             {% for jscript in appJSList %}*/
/*                 <script src="{{ jscript }}?appVersion={{ appVersion }}" type="text/javascript"></script>*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
