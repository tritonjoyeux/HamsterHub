<?php

/* @HamsterHub/Profile/edit.html.twig */
class __TwigTemplate_8dbdbd2cffa5436dad05965e3dc3f1a7a1006df90478a60cacd6760b58b54ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/Profile/edit.html.twig", 1);
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
        $__internal_c8801559f778019ef8b4d00f71016c9417283edba824919c7d1ea1e1e90db563 = $this->env->getExtension("native_profiler");
        $__internal_c8801559f778019ef8b4d00f71016c9417283edba824919c7d1ea1e1e90db563->enter($__internal_c8801559f778019ef8b4d00f71016c9417283edba824919c7d1ea1e1e90db563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8801559f778019ef8b4d00f71016c9417283edba824919c7d1ea1e1e90db563->leave($__internal_c8801559f778019ef8b4d00f71016c9417283edba824919c7d1ea1e1e90db563_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_186ccc6f43a19578dd145060ffec53a3fa80ede560e19db048a7142c353be6e2 = $this->env->getExtension("native_profiler");
        $__internal_186ccc6f43a19578dd145060ffec53a3fa80ede560e19db048a7142c353be6e2->enter($__internal_186ccc6f43a19578dd145060ffec53a3fa80ede560e19db048a7142c353be6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@HamsterHub/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_186ccc6f43a19578dd145060ffec53a3fa80ede560e19db048a7142c353be6e2->leave($__internal_186ccc6f43a19578dd145060ffec53a3fa80ede560e19db048a7142c353be6e2_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Profile/edit.html.twig";
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
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
