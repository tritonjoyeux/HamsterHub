<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_6a658fe490fcf6f422765b484ec783f53bfa617a2d6faf76f69a032fcd0439dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_5c948812c06336a5725affa9ef37507064a5225cadab224598c10b52a9e69421 = $this->env->getExtension("native_profiler");
        $__internal_5c948812c06336a5725affa9ef37507064a5225cadab224598c10b52a9e69421->enter($__internal_5c948812c06336a5725affa9ef37507064a5225cadab224598c10b52a9e69421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c948812c06336a5725affa9ef37507064a5225cadab224598c10b52a9e69421->leave($__internal_5c948812c06336a5725affa9ef37507064a5225cadab224598c10b52a9e69421_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_450dd5468111d792c391db5fc054fbcf470d1f08fac4472eed3ebae1c9b790c1 = $this->env->getExtension("native_profiler");
        $__internal_450dd5468111d792c391db5fc054fbcf470d1f08fac4472eed3ebae1c9b790c1->enter($__internal_450dd5468111d792c391db5fc054fbcf470d1f08fac4472eed3ebae1c9b790c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_450dd5468111d792c391db5fc054fbcf470d1f08fac4472eed3ebae1c9b790c1->leave($__internal_450dd5468111d792c391db5fc054fbcf470d1f08fac4472eed3ebae1c9b790c1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
