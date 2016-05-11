<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_64b4703a2c50d074e4e197db28da0394f916d76a3db68f9bb1ddea2ef6fc59d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b9e4ce02eb507855c74a8910e21ae27018f0a4e4e7431cd4850625999e1d6a = $this->env->getExtension("native_profiler");
        $__internal_70b9e4ce02eb507855c74a8910e21ae27018f0a4e4e7431cd4850625999e1d6a->enter($__internal_70b9e4ce02eb507855c74a8910e21ae27018f0a4e4e7431cd4850625999e1d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b9e4ce02eb507855c74a8910e21ae27018f0a4e4e7431cd4850625999e1d6a->leave($__internal_70b9e4ce02eb507855c74a8910e21ae27018f0a4e4e7431cd4850625999e1d6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2eecbf1cd3afd9d30b0ded70daed50387e474697dd2b368a160c5b25b514449 = $this->env->getExtension("native_profiler");
        $__internal_c2eecbf1cd3afd9d30b0ded70daed50387e474697dd2b368a160c5b25b514449->enter($__internal_c2eecbf1cd3afd9d30b0ded70daed50387e474697dd2b368a160c5b25b514449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c2eecbf1cd3afd9d30b0ded70daed50387e474697dd2b368a160c5b25b514449->leave($__internal_c2eecbf1cd3afd9d30b0ded70daed50387e474697dd2b368a160c5b25b514449_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
