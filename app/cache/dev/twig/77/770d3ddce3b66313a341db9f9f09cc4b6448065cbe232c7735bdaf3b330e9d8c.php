<?php

/* HamsterHubBundle:Profile:edit.html.twig */
class __TwigTemplate_2a9960e0e44ec4726265dc2d9ac319175d33f53d265b672d3629595ea3044d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "HamsterHubBundle:Profile:edit.html.twig", 1);
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
        $__internal_d69d76c3d4c6af5f353e496b109fdcb9b62c1868cb370b833dec5efac23544ba = $this->env->getExtension("native_profiler");
        $__internal_d69d76c3d4c6af5f353e496b109fdcb9b62c1868cb370b833dec5efac23544ba->enter($__internal_d69d76c3d4c6af5f353e496b109fdcb9b62c1868cb370b833dec5efac23544ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69d76c3d4c6af5f353e496b109fdcb9b62c1868cb370b833dec5efac23544ba->leave($__internal_d69d76c3d4c6af5f353e496b109fdcb9b62c1868cb370b833dec5efac23544ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba70b8f8229a4f06b4f0ebce667f0894465baa4cd811907a12ae35c4a23a8e81 = $this->env->getExtension("native_profiler");
        $__internal_ba70b8f8229a4f06b4f0ebce667f0894465baa4cd811907a12ae35c4a23a8e81->enter($__internal_ba70b8f8229a4f06b4f0ebce667f0894465baa4cd811907a12ae35c4a23a8e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "HamsterHubBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ba70b8f8229a4f06b4f0ebce667f0894465baa4cd811907a12ae35c4a23a8e81->leave($__internal_ba70b8f8229a4f06b4f0ebce667f0894465baa4cd811907a12ae35c4a23a8e81_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Profile:edit.html.twig";
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
