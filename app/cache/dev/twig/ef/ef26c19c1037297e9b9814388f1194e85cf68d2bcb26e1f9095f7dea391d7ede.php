<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b48e7c8bdfaa7351428a92906dbb799f38717c0c37a671b7378d641f0702e62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b7d82f1a8a1e452b6a313991fc6a2a8b980414dbe0ba2fae3af881b89d595f96 = $this->env->getExtension("native_profiler");
        $__internal_b7d82f1a8a1e452b6a313991fc6a2a8b980414dbe0ba2fae3af881b89d595f96->enter($__internal_b7d82f1a8a1e452b6a313991fc6a2a8b980414dbe0ba2fae3af881b89d595f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d82f1a8a1e452b6a313991fc6a2a8b980414dbe0ba2fae3af881b89d595f96->leave($__internal_b7d82f1a8a1e452b6a313991fc6a2a8b980414dbe0ba2fae3af881b89d595f96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e2b9e6650d34a5c6dd9b866f5e61f20a7071261faa936d08aa1a0271b9d615a = $this->env->getExtension("native_profiler");
        $__internal_8e2b9e6650d34a5c6dd9b866f5e61f20a7071261faa936d08aa1a0271b9d615a->enter($__internal_8e2b9e6650d34a5c6dd9b866f5e61f20a7071261faa936d08aa1a0271b9d615a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8e2b9e6650d34a5c6dd9b866f5e61f20a7071261faa936d08aa1a0271b9d615a->leave($__internal_8e2b9e6650d34a5c6dd9b866f5e61f20a7071261faa936d08aa1a0271b9d615a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cb0c6181fbfe8f03eb3ce9f76ab1b474eebfdbff09a0273c0d934e83d4c5794 = $this->env->getExtension("native_profiler");
        $__internal_3cb0c6181fbfe8f03eb3ce9f76ab1b474eebfdbff09a0273c0d934e83d4c5794->enter($__internal_3cb0c6181fbfe8f03eb3ce9f76ab1b474eebfdbff09a0273c0d934e83d4c5794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3cb0c6181fbfe8f03eb3ce9f76ab1b474eebfdbff09a0273c0d934e83d4c5794->leave($__internal_3cb0c6181fbfe8f03eb3ce9f76ab1b474eebfdbff09a0273c0d934e83d4c5794_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72ec78417c564c331e62cf473da43be0c8ccf90eaf14b1b6bd023545c7d9d581 = $this->env->getExtension("native_profiler");
        $__internal_72ec78417c564c331e62cf473da43be0c8ccf90eaf14b1b6bd023545c7d9d581->enter($__internal_72ec78417c564c331e62cf473da43be0c8ccf90eaf14b1b6bd023545c7d9d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_72ec78417c564c331e62cf473da43be0c8ccf90eaf14b1b6bd023545c7d9d581->leave($__internal_72ec78417c564c331e62cf473da43be0c8ccf90eaf14b1b6bd023545c7d9d581_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
