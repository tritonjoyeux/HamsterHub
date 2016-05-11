<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4dc9a0ed0229c79ef4fb7ca33bf29e5a9d1a36ab2a3232148ae4f08c06e19f53 extends Twig_Template
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
        $__internal_d72c080c730a11f2b54fc565f89fd48bd95f5899b5a86895828aaefcdfb31dd0 = $this->env->getExtension("native_profiler");
        $__internal_d72c080c730a11f2b54fc565f89fd48bd95f5899b5a86895828aaefcdfb31dd0->enter($__internal_d72c080c730a11f2b54fc565f89fd48bd95f5899b5a86895828aaefcdfb31dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d72c080c730a11f2b54fc565f89fd48bd95f5899b5a86895828aaefcdfb31dd0->leave($__internal_d72c080c730a11f2b54fc565f89fd48bd95f5899b5a86895828aaefcdfb31dd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
