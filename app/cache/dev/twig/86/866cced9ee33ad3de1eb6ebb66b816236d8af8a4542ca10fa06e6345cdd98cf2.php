<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_61e6589eb4d02e09759c417cc9052018b1f4d8c9ca9122022eec8586c8e32c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eba3e784451ea1b79ebb7e957b073805cd661141da77266e205dcec5cbf677e5 = $this->env->getExtension("native_profiler");
        $__internal_eba3e784451ea1b79ebb7e957b073805cd661141da77266e205dcec5cbf677e5->enter($__internal_eba3e784451ea1b79ebb7e957b073805cd661141da77266e205dcec5cbf677e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_eba3e784451ea1b79ebb7e957b073805cd661141da77266e205dcec5cbf677e5->leave($__internal_eba3e784451ea1b79ebb7e957b073805cd661141da77266e205dcec5cbf677e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
