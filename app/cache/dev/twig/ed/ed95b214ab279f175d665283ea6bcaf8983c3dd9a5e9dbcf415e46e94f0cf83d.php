<?php

/* HamsterHubBundle:menu:navigation.html.twig */
class __TwigTemplate_4bc450834fe14080f4a8a092fd2322ebde9374616bbb68d08f3dac0d94cb489e extends Twig_Template
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
        $__internal_1aab10e1a6515bb0b392734fd3cb6a2903de90e5861335b1869da46df4dcd750 = $this->env->getExtension("native_profiler");
        $__internal_1aab10e1a6515bb0b392734fd3cb6a2903de90e5861335b1869da46df4dcd750->enter($__internal_1aab10e1a6515bb0b392734fd3cb6a2903de90e5861335b1869da46df4dcd750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:menu:navigation.html.twig"));

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
        
        $__internal_1aab10e1a6515bb0b392734fd3cb6a2903de90e5861335b1869da46df4dcd750->leave($__internal_1aab10e1a6515bb0b392734fd3cb6a2903de90e5861335b1869da46df4dcd750_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:menu:navigation.html.twig";
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
