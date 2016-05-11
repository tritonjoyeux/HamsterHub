<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_6ddf584f4b1c84f3ccd62ae70a688d7725098a4f73ea669c383e62f6c1c0e684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_a0365031c9a288951d17217bfeb7bdec98c86ae6e29caf65669213f8666a9c16 = $this->env->getExtension("native_profiler");
        $__internal_a0365031c9a288951d17217bfeb7bdec98c86ae6e29caf65669213f8666a9c16->enter($__internal_a0365031c9a288951d17217bfeb7bdec98c86ae6e29caf65669213f8666a9c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0365031c9a288951d17217bfeb7bdec98c86ae6e29caf65669213f8666a9c16->leave($__internal_a0365031c9a288951d17217bfeb7bdec98c86ae6e29caf65669213f8666a9c16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2553b268ef86a0e0e8e9c4bc893d322b6f052f997a01627ce11983d5d8a57ec3 = $this->env->getExtension("native_profiler");
        $__internal_2553b268ef86a0e0e8e9c4bc893d322b6f052f997a01627ce11983d5d8a57ec3->enter($__internal_2553b268ef86a0e0e8e9c4bc893d322b6f052f997a01627ce11983d5d8a57ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2553b268ef86a0e0e8e9c4bc893d322b6f052f997a01627ce11983d5d8a57ec3->leave($__internal_2553b268ef86a0e0e8e9c4bc893d322b6f052f997a01627ce11983d5d8a57ec3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
