<?php

/* @HamsterHub/Registration/confirmed.html.twig */
class __TwigTemplate_c59336a797253e94d0003643a3650977450c46d792b4b45307d3cdff68c647eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34b101febca3b030f5eab1391da647dd957617bd153c6657557d8e835aaefa31 = $this->env->getExtension("native_profiler");
        $__internal_34b101febca3b030f5eab1391da647dd957617bd153c6657557d8e835aaefa31->enter($__internal_34b101febca3b030f5eab1391da647dd957617bd153c6657557d8e835aaefa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b101febca3b030f5eab1391da647dd957617bd153c6657557d8e835aaefa31->leave($__internal_34b101febca3b030f5eab1391da647dd957617bd153c6657557d8e835aaefa31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c34022768695af9d436d2c31c348a40afd5253d6886070f0f75da7edd57935ea = $this->env->getExtension("native_profiler");
        $__internal_c34022768695af9d436d2c31c348a40afd5253d6886070f0f75da7edd57935ea->enter($__internal_c34022768695af9d436d2c31c348a40afd5253d6886070f0f75da7edd57935ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c34022768695af9d436d2c31c348a40afd5253d6886070f0f75da7edd57935ea->leave($__internal_c34022768695af9d436d2c31c348a40afd5253d6886070f0f75da7edd57935ea_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
