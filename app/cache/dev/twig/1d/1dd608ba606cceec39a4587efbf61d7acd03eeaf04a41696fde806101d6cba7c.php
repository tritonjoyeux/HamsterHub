<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_961fa12c127cc0ca827b595436381aadb428dd2dd95dcf7e5e0d2090cb0aff31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_6cda7010fab3b26f26009a8288a4e6cd635fc54004d6344b9a6f843409947ae7 = $this->env->getExtension("native_profiler");
        $__internal_6cda7010fab3b26f26009a8288a4e6cd635fc54004d6344b9a6f843409947ae7->enter($__internal_6cda7010fab3b26f26009a8288a4e6cd635fc54004d6344b9a6f843409947ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cda7010fab3b26f26009a8288a4e6cd635fc54004d6344b9a6f843409947ae7->leave($__internal_6cda7010fab3b26f26009a8288a4e6cd635fc54004d6344b9a6f843409947ae7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd4ae7a8d5b724cd5ecffbaacb2473d7cf1ab6c4dfb64c2d287dcf625500940f = $this->env->getExtension("native_profiler");
        $__internal_cd4ae7a8d5b724cd5ecffbaacb2473d7cf1ab6c4dfb64c2d287dcf625500940f->enter($__internal_cd4ae7a8d5b724cd5ecffbaacb2473d7cf1ab6c4dfb64c2d287dcf625500940f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cd4ae7a8d5b724cd5ecffbaacb2473d7cf1ab6c4dfb64c2d287dcf625500940f->leave($__internal_cd4ae7a8d5b724cd5ecffbaacb2473d7cf1ab6c4dfb64c2d287dcf625500940f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
