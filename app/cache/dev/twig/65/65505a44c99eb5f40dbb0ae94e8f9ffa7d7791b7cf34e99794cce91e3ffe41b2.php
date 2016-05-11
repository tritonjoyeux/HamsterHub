<?php

/* HamsterHubBundle:asset:header.html.twig */
class __TwigTemplate_d6ad33986681ada72684ee3b6b62a66033ecef763c16b6fa9eb6e566f3f1b20d extends Twig_Template
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
        $__internal_8ef73598170c309952fa12c5c8cb6e036dd851ae6bcd7e79864e4b7c45ac9787 = $this->env->getExtension("native_profiler");
        $__internal_8ef73598170c309952fa12c5c8cb6e036dd851ae6bcd7e79864e4b7c45ac9787->enter($__internal_8ef73598170c309952fa12c5c8cb6e036dd851ae6bcd7e79864e4b7c45ac9787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:asset:header.html.twig"));

        // line 1
        echo "<header>
    <a href=\"/\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo\"><span class=\"text_logo\">HAMSTERHUB</span></a>
    <div class=\"burger\">
        <hr class=\"croix1\">
        <hr class=\"croix2\">
    </div>
    <nav>";
        // line 7
        $this->loadTemplate("HamsterHubBundle:menu:navigation.html.twig", "HamsterHubBundle:asset:header.html.twig", 7)->display($context);
        echo "</nav>
</header>
";
        
        $__internal_8ef73598170c309952fa12c5c8cb6e036dd851ae6bcd7e79864e4b7c45ac9787->leave($__internal_8ef73598170c309952fa12c5c8cb6e036dd851ae6bcd7e79864e4b7c45ac9787_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:asset:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 2,  22 => 1,);
    }
}
/* <header>*/
/*     <a href="/"><img src="{{ asset("img/logo.png") }}" class="logo" alt="logo"><span class="text_logo">HAMSTERHUB</span></a>*/
/*     <div class="burger">*/
/*         <hr class="croix1">*/
/*         <hr class="croix2">*/
/*     </div>*/
/*     <nav>{% include("HamsterHubBundle:menu:navigation.html.twig") %}</nav>*/
/* </header>*/
/* */
