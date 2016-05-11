<?php

/* @HamsterHub/Resetting/email.txt.twig */
class __TwigTemplate_bda519fd061ab1aadbea46a378f3f53656d4875adde4646b54724a0413299a41 extends Twig_Template
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
        $__internal_d4da3e7bfae619cf5fba70c33c9cff82d8d4bbacea3e43c20d7b458b2612f903 = $this->env->getExtension("native_profiler");
        $__internal_d4da3e7bfae619cf5fba70c33c9cff82d8d4bbacea3e43c20d7b458b2612f903->enter($__internal_d4da3e7bfae619cf5fba70c33c9cff82d8d4bbacea3e43c20d7b458b2612f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d4da3e7bfae619cf5fba70c33c9cff82d8d4bbacea3e43c20d7b458b2612f903->leave($__internal_d4da3e7bfae619cf5fba70c33c9cff82d8d4bbacea3e43c20d7b458b2612f903_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b22b9db4bbb5967278fc900a91a8c5feb294c25d9b185955ee669efd08bcbfb8 = $this->env->getExtension("native_profiler");
        $__internal_b22b9db4bbb5967278fc900a91a8c5feb294c25d9b185955ee669efd08bcbfb8->enter($__internal_b22b9db4bbb5967278fc900a91a8c5feb294c25d9b185955ee669efd08bcbfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b22b9db4bbb5967278fc900a91a8c5feb294c25d9b185955ee669efd08bcbfb8->leave($__internal_b22b9db4bbb5967278fc900a91a8c5feb294c25d9b185955ee669efd08bcbfb8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4777346ce281db1c4e3624fa6891651f5178db547f3807930ca0668fedc9cd85 = $this->env->getExtension("native_profiler");
        $__internal_4777346ce281db1c4e3624fa6891651f5178db547f3807930ca0668fedc9cd85->enter($__internal_4777346ce281db1c4e3624fa6891651f5178db547f3807930ca0668fedc9cd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4777346ce281db1c4e3624fa6891651f5178db547f3807930ca0668fedc9cd85->leave($__internal_4777346ce281db1c4e3624fa6891651f5178db547f3807930ca0668fedc9cd85_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8210b002aa1e1bad362b245e91af882d03e38e473ec3f89afd97e35a88f9ae19 = $this->env->getExtension("native_profiler");
        $__internal_8210b002aa1e1bad362b245e91af882d03e38e473ec3f89afd97e35a88f9ae19->enter($__internal_8210b002aa1e1bad362b245e91af882d03e38e473ec3f89afd97e35a88f9ae19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8210b002aa1e1bad362b245e91af882d03e38e473ec3f89afd97e35a88f9ae19->leave($__internal_8210b002aa1e1bad362b245e91af882d03e38e473ec3f89afd97e35a88f9ae19_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Resetting/email.txt.twig";
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
