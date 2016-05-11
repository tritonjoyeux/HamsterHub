<?php

/* HamsterHubBundle:Security:login.html.twig */
class __TwigTemplate_8201c7cb312f14cef1d141ef1e33616a3c319ef85fcf67aee31237265f622d88 extends Twig_Template
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
        $__internal_d8c97f45fbbbfcbc3b66c88636efed131d736a479577ba8b0150bdc1a0735f8b = $this->env->getExtension("native_profiler");
        $__internal_d8c97f45fbbbfcbc3b66c88636efed131d736a479577ba8b0150bdc1a0735f8b->enter($__internal_d8c97f45fbbbfcbc3b66c88636efed131d736a479577ba8b0150bdc1a0735f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Security:login.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            echo "
";
        } else {
            // line 6
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/login.js"), "html", null, true);
            echo "\"></script>
    <div id=\"post_login\" class=\"post_login\">
        <div id=\"loader\" class=\"loader\"><img src=\"http://tritonjoyeux.fr/magnify.svg\" alt=\"loader\"></div>

        <a class=\"close\" href=\"#\">&times;</a>
        <form action=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\" id=\"login\">
            <div class=\"user_login\">
                <label>Nom d'utilisateur :</label><br>
                <input type=\"text\" name=\"_username\" required=\"required\"/>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_csrf_provider"]) ? $context["fos_csrf_provider"] : $this->getContext($context, "fos_csrf_provider")), "generateCsrfToken", array(0 => "authenticate"), "method"), "html", null, true);
            echo "\"/>
            </div>
            <div class=\"user_pass\">
                <label>Mot de passe :</label><br>
                <input type=\"password\" name=\"_password\" required=\"required\"/>
            </div>
            <button type=\"submit\" class=\"input_submit\">Log in</button>
            <div class=\"erreurLogin\"></div>
        </form>
    </div>
";
        }
        
        $__internal_d8c97f45fbbbfcbc3b66c88636efed131d736a479577ba8b0150bdc1a0735f8b->leave($__internal_d8c97f45fbbbfcbc3b66c88636efed131d736a479577ba8b0150bdc1a0735f8b_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  40 => 11,  31 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* */
/* {% else %}*/
/*     <script src="{{ asset('asset/login.js') }}"></script>*/
/*     <div id="post_login" class="post_login">*/
/*         <div id="loader" class="loader"><img src="http://tritonjoyeux.fr/magnify.svg" alt="loader"></div>*/
/* */
/*         <a class="close" href="#">&times;</a>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post" id="login">*/
/*             <div class="user_login">*/
/*                 <label>Nom d'utilisateur :</label><br>*/
/*                 <input type="text" name="_username" required="required"/>*/
/*                 <input type="hidden" name="_csrf_token"*/
/*                        value="{{ fos_csrf_provider.generateCsrfToken('authenticate') }}"/>*/
/*             </div>*/
/*             <div class="user_pass">*/
/*                 <label>Mot de passe :</label><br>*/
/*                 <input type="password" name="_password" required="required"/>*/
/*             </div>*/
/*             <button type="submit" class="input_submit">Log in</button>*/
/*             <div class="erreurLogin"></div>*/
/*         </form>*/
/*     </div>*/
/* {% endif %}*/
/* */
