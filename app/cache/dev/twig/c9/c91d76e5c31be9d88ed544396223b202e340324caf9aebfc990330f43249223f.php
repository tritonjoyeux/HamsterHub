<?php

/* HamsterHubBundle:Resetting:reset.html.twig */
class __TwigTemplate_69c664641e5f32361343b9983eda23f9af587adca029390d48e1097f1b24dfb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Resetting:reset.html.twig", 1);
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
        $__internal_23e2937b1c6955fbcdac06e6df971050bd92de352a168d299eee3e74ed4f4bf7 = $this->env->getExtension("native_profiler");
        $__internal_23e2937b1c6955fbcdac06e6df971050bd92de352a168d299eee3e74ed4f4bf7->enter($__internal_23e2937b1c6955fbcdac06e6df971050bd92de352a168d299eee3e74ed4f4bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e2937b1c6955fbcdac06e6df971050bd92de352a168d299eee3e74ed4f4bf7->leave($__internal_23e2937b1c6955fbcdac06e6df971050bd92de352a168d299eee3e74ed4f4bf7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_912f25815387ed84644b863303d640e7e6320c66ea19dbb706813ba8305c149b = $this->env->getExtension("native_profiler");
        $__internal_912f25815387ed84644b863303d640e7e6320c66ea19dbb706813ba8305c149b->enter($__internal_912f25815387ed84644b863303d640e7e6320c66ea19dbb706813ba8305c149b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "HamsterHubBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_912f25815387ed84644b863303d640e7e6320c66ea19dbb706813ba8305c149b->leave($__internal_912f25815387ed84644b863303d640e7e6320c66ea19dbb706813ba8305c149b_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Resetting:reset.html.twig";
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
