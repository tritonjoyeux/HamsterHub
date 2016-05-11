<?php

/* @HamsterHub/Resetting/reset_content.html.twig */
class __TwigTemplate_c9cad021d3c53c10d3c73445d451b80ec4d8b973b1eaf2db4558877ae779830e extends Twig_Template
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
        $__internal_b44bd2e4011e48685e6fefed1f7b0394c4e7b0ce787203149f0eceea69089bbe = $this->env->getExtension("native_profiler");
        $__internal_b44bd2e4011e48685e6fefed1f7b0394c4e7b0ce787203149f0eceea69089bbe->enter($__internal_b44bd2e4011e48685e6fefed1f7b0394c4e7b0ce787203149f0eceea69089bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b44bd2e4011e48685e6fefed1f7b0394c4e7b0ce787203149f0eceea69089bbe->leave($__internal_b44bd2e4011e48685e6fefed1f7b0394c4e7b0ce787203149f0eceea69089bbe_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Resetting/reset_content.html.twig";
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
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
