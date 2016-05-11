<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a9e991c7be9fd71c7885b05db5645e2a06e7ff128718f5cfbe763e579554b496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_57a7ce683d6028e98adcb38716511bdd4410aa3554836dc188143a2e0e40c1c3 = $this->env->getExtension("native_profiler");
        $__internal_57a7ce683d6028e98adcb38716511bdd4410aa3554836dc188143a2e0e40c1c3->enter($__internal_57a7ce683d6028e98adcb38716511bdd4410aa3554836dc188143a2e0e40c1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57a7ce683d6028e98adcb38716511bdd4410aa3554836dc188143a2e0e40c1c3->leave($__internal_57a7ce683d6028e98adcb38716511bdd4410aa3554836dc188143a2e0e40c1c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_992669f156710ee8f53f1de143cd31fae6cf404b4209e9ab25eb2599b871ebca = $this->env->getExtension("native_profiler");
        $__internal_992669f156710ee8f53f1de143cd31fae6cf404b4209e9ab25eb2599b871ebca->enter($__internal_992669f156710ee8f53f1de143cd31fae6cf404b4209e9ab25eb2599b871ebca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_992669f156710ee8f53f1de143cd31fae6cf404b4209e9ab25eb2599b871ebca->leave($__internal_992669f156710ee8f53f1de143cd31fae6cf404b4209e9ab25eb2599b871ebca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
