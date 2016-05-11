<?php

/* HamsterHubBundle:Profile:show.html.twig */
class __TwigTemplate_901b06707d1d1b329e5cb7653c875bea798413737a01f502f05ea32726e0c071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "HamsterHubBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f10ee61253bd077fc7a88b7253acced3076200f1b21a241eb7927431f05f412 = $this->env->getExtension("native_profiler");
        $__internal_3f10ee61253bd077fc7a88b7253acced3076200f1b21a241eb7927431f05f412->enter($__internal_3f10ee61253bd077fc7a88b7253acced3076200f1b21a241eb7927431f05f412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f10ee61253bd077fc7a88b7253acced3076200f1b21a241eb7927431f05f412->leave($__internal_3f10ee61253bd077fc7a88b7253acced3076200f1b21a241eb7927431f05f412_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0950cbbe286a54b37d40463fd790f4d17efefc466f4e4902020a3167df77d0e7 = $this->env->getExtension("native_profiler");
        $__internal_0950cbbe286a54b37d40463fd790f4d17efefc466f4e4902020a3167df77d0e7->enter($__internal_0950cbbe286a54b37d40463fd790f4d17efefc466f4e4902020a3167df77d0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "HamsterHubBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0950cbbe286a54b37d40463fd790f4d17efefc466f4e4902020a3167df77d0e7->leave($__internal_0950cbbe286a54b37d40463fd790f4d17efefc466f4e4902020a3167df77d0e7_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Profile:show.html.twig";
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
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
