<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8e06ff6dae47b8f5f8cd92453340b6eb785588e8cd54950c45370e130bee882d extends Twig_Template
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
        $__internal_0e4c32b0b75446c8ba1360c24f8a72db8d92637439d077f3f6f5bfa2d391ec22 = $this->env->getExtension("native_profiler");
        $__internal_0e4c32b0b75446c8ba1360c24f8a72db8d92637439d077f3f6f5bfa2d391ec22->enter($__internal_0e4c32b0b75446c8ba1360c24f8a72db8d92637439d077f3f6f5bfa2d391ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0e4c32b0b75446c8ba1360c24f8a72db8d92637439d077f3f6f5bfa2d391ec22->leave($__internal_0e4c32b0b75446c8ba1360c24f8a72db8d92637439d077f3f6f5bfa2d391ec22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
