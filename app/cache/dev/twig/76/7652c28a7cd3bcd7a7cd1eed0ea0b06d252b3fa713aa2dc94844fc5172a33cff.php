<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_aee7eee0a38ea2ca6dcc99f746da1bbe96910724c41aeced3fff2dbd9ab065f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d6a209e248826cb4f9cfe5c02b0382fa7b79c3b9a3f21fb812856b205571d3fa = $this->env->getExtension("native_profiler");
        $__internal_d6a209e248826cb4f9cfe5c02b0382fa7b79c3b9a3f21fb812856b205571d3fa->enter($__internal_d6a209e248826cb4f9cfe5c02b0382fa7b79c3b9a3f21fb812856b205571d3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6a209e248826cb4f9cfe5c02b0382fa7b79c3b9a3f21fb812856b205571d3fa->leave($__internal_d6a209e248826cb4f9cfe5c02b0382fa7b79c3b9a3f21fb812856b205571d3fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff539e6a0d74f9d906089199db2d951d149911f619f0a06f7036d1f466e25a8f = $this->env->getExtension("native_profiler");
        $__internal_ff539e6a0d74f9d906089199db2d951d149911f619f0a06f7036d1f466e25a8f->enter($__internal_ff539e6a0d74f9d906089199db2d951d149911f619f0a06f7036d1f466e25a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ff539e6a0d74f9d906089199db2d951d149911f619f0a06f7036d1f466e25a8f->leave($__internal_ff539e6a0d74f9d906089199db2d951d149911f619f0a06f7036d1f466e25a8f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
