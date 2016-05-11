<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e075a9d373f8b9c5f281b7a8198ffc256fe775dd3ee6adb965e99c5f932486bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_97b5ab67dffe3eda8a1bf682fb076e4337666b6f3826f27dabfe8b6a44efe6cb = $this->env->getExtension("native_profiler");
        $__internal_97b5ab67dffe3eda8a1bf682fb076e4337666b6f3826f27dabfe8b6a44efe6cb->enter($__internal_97b5ab67dffe3eda8a1bf682fb076e4337666b6f3826f27dabfe8b6a44efe6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b5ab67dffe3eda8a1bf682fb076e4337666b6f3826f27dabfe8b6a44efe6cb->leave($__internal_97b5ab67dffe3eda8a1bf682fb076e4337666b6f3826f27dabfe8b6a44efe6cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6254e89dad8d426312915e6fa23a43978286d0fed2bcc45b0d68dc5b5ad9b52 = $this->env->getExtension("native_profiler");
        $__internal_f6254e89dad8d426312915e6fa23a43978286d0fed2bcc45b0d68dc5b5ad9b52->enter($__internal_f6254e89dad8d426312915e6fa23a43978286d0fed2bcc45b0d68dc5b5ad9b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6254e89dad8d426312915e6fa23a43978286d0fed2bcc45b0d68dc5b5ad9b52->leave($__internal_f6254e89dad8d426312915e6fa23a43978286d0fed2bcc45b0d68dc5b5ad9b52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3a650c18600ecfc1a5bf89afa209bfdb954b2a104c0c9ef7dcb4f5dec52b107 = $this->env->getExtension("native_profiler");
        $__internal_b3a650c18600ecfc1a5bf89afa209bfdb954b2a104c0c9ef7dcb4f5dec52b107->enter($__internal_b3a650c18600ecfc1a5bf89afa209bfdb954b2a104c0c9ef7dcb4f5dec52b107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3a650c18600ecfc1a5bf89afa209bfdb954b2a104c0c9ef7dcb4f5dec52b107->leave($__internal_b3a650c18600ecfc1a5bf89afa209bfdb954b2a104c0c9ef7dcb4f5dec52b107_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edcbcdf7333b49ba2fa7bf4203a6feb1caa68562cc280e1f4d77c6f588f2b1ee = $this->env->getExtension("native_profiler");
        $__internal_edcbcdf7333b49ba2fa7bf4203a6feb1caa68562cc280e1f4d77c6f588f2b1ee->enter($__internal_edcbcdf7333b49ba2fa7bf4203a6feb1caa68562cc280e1f4d77c6f588f2b1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_edcbcdf7333b49ba2fa7bf4203a6feb1caa68562cc280e1f4d77c6f588f2b1ee->leave($__internal_edcbcdf7333b49ba2fa7bf4203a6feb1caa68562cc280e1f4d77c6f588f2b1ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
