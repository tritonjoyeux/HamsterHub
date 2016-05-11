<?php

/* @HamsterHub/Resetting/reset.html.twig */
class __TwigTemplate_bc2108a9a8ea1823bc6b97f98ccc294de2f9083a045e45f4073d28357be2df00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Resetting/reset.html.twig", 1);
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
        $__internal_b37fc3dc40fe76aa1240bdbc59e64b6f83357a0f6d94f14b0f861fdb8e6f3f51 = $this->env->getExtension("native_profiler");
        $__internal_b37fc3dc40fe76aa1240bdbc59e64b6f83357a0f6d94f14b0f861fdb8e6f3f51->enter($__internal_b37fc3dc40fe76aa1240bdbc59e64b6f83357a0f6d94f14b0f861fdb8e6f3f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37fc3dc40fe76aa1240bdbc59e64b6f83357a0f6d94f14b0f861fdb8e6f3f51->leave($__internal_b37fc3dc40fe76aa1240bdbc59e64b6f83357a0f6d94f14b0f861fdb8e6f3f51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_895471aba102c49ec1259b55a2478cf0ae798a81badfe4c00ba1563e9d03f127 = $this->env->getExtension("native_profiler");
        $__internal_895471aba102c49ec1259b55a2478cf0ae798a81badfe4c00ba1563e9d03f127->enter($__internal_895471aba102c49ec1259b55a2478cf0ae798a81badfe4c00ba1563e9d03f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@HamsterHub/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_895471aba102c49ec1259b55a2478cf0ae798a81badfe4c00ba1563e9d03f127->leave($__internal_895471aba102c49ec1259b55a2478cf0ae798a81badfe4c00ba1563e9d03f127_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
