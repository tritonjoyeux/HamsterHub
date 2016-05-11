<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d66b62807f1a3fbcd1bece60812fa2d8a30593f97bb70532ed312e906b5e5f80 extends Twig_Template
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
        $__internal_27274a83eb47fe1344a5e460842d408e0acbbbb20f00069d6e1dcfa40d23af2b = $this->env->getExtension("native_profiler");
        $__internal_27274a83eb47fe1344a5e460842d408e0acbbbb20f00069d6e1dcfa40d23af2b->enter($__internal_27274a83eb47fe1344a5e460842d408e0acbbbb20f00069d6e1dcfa40d23af2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_27274a83eb47fe1344a5e460842d408e0acbbbb20f00069d6e1dcfa40d23af2b->leave($__internal_27274a83eb47fe1344a5e460842d408e0acbbbb20f00069d6e1dcfa40d23af2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
