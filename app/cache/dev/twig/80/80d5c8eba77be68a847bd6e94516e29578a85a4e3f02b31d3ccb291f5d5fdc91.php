<?php

/* @HamsterHub/Group/show.html.twig */
class __TwigTemplate_6af752ec86648ba8491790248df6d329df7dc2839b11ec2a3fe616481a02d8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Group/show.html.twig", 1);
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
        $__internal_cbbfd15322269107d6c383b36c712fcd8f67d4b9aa18be6282a16c614bc65e9d = $this->env->getExtension("native_profiler");
        $__internal_cbbfd15322269107d6c383b36c712fcd8f67d4b9aa18be6282a16c614bc65e9d->enter($__internal_cbbfd15322269107d6c383b36c712fcd8f67d4b9aa18be6282a16c614bc65e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbfd15322269107d6c383b36c712fcd8f67d4b9aa18be6282a16c614bc65e9d->leave($__internal_cbbfd15322269107d6c383b36c712fcd8f67d4b9aa18be6282a16c614bc65e9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57ecb866fe63b7c22ac8125ffbc593aec138408a691682776308a07ce8c4a450 = $this->env->getExtension("native_profiler");
        $__internal_57ecb866fe63b7c22ac8125ffbc593aec138408a691682776308a07ce8c4a450->enter($__internal_57ecb866fe63b7c22ac8125ffbc593aec138408a691682776308a07ce8c4a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@HamsterHub/Group/show.html.twig", 4)->display($context);
        
        $__internal_57ecb866fe63b7c22ac8125ffbc593aec138408a691682776308a07ce8c4a450->leave($__internal_57ecb866fe63b7c22ac8125ffbc593aec138408a691682776308a07ce8c4a450_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Group/show.html.twig";
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
