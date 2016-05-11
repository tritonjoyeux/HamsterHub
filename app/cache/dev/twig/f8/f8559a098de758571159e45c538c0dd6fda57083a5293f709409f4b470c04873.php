<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_8574a33075a198470dd52878a619f2151e103ca0d2291226fe7cab0b0afa18a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f2611543e088dab00ff48df6a221edd4f9b45aff30ab0e53e06b85289a5caae7 = $this->env->getExtension("native_profiler");
        $__internal_f2611543e088dab00ff48df6a221edd4f9b45aff30ab0e53e06b85289a5caae7->enter($__internal_f2611543e088dab00ff48df6a221edd4f9b45aff30ab0e53e06b85289a5caae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2611543e088dab00ff48df6a221edd4f9b45aff30ab0e53e06b85289a5caae7->leave($__internal_f2611543e088dab00ff48df6a221edd4f9b45aff30ab0e53e06b85289a5caae7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40ec86b1bf51639d5b18f2c640e53dabc95257286a0cdcc7296021ec69afd8d6 = $this->env->getExtension("native_profiler");
        $__internal_40ec86b1bf51639d5b18f2c640e53dabc95257286a0cdcc7296021ec69afd8d6->enter($__internal_40ec86b1bf51639d5b18f2c640e53dabc95257286a0cdcc7296021ec69afd8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_40ec86b1bf51639d5b18f2c640e53dabc95257286a0cdcc7296021ec69afd8d6->leave($__internal_40ec86b1bf51639d5b18f2c640e53dabc95257286a0cdcc7296021ec69afd8d6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
