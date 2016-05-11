<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ca176d8e9881c419d275a2e769aa30e2e6fc9f4c7d67ca151fa67a681dc3ddef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c1d4ffa04a8b2ce0c54245b923a9dfa0814a8bc7ab38dbf4c1e5c0d21b8a16f = $this->env->getExtension("native_profiler");
        $__internal_9c1d4ffa04a8b2ce0c54245b923a9dfa0814a8bc7ab38dbf4c1e5c0d21b8a16f->enter($__internal_9c1d4ffa04a8b2ce0c54245b923a9dfa0814a8bc7ab38dbf4c1e5c0d21b8a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9c1d4ffa04a8b2ce0c54245b923a9dfa0814a8bc7ab38dbf4c1e5c0d21b8a16f->leave($__internal_9c1d4ffa04a8b2ce0c54245b923a9dfa0814a8bc7ab38dbf4c1e5c0d21b8a16f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7aea78d700ed07576dcd943b1c10d0fa0f4736bb1c0d4d0be29ec8a5aefd3c7d = $this->env->getExtension("native_profiler");
        $__internal_7aea78d700ed07576dcd943b1c10d0fa0f4736bb1c0d4d0be29ec8a5aefd3c7d->enter($__internal_7aea78d700ed07576dcd943b1c10d0fa0f4736bb1c0d4d0be29ec8a5aefd3c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7aea78d700ed07576dcd943b1c10d0fa0f4736bb1c0d4d0be29ec8a5aefd3c7d->leave($__internal_7aea78d700ed07576dcd943b1c10d0fa0f4736bb1c0d4d0be29ec8a5aefd3c7d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
