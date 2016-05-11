<?php

/* @HamsterHub/Profile/show_content.html.twig */
class __TwigTemplate_305b7126a09eff0e1b59b08b843ef4a9bf5aacec5c9507e0a8841e40477a95c8 extends Twig_Template
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
        $__internal_ae189a6a86ee4246927db8a1b0e71ceca0735f235527e725d0a29cc7163be85a = $this->env->getExtension("native_profiler");
        $__internal_ae189a6a86ee4246927db8a1b0e71ceca0735f235527e725d0a29cc7163be85a->enter($__internal_ae189a6a86ee4246927db8a1b0e71ceca0735f235527e725d0a29cc7163be85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Profile/show_content.html.twig"));

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
        
        $__internal_ae189a6a86ee4246927db8a1b0e71ceca0735f235527e725d0a29cc7163be85a->leave($__internal_ae189a6a86ee4246927db8a1b0e71ceca0735f235527e725d0a29cc7163be85a_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Profile/show_content.html.twig";
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
