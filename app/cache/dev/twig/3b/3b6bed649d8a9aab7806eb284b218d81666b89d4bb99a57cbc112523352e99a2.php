<?php

/* HamsterHubBundle:Profile:show_content.html.twig */
class __TwigTemplate_19926d90418eb257e13dbc585222df0007b17f3f119064ddf6da1c72133b182c extends Twig_Template
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
        $__internal_6a45bcaa69c2531f10f848e72d30c2ae9bacd933da3a33a97f743308a39f3a6b = $this->env->getExtension("native_profiler");
        $__internal_6a45bcaa69c2531f10f848e72d30c2ae9bacd933da3a33a97f743308a39f3a6b->enter($__internal_6a45bcaa69c2531f10f848e72d30c2ae9bacd933da3a33a97f743308a39f3a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>Nom d'utilisateur: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>Email: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p>Derniere connection: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin", array()), "date", array()), "html", null, true);
        echo "</p>
    <p>Date de naissance: ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birth", array()), "date", array()), "Y/m/d"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6a45bcaa69c2531f10f848e72d30c2ae9bacd933da3a33a97f743308a39f3a6b->leave($__internal_6a45bcaa69c2531f10f848e72d30c2ae9bacd933da3a33a97f743308a39f3a6b_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>Nom d'utilisateur: {{ user.username }}</p>*/
/*     <p>Email: {{ user.email }}</p>*/
/*     <p>Derniere connection: {{ user.lastLogin.date }}</p>*/
/*     <p>Date de naissance: {{ user.birth.date|date("Y/m/d") }}</p>*/
/* </div>*/
/* */
