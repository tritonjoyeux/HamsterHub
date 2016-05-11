<?php

/* HamsterHubBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_36ca837c5f589b4e6868b8b9132dc9b2060a6c5fef55cfa663d82c580b808092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_1b4c09969624392bdcb2eff992660e00819be4890ef0a0e539dbc99ee8e4a35b = $this->env->getExtension("native_profiler");
        $__internal_1b4c09969624392bdcb2eff992660e00819be4890ef0a0e539dbc99ee8e4a35b->enter($__internal_1b4c09969624392bdcb2eff992660e00819be4890ef0a0e539dbc99ee8e4a35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4c09969624392bdcb2eff992660e00819be4890ef0a0e539dbc99ee8e4a35b->leave($__internal_1b4c09969624392bdcb2eff992660e00819be4890ef0a0e539dbc99ee8e4a35b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1868222b7141442e6de29763af2fa6b3d21ed48a5b7bcd8cc8fc43ee38ea89a = $this->env->getExtension("native_profiler");
        $__internal_e1868222b7141442e6de29763af2fa6b3d21ed48a5b7bcd8cc8fc43ee38ea89a->enter($__internal_e1868222b7141442e6de29763af2fa6b3d21ed48a5b7bcd8cc8fc43ee38ea89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "HamsterHubBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e1868222b7141442e6de29763af2fa6b3d21ed48a5b7bcd8cc8fc43ee38ea89a->leave($__internal_e1868222b7141442e6de29763af2fa6b3d21ed48a5b7bcd8cc8fc43ee38ea89a_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
