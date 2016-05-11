<?php

/* HamsterHubBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2d833f2552b0a5a31f22529e65def65540b80af9bf9530814400ccb02634ad78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HamsterHubBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_3c28766a0515f8e5eaae228c6d560cfdf7b43ba7aef6e24ff34babde1cfea981 = $this->env->getExtension("native_profiler");
        $__internal_3c28766a0515f8e5eaae228c6d560cfdf7b43ba7aef6e24ff34babde1cfea981->enter($__internal_3c28766a0515f8e5eaae228c6d560cfdf7b43ba7aef6e24ff34babde1cfea981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c28766a0515f8e5eaae228c6d560cfdf7b43ba7aef6e24ff34babde1cfea981->leave($__internal_3c28766a0515f8e5eaae228c6d560cfdf7b43ba7aef6e24ff34babde1cfea981_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9a1910926dfa15a78ffd4cc58c4ac954bd1cbf5614dd9b63f6d47d5589af16c = $this->env->getExtension("native_profiler");
        $__internal_f9a1910926dfa15a78ffd4cc58c4ac954bd1cbf5614dd9b63f6d47d5589af16c->enter($__internal_f9a1910926dfa15a78ffd4cc58c4ac954bd1cbf5614dd9b63f6d47d5589af16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f9a1910926dfa15a78ffd4cc58c4ac954bd1cbf5614dd9b63f6d47d5589af16c->leave($__internal_f9a1910926dfa15a78ffd4cc58c4ac954bd1cbf5614dd9b63f6d47d5589af16c_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Registration:confirmed.html.twig";
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
