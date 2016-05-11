<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_496bf33b302c90bdf43c1729b88cc39fb05669f57c0bd498d9a15d6eb215640a extends Twig_Template
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
        $__internal_c1ff48ff0f9f7a328a3b4e29f474c1cc5615a62a95709d2b297bab3499c3b68d = $this->env->getExtension("native_profiler");
        $__internal_c1ff48ff0f9f7a328a3b4e29f474c1cc5615a62a95709d2b297bab3499c3b68d->enter($__internal_c1ff48ff0f9f7a328a3b4e29f474c1cc5615a62a95709d2b297bab3499c3b68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c1ff48ff0f9f7a328a3b4e29f474c1cc5615a62a95709d2b297bab3499c3b68d->leave($__internal_c1ff48ff0f9f7a328a3b4e29f474c1cc5615a62a95709d2b297bab3499c3b68d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
