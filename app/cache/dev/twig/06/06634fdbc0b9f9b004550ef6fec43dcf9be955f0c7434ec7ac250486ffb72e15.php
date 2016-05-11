<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_468548bde6fbaf72eaecc27e54c5a34b3135e4641e3f5e02e802321f5b09e751 extends Twig_Template
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
        $__internal_16362839daa27cfd1c4609868ac3dbb0558c211999f4f6304b7c2c94ef35e403 = $this->env->getExtension("native_profiler");
        $__internal_16362839daa27cfd1c4609868ac3dbb0558c211999f4f6304b7c2c94ef35e403->enter($__internal_16362839daa27cfd1c4609868ac3dbb0558c211999f4f6304b7c2c94ef35e403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_16362839daa27cfd1c4609868ac3dbb0558c211999f4f6304b7c2c94ef35e403->leave($__internal_16362839daa27cfd1c4609868ac3dbb0558c211999f4f6304b7c2c94ef35e403_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
