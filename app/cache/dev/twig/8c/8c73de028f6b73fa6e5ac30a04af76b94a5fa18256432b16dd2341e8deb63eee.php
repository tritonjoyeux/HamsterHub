<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_364108a4f90a69923a2f85bb006b760e733bc8d4d1659b0bc8c997243759a279 extends Twig_Template
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
        $__internal_7151e42374e10b74d32309dc6d79b4c8c6c513d24d6a4abb3db6c2d6646ac3b4 = $this->env->getExtension("native_profiler");
        $__internal_7151e42374e10b74d32309dc6d79b4c8c6c513d24d6a4abb3db6c2d6646ac3b4->enter($__internal_7151e42374e10b74d32309dc6d79b4c8c6c513d24d6a4abb3db6c2d6646ac3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7151e42374e10b74d32309dc6d79b4c8c6c513d24d6a4abb3db6c2d6646ac3b4->leave($__internal_7151e42374e10b74d32309dc6d79b4c8c6c513d24d6a4abb3db6c2d6646ac3b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
