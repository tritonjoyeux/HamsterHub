<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_2a7ba3468bb1d362793b46a6e99149fced966e0093657004df23d89488119e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_c43b1122fbff31308985b7a59ebed0e3953c259eaf4ef0b7fe2451057d729762 = $this->env->getExtension("native_profiler");
        $__internal_c43b1122fbff31308985b7a59ebed0e3953c259eaf4ef0b7fe2451057d729762->enter($__internal_c43b1122fbff31308985b7a59ebed0e3953c259eaf4ef0b7fe2451057d729762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43b1122fbff31308985b7a59ebed0e3953c259eaf4ef0b7fe2451057d729762->leave($__internal_c43b1122fbff31308985b7a59ebed0e3953c259eaf4ef0b7fe2451057d729762_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc4aaaffc226a221805a1961d6a2369bf9be5661bd8163bf1b067b1709fd468b = $this->env->getExtension("native_profiler");
        $__internal_dc4aaaffc226a221805a1961d6a2369bf9be5661bd8163bf1b067b1709fd468b->enter($__internal_dc4aaaffc226a221805a1961d6a2369bf9be5661bd8163bf1b067b1709fd468b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_dc4aaaffc226a221805a1961d6a2369bf9be5661bd8163bf1b067b1709fd468b->leave($__internal_dc4aaaffc226a221805a1961d6a2369bf9be5661bd8163bf1b067b1709fd468b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
