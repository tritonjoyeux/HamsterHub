<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_194e461d23788980313e5b40c81ef393c2fcdf20cd335be5dfa9fbd78d384532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2633083ea1c9fcbb0938fcfb9c719d261a1c668f04d67562eb5fced0edc89c73 = $this->env->getExtension("native_profiler");
        $__internal_2633083ea1c9fcbb0938fcfb9c719d261a1c668f04d67562eb5fced0edc89c73->enter($__internal_2633083ea1c9fcbb0938fcfb9c719d261a1c668f04d67562eb5fced0edc89c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2633083ea1c9fcbb0938fcfb9c719d261a1c668f04d67562eb5fced0edc89c73->leave($__internal_2633083ea1c9fcbb0938fcfb9c719d261a1c668f04d67562eb5fced0edc89c73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a97bac1d461ac09d53028c10699a579d3195e5e6042059904f1ac4ef28b111b8 = $this->env->getExtension("native_profiler");
        $__internal_a97bac1d461ac09d53028c10699a579d3195e5e6042059904f1ac4ef28b111b8->enter($__internal_a97bac1d461ac09d53028c10699a579d3195e5e6042059904f1ac4ef28b111b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a97bac1d461ac09d53028c10699a579d3195e5e6042059904f1ac4ef28b111b8->leave($__internal_a97bac1d461ac09d53028c10699a579d3195e5e6042059904f1ac4ef28b111b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1332439fc3a70242581237dcc98cf5a45eb5b5e92dc44f4a7edc2842b80a57a = $this->env->getExtension("native_profiler");
        $__internal_a1332439fc3a70242581237dcc98cf5a45eb5b5e92dc44f4a7edc2842b80a57a->enter($__internal_a1332439fc3a70242581237dcc98cf5a45eb5b5e92dc44f4a7edc2842b80a57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a1332439fc3a70242581237dcc98cf5a45eb5b5e92dc44f4a7edc2842b80a57a->leave($__internal_a1332439fc3a70242581237dcc98cf5a45eb5b5e92dc44f4a7edc2842b80a57a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
