<?php

/* HamsterHubBundle:Resetting:email.txt.twig */
class __TwigTemplate_d2f5ce51ca98e185b7c3aeafe38a5560297be12e40736374d0d2fe2cecf1cd0b extends Twig_Template
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
        $__internal_434d0de19ae4bb688835333a3bf2fb863b972e4151aad5875702fbdc2b6745f9 = $this->env->getExtension("native_profiler");
        $__internal_434d0de19ae4bb688835333a3bf2fb863b972e4151aad5875702fbdc2b6745f9->enter($__internal_434d0de19ae4bb688835333a3bf2fb863b972e4151aad5875702fbdc2b6745f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_434d0de19ae4bb688835333a3bf2fb863b972e4151aad5875702fbdc2b6745f9->leave($__internal_434d0de19ae4bb688835333a3bf2fb863b972e4151aad5875702fbdc2b6745f9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cbaa2ba5c70cd59d5b3ee21392bc98ee47427c246db1d0c83f6e3d8ca32c7180 = $this->env->getExtension("native_profiler");
        $__internal_cbaa2ba5c70cd59d5b3ee21392bc98ee47427c246db1d0c83f6e3d8ca32c7180->enter($__internal_cbaa2ba5c70cd59d5b3ee21392bc98ee47427c246db1d0c83f6e3d8ca32c7180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cbaa2ba5c70cd59d5b3ee21392bc98ee47427c246db1d0c83f6e3d8ca32c7180->leave($__internal_cbaa2ba5c70cd59d5b3ee21392bc98ee47427c246db1d0c83f6e3d8ca32c7180_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3f27ba1f2c4005e7c3d6e8339befb4e36e6121aafc096d92f762ef838fd3329c = $this->env->getExtension("native_profiler");
        $__internal_3f27ba1f2c4005e7c3d6e8339befb4e36e6121aafc096d92f762ef838fd3329c->enter($__internal_3f27ba1f2c4005e7c3d6e8339befb4e36e6121aafc096d92f762ef838fd3329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3f27ba1f2c4005e7c3d6e8339befb4e36e6121aafc096d92f762ef838fd3329c->leave($__internal_3f27ba1f2c4005e7c3d6e8339befb4e36e6121aafc096d92f762ef838fd3329c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cbc664d780e77a5ad4e22e70158576072c11887bcaf293ea5c71ef41496e3be9 = $this->env->getExtension("native_profiler");
        $__internal_cbc664d780e77a5ad4e22e70158576072c11887bcaf293ea5c71ef41496e3be9->enter($__internal_cbc664d780e77a5ad4e22e70158576072c11887bcaf293ea5c71ef41496e3be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cbc664d780e77a5ad4e22e70158576072c11887bcaf293ea5c71ef41496e3be9->leave($__internal_cbc664d780e77a5ad4e22e70158576072c11887bcaf293ea5c71ef41496e3be9_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
