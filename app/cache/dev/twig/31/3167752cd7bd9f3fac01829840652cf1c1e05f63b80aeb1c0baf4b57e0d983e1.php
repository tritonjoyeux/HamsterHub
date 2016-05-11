<?php

/* @HamsterHub/my_video/index.html.twig */
class __TwigTemplate_3257b20a7530df9c93693e1197f61ea3643c418680f44b84ee136806d29330ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/my_video/index.html.twig", 1);
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
        $__internal_8b4f91aa242e129d21da588ecbe266666925c6dcb9e9fa19e3fd39687d9c9809 = $this->env->getExtension("native_profiler");
        $__internal_8b4f91aa242e129d21da588ecbe266666925c6dcb9e9fa19e3fd39687d9c9809->enter($__internal_8b4f91aa242e129d21da588ecbe266666925c6dcb9e9fa19e3fd39687d9c9809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/my_video/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4f91aa242e129d21da588ecbe266666925c6dcb9e9fa19e3fd39687d9c9809->leave($__internal_8b4f91aa242e129d21da588ecbe266666925c6dcb9e9fa19e3fd39687d9c9809_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb7bc614257b3fd7466757f197fed07f182a85303611ea402d3a50f9d75ac2e8 = $this->env->getExtension("native_profiler");
        $__internal_bb7bc614257b3fd7466757f197fed07f182a85303611ea402d3a50f9d75ac2e8->enter($__internal_bb7bc614257b3fd7466757f197fed07f182a85303611ea402d3a50f9d75ac2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/delete_video.js"), "html", null, true);
        echo "\"></script>
    <div id=\"content\" class=\"content\">
        ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "            <div class=\"post\" id=\"post\">
                <div id=\"loader\" class=\"loader\"><img src=\"http://tritonjoyeux.fr/gears.svg\" alt=\"loader\"></div>
                <div id=\"post_content\">
                    <a class=\"close\" href=\"#\">&times;</a>
                    <form method=\"post\" id=\"post_video\">
                        <span id=\"name\">Nom: <input type=\"text\" name=\"name\" class=\"input_name\"></span><br>
                    <span class=\"desc\">Description: <textarea name=\"description\" class=\"input_description\"
                                                              placeholder=\"Une jolie description ...\"></textarea></span><br>
                        <span id=\"url\">URL: <input type=\"text\" name=\"url\" class=\"input_url\"></span><br>
                        <input type=\"submit\" name=\"formVideo\" value=\"Upload\" class=\"input_submit\">
                    </form>
                </div>
            </div>
        ";
        }
        // line 21
        echo "        <ul class=\"videos\"></ul>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 23
            echo "            <ul class=\"videos\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                <li class=\"video_name\">Nom: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array()), "html", null, true);
            echo "</li>
                <li class=\"video_img\">
                    <a href=\"/video/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\">
                    </a>
                </li>
                <li class=\"video_user\">Utilisateur: <a href=\"/profile/show/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "idUser", array()), "html", null, true);
            echo "\"><span class=\"user\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "user", array()), "html", null, true);
            echo "</span></a></li>
                <li class=\"video_description\">Description: <span class=\"description\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "description", array()), "html", null, true);
            echo "</span></li>
                <li class=\"video_date\">Mise en ligne le ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    à ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "H:i:s"), "html", null, true);
            echo "</li>
                <form method=\"post\" class=\"delete_video\">
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                    <input type=\"submit\" name=\"delete\" value=\"Supprimer\" class=\"input_submit\">
                </form>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
";
        
        $__internal_bb7bc614257b3fd7466757f197fed07f182a85303611ea402d3a50f9d75ac2e8->leave($__internal_bb7bc614257b3fd7466757f197fed07f182a85303611ea402d3a50f9d75ac2e8_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/my_video/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  116 => 35,  111 => 33,  107 => 32,  103 => 31,  97 => 30,  89 => 27,  85 => 26,  80 => 24,  75 => 23,  71 => 22,  68 => 21,  52 => 7,  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* {% block fos_user_content %}*/
/*     <script src="{{ asset("asset/script.js") }}"></script>*/
/*     <script src="{{ asset("asset/delete_video.js") }}"></script>*/
/*     <div id="content" class="content">*/
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             <div class="post" id="post">*/
/*                 <div id="loader" class="loader"><img src="http://tritonjoyeux.fr/gears.svg" alt="loader"></div>*/
/*                 <div id="post_content">*/
/*                     <a class="close" href="#">&times;</a>*/
/*                     <form method="post" id="post_video">*/
/*                         <span id="name">Nom: <input type="text" name="name" class="input_name"></span><br>*/
/*                     <span class="desc">Description: <textarea name="description" class="input_description"*/
/*                                                               placeholder="Une jolie description ..."></textarea></span><br>*/
/*                         <span id="url">URL: <input type="text" name="url" class="input_url"></span><br>*/
/*                         <input type="submit" name="formVideo" value="Upload" class="input_submit">*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <ul class="videos"></ul>*/
/*         {% for video in videos %}*/
/*             <ul class="videos" id="{{ video.id }}">*/
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
/*                 <form method="post" class="delete_video">*/
/*                     <input type="hidden" name="id" value="{{ video.id }}">*/
/*                     <input type="submit" name="delete" value="Supprimer" class="input_submit">*/
/*                 </form>*/
/*             </ul>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
