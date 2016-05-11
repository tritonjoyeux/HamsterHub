<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_752cfbc9030bbf17c01e4c87969bd5a32416b08e2c1c10135c573be655291764 extends Twig_Template
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
        $__internal_187f392b6a9c8d142d9d9d7c79bc537e82bdb0d43f58bfdb88200bfde57f6574 = $this->env->getExtension("native_profiler");
        $__internal_187f392b6a9c8d142d9d9d7c79bc537e82bdb0d43f58bfdb88200bfde57f6574->enter($__internal_187f392b6a9c8d142d9d9d7c79bc537e82bdb0d43f58bfdb88200bfde57f6574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_187f392b6a9c8d142d9d9d7c79bc537e82bdb0d43f58bfdb88200bfde57f6574->leave($__internal_187f392b6a9c8d142d9d9d7c79bc537e82bdb0d43f58bfdb88200bfde57f6574_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
