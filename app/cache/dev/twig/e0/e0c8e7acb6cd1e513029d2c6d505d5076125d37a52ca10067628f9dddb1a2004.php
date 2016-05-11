<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5df2bcfb63fe9c166c80b5fd8ad15298fd1f87df51ef43ebba271ccf12fefd9d extends Twig_Template
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
        $__internal_05009a90d6d16a9a69a885ea08d78f9ac2273975c8583a007336bced8f01d092 = $this->env->getExtension("native_profiler");
        $__internal_05009a90d6d16a9a69a885ea08d78f9ac2273975c8583a007336bced8f01d092->enter($__internal_05009a90d6d16a9a69a885ea08d78f9ac2273975c8583a007336bced8f01d092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_05009a90d6d16a9a69a885ea08d78f9ac2273975c8583a007336bced8f01d092->leave($__internal_05009a90d6d16a9a69a885ea08d78f9ac2273975c8583a007336bced8f01d092_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
