<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_fd6466d2aa3e90b590177074796bf9e288590ad316cb446c8191fd3c1f94979a extends Twig_Template
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
        $__internal_36239f74ecba10b5cd527b757dd58361c7ccf3cdab542a2995c5191ee0eac188 = $this->env->getExtension("native_profiler");
        $__internal_36239f74ecba10b5cd527b757dd58361c7ccf3cdab542a2995c5191ee0eac188->enter($__internal_36239f74ecba10b5cd527b757dd58361c7ccf3cdab542a2995c5191ee0eac188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_36239f74ecba10b5cd527b757dd58361c7ccf3cdab542a2995c5191ee0eac188->leave($__internal_36239f74ecba10b5cd527b757dd58361c7ccf3cdab542a2995c5191ee0eac188_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
