<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f98109c5cab614873be3fbd0d8ac50ccff88469a256d5063ab738c98beba7d3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16f7c096b635c14bea7bc100d0d83ee07fee161cdfd60ed989cb59261117edd4 = $this->env->getExtension("native_profiler");
        $__internal_16f7c096b635c14bea7bc100d0d83ee07fee161cdfd60ed989cb59261117edd4->enter($__internal_16f7c096b635c14bea7bc100d0d83ee07fee161cdfd60ed989cb59261117edd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_16f7c096b635c14bea7bc100d0d83ee07fee161cdfd60ed989cb59261117edd4->leave($__internal_16f7c096b635c14bea7bc100d0d83ee07fee161cdfd60ed989cb59261117edd4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_01b085ca4632fec1e6666deeff58352c70feb5d9ace67ded46151b212a8c915d = $this->env->getExtension("native_profiler");
        $__internal_01b085ca4632fec1e6666deeff58352c70feb5d9ace67ded46151b212a8c915d->enter($__internal_01b085ca4632fec1e6666deeff58352c70feb5d9ace67ded46151b212a8c915d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_01b085ca4632fec1e6666deeff58352c70feb5d9ace67ded46151b212a8c915d->leave($__internal_01b085ca4632fec1e6666deeff58352c70feb5d9ace67ded46151b212a8c915d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6a3a462edc3247fb625fa71b0b78b30b4091d3da9e655d9fc0a1573ffe538a0e = $this->env->getExtension("native_profiler");
        $__internal_6a3a462edc3247fb625fa71b0b78b30b4091d3da9e655d9fc0a1573ffe538a0e->enter($__internal_6a3a462edc3247fb625fa71b0b78b30b4091d3da9e655d9fc0a1573ffe538a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6a3a462edc3247fb625fa71b0b78b30b4091d3da9e655d9fc0a1573ffe538a0e->leave($__internal_6a3a462edc3247fb625fa71b0b78b30b4091d3da9e655d9fc0a1573ffe538a0e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_384b3b3be10e1561c2666f7ed10a5111d656d9bdeced7b3417e3543f3d7c41de = $this->env->getExtension("native_profiler");
        $__internal_384b3b3be10e1561c2666f7ed10a5111d656d9bdeced7b3417e3543f3d7c41de->enter($__internal_384b3b3be10e1561c2666f7ed10a5111d656d9bdeced7b3417e3543f3d7c41de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_384b3b3be10e1561c2666f7ed10a5111d656d9bdeced7b3417e3543f3d7c41de->leave($__internal_384b3b3be10e1561c2666f7ed10a5111d656d9bdeced7b3417e3543f3d7c41de_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
