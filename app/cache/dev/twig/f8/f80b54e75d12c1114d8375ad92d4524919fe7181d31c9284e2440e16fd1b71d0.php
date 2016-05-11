<?php

/* @HamsterHub/Group/edit.html.twig */
class __TwigTemplate_6d61ddf41535208e88522a3c933682d3cef681c84a96d49a28c1ab91b6bc3970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Group/edit.html.twig", 1);
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
        $__internal_a5cd80b00da12654748995b9d3e6a87f5415c9ad1b61146b0ce8a766687a2f20 = $this->env->getExtension("native_profiler");
        $__internal_a5cd80b00da12654748995b9d3e6a87f5415c9ad1b61146b0ce8a766687a2f20->enter($__internal_a5cd80b00da12654748995b9d3e6a87f5415c9ad1b61146b0ce8a766687a2f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5cd80b00da12654748995b9d3e6a87f5415c9ad1b61146b0ce8a766687a2f20->leave($__internal_a5cd80b00da12654748995b9d3e6a87f5415c9ad1b61146b0ce8a766687a2f20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8ab24f072503238a5345ac664b704d272bb44b66b1c3a7d9afcadc1283458e8 = $this->env->getExtension("native_profiler");
        $__internal_a8ab24f072503238a5345ac664b704d272bb44b66b1c3a7d9afcadc1283458e8->enter($__internal_a8ab24f072503238a5345ac664b704d272bb44b66b1c3a7d9afcadc1283458e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@HamsterHub/Group/edit.html.twig", 4)->display($context);
        
        $__internal_a8ab24f072503238a5345ac664b704d272bb44b66b1c3a7d9afcadc1283458e8->leave($__internal_a8ab24f072503238a5345ac664b704d272bb44b66b1c3a7d9afcadc1283458e8_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
