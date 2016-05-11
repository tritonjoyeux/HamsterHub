<?php

/* HamsterHubBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_cef9d0b643567d7f5a3898f26a405403ea5669253c5b391b805e6830b47e58eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_f10d7116d3b524cac4d7e21a43793f2bc78e3503647211c5b82949b9d50ddc79 = $this->env->getExtension("native_profiler");
        $__internal_f10d7116d3b524cac4d7e21a43793f2bc78e3503647211c5b82949b9d50ddc79->enter($__internal_f10d7116d3b524cac4d7e21a43793f2bc78e3503647211c5b82949b9d50ddc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f10d7116d3b524cac4d7e21a43793f2bc78e3503647211c5b82949b9d50ddc79->leave($__internal_f10d7116d3b524cac4d7e21a43793f2bc78e3503647211c5b82949b9d50ddc79_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c318bf4058dc0b28f93392d52431c9e556cb61c9cefed1a18701dd7e2a04510 = $this->env->getExtension("native_profiler");
        $__internal_0c318bf4058dc0b28f93392d52431c9e556cb61c9cefed1a18701dd7e2a04510->enter($__internal_0c318bf4058dc0b28f93392d52431c9e556cb61c9cefed1a18701dd7e2a04510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0c318bf4058dc0b28f93392d52431c9e556cb61c9cefed1a18701dd7e2a04510->leave($__internal_0c318bf4058dc0b28f93392d52431c9e556cb61c9cefed1a18701dd7e2a04510_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
