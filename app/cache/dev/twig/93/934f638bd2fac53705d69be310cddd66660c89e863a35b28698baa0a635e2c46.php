<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_44f601233b9244c98eeb790dfdc74ee995b2ea9244e5d95b8dc1ae9977e0c9d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_2ab4dfe8c691cdb25bea1d51a38d7af771ec8da12cd15e88ed28d6480fb9693e = $this->env->getExtension("native_profiler");
        $__internal_2ab4dfe8c691cdb25bea1d51a38d7af771ec8da12cd15e88ed28d6480fb9693e->enter($__internal_2ab4dfe8c691cdb25bea1d51a38d7af771ec8da12cd15e88ed28d6480fb9693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab4dfe8c691cdb25bea1d51a38d7af771ec8da12cd15e88ed28d6480fb9693e->leave($__internal_2ab4dfe8c691cdb25bea1d51a38d7af771ec8da12cd15e88ed28d6480fb9693e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_248da875603f79bed847f6ab425001c979658688bfdf95dd96eb167dc218d546 = $this->env->getExtension("native_profiler");
        $__internal_248da875603f79bed847f6ab425001c979658688bfdf95dd96eb167dc218d546->enter($__internal_248da875603f79bed847f6ab425001c979658688bfdf95dd96eb167dc218d546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_248da875603f79bed847f6ab425001c979658688bfdf95dd96eb167dc218d546->leave($__internal_248da875603f79bed847f6ab425001c979658688bfdf95dd96eb167dc218d546_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
