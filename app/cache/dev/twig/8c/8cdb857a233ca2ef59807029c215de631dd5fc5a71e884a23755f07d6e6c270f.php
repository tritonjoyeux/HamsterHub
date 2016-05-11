<?php

/* HamsterHubBundle:Resetting:request.html.twig */
class __TwigTemplate_21cd90af4f205efd7288aace7efb290c60fcd9afcad493b76adb8fb9e9557fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Resetting:request.html.twig", 1);
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
        $__internal_522c6a370b5309d358c8fd94edda47603fccab8e2875d6cf0042557949dcb278 = $this->env->getExtension("native_profiler");
        $__internal_522c6a370b5309d358c8fd94edda47603fccab8e2875d6cf0042557949dcb278->enter($__internal_522c6a370b5309d358c8fd94edda47603fccab8e2875d6cf0042557949dcb278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522c6a370b5309d358c8fd94edda47603fccab8e2875d6cf0042557949dcb278->leave($__internal_522c6a370b5309d358c8fd94edda47603fccab8e2875d6cf0042557949dcb278_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0de177573025ce586f308c54263aa2b983b2638cd3458dda3d1df785dc2fa56d = $this->env->getExtension("native_profiler");
        $__internal_0de177573025ce586f308c54263aa2b983b2638cd3458dda3d1df785dc2fa56d->enter($__internal_0de177573025ce586f308c54263aa2b983b2638cd3458dda3d1df785dc2fa56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "HamsterHubBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0de177573025ce586f308c54263aa2b983b2638cd3458dda3d1df785dc2fa56d->leave($__internal_0de177573025ce586f308c54263aa2b983b2638cd3458dda3d1df785dc2fa56d_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Resetting:request.html.twig";
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
