<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_78476bccca67aee1f6b08588739725924cdbb825ae8a8f6c0b684928c1809036 extends Twig_Template
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
        $__internal_f6645be6385dc24687b297aee954f832846d1cbc969b49feed71ca364e0fe7fa = $this->env->getExtension("native_profiler");
        $__internal_f6645be6385dc24687b297aee954f832846d1cbc969b49feed71ca364e0fe7fa->enter($__internal_f6645be6385dc24687b297aee954f832846d1cbc969b49feed71ca364e0fe7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f6645be6385dc24687b297aee954f832846d1cbc969b49feed71ca364e0fe7fa->leave($__internal_f6645be6385dc24687b297aee954f832846d1cbc969b49feed71ca364e0fe7fa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c8c0a6fefbd8c18a83afcedd0f17a71c281bb89f12a114b83626456122f20693 = $this->env->getExtension("native_profiler");
        $__internal_c8c0a6fefbd8c18a83afcedd0f17a71c281bb89f12a114b83626456122f20693->enter($__internal_c8c0a6fefbd8c18a83afcedd0f17a71c281bb89f12a114b83626456122f20693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c8c0a6fefbd8c18a83afcedd0f17a71c281bb89f12a114b83626456122f20693->leave($__internal_c8c0a6fefbd8c18a83afcedd0f17a71c281bb89f12a114b83626456122f20693_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a206c36a1cc39a7ea5f13636aeb0be4f2cd85088e754b61421080e21ec8f6d33 = $this->env->getExtension("native_profiler");
        $__internal_a206c36a1cc39a7ea5f13636aeb0be4f2cd85088e754b61421080e21ec8f6d33->enter($__internal_a206c36a1cc39a7ea5f13636aeb0be4f2cd85088e754b61421080e21ec8f6d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a206c36a1cc39a7ea5f13636aeb0be4f2cd85088e754b61421080e21ec8f6d33->leave($__internal_a206c36a1cc39a7ea5f13636aeb0be4f2cd85088e754b61421080e21ec8f6d33_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_afd7dab0550bb9633346565bc571258f976432236af2ea851affea4732aa2460 = $this->env->getExtension("native_profiler");
        $__internal_afd7dab0550bb9633346565bc571258f976432236af2ea851affea4732aa2460->enter($__internal_afd7dab0550bb9633346565bc571258f976432236af2ea851affea4732aa2460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_afd7dab0550bb9633346565bc571258f976432236af2ea851affea4732aa2460->leave($__internal_afd7dab0550bb9633346565bc571258f976432236af2ea851affea4732aa2460_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
