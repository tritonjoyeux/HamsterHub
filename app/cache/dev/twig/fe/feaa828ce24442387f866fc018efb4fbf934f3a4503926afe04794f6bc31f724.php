<?php

/* base.html.twig */
class __TwigTemplate_90c0c376ffeeac42e65815754de6a29771bdf8154ce6b3fee772d58fe55be0c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b295479891d4f67b177355ae926e198487dad3a5d66fff33ef9b376c1b2232cd = $this->env->getExtension("native_profiler");
        $__internal_b295479891d4f67b177355ae926e198487dad3a5d66fff33ef9b376c1b2232cd->enter($__internal_b295479891d4f67b177355ae926e198487dad3a5d66fff33ef9b376c1b2232cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b295479891d4f67b177355ae926e198487dad3a5d66fff33ef9b376c1b2232cd->leave($__internal_b295479891d4f67b177355ae926e198487dad3a5d66fff33ef9b376c1b2232cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f32cc134aca33d6bede4c1590e707725bfaa8b3b6bc3ae8b6685b6c63279f7ef = $this->env->getExtension("native_profiler");
        $__internal_f32cc134aca33d6bede4c1590e707725bfaa8b3b6bc3ae8b6685b6c63279f7ef->enter($__internal_f32cc134aca33d6bede4c1590e707725bfaa8b3b6bc3ae8b6685b6c63279f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f32cc134aca33d6bede4c1590e707725bfaa8b3b6bc3ae8b6685b6c63279f7ef->leave($__internal_f32cc134aca33d6bede4c1590e707725bfaa8b3b6bc3ae8b6685b6c63279f7ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac122620ece6177dd7b26c0803827fc2ef95260b5c7482037c9b5104773aea0c = $this->env->getExtension("native_profiler");
        $__internal_ac122620ece6177dd7b26c0803827fc2ef95260b5c7482037c9b5104773aea0c->enter($__internal_ac122620ece6177dd7b26c0803827fc2ef95260b5c7482037c9b5104773aea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac122620ece6177dd7b26c0803827fc2ef95260b5c7482037c9b5104773aea0c->leave($__internal_ac122620ece6177dd7b26c0803827fc2ef95260b5c7482037c9b5104773aea0c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c0b562c5220cf749f241300b92ae44f32be2e7625d311de31bcfa2ae5f885ea = $this->env->getExtension("native_profiler");
        $__internal_9c0b562c5220cf749f241300b92ae44f32be2e7625d311de31bcfa2ae5f885ea->enter($__internal_9c0b562c5220cf749f241300b92ae44f32be2e7625d311de31bcfa2ae5f885ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c0b562c5220cf749f241300b92ae44f32be2e7625d311de31bcfa2ae5f885ea->leave($__internal_9c0b562c5220cf749f241300b92ae44f32be2e7625d311de31bcfa2ae5f885ea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0a4ef4ece9285e113232f9bc983bcbdc7d855b00e53662edb89f0337e04981f = $this->env->getExtension("native_profiler");
        $__internal_e0a4ef4ece9285e113232f9bc983bcbdc7d855b00e53662edb89f0337e04981f->enter($__internal_e0a4ef4ece9285e113232f9bc983bcbdc7d855b00e53662edb89f0337e04981f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0a4ef4ece9285e113232f9bc983bcbdc7d855b00e53662edb89f0337e04981f->leave($__internal_e0a4ef4ece9285e113232f9bc983bcbdc7d855b00e53662edb89f0337e04981f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
