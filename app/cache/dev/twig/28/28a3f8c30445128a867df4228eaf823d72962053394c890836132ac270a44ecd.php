<?php

/* ::base.html.twig */
class __TwigTemplate_5863f911b7a93fc7a47e4a36dcabbad56c74bd5835b271801ab1da306dbf6da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5dd9caff3c89ae55eceeabc35a4ac9d1db8d13e86eb3001993e5e0a91537e25 = $this->env->getExtension("native_profiler");
        $__internal_b5dd9caff3c89ae55eceeabc35a4ac9d1db8d13e86eb3001993e5e0a91537e25->enter($__internal_b5dd9caff3c89ae55eceeabc35a4ac9d1db8d13e86eb3001993e5e0a91537e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b5dd9caff3c89ae55eceeabc35a4ac9d1db8d13e86eb3001993e5e0a91537e25->leave($__internal_b5dd9caff3c89ae55eceeabc35a4ac9d1db8d13e86eb3001993e5e0a91537e25_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47884b65dc69304f3c5679894b1d243672989832547c9e601e0fa506cdba6975 = $this->env->getExtension("native_profiler");
        $__internal_47884b65dc69304f3c5679894b1d243672989832547c9e601e0fa506cdba6975->enter($__internal_47884b65dc69304f3c5679894b1d243672989832547c9e601e0fa506cdba6975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47884b65dc69304f3c5679894b1d243672989832547c9e601e0fa506cdba6975->leave($__internal_47884b65dc69304f3c5679894b1d243672989832547c9e601e0fa506cdba6975_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b20865bf742461af10d2d6b23d25cf018a31f357a4f39b2573d532591faecd0a = $this->env->getExtension("native_profiler");
        $__internal_b20865bf742461af10d2d6b23d25cf018a31f357a4f39b2573d532591faecd0a->enter($__internal_b20865bf742461af10d2d6b23d25cf018a31f357a4f39b2573d532591faecd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b20865bf742461af10d2d6b23d25cf018a31f357a4f39b2573d532591faecd0a->leave($__internal_b20865bf742461af10d2d6b23d25cf018a31f357a4f39b2573d532591faecd0a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bc2aca8db0fa3914b7054ff4ca3a4377e1676df21bbc5630dddfe5f9cb59f24 = $this->env->getExtension("native_profiler");
        $__internal_4bc2aca8db0fa3914b7054ff4ca3a4377e1676df21bbc5630dddfe5f9cb59f24->enter($__internal_4bc2aca8db0fa3914b7054ff4ca3a4377e1676df21bbc5630dddfe5f9cb59f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4bc2aca8db0fa3914b7054ff4ca3a4377e1676df21bbc5630dddfe5f9cb59f24->leave($__internal_4bc2aca8db0fa3914b7054ff4ca3a4377e1676df21bbc5630dddfe5f9cb59f24_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2aa776207a67f64d6ac9077c268ccb613d4daa87b72b6469a06368e47aabaa3a = $this->env->getExtension("native_profiler");
        $__internal_2aa776207a67f64d6ac9077c268ccb613d4daa87b72b6469a06368e47aabaa3a->enter($__internal_2aa776207a67f64d6ac9077c268ccb613d4daa87b72b6469a06368e47aabaa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2aa776207a67f64d6ac9077c268ccb613d4daa87b72b6469a06368e47aabaa3a->leave($__internal_2aa776207a67f64d6ac9077c268ccb613d4daa87b72b6469a06368e47aabaa3a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
