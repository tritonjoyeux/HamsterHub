<?php

/* @HamsterHub/Profile/edit_content.html.twig */
class __TwigTemplate_ae748fdf74cb2d72a322f04a2847ba5baa91dd80c161b24835cb653dd8bf0c71 extends Twig_Template
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
        $__internal_01ba983e8c5a48ae210ae09cf95bccc4058b09388b72da9f976b79d2c9edb721 = $this->env->getExtension("native_profiler");
        $__internal_01ba983e8c5a48ae210ae09cf95bccc4058b09388b72da9f976b79d2c9edb721->enter($__internal_01ba983e8c5a48ae210ae09cf95bccc4058b09388b72da9f976b79d2c9edb721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
Mail :
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "<br>
Nom d'utilisateur :
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "<br>
Date de naissance :
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth", array()), 'widget');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth", array()), 'errors');
        echo "<br>
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "<br>
<div>
    <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
</div>
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_01ba983e8c5a48ae210ae09cf95bccc4058b09388b72da9f976b79d2c9edb721->leave($__internal_01ba983e8c5a48ae210ae09cf95bccc4058b09388b72da9f976b79d2c9edb721_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  61 => 15,  56 => 13,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  34 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/* Mail :*/
/* {{ form_widget(form.email) }}*/
/*     {{ form_errors(form.email) }}<br>*/
/* Nom d'utilisateur :*/
/* {{ form_widget(form.username) }}*/
/*     {{ form_errors(form.username) }}<br>*/
/* Date de naissance :*/
/* {{ form_widget(form.birth) }}*/
/*     {{ form_errors(form.birth) }}<br>*/
/* {{ form_rest(form) }}<br>*/
/* <div>*/
/*     <input type="submit" value="{{ 'profile.edit.submit'|trans }}"/>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
