<?php

/* HamsterHubBundle:Group:show_content.html.twig */
class __TwigTemplate_b6494327de9311698b1b080a4bdd22469d3b1f488b023e50afe4854a50a3e38d extends Twig_Template
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
        $__internal_8b2ddeb8a066435fb0087a0401be610562add16a0582468d773e945211f31b26 = $this->env->getExtension("native_profiler");
        $__internal_8b2ddeb8a066435fb0087a0401be610562add16a0582468d773e945211f31b26->enter($__internal_8b2ddeb8a066435fb0087a0401be610562add16a0582468d773e945211f31b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8b2ddeb8a066435fb0087a0401be610562add16a0582468d773e945211f31b26->leave($__internal_8b2ddeb8a066435fb0087a0401be610562add16a0582468d773e945211f31b26_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
