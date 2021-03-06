<?php

/* @HamsterHub/Default/index.html.twig */
class __TwigTemplate_feff8ed801a3e435276893d307f5e53870627a5ba1f42774869b344b6195f28f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/Default/index.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de49884b26cb7d1df87098b64bb64d29a31ec3e9ede6e14cb254f1928fe90cd0 = $this->env->getExtension("native_profiler");
        $__internal_de49884b26cb7d1df87098b64bb64d29a31ec3e9ede6e14cb254f1928fe90cd0->enter($__internal_de49884b26cb7d1df87098b64bb64d29a31ec3e9ede6e14cb254f1928fe90cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de49884b26cb7d1df87098b64bb64d29a31ec3e9ede6e14cb254f1928fe90cd0->leave($__internal_de49884b26cb7d1df87098b64bb64d29a31ec3e9ede6e14cb254f1928fe90cd0_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a55a146b7534d6836cb74b7cad363b86673ad3dc74de91802771ce2afdf31f8d = $this->env->getExtension("native_profiler");
        $__internal_a55a146b7534d6836cb74b7cad363b86673ad3dc74de91802771ce2afdf31f8d->enter($__internal_a55a146b7534d6836cb74b7cad363b86673ad3dc74de91802771ce2afdf31f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/script.js"), "html", null, true);
        echo "\"></script>
    <div id=\"content\" class=\"content\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 8
            echo "            <ul class=\"videos\">
                <li class=\"video_name\">Nom: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array()), "html", null, true);
            echo "</li>
                <li class=\"video_img\">
                    <a href=\"/video/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\">
                    </a>
                </li>
                <li class=\"video_user\">Utilisateur: <a href=\"/profile/show/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "idUser", array()), "html", null, true);
            echo "\"><span class=\"user\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "user", array()), "html", null, true);
            echo "</span></a></li>
                <li class=\"video_description\">Description: <span class=\"description\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "description", array()), "html", null, true);
            echo "</span></li>
                <li class=\"video_date\">Mise en ligne le ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    à ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "H:i:s"), "html", null, true);
            echo "</li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
";
        
        $__internal_a55a146b7534d6836cb74b7cad363b86673ad3dc74de91802771ce2afdf31f8d->leave($__internal_a55a146b7534d6836cb74b7cad363b86673ad3dc74de91802771ce2afdf31f8d_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  87 => 18,  83 => 17,  79 => 16,  73 => 15,  65 => 12,  61 => 11,  56 => 9,  53 => 8,  49 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* {% block fos_user_content %}*/
/* */
/*     <script src="{{ asset("asset/script.js") }}"></script>*/
/*     <div id="content" class="content">*/
/* */
/*         {% for video in videos %}*/
/*             <ul class="videos">*/
/*                 <li class="video_name">Nom: {{ video.name }}</li>*/
/*                 <li class="video_img">*/
/*                     <a href="/video/{{ video.id }}">*/
/*                         <img src="{{ video.url }}" alt="{{ video.url }}">*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="video_user">Utilisateur: <a href="/profile/show/{{ video.idUser }}"><span class="user">{{ video.user }}</span></a></li>*/
/*                 <li class="video_description">Description: <span class="description">{{ video.description }}</span></li>*/
/*                 <li class="video_date">Mise en ligne le {{ video.date|date("d/m/Y") }}*/
/*                     à {{ video.date|date("H:i:s") }}</li>*/
/*             </ul>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
