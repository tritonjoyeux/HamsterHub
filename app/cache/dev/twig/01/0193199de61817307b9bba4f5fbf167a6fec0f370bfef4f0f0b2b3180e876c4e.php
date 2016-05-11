<?php

/* @HamsterHub/ChangePassword/changePassword.html.twig */
class __TwigTemplate_348348a356d93626ce397da2259bb82dc9e883bcf6498d50fc24912a71dd2ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_62157d1f4651f6f3b13a774932d1579ddaa29b78f98b4e49d2c8535cdf57c428 = $this->env->getExtension("native_profiler");
        $__internal_62157d1f4651f6f3b13a774932d1579ddaa29b78f98b4e49d2c8535cdf57c428->enter($__internal_62157d1f4651f6f3b13a774932d1579ddaa29b78f98b4e49d2c8535cdf57c428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62157d1f4651f6f3b13a774932d1579ddaa29b78f98b4e49d2c8535cdf57c428->leave($__internal_62157d1f4651f6f3b13a774932d1579ddaa29b78f98b4e49d2c8535cdf57c428_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efd9c9af660f1eda77e25a3fe323ddc3b896f3562659c47cd88ab3f979f28d09 = $this->env->getExtension("native_profiler");
        $__internal_efd9c9af660f1eda77e25a3fe323ddc3b896f3562659c47cd88ab3f979f28d09->enter($__internal_efd9c9af660f1eda77e25a3fe323ddc3b896f3562659c47cd88ab3f979f28d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@HamsterHub/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_efd9c9af660f1eda77e25a3fe323ddc3b896f3562659c47cd88ab3f979f28d09->leave($__internal_efd9c9af660f1eda77e25a3fe323ddc3b896f3562659c47cd88ab3f979f28d09_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
