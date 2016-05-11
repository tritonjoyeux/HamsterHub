<?php

/* @HamsterHub/Group/list.html.twig */
class __TwigTemplate_87b2117fa8626b09e68bc728dbde7da52b89506584358c88fcab4258382a5345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@HamsterHub/Group/list.html.twig", 1);
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
        $__internal_72cf894f96124843d12f4175853fcbb722b31fd4b4c82e5c8ea4eaa0d1063d75 = $this->env->getExtension("native_profiler");
        $__internal_72cf894f96124843d12f4175853fcbb722b31fd4b4c82e5c8ea4eaa0d1063d75->enter($__internal_72cf894f96124843d12f4175853fcbb722b31fd4b4c82e5c8ea4eaa0d1063d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72cf894f96124843d12f4175853fcbb722b31fd4b4c82e5c8ea4eaa0d1063d75->leave($__internal_72cf894f96124843d12f4175853fcbb722b31fd4b4c82e5c8ea4eaa0d1063d75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbfbc437eddfdc81bcb7c538065c99f176f5fe1aff14cb54596d5b044533b6a4 = $this->env->getExtension("native_profiler");
        $__internal_fbfbc437eddfdc81bcb7c538065c99f176f5fe1aff14cb54596d5b044533b6a4->enter($__internal_fbfbc437eddfdc81bcb7c538065c99f176f5fe1aff14cb54596d5b044533b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@HamsterHub/Group/list.html.twig", 4)->display($context);
        
        $__internal_fbfbc437eddfdc81bcb7c538065c99f176f5fe1aff14cb54596d5b044533b6a4->leave($__internal_fbfbc437eddfdc81bcb7c538065c99f176f5fe1aff14cb54596d5b044533b6a4_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
