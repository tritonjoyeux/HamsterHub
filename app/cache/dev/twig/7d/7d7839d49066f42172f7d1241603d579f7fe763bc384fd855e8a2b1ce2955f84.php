<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ddd481f0e2ad0473a18de196d4b92a1b90e30c7af8f9c8a48bd933c1d9a44192 extends Twig_Template
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
        $__internal_e8a2c649682885f2b0276b1639aa2d923a7c48fad88d7f49485a0df15015b230 = $this->env->getExtension("native_profiler");
        $__internal_e8a2c649682885f2b0276b1639aa2d923a7c48fad88d7f49485a0df15015b230->enter($__internal_e8a2c649682885f2b0276b1639aa2d923a7c48fad88d7f49485a0df15015b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e8a2c649682885f2b0276b1639aa2d923a7c48fad88d7f49485a0df15015b230->leave($__internal_e8a2c649682885f2b0276b1639aa2d923a7c48fad88d7f49485a0df15015b230_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
