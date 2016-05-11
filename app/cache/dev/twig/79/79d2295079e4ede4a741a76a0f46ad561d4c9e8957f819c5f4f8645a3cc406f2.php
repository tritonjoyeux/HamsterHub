<?php

/* @HamsterHub/Group/new_content.html.twig */
class __TwigTemplate_20c20acba5fd40eaf86872caa1c5bc664d61c3c3dcb68819a3eb9aa404ed9a76 extends Twig_Template
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
        $__internal_b179fbd52d6350c6e2fb3cd44332aae712ee8de8cf8a2292c7417ebb46742e73 = $this->env->getExtension("native_profiler");
        $__internal_b179fbd52d6350c6e2fb3cd44332aae712ee8de8cf8a2292c7417ebb46742e73->enter($__internal_b179fbd52d6350c6e2fb3cd44332aae712ee8de8cf8a2292c7417ebb46742e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b179fbd52d6350c6e2fb3cd44332aae712ee8de8cf8a2292c7417ebb46742e73->leave($__internal_b179fbd52d6350c6e2fb3cd44332aae712ee8de8cf8a2292c7417ebb46742e73_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
