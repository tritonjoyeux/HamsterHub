<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_002b462c542cebe26930781f8b2e77fbc58df643f0b2c8effffd91cdf7335fea extends Twig_Template
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
        $__internal_5eccc946f658fe38659d83435664ef379d3340ca1b31af083307d63233bb0e85 = $this->env->getExtension("native_profiler");
        $__internal_5eccc946f658fe38659d83435664ef379d3340ca1b31af083307d63233bb0e85->enter($__internal_5eccc946f658fe38659d83435664ef379d3340ca1b31af083307d63233bb0e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5eccc946f658fe38659d83435664ef379d3340ca1b31af083307d63233bb0e85->leave($__internal_5eccc946f658fe38659d83435664ef379d3340ca1b31af083307d63233bb0e85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
