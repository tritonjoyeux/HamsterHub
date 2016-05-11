<?php

/* @HamsterHub/Resetting/checkEmail.html.twig */
class __TwigTemplate_74d1522c6e0e48f5837944f7a1ada06ace3329b497a9477b30ef86cafcdd0226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Resetting/checkEmail.html.twig", 1);
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
        $__internal_7f90e1adcd95c51cd7592d6a4ff23f892d713741dc1117b4f1b5ad4bf62e39b9 = $this->env->getExtension("native_profiler");
        $__internal_7f90e1adcd95c51cd7592d6a4ff23f892d713741dc1117b4f1b5ad4bf62e39b9->enter($__internal_7f90e1adcd95c51cd7592d6a4ff23f892d713741dc1117b4f1b5ad4bf62e39b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f90e1adcd95c51cd7592d6a4ff23f892d713741dc1117b4f1b5ad4bf62e39b9->leave($__internal_7f90e1adcd95c51cd7592d6a4ff23f892d713741dc1117b4f1b5ad4bf62e39b9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8c596a5746b184e5c85cb88a59517acc32172003f34c0068ba765cf11f2f63e = $this->env->getExtension("native_profiler");
        $__internal_a8c596a5746b184e5c85cb88a59517acc32172003f34c0068ba765cf11f2f63e->enter($__internal_a8c596a5746b184e5c85cb88a59517acc32172003f34c0068ba765cf11f2f63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a8c596a5746b184e5c85cb88a59517acc32172003f34c0068ba765cf11f2f63e->leave($__internal_a8c596a5746b184e5c85cb88a59517acc32172003f34c0068ba765cf11f2f63e_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
