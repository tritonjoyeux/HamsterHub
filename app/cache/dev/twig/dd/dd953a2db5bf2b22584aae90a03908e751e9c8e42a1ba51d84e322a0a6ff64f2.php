<?php

/* HamsterHubBundle:Registration:register.html.twig */
class __TwigTemplate_02280c3138a06bb9f8e22837f94c882ce6cd1c870749ff5b4cabda9c3057aa05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "HamsterHubBundle:Registration:register.html.twig", 1);
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
        $__internal_bd33f9267794346c133c80c302e45826a62e1a22d25c4ea3835558fb2893506a = $this->env->getExtension("native_profiler");
        $__internal_bd33f9267794346c133c80c302e45826a62e1a22d25c4ea3835558fb2893506a->enter($__internal_bd33f9267794346c133c80c302e45826a62e1a22d25c4ea3835558fb2893506a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd33f9267794346c133c80c302e45826a62e1a22d25c4ea3835558fb2893506a->leave($__internal_bd33f9267794346c133c80c302e45826a62e1a22d25c4ea3835558fb2893506a_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbe676ab631b4ca47d8eb1b5a8c05d8a7778d8ffd68fa238668758ff0547117f = $this->env->getExtension("native_profiler");
        $__internal_dbe676ab631b4ca47d8eb1b5a8c05d8a7778d8ffd68fa238668758ff0547117f->enter($__internal_dbe676ab631b4ca47d8eb1b5a8c05d8a7778d8ffd68fa238668758ff0547117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "HamsterHubBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_dbe676ab631b4ca47d8eb1b5a8c05d8a7778d8ffd68fa238668758ff0547117f->leave($__internal_dbe676ab631b4ca47d8eb1b5a8c05d8a7778d8ffd68fa238668758ff0547117f_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Registration:register.html.twig";
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
