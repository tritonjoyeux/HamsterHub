<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_857f60e29312dd21e52c1e480ca6a1b62dd166dbc311a43b4fe7f9140fd92080 extends Twig_Template
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
        $__internal_15ed221a40bd8a51aa21d999f4049b06fa858f3eb4f724523ca8c408742fa6c0 = $this->env->getExtension("native_profiler");
        $__internal_15ed221a40bd8a51aa21d999f4049b06fa858f3eb4f724523ca8c408742fa6c0->enter($__internal_15ed221a40bd8a51aa21d999f4049b06fa858f3eb4f724523ca8c408742fa6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_15ed221a40bd8a51aa21d999f4049b06fa858f3eb4f724523ca8c408742fa6c0->leave($__internal_15ed221a40bd8a51aa21d999f4049b06fa858f3eb4f724523ca8c408742fa6c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
