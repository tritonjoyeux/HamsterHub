<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6abc09d1f9a39f96ba04754f2708b7aaae2e3f4d402391f7e7e469242c129514 extends Twig_Template
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
        $__internal_6bf539043b0f0cd53a41de034e11e2b5737705467e9b43f478e08ccab24f899c = $this->env->getExtension("native_profiler");
        $__internal_6bf539043b0f0cd53a41de034e11e2b5737705467e9b43f478e08ccab24f899c->enter($__internal_6bf539043b0f0cd53a41de034e11e2b5737705467e9b43f478e08ccab24f899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6bf539043b0f0cd53a41de034e11e2b5737705467e9b43f478e08ccab24f899c->leave($__internal_6bf539043b0f0cd53a41de034e11e2b5737705467e9b43f478e08ccab24f899c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
