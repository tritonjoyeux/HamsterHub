<?php

/* @HamsterHub/Profile/show.html.twig */
class __TwigTemplate_c393c01a6e42d261a3a0e7e519964489e94bca67585ac9f8a9e1c1e3815a7d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/Profile/show.html.twig", 1);
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
        $__internal_27a6340bb3aa90dc24a31b6f7cf22d7052c7fa3ac5f44ecef637facbd6cb00cc = $this->env->getExtension("native_profiler");
        $__internal_27a6340bb3aa90dc24a31b6f7cf22d7052c7fa3ac5f44ecef637facbd6cb00cc->enter($__internal_27a6340bb3aa90dc24a31b6f7cf22d7052c7fa3ac5f44ecef637facbd6cb00cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a6340bb3aa90dc24a31b6f7cf22d7052c7fa3ac5f44ecef637facbd6cb00cc->leave($__internal_27a6340bb3aa90dc24a31b6f7cf22d7052c7fa3ac5f44ecef637facbd6cb00cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_060be334e61555949b54580e1ee2a833091a977b8807b5e45d82f71bb33d98ae = $this->env->getExtension("native_profiler");
        $__internal_060be334e61555949b54580e1ee2a833091a977b8807b5e45d82f71bb33d98ae->enter($__internal_060be334e61555949b54580e1ee2a833091a977b8807b5e45d82f71bb33d98ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@HamsterHub/Profile/show.html.twig", 4)->display($context);
        
        $__internal_060be334e61555949b54580e1ee2a833091a977b8807b5e45d82f71bb33d98ae->leave($__internal_060be334e61555949b54580e1ee2a833091a977b8807b5e45d82f71bb33d98ae_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
