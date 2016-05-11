<?php

/* HamsterHubBundle:Group:edit.html.twig */
class __TwigTemplate_998e08c97ed2dc85b8f6eec23725470cc93d68bf943ec0003eb1b76a57b52a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Group:edit.html.twig", 1);
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
        $__internal_c01300bb94678400afef7cdb5720498e70be33dfb3cad29d8508eb4ad4c4f625 = $this->env->getExtension("native_profiler");
        $__internal_c01300bb94678400afef7cdb5720498e70be33dfb3cad29d8508eb4ad4c4f625->enter($__internal_c01300bb94678400afef7cdb5720498e70be33dfb3cad29d8508eb4ad4c4f625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01300bb94678400afef7cdb5720498e70be33dfb3cad29d8508eb4ad4c4f625->leave($__internal_c01300bb94678400afef7cdb5720498e70be33dfb3cad29d8508eb4ad4c4f625_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b635c51ad9d354c9f54cecbc141135f51c07a9ec071e549edbe97033b77d7c54 = $this->env->getExtension("native_profiler");
        $__internal_b635c51ad9d354c9f54cecbc141135f51c07a9ec071e549edbe97033b77d7c54->enter($__internal_b635c51ad9d354c9f54cecbc141135f51c07a9ec071e549edbe97033b77d7c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "HamsterHubBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b635c51ad9d354c9f54cecbc141135f51c07a9ec071e549edbe97033b77d7c54->leave($__internal_b635c51ad9d354c9f54cecbc141135f51c07a9ec071e549edbe97033b77d7c54_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
