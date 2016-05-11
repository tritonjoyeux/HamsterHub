<?php

/* @HamsterHub/Picture/index.html.twig */
class __TwigTemplate_8bc169c3bef77ad830fdd2f1541b7f63a4bb8066caa232fec909dc78804dcd91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/Picture/index.html.twig", 1);
        $this->blocks = array(
            'profile_pic' => array($this, 'block_profile_pic'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_447e0c118d0184d644025693c9a9b4b1cc47d47673210397e74ecb6ecbbb199f = $this->env->getExtension("native_profiler");
        $__internal_447e0c118d0184d644025693c9a9b4b1cc47d47673210397e74ecb6ecbbb199f->enter($__internal_447e0c118d0184d644025693c9a9b4b1cc47d47673210397e74ecb6ecbbb199f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Picture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_447e0c118d0184d644025693c9a9b4b1cc47d47673210397e74ecb6ecbbb199f->leave($__internal_447e0c118d0184d644025693c9a9b4b1cc47d47673210397e74ecb6ecbbb199f_prof);

    }

    // line 2
    public function block_profile_pic($context, array $blocks = array())
    {
        $__internal_f51c2c971a8921f0643f15259412a047051b5e043b98455132773930565f8121 = $this->env->getExtension("native_profiler");
        $__internal_f51c2c971a8921f0643f15259412a047051b5e043b98455132773930565f8121->enter($__internal_f51c2c971a8921f0643f15259412a047051b5e043b98455132773930565f8121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile_pic"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_f51c2c971a8921f0643f15259412a047051b5e043b98455132773930565f8121->leave($__internal_f51c2c971a8921f0643f15259412a047051b5e043b98455132773930565f8121_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7cc7fa737ea96fca3a341647895f23ce28c4d383ef47ea5b16c1d03a8cc46db = $this->env->getExtension("native_profiler");
        $__internal_a7cc7fa737ea96fca3a341647895f23ce28c4d383ef47ea5b16c1d03a8cc46db->enter($__internal_a7cc7fa737ea96fca3a341647895f23ce28c4d383ef47ea5b16c1d03a8cc46db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/picture.js"), "html", null, true);
        echo "\"></script>

     <img class=\"profil_picture\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()), "html", null, true);
        echo "\">
    <form method=\"post\" id=\"upload_pic\">
        <input type=\"file\" name=\"file\" id=\"file\">
        <input type=\"submit\" value=\"Sauvegarder\" name=\"save\">
    </form>
";
        
        $__internal_a7cc7fa737ea96fca3a341647895f23ce28c4d383ef47ea5b16c1d03a8cc46db->leave($__internal_a7cc7fa737ea96fca3a341647895f23ce28c4d383ef47ea5b16c1d03a8cc46db_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Picture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 7,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* {% block profile_pic %}*/
/*     {{ user[0].username }}*/
/* {% endblock profile_pic %}*/
/*     {% block fos_user_content %}*/
/* */
/*     <script src="{{ asset("asset/picture.js") }}"></script>*/
/* */
/*      <img class="profil_picture" src="{{ asset(user[0].path) }}" alt="{{ user[0].username }}">*/
/*     <form method="post" id="upload_pic">*/
/*         <input type="file" name="file" id="file">*/
/*         <input type="submit" value="Sauvegarder" name="save">*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
