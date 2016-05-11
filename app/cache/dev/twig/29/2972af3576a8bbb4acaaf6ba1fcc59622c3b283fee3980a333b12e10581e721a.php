<?php

/* @HamsterHub/Registration/checkEmail.html.twig */
class __TwigTemplate_013aaf233bdb59ba4569bd49cea64ee3a11623c26d0779d73902651a51b9b43b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Registration/checkEmail.html.twig", 1);
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
        $__internal_d1cb8a9406304da108dfe05b7c05c5c92990b95d60c206fdc6d5c865ec7772b1 = $this->env->getExtension("native_profiler");
        $__internal_d1cb8a9406304da108dfe05b7c05c5c92990b95d60c206fdc6d5c865ec7772b1->enter($__internal_d1cb8a9406304da108dfe05b7c05c5c92990b95d60c206fdc6d5c865ec7772b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cb8a9406304da108dfe05b7c05c5c92990b95d60c206fdc6d5c865ec7772b1->leave($__internal_d1cb8a9406304da108dfe05b7c05c5c92990b95d60c206fdc6d5c865ec7772b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c8d78e04f956ab57c9024a92b0649acec0d83283651a57450d9ee1bca54baa5 = $this->env->getExtension("native_profiler");
        $__internal_1c8d78e04f956ab57c9024a92b0649acec0d83283651a57450d9ee1bca54baa5->enter($__internal_1c8d78e04f956ab57c9024a92b0649acec0d83283651a57450d9ee1bca54baa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1c8d78e04f956ab57c9024a92b0649acec0d83283651a57450d9ee1bca54baa5->leave($__internal_1c8d78e04f956ab57c9024a92b0649acec0d83283651a57450d9ee1bca54baa5_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Registration/checkEmail.html.twig";
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
