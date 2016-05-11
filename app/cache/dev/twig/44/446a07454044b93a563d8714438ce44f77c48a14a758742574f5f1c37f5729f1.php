<?php

/* HamsterHubBundle:Group:show.html.twig */
class __TwigTemplate_d96826bff8b6d79743905684363546ffe4a4a414fbaf1e7e08f49339c6f891cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Group:show.html.twig", 1);
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
        $__internal_98be201b06f4aabe5648f1daa677d5b05f526acf9edb6e641faedf82637cfef2 = $this->env->getExtension("native_profiler");
        $__internal_98be201b06f4aabe5648f1daa677d5b05f526acf9edb6e641faedf82637cfef2->enter($__internal_98be201b06f4aabe5648f1daa677d5b05f526acf9edb6e641faedf82637cfef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98be201b06f4aabe5648f1daa677d5b05f526acf9edb6e641faedf82637cfef2->leave($__internal_98be201b06f4aabe5648f1daa677d5b05f526acf9edb6e641faedf82637cfef2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_252f8939a4bbe930d4bda94028deff0498dff15b25402b368eaa934fa76fd39c = $this->env->getExtension("native_profiler");
        $__internal_252f8939a4bbe930d4bda94028deff0498dff15b25402b368eaa934fa76fd39c->enter($__internal_252f8939a4bbe930d4bda94028deff0498dff15b25402b368eaa934fa76fd39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "HamsterHubBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_252f8939a4bbe930d4bda94028deff0498dff15b25402b368eaa934fa76fd39c->leave($__internal_252f8939a4bbe930d4bda94028deff0498dff15b25402b368eaa934fa76fd39c_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Group:show.html.twig";
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
