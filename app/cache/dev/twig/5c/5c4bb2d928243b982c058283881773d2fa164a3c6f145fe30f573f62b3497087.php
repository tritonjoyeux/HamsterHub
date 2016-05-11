<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e14c492f372e24a4882a65981348b019b1c879e7bde33e8f6a48576a7fa941c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f398bf9425ed94530747e6b9a4ca0b8b85aabbb1ceff204a399e5d4f994e7d61 = $this->env->getExtension("native_profiler");
        $__internal_f398bf9425ed94530747e6b9a4ca0b8b85aabbb1ceff204a399e5d4f994e7d61->enter($__internal_f398bf9425ed94530747e6b9a4ca0b8b85aabbb1ceff204a399e5d4f994e7d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f398bf9425ed94530747e6b9a4ca0b8b85aabbb1ceff204a399e5d4f994e7d61->leave($__internal_f398bf9425ed94530747e6b9a4ca0b8b85aabbb1ceff204a399e5d4f994e7d61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fc0920fdacff55ef8386d03e1c4b374a5828b519c17a7b35baa73a7fa3ff27a = $this->env->getExtension("native_profiler");
        $__internal_3fc0920fdacff55ef8386d03e1c4b374a5828b519c17a7b35baa73a7fa3ff27a->enter($__internal_3fc0920fdacff55ef8386d03e1c4b374a5828b519c17a7b35baa73a7fa3ff27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3fc0920fdacff55ef8386d03e1c4b374a5828b519c17a7b35baa73a7fa3ff27a->leave($__internal_3fc0920fdacff55ef8386d03e1c4b374a5828b519c17a7b35baa73a7fa3ff27a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6616bb288814808cab13aaa0b92a4752ae8d7bbb1079bd95063667eb47eaf497 = $this->env->getExtension("native_profiler");
        $__internal_6616bb288814808cab13aaa0b92a4752ae8d7bbb1079bd95063667eb47eaf497->enter($__internal_6616bb288814808cab13aaa0b92a4752ae8d7bbb1079bd95063667eb47eaf497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6616bb288814808cab13aaa0b92a4752ae8d7bbb1079bd95063667eb47eaf497->leave($__internal_6616bb288814808cab13aaa0b92a4752ae8d7bbb1079bd95063667eb47eaf497_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc49a6ec2b591e9a752eb38d5b760f77dc7d903a7945ad7f4c92ee4189926834 = $this->env->getExtension("native_profiler");
        $__internal_bc49a6ec2b591e9a752eb38d5b760f77dc7d903a7945ad7f4c92ee4189926834->enter($__internal_bc49a6ec2b591e9a752eb38d5b760f77dc7d903a7945ad7f4c92ee4189926834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bc49a6ec2b591e9a752eb38d5b760f77dc7d903a7945ad7f4c92ee4189926834->leave($__internal_bc49a6ec2b591e9a752eb38d5b760f77dc7d903a7945ad7f4c92ee4189926834_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
