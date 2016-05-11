<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_94f1f0fcb2e34f56520d6b472e0bbe70866c4f9896befe74fa87b29d0e802d7a extends Twig_Template
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
        $__internal_56ebbdf5a2f88c0aecd2c654aa299b7b4e8617d665c22977967d02b325b64b49 = $this->env->getExtension("native_profiler");
        $__internal_56ebbdf5a2f88c0aecd2c654aa299b7b4e8617d665c22977967d02b325b64b49->enter($__internal_56ebbdf5a2f88c0aecd2c654aa299b7b4e8617d665c22977967d02b325b64b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_56ebbdf5a2f88c0aecd2c654aa299b7b4e8617d665c22977967d02b325b64b49->leave($__internal_56ebbdf5a2f88c0aecd2c654aa299b7b4e8617d665c22977967d02b325b64b49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
