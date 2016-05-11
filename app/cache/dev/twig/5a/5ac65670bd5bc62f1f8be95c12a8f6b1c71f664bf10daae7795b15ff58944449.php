<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b7333f62a0c745f87247eae7ee82a6907d3f88dcad2451492b26f273d357c52f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d1e50a2990ef657adf409af46d8de9a2538a71cb0b1f74f2bd6953483648f40 = $this->env->getExtension("native_profiler");
        $__internal_4d1e50a2990ef657adf409af46d8de9a2538a71cb0b1f74f2bd6953483648f40->enter($__internal_4d1e50a2990ef657adf409af46d8de9a2538a71cb0b1f74f2bd6953483648f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d1e50a2990ef657adf409af46d8de9a2538a71cb0b1f74f2bd6953483648f40->leave($__internal_4d1e50a2990ef657adf409af46d8de9a2538a71cb0b1f74f2bd6953483648f40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb5a3c81fd80ce52f2c547a672c3336cc5b47e4345023653699f5a0bcc6a2c74 = $this->env->getExtension("native_profiler");
        $__internal_fb5a3c81fd80ce52f2c547a672c3336cc5b47e4345023653699f5a0bcc6a2c74->enter($__internal_fb5a3c81fd80ce52f2c547a672c3336cc5b47e4345023653699f5a0bcc6a2c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb5a3c81fd80ce52f2c547a672c3336cc5b47e4345023653699f5a0bcc6a2c74->leave($__internal_fb5a3c81fd80ce52f2c547a672c3336cc5b47e4345023653699f5a0bcc6a2c74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2bde92ed2818bf9fd42030b9bf7c9e853ed4767ae703f9e5eaa529139d621973 = $this->env->getExtension("native_profiler");
        $__internal_2bde92ed2818bf9fd42030b9bf7c9e853ed4767ae703f9e5eaa529139d621973->enter($__internal_2bde92ed2818bf9fd42030b9bf7c9e853ed4767ae703f9e5eaa529139d621973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2bde92ed2818bf9fd42030b9bf7c9e853ed4767ae703f9e5eaa529139d621973->leave($__internal_2bde92ed2818bf9fd42030b9bf7c9e853ed4767ae703f9e5eaa529139d621973_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73859fcf1d8f1f3d2d616394edb39a74ee03b8e924f3d024840f59fe877b0240 = $this->env->getExtension("native_profiler");
        $__internal_73859fcf1d8f1f3d2d616394edb39a74ee03b8e924f3d024840f59fe877b0240->enter($__internal_73859fcf1d8f1f3d2d616394edb39a74ee03b8e924f3d024840f59fe877b0240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73859fcf1d8f1f3d2d616394edb39a74ee03b8e924f3d024840f59fe877b0240->leave($__internal_73859fcf1d8f1f3d2d616394edb39a74ee03b8e924f3d024840f59fe877b0240_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
