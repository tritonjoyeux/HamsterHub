<?php

/* HamsterHubBundle:Group:list.html.twig */
class __TwigTemplate_4f3497d7fd110d5aa90f36f89f79839d7210c6c1e53384f210942a59d2506a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Group:list.html.twig", 1);
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
        $__internal_48b1d6e243224a356b8c0444038bbe5432ee9a2ae79d0e3a813c23fc07a58aea = $this->env->getExtension("native_profiler");
        $__internal_48b1d6e243224a356b8c0444038bbe5432ee9a2ae79d0e3a813c23fc07a58aea->enter($__internal_48b1d6e243224a356b8c0444038bbe5432ee9a2ae79d0e3a813c23fc07a58aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b1d6e243224a356b8c0444038bbe5432ee9a2ae79d0e3a813c23fc07a58aea->leave($__internal_48b1d6e243224a356b8c0444038bbe5432ee9a2ae79d0e3a813c23fc07a58aea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_543952cf078a6a5d2a1500949a73bd3b035d50cab23189b6aecab0dc0328decd = $this->env->getExtension("native_profiler");
        $__internal_543952cf078a6a5d2a1500949a73bd3b035d50cab23189b6aecab0dc0328decd->enter($__internal_543952cf078a6a5d2a1500949a73bd3b035d50cab23189b6aecab0dc0328decd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "HamsterHubBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_543952cf078a6a5d2a1500949a73bd3b035d50cab23189b6aecab0dc0328decd->leave($__internal_543952cf078a6a5d2a1500949a73bd3b035d50cab23189b6aecab0dc0328decd_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
