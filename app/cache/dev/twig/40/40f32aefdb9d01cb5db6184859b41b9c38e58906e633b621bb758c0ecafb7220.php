<?php

/* @HamsterHub/Group/new.html.twig */
class __TwigTemplate_eb6fd53cb393359befcb1602b9f718f9500b466ae3741a4ba6989e3954401a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Group/new.html.twig", 1);
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
        $__internal_82284abd084af0cf70013f9acca1d41bcc33d4a1e1a078f7488131803d5c9c40 = $this->env->getExtension("native_profiler");
        $__internal_82284abd084af0cf70013f9acca1d41bcc33d4a1e1a078f7488131803d5c9c40->enter($__internal_82284abd084af0cf70013f9acca1d41bcc33d4a1e1a078f7488131803d5c9c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82284abd084af0cf70013f9acca1d41bcc33d4a1e1a078f7488131803d5c9c40->leave($__internal_82284abd084af0cf70013f9acca1d41bcc33d4a1e1a078f7488131803d5c9c40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a28e6c17d84979156a86dce083e255b43396fa07c34aa6c9774fb408af941090 = $this->env->getExtension("native_profiler");
        $__internal_a28e6c17d84979156a86dce083e255b43396fa07c34aa6c9774fb408af941090->enter($__internal_a28e6c17d84979156a86dce083e255b43396fa07c34aa6c9774fb408af941090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@HamsterHub/Group/new.html.twig", 4)->display($context);
        
        $__internal_a28e6c17d84979156a86dce083e255b43396fa07c34aa6c9774fb408af941090->leave($__internal_a28e6c17d84979156a86dce083e255b43396fa07c34aa6c9774fb408af941090_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Group/new.html.twig";
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
