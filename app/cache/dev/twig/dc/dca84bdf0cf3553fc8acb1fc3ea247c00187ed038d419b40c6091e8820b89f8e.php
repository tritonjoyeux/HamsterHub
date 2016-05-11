<?php

/* HamsterHubBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a2f6e7a578e93a1d6c67f89888a3dde9a4735b4f9bce8af5bac882b560590699 extends Twig_Template
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
        $__internal_e70a9def2a37d5670473d5250394d797fff69378db248bc12f740a2dd597bfaf = $this->env->getExtension("native_profiler");
        $__internal_e70a9def2a37d5670473d5250394d797fff69378db248bc12f740a2dd597bfaf->enter($__internal_e70a9def2a37d5670473d5250394d797fff69378db248bc12f740a2dd597bfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Profile:edit_content.html.twig"));

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
        
        $__internal_e70a9def2a37d5670473d5250394d797fff69378db248bc12f740a2dd597bfaf->leave($__internal_e70a9def2a37d5670473d5250394d797fff69378db248bc12f740a2dd597bfaf_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Profile:edit_content.html.twig";
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
