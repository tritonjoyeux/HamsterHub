<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f6ff2d6195e0a7e823ea97aed8fae1ba3bfd89f84e73496666b118c6e0e8ab19 extends Twig_Template
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
        $__internal_d3fc4c5a51e7ce061e3ebac02b28860c15d188287be811b68305a73d7962a8dd = $this->env->getExtension("native_profiler");
        $__internal_d3fc4c5a51e7ce061e3ebac02b28860c15d188287be811b68305a73d7962a8dd->enter($__internal_d3fc4c5a51e7ce061e3ebac02b28860c15d188287be811b68305a73d7962a8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d3fc4c5a51e7ce061e3ebac02b28860c15d188287be811b68305a73d7962a8dd->leave($__internal_d3fc4c5a51e7ce061e3ebac02b28860c15d188287be811b68305a73d7962a8dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
