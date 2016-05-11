<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2772d5717845c19023daf06b8c9ba1674a6c2dcffc0b8a2c3ff2e3a1ad1f9339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'current_page' => array($this, 'block_current_page'),
            'profile_pic' => array($this, 'block_profile_pic'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaffb4c2b5f454c86ba8583873fdf525242dcd7fd91d011358b5a1d1f461e844 = $this->env->getExtension("native_profiler");
        $__internal_eaffb4c2b5f454c86ba8583873fdf525242dcd7fd91d011358b5a1d1f461e844->enter($__internal_eaffb4c2b5f454c86ba8583873fdf525242dcd7fd91d011358b5a1d1f461e844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <title>HamsterHub</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/style/style.css"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div id=\"refresh\"></div>
<div class=\"container\">
    ";
        // line 13
        $this->loadTemplate("HamsterHubBundle:asset:header.html.twig", "FOSUserBundle::layout.html.twig", 13)->display($context);
        // line 14
        echo "    <div class=\"current_page\">
        ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "hamster_hub_homepage")) {
            // line 16
            echo "            <span class=\"title\">Accueil</span>
        ";
        }
        // line 18
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "my_video")) {
            // line 19
            echo "            <span class=\"title\">Mes vidéos</span>
        ";
        }
        // line 21
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "video")) {
            // line 22
            echo "            <span class=\"title\">Vidéo</span>
        ";
        }
        // line 24
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
            // line 25
            echo "            <span class=\"title\">Profil</span>
        ";
        }
        // line 27
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_edit")) {
            // line 28
            echo "            <span class=\"title\">Edition de profil</span>
        ";
        }
        // line 30
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
            // line 31
            echo "            <span class=\"title\">Créer un compte</span>
        ";
        }
        // line 33
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
            // line 34
            echo "            <span class=\"title\">Se connecter</span>
        ";
        }
        // line 36
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "profile_someone")) {
            // line 37
            echo "            <span class=\"title\">Vidéos de ";
            $this->displayBlock('current_page', $context, $blocks);
            echo "</span>
        ";
        }
        // line 39
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "profile_picture")) {
            // line 40
            echo "            <span class=\"title\">Photo de ";
            $this->displayBlock('profile_pic', $context, $blocks);
            echo "</span>
        ";
        }
        // line 42
        echo "    </div>

    ";
        // line 44
        $this->loadTemplate("HamsterHubBundle:Security:login.html.twig", "FOSUserBundle::layout.html.twig", 44)->display($context);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 48
        echo "</div>
";
        // line 49
        $this->loadTemplate("HamsterHubBundle:asset:footer.html.twig", "FOSUserBundle::layout.html.twig", 49)->display($context);
        // line 50
        echo "
</body>
</html>
";
        
        $__internal_eaffb4c2b5f454c86ba8583873fdf525242dcd7fd91d011358b5a1d1f461e844->leave($__internal_eaffb4c2b5f454c86ba8583873fdf525242dcd7fd91d011358b5a1d1f461e844_prof);

    }

    // line 37
    public function block_current_page($context, array $blocks = array())
    {
        $__internal_7269ecc12b2f1ffb3c453a12e2bdded6c7175327b5551e2940ab06fbd044b8ae = $this->env->getExtension("native_profiler");
        $__internal_7269ecc12b2f1ffb3c453a12e2bdded6c7175327b5551e2940ab06fbd044b8ae->enter($__internal_7269ecc12b2f1ffb3c453a12e2bdded6c7175327b5551e2940ab06fbd044b8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        
        $__internal_7269ecc12b2f1ffb3c453a12e2bdded6c7175327b5551e2940ab06fbd044b8ae->leave($__internal_7269ecc12b2f1ffb3c453a12e2bdded6c7175327b5551e2940ab06fbd044b8ae_prof);

    }

    // line 40
    public function block_profile_pic($context, array $blocks = array())
    {
        $__internal_62dc4299bb180aa9576289d8fc14a3bc9d40bdabd3e88b93619df7b6cbd883bc = $this->env->getExtension("native_profiler");
        $__internal_62dc4299bb180aa9576289d8fc14a3bc9d40bdabd3e88b93619df7b6cbd883bc->enter($__internal_62dc4299bb180aa9576289d8fc14a3bc9d40bdabd3e88b93619df7b6cbd883bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile_pic"));

        
        $__internal_62dc4299bb180aa9576289d8fc14a3bc9d40bdabd3e88b93619df7b6cbd883bc->leave($__internal_62dc4299bb180aa9576289d8fc14a3bc9d40bdabd3e88b93619df7b6cbd883bc_prof);

    }

    // line 46
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33e1172056e2a36f2063990c9979a4410d6957e98eba93a15b357987dfb49a7d = $this->env->getExtension("native_profiler");
        $__internal_33e1172056e2a36f2063990c9979a4410d6957e98eba93a15b357987dfb49a7d->enter($__internal_33e1172056e2a36f2063990c9979a4410d6957e98eba93a15b357987dfb49a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 47
        echo "    ";
        
        $__internal_33e1172056e2a36f2063990c9979a4410d6957e98eba93a15b357987dfb49a7d->leave($__internal_33e1172056e2a36f2063990c9979a4410d6957e98eba93a15b357987dfb49a7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  161 => 46,  150 => 40,  139 => 37,  129 => 50,  127 => 49,  124 => 48,  122 => 46,  119 => 45,  117 => 44,  113 => 42,  107 => 40,  104 => 39,  98 => 37,  95 => 36,  91 => 34,  88 => 33,  84 => 31,  81 => 30,  77 => 28,  74 => 27,  70 => 25,  67 => 24,  63 => 22,  60 => 21,  56 => 19,  53 => 18,  49 => 16,  47 => 15,  44 => 14,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <title>HamsterHub</title>*/
/*     <link rel="stylesheet" href="{{ asset("asset/style/style.css") }}">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* </head>*/
/* <body>*/
/* <div id="refresh"></div>*/
/* <div class="container">*/
/*     {% include("HamsterHubBundle:asset:header.html.twig") %}*/
/*     <div class="current_page">*/
/*         {% if(app.request.attributes.get('_route') == "hamster_hub_homepage") %}*/
/*             <span class="title">Accueil</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "my_video") %}*/
/*             <span class="title">Mes vidéos</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "video") %}*/
/*             <span class="title">Vidéo</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "fos_user_profile_show") %}*/
/*             <span class="title">Profil</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "fos_user_profile_edit") %}*/
/*             <span class="title">Edition de profil</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "fos_user_registration_register") %}*/
/*             <span class="title">Créer un compte</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "fos_user_security_login") %}*/
/*             <span class="title">Se connecter</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "profile_someone") %}*/
/*             <span class="title">Vidéos de {% block current_page %}{% endblock current_page %}</span>*/
/*         {% endif %}*/
/*         {% if(app.request.attributes.get('_route') == "profile_picture") %}*/
/*             <span class="title">Photo de {% block profile_pic %}{% endblock profile_pic %}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% include ("HamsterHubBundle:Security:login.html.twig") %}*/
/* */
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* {% include("HamsterHubBundle:asset:footer.html.twig") %}*/
/* */
/* </body>*/
/* </html>*/
/* */
