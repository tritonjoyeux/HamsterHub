<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_39fad9c5385058e4e14a358da24cb4f8ef2468793fad1e2a2245c0d2efdb4054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_36e0466baea855b43ec12b5f328033c4a62c4b8f50093b532a772c077111c62d = $this->env->getExtension("native_profiler");
        $__internal_36e0466baea855b43ec12b5f328033c4a62c4b8f50093b532a772c077111c62d->enter($__internal_36e0466baea855b43ec12b5f328033c4a62c4b8f50093b532a772c077111c62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e0466baea855b43ec12b5f328033c4a62c4b8f50093b532a772c077111c62d->leave($__internal_36e0466baea855b43ec12b5f328033c4a62c4b8f50093b532a772c077111c62d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f81d13603543ecf856b66460f9fbed45989193bcff898d7133b153a25bb514d = $this->env->getExtension("native_profiler");
        $__internal_4f81d13603543ecf856b66460f9fbed45989193bcff898d7133b153a25bb514d->enter($__internal_4f81d13603543ecf856b66460f9fbed45989193bcff898d7133b153a25bb514d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4f81d13603543ecf856b66460f9fbed45989193bcff898d7133b153a25bb514d->leave($__internal_4f81d13603543ecf856b66460f9fbed45989193bcff898d7133b153a25bb514d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
