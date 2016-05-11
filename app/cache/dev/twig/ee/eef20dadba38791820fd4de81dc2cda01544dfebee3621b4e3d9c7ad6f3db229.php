<?php

/* @HamsterHub/menu/navigation.html.twig */
class __TwigTemplate_17e1dd18c0cacd4226f4f018634d06eced5f05e54f3a85a8274b794e6bd635b8 extends Twig_Template
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
        $__internal_1cbb93768321dc5b127ec80e4059c0e968ed619d75c1e1ac9c3cd643f7933972 = $this->env->getExtension("native_profiler");
        $__internal_1cbb93768321dc5b127ec80e4059c0e968ed619d75c1e1ac9c3cd643f7933972->enter($__internal_1cbb93768321dc5b127ec80e4059c0e968ed619d75c1e1ac9c3cd643f7933972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/menu/navigation.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/burger.js"), "html", null, true);
        echo "\"></script>
";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 3
            echo "    <ul>
        <li><a href=\"/\">Accueil</a></li>
        ";
            // line 5
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "my_video")) {
                // line 6
                echo "            <li><a href=\"#post\">Ajouter une video</a></li>
        ";
            }
            // line 8
            echo "        <li><a href=\"/my_video\">Mes vidéos</a></li>
        <li><a href=\"/profile\">Profil</a></li>
        <li><a href=\"/profile/edit\">Modifier le profil</a></li>
        <li><a href=\"/profile/picture\">Modifier la photo de profil</a></li>

        <li><a href=\"/logout\">Se déconnecter</a></li>
    </ul>
";
        } else {
            // line 16
            echo "    <ul>
        <li><a href=\"/\">Accueil</a></li>
        <li><a href=\"/\">Profil</a></li>
        <li><a href=\"/register\">Créer un compte</a></li>
        <li><a href=\"#post_login\">Se connecter</a></li>
    </ul>
";
        }
        
        $__internal_1cbb93768321dc5b127ec80e4059c0e968ed619d75c1e1ac9c3cd643f7933972->leave($__internal_1cbb93768321dc5b127ec80e4059c0e968ed619d75c1e1ac9c3cd643f7933972_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/menu/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  39 => 8,  35 => 6,  33 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }
}
/* <script src="{{ asset('asset/burger.js') }}"></script>*/
/* {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*     <ul>*/
/*         <li><a href="/">Accueil</a></li>*/
/*         {% if(app.request.attributes.get('_route') == "my_video") %}*/
/*             <li><a href="#post">Ajouter une video</a></li>*/
/*         {% endif %}*/
/*         <li><a href="/my_video">Mes vidéos</a></li>*/
/*         <li><a href="/profile">Profil</a></li>*/
/*         <li><a href="/profile/edit">Modifier le profil</a></li>*/
/*         <li><a href="/profile/picture">Modifier la photo de profil</a></li>*/
/* */
/*         <li><a href="/logout">Se déconnecter</a></li>*/
/*     </ul>*/
/* {% else %}*/
/*     <ul>*/
/*         <li><a href="/">Accueil</a></li>*/
/*         <li><a href="/">Profil</a></li>*/
/*         <li><a href="/register">Créer un compte</a></li>*/
/*         <li><a href="#post_login">Se connecter</a></li>*/
/*     </ul>*/
/* {% endif %}*/
/* */
