<?php

/* @HamsterHub/Resetting/request.html.twig */
class __TwigTemplate_01e6bccfdd744524ffcb019cfce9841b0196a27cc6104711f240bf8f09f6d4f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Resetting/request.html.twig", 1);
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
        $__internal_14136b4ff9cb2631ece22c7e33971c43d5220991e390a812a0c7d08b805ec7dd = $this->env->getExtension("native_profiler");
        $__internal_14136b4ff9cb2631ece22c7e33971c43d5220991e390a812a0c7d08b805ec7dd->enter($__internal_14136b4ff9cb2631ece22c7e33971c43d5220991e390a812a0c7d08b805ec7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14136b4ff9cb2631ece22c7e33971c43d5220991e390a812a0c7d08b805ec7dd->leave($__internal_14136b4ff9cb2631ece22c7e33971c43d5220991e390a812a0c7d08b805ec7dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6148eea3c4b51b2011ea016dc0645db45dcc6d77314c37b860fba657110e0238 = $this->env->getExtension("native_profiler");
        $__internal_6148eea3c4b51b2011ea016dc0645db45dcc6d77314c37b860fba657110e0238->enter($__internal_6148eea3c4b51b2011ea016dc0645db45dcc6d77314c37b860fba657110e0238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@HamsterHub/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6148eea3c4b51b2011ea016dc0645db45dcc6d77314c37b860fba657110e0238->leave($__internal_6148eea3c4b51b2011ea016dc0645db45dcc6d77314c37b860fba657110e0238_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Resetting/request.html.twig";
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
