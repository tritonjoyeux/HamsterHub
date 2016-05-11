<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_2f0bddf3c68cecc0ecd96404af9fe893d0f35ea2ac4a6177022ae92feac99bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_6d406015ff953ee708dbd7e68c4cb671e4d41a9e9400db80653904d66a0b38c3 = $this->env->getExtension("native_profiler");
        $__internal_6d406015ff953ee708dbd7e68c4cb671e4d41a9e9400db80653904d66a0b38c3->enter($__internal_6d406015ff953ee708dbd7e68c4cb671e4d41a9e9400db80653904d66a0b38c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d406015ff953ee708dbd7e68c4cb671e4d41a9e9400db80653904d66a0b38c3->leave($__internal_6d406015ff953ee708dbd7e68c4cb671e4d41a9e9400db80653904d66a0b38c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65ffc7596a7709f53938b7b0ff6d5c269f9eb567272fac123f5cb4839540fdb4 = $this->env->getExtension("native_profiler");
        $__internal_65ffc7596a7709f53938b7b0ff6d5c269f9eb567272fac123f5cb4839540fdb4->enter($__internal_65ffc7596a7709f53938b7b0ff6d5c269f9eb567272fac123f5cb4839540fdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_65ffc7596a7709f53938b7b0ff6d5c269f9eb567272fac123f5cb4839540fdb4->leave($__internal_65ffc7596a7709f53938b7b0ff6d5c269f9eb567272fac123f5cb4839540fdb4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
