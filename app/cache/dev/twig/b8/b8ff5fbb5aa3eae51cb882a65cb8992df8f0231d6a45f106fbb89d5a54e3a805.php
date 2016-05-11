<?php

/* @HamsterHub/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_8375e7a04434c363cc111d62c4f6c5b9100c52cc7190d5da98255964e4429ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2e6f4f4eb76223a1fab489c057db52e3a5055bc5275df6c354d264a14d526b26 = $this->env->getExtension("native_profiler");
        $__internal_2e6f4f4eb76223a1fab489c057db52e3a5055bc5275df6c354d264a14d526b26->enter($__internal_2e6f4f4eb76223a1fab489c057db52e3a5055bc5275df6c354d264a14d526b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e6f4f4eb76223a1fab489c057db52e3a5055bc5275df6c354d264a14d526b26->leave($__internal_2e6f4f4eb76223a1fab489c057db52e3a5055bc5275df6c354d264a14d526b26_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad4ce01ffcab5bdb5d0edeb9995473c12ec033bd870495aa25990a7389a0c63e = $this->env->getExtension("native_profiler");
        $__internal_ad4ce01ffcab5bdb5d0edeb9995473c12ec033bd870495aa25990a7389a0c63e->enter($__internal_ad4ce01ffcab5bdb5d0edeb9995473c12ec033bd870495aa25990a7389a0c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ad4ce01ffcab5bdb5d0edeb9995473c12ec033bd870495aa25990a7389a0c63e->leave($__internal_ad4ce01ffcab5bdb5d0edeb9995473c12ec033bd870495aa25990a7389a0c63e_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
