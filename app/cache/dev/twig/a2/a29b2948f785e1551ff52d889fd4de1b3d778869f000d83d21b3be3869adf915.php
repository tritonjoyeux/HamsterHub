<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cfdaaaa8ce44c72d911582bd3fc4fa71507d535cad37b7b8a7734ce318a4cce3 extends Twig_Template
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
        $__internal_8fa775c0bf8510fa2986c030407585b0fbda740c6206fe98d7692b9a47d3c1a3 = $this->env->getExtension("native_profiler");
        $__internal_8fa775c0bf8510fa2986c030407585b0fbda740c6206fe98d7692b9a47d3c1a3->enter($__internal_8fa775c0bf8510fa2986c030407585b0fbda740c6206fe98d7692b9a47d3c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8fa775c0bf8510fa2986c030407585b0fbda740c6206fe98d7692b9a47d3c1a3->leave($__internal_8fa775c0bf8510fa2986c030407585b0fbda740c6206fe98d7692b9a47d3c1a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
