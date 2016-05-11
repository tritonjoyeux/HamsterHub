<?php

/* @HamsterHub/asset/header.html.twig */
class __TwigTemplate_aa6316088e4bc9d73296dc41fbf46166df2e7255740dc4f4ead8a0e9e247045f extends Twig_Template
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
        $__internal_e584771a294a7de9d6cecf6b7cf974fb719d92f7675dc85cd6298bd2d6e9a8e8 = $this->env->getExtension("native_profiler");
        $__internal_e584771a294a7de9d6cecf6b7cf974fb719d92f7675dc85cd6298bd2d6e9a8e8->enter($__internal_e584771a294a7de9d6cecf6b7cf974fb719d92f7675dc85cd6298bd2d6e9a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/asset/header.html.twig"));

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
        $this->loadTemplate("HamsterHubBundle:menu:navigation.html.twig", "@HamsterHub/asset/header.html.twig", 7)->display($context);
        echo "</nav>
</header>
";
        
        $__internal_e584771a294a7de9d6cecf6b7cf974fb719d92f7675dc85cd6298bd2d6e9a8e8->leave($__internal_e584771a294a7de9d6cecf6b7cf974fb719d92f7675dc85cd6298bd2d6e9a8e8_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/asset/header.html.twig";
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
