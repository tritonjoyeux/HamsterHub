<?php

/* HamsterHubBundle:Group:new.html.twig */
class __TwigTemplate_582e27a7390a2300b48226e0a8a09f22230d7e2ada7e50dc01fc97877b95680e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Group:new.html.twig", 1);
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
        $__internal_d6e173346dc7d4ccae0becf67b608bc9425ab3b39e7b70b441d473d604191399 = $this->env->getExtension("native_profiler");
        $__internal_d6e173346dc7d4ccae0becf67b608bc9425ab3b39e7b70b441d473d604191399->enter($__internal_d6e173346dc7d4ccae0becf67b608bc9425ab3b39e7b70b441d473d604191399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e173346dc7d4ccae0becf67b608bc9425ab3b39e7b70b441d473d604191399->leave($__internal_d6e173346dc7d4ccae0becf67b608bc9425ab3b39e7b70b441d473d604191399_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_657ba79923b7eddecbfe1641d7d208ecf05bbaf7b607af75bb4dca17d6329882 = $this->env->getExtension("native_profiler");
        $__internal_657ba79923b7eddecbfe1641d7d208ecf05bbaf7b607af75bb4dca17d6329882->enter($__internal_657ba79923b7eddecbfe1641d7d208ecf05bbaf7b607af75bb4dca17d6329882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "HamsterHubBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_657ba79923b7eddecbfe1641d7d208ecf05bbaf7b607af75bb4dca17d6329882->leave($__internal_657ba79923b7eddecbfe1641d7d208ecf05bbaf7b607af75bb4dca17d6329882_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Group:new.html.twig";
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
