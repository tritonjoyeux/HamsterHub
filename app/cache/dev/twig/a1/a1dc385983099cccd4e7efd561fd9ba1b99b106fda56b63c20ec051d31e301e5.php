<?php

/* HamsterHubBundle:Picture:index.html.twig */
class __TwigTemplate_ea3ac958bb9cd4bf9303f1767494d3d6ea17276b9975823e89f1db94d0fcf0e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "HamsterHubBundle:Picture:index.html.twig", 1);
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
        $__internal_6ec4e085333645aae7afe321ce3e4b33fca01a81ea6e7e8200bdfd5dbd99ab22 = $this->env->getExtension("native_profiler");
        $__internal_6ec4e085333645aae7afe321ce3e4b33fca01a81ea6e7e8200bdfd5dbd99ab22->enter($__internal_6ec4e085333645aae7afe321ce3e4b33fca01a81ea6e7e8200bdfd5dbd99ab22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Picture:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec4e085333645aae7afe321ce3e4b33fca01a81ea6e7e8200bdfd5dbd99ab22->leave($__internal_6ec4e085333645aae7afe321ce3e4b33fca01a81ea6e7e8200bdfd5dbd99ab22_prof);

    }

    // line 2
    public function block_profile_pic($context, array $blocks = array())
    {
        $__internal_bb4963a9a19105fe4190fa6ca6615ebb40667440a3f22e31fbfbb0d8f791dd67 = $this->env->getExtension("native_profiler");
        $__internal_bb4963a9a19105fe4190fa6ca6615ebb40667440a3f22e31fbfbb0d8f791dd67->enter($__internal_bb4963a9a19105fe4190fa6ca6615ebb40667440a3f22e31fbfbb0d8f791dd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile_pic"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 0, array(), "array"), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_bb4963a9a19105fe4190fa6ca6615ebb40667440a3f22e31fbfbb0d8f791dd67->leave($__internal_bb4963a9a19105fe4190fa6ca6615ebb40667440a3f22e31fbfbb0d8f791dd67_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6f9f6d19897164aabacdc9cf0669c6fbb5556329f112a6f806b71a3825b11ab = $this->env->getExtension("native_profiler");
        $__internal_b6f9f6d19897164aabacdc9cf0669c6fbb5556329f112a6f806b71a3825b11ab->enter($__internal_b6f9f6d19897164aabacdc9cf0669c6fbb5556329f112a6f806b71a3825b11ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b6f9f6d19897164aabacdc9cf0669c6fbb5556329f112a6f806b71a3825b11ab->leave($__internal_b6f9f6d19897164aabacdc9cf0669c6fbb5556329f112a6f806b71a3825b11ab_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Picture:index.html.twig";
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
