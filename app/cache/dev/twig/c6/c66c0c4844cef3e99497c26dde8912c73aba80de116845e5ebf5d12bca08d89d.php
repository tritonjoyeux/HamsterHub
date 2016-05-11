<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1ef9f6a7bf0eb00d4f2ad6bd0bf63769d913abee32b5c4072704ab99e8ab15ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_dd2b1b0406670b8d29ece751bb26e14831953015d32aa6bd588b07b2093ebd42 = $this->env->getExtension("native_profiler");
        $__internal_dd2b1b0406670b8d29ece751bb26e14831953015d32aa6bd588b07b2093ebd42->enter($__internal_dd2b1b0406670b8d29ece751bb26e14831953015d32aa6bd588b07b2093ebd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd2b1b0406670b8d29ece751bb26e14831953015d32aa6bd588b07b2093ebd42->leave($__internal_dd2b1b0406670b8d29ece751bb26e14831953015d32aa6bd588b07b2093ebd42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d944662d55cf8ca7fdd5b5a10ea367ed74f0a62b014b7b127ede7c239b4c4efe = $this->env->getExtension("native_profiler");
        $__internal_d944662d55cf8ca7fdd5b5a10ea367ed74f0a62b014b7b127ede7c239b4c4efe->enter($__internal_d944662d55cf8ca7fdd5b5a10ea367ed74f0a62b014b7b127ede7c239b4c4efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d944662d55cf8ca7fdd5b5a10ea367ed74f0a62b014b7b127ede7c239b4c4efe->leave($__internal_d944662d55cf8ca7fdd5b5a10ea367ed74f0a62b014b7b127ede7c239b4c4efe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a7631508ee1d925c3d008572bacf7d040a1801a62d58cc526a4c27470650472 = $this->env->getExtension("native_profiler");
        $__internal_0a7631508ee1d925c3d008572bacf7d040a1801a62d58cc526a4c27470650472->enter($__internal_0a7631508ee1d925c3d008572bacf7d040a1801a62d58cc526a4c27470650472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a7631508ee1d925c3d008572bacf7d040a1801a62d58cc526a4c27470650472->leave($__internal_0a7631508ee1d925c3d008572bacf7d040a1801a62d58cc526a4c27470650472_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2b689f1d69900a09587268caa50372fcf61f6f18221a38b1446f0633be52eba = $this->env->getExtension("native_profiler");
        $__internal_c2b689f1d69900a09587268caa50372fcf61f6f18221a38b1446f0633be52eba->enter($__internal_c2b689f1d69900a09587268caa50372fcf61f6f18221a38b1446f0633be52eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2b689f1d69900a09587268caa50372fcf61f6f18221a38b1446f0633be52eba->leave($__internal_c2b689f1d69900a09587268caa50372fcf61f6f18221a38b1446f0633be52eba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
