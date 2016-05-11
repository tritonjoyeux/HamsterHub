<?php

/* HamsterHubBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_92678a96c0bcd5e7451c2beab71a3d6832747e565a4a8b861c1303f26b447e2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_16741ec490f6fa85eb7036807b6fc31cc4bd93aac575b243d911eb0ca824b3c9 = $this->env->getExtension("native_profiler");
        $__internal_16741ec490f6fa85eb7036807b6fc31cc4bd93aac575b243d911eb0ca824b3c9->enter($__internal_16741ec490f6fa85eb7036807b6fc31cc4bd93aac575b243d911eb0ca824b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16741ec490f6fa85eb7036807b6fc31cc4bd93aac575b243d911eb0ca824b3c9->leave($__internal_16741ec490f6fa85eb7036807b6fc31cc4bd93aac575b243d911eb0ca824b3c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_996b882147b1aa343b8757d31b88677468585189ecb894ddef628f9db4acb5f1 = $this->env->getExtension("native_profiler");
        $__internal_996b882147b1aa343b8757d31b88677468585189ecb894ddef628f9db4acb5f1->enter($__internal_996b882147b1aa343b8757d31b88677468585189ecb894ddef628f9db4acb5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_996b882147b1aa343b8757d31b88677468585189ecb894ddef628f9db4acb5f1->leave($__internal_996b882147b1aa343b8757d31b88677468585189ecb894ddef628f9db4acb5f1_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Resetting:checkEmail.html.twig";
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
