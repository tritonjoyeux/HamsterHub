<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fa752642d136b837efcea86c3192714ea8ea9251759e9e244fcc4fbba6e74295 extends Twig_Template
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
        $__internal_2dae1376960f564501f728f35f022ad8c810030165e90916cdfa3dabaa554f63 = $this->env->getExtension("native_profiler");
        $__internal_2dae1376960f564501f728f35f022ad8c810030165e90916cdfa3dabaa554f63->enter($__internal_2dae1376960f564501f728f35f022ad8c810030165e90916cdfa3dabaa554f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2dae1376960f564501f728f35f022ad8c810030165e90916cdfa3dabaa554f63->leave($__internal_2dae1376960f564501f728f35f022ad8c810030165e90916cdfa3dabaa554f63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
