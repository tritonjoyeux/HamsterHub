<?php

/* @HamsterHub/Registration/email.txt.twig */
class __TwigTemplate_a954388ae8c237673a9a3ef811cdf7e55b511ee726c7495ccbddd159e35ef071 extends Twig_Template
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
        $__internal_fa9b0b523b1ea884a329f1c41bd7959c43a3896572a9b8afc6725994ac4e9e91 = $this->env->getExtension("native_profiler");
        $__internal_fa9b0b523b1ea884a329f1c41bd7959c43a3896572a9b8afc6725994ac4e9e91->enter($__internal_fa9b0b523b1ea884a329f1c41bd7959c43a3896572a9b8afc6725994ac4e9e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa9b0b523b1ea884a329f1c41bd7959c43a3896572a9b8afc6725994ac4e9e91->leave($__internal_fa9b0b523b1ea884a329f1c41bd7959c43a3896572a9b8afc6725994ac4e9e91_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6597258490adaf099bdd532d6188ca9ad80f5bc07f445a8763ee900a7b25df16 = $this->env->getExtension("native_profiler");
        $__internal_6597258490adaf099bdd532d6188ca9ad80f5bc07f445a8763ee900a7b25df16->enter($__internal_6597258490adaf099bdd532d6188ca9ad80f5bc07f445a8763ee900a7b25df16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6597258490adaf099bdd532d6188ca9ad80f5bc07f445a8763ee900a7b25df16->leave($__internal_6597258490adaf099bdd532d6188ca9ad80f5bc07f445a8763ee900a7b25df16_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f13a8bf1c7c6854c26cff4944c987827780785b51b0c984d0fd780f292c43450 = $this->env->getExtension("native_profiler");
        $__internal_f13a8bf1c7c6854c26cff4944c987827780785b51b0c984d0fd780f292c43450->enter($__internal_f13a8bf1c7c6854c26cff4944c987827780785b51b0c984d0fd780f292c43450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f13a8bf1c7c6854c26cff4944c987827780785b51b0c984d0fd780f292c43450->leave($__internal_f13a8bf1c7c6854c26cff4944c987827780785b51b0c984d0fd780f292c43450_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aed7aec03842539aee715512cbe18a2cf149acd1a5d04e88ad072d94af2d97b8 = $this->env->getExtension("native_profiler");
        $__internal_aed7aec03842539aee715512cbe18a2cf149acd1a5d04e88ad072d94af2d97b8->enter($__internal_aed7aec03842539aee715512cbe18a2cf149acd1a5d04e88ad072d94af2d97b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aed7aec03842539aee715512cbe18a2cf149acd1a5d04e88ad072d94af2d97b8->leave($__internal_aed7aec03842539aee715512cbe18a2cf149acd1a5d04e88ad072d94af2d97b8_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Registration/email.txt.twig";
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
