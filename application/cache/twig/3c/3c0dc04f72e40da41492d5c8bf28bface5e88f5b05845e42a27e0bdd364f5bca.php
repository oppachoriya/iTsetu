<?php

/* elements/join-us.twig */
class __TwigTemplate_c970d51ef8f607934f4d49e2b02c0a9f700a78d392e6df6eb7e0504024da161d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'joinus' => array($this, 'block_joinus'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <p>
                ";
        // line 5
        $this->displayBlock('joinus', $context, $blocks);
        // line 8
        echo "            </p>
        </div>
        <div class=\"col-md-4\">
            <a class=\"btn btn-lg btn-default btn-block\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joinUs"]) ? $context["joinUs"] : null), "url", array()), "html", null, true);
        echo "\" style=\"color: white; background: #c52d2f\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joinUs"]) ? $context["joinUs"] : null), "text", array()), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</div>";
    }

    // line 5
    public function block_joinus($context, array $blocks = array())
    {
        // line 6
        echo "                    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joinUs"]) ? $context["joinUs"] : null), "description", array()), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "elements/join-us.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  46 => 5,  37 => 12,  33 => 11,  28 => 8,  26 => 5,  20 => 1,);
    }
}
/* <div class="well">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <p>*/
/*                 {% block joinus %}*/
/*                     {{ joinUs.description }}*/
/*                 {% endblock %}*/
/*             </p>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <a class="btn btn-lg btn-default btn-block" href="{{ joinUs.url }}" style="color: white; background: #c52d2f">*/
/*                 {{ joinUs.text }}*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
