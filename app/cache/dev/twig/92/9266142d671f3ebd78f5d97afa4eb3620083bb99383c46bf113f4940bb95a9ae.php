<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9188fb46dde69606d60d64ea5cfe6797cb6f472407f7afe2cbfdddf92c1cda96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_b869c5c589808c96488344dfce4e209a9f351ebe1dfc2dcc93037c8e0da8ba0a = $this->env->getExtension("native_profiler");
        $__internal_b869c5c589808c96488344dfce4e209a9f351ebe1dfc2dcc93037c8e0da8ba0a->enter($__internal_b869c5c589808c96488344dfce4e209a9f351ebe1dfc2dcc93037c8e0da8ba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b869c5c589808c96488344dfce4e209a9f351ebe1dfc2dcc93037c8e0da8ba0a->leave($__internal_b869c5c589808c96488344dfce4e209a9f351ebe1dfc2dcc93037c8e0da8ba0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12f751ae1e8d1c94bf1bed42038ecdcd66b48a33a36a1a84250eac0dce8b0de1 = $this->env->getExtension("native_profiler");
        $__internal_12f751ae1e8d1c94bf1bed42038ecdcd66b48a33a36a1a84250eac0dce8b0de1->enter($__internal_12f751ae1e8d1c94bf1bed42038ecdcd66b48a33a36a1a84250eac0dce8b0de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_12f751ae1e8d1c94bf1bed42038ecdcd66b48a33a36a1a84250eac0dce8b0de1->leave($__internal_12f751ae1e8d1c94bf1bed42038ecdcd66b48a33a36a1a84250eac0dce8b0de1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
