<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_2893f7598586a91df6f69e13660e764f60be07993e7ef4561507fdd6eee273a0 extends Twig_Template
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
        $__internal_f3125f763ed2f08a37205ee06c418838bfa260686372becca055d717efb8c9b8 = $this->env->getExtension("native_profiler");
        $__internal_f3125f763ed2f08a37205ee06c418838bfa260686372becca055d717efb8c9b8->enter($__internal_f3125f763ed2f08a37205ee06c418838bfa260686372becca055d717efb8c9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f3125f763ed2f08a37205ee06c418838bfa260686372becca055d717efb8c9b8->leave($__internal_f3125f763ed2f08a37205ee06c418838bfa260686372becca055d717efb8c9b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
