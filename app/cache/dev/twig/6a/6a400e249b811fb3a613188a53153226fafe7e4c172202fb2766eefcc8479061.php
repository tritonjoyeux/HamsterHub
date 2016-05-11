<?php

/* @HamsterHub/Registration/register.html.twig */
class __TwigTemplate_9f016561db29ffeaada704429599e48ddd6f91c93205466b944a95e73cc50c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fb0dc64beb3928da5d3a964ff9b656e17e1422cfb7a6b94004e06e1d3bed60d = $this->env->getExtension("native_profiler");
        $__internal_0fb0dc64beb3928da5d3a964ff9b656e17e1422cfb7a6b94004e06e1d3bed60d->enter($__internal_0fb0dc64beb3928da5d3a964ff9b656e17e1422cfb7a6b94004e06e1d3bed60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb0dc64beb3928da5d3a964ff9b656e17e1422cfb7a6b94004e06e1d3bed60d->leave($__internal_0fb0dc64beb3928da5d3a964ff9b656e17e1422cfb7a6b94004e06e1d3bed60d_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42db431baea2aca2305cf6c5a1decd78d1423399bd2d93c54aa0edd5b96b274e = $this->env->getExtension("native_profiler");
        $__internal_42db431baea2aca2305cf6c5a1decd78d1423399bd2d93c54aa0edd5b96b274e->enter($__internal_42db431baea2aca2305cf6c5a1decd78d1423399bd2d93c54aa0edd5b96b274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@HamsterHub/Registration/register.html.twig", 3)->display($context);
        
        $__internal_42db431baea2aca2305cf6c5a1decd78d1423399bd2d93c54aa0edd5b96b274e->leave($__internal_42db431baea2aca2305cf6c5a1decd78d1423399bd2d93c54aa0edd5b96b274e_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
