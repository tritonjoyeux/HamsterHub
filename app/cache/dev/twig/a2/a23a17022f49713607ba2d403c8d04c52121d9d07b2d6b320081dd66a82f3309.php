<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8bff5b8ce077229520f78d73ff5c174985d818ff99a1238a2effd4449fceca7a extends Twig_Template
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
        $__internal_2714dfc259b78c844073639a06df314997abc783e7e21109c0df861c7df023cf = $this->env->getExtension("native_profiler");
        $__internal_2714dfc259b78c844073639a06df314997abc783e7e21109c0df861c7df023cf->enter($__internal_2714dfc259b78c844073639a06df314997abc783e7e21109c0df861c7df023cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2714dfc259b78c844073639a06df314997abc783e7e21109c0df861c7df023cf->leave($__internal_2714dfc259b78c844073639a06df314997abc783e7e21109c0df861c7df023cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
