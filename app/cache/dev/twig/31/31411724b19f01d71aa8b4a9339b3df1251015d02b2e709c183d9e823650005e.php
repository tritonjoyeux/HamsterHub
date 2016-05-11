<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_0b89cbc3e6b17312b8a56b5d22f7c4c98cf1209e7c587a9bcaf79266af65cf06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_7ed484ef20a50cf4f56670bc7773992003b6fa0d91d1b0cb9b569aea7b50d70e = $this->env->getExtension("native_profiler");
        $__internal_7ed484ef20a50cf4f56670bc7773992003b6fa0d91d1b0cb9b569aea7b50d70e->enter($__internal_7ed484ef20a50cf4f56670bc7773992003b6fa0d91d1b0cb9b569aea7b50d70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed484ef20a50cf4f56670bc7773992003b6fa0d91d1b0cb9b569aea7b50d70e->leave($__internal_7ed484ef20a50cf4f56670bc7773992003b6fa0d91d1b0cb9b569aea7b50d70e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc70a0c6389d4f47395e0caf8abcb8c09ce1e837b32040963e00c6d9e021b50c = $this->env->getExtension("native_profiler");
        $__internal_cc70a0c6389d4f47395e0caf8abcb8c09ce1e837b32040963e00c6d9e021b50c->enter($__internal_cc70a0c6389d4f47395e0caf8abcb8c09ce1e837b32040963e00c6d9e021b50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_cc70a0c6389d4f47395e0caf8abcb8c09ce1e837b32040963e00c6d9e021b50c->leave($__internal_cc70a0c6389d4f47395e0caf8abcb8c09ce1e837b32040963e00c6d9e021b50c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
