<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_54bb796f791b616ba10207be6c644a971b22de640fc400094afc4b8305ece6a8 extends Twig_Template
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
        $__internal_bb4378a09771d0ea082f1cd945745fb09604c1464ae6a2d6a8e2843cd1e74e98 = $this->env->getExtension("native_profiler");
        $__internal_bb4378a09771d0ea082f1cd945745fb09604c1464ae6a2d6a8e2843cd1e74e98->enter($__internal_bb4378a09771d0ea082f1cd945745fb09604c1464ae6a2d6a8e2843cd1e74e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bb4378a09771d0ea082f1cd945745fb09604c1464ae6a2d6a8e2843cd1e74e98->leave($__internal_bb4378a09771d0ea082f1cd945745fb09604c1464ae6a2d6a8e2843cd1e74e98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
