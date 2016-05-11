<?php

/* HamsterHubBundle:Registration:email.txt.twig */
class __TwigTemplate_e6946e5eab4becafab491b63d27790f8dfc55d1396e49c503878f331412c68db extends Twig_Template
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
        $__internal_92b5c64adbbce9aa965da527463aa263155d2ca3c673ac070f2c493097d055c4 = $this->env->getExtension("native_profiler");
        $__internal_92b5c64adbbce9aa965da527463aa263155d2ca3c673ac070f2c493097d055c4->enter($__internal_92b5c64adbbce9aa965da527463aa263155d2ca3c673ac070f2c493097d055c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_92b5c64adbbce9aa965da527463aa263155d2ca3c673ac070f2c493097d055c4->leave($__internal_92b5c64adbbce9aa965da527463aa263155d2ca3c673ac070f2c493097d055c4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a71a796223696bf8b17a70ec5823ddf4aa875b58dfaec3d33e74cab806a417fc = $this->env->getExtension("native_profiler");
        $__internal_a71a796223696bf8b17a70ec5823ddf4aa875b58dfaec3d33e74cab806a417fc->enter($__internal_a71a796223696bf8b17a70ec5823ddf4aa875b58dfaec3d33e74cab806a417fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a71a796223696bf8b17a70ec5823ddf4aa875b58dfaec3d33e74cab806a417fc->leave($__internal_a71a796223696bf8b17a70ec5823ddf4aa875b58dfaec3d33e74cab806a417fc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_38ae69515c134e5a1205274bf3520162647168567528932d06cbf83205193472 = $this->env->getExtension("native_profiler");
        $__internal_38ae69515c134e5a1205274bf3520162647168567528932d06cbf83205193472->enter($__internal_38ae69515c134e5a1205274bf3520162647168567528932d06cbf83205193472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_38ae69515c134e5a1205274bf3520162647168567528932d06cbf83205193472->leave($__internal_38ae69515c134e5a1205274bf3520162647168567528932d06cbf83205193472_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6b18f8e08879115d875676f2a109aaae771c6069b75bd265f34fd9cee44d38fa = $this->env->getExtension("native_profiler");
        $__internal_6b18f8e08879115d875676f2a109aaae771c6069b75bd265f34fd9cee44d38fa->enter($__internal_6b18f8e08879115d875676f2a109aaae771c6069b75bd265f34fd9cee44d38fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6b18f8e08879115d875676f2a109aaae771c6069b75bd265f34fd9cee44d38fa->leave($__internal_6b18f8e08879115d875676f2a109aaae771c6069b75bd265f34fd9cee44d38fa_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Registration:email.txt.twig";
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
