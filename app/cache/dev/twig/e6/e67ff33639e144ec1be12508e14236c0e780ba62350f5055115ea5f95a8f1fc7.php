<?php

/* @HamsterHub/Group/show_content.html.twig */
class __TwigTemplate_85f076407c1007f01cd02956d522ddf1c9c4eb7d6ab607887c1a3a8fb1597840 extends Twig_Template
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
        $__internal_af446dad761ad456331049ed00bf89221ec1294e65336ebf5bb2ff06736debc0 = $this->env->getExtension("native_profiler");
        $__internal_af446dad761ad456331049ed00bf89221ec1294e65336ebf5bb2ff06736debc0->enter($__internal_af446dad761ad456331049ed00bf89221ec1294e65336ebf5bb2ff06736debc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_af446dad761ad456331049ed00bf89221ec1294e65336ebf5bb2ff06736debc0->leave($__internal_af446dad761ad456331049ed00bf89221ec1294e65336ebf5bb2ff06736debc0_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
