<?php

/* HamsterHubBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_91739c61f3c2a2327f38e0cbd21f86b6ad24af66ff5bafd70a929788b1a7a405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_bfe6471b653feaf772cb4947ba083d56687edfdc006cbdc56ef7fc9bcf92c891 = $this->env->getExtension("native_profiler");
        $__internal_bfe6471b653feaf772cb4947ba083d56687edfdc006cbdc56ef7fc9bcf92c891->enter($__internal_bfe6471b653feaf772cb4947ba083d56687edfdc006cbdc56ef7fc9bcf92c891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe6471b653feaf772cb4947ba083d56687edfdc006cbdc56ef7fc9bcf92c891->leave($__internal_bfe6471b653feaf772cb4947ba083d56687edfdc006cbdc56ef7fc9bcf92c891_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95129c5de938fbcff4ad7124b72919cedca987884afe283a7041ec1f4f2edb58 = $this->env->getExtension("native_profiler");
        $__internal_95129c5de938fbcff4ad7124b72919cedca987884afe283a7041ec1f4f2edb58->enter($__internal_95129c5de938fbcff4ad7124b72919cedca987884afe283a7041ec1f4f2edb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_95129c5de938fbcff4ad7124b72919cedca987884afe283a7041ec1f4f2edb58->leave($__internal_95129c5de938fbcff4ad7124b72919cedca987884afe283a7041ec1f4f2edb58_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
