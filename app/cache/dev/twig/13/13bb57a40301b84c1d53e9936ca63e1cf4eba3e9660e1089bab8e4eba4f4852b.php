<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b5b2269d52fe015f101e4b020b5693078c767cf4847df157a1e55dd2c1d2081c extends Twig_Template
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
        $__internal_9e380775ceb3a024f180075dad6e769dd1fab5f70a8d57e158c266ed5163ff05 = $this->env->getExtension("native_profiler");
        $__internal_9e380775ceb3a024f180075dad6e769dd1fab5f70a8d57e158c266ed5163ff05->enter($__internal_9e380775ceb3a024f180075dad6e769dd1fab5f70a8d57e158c266ed5163ff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9e380775ceb3a024f180075dad6e769dd1fab5f70a8d57e158c266ed5163ff05->leave($__internal_9e380775ceb3a024f180075dad6e769dd1fab5f70a8d57e158c266ed5163ff05_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
