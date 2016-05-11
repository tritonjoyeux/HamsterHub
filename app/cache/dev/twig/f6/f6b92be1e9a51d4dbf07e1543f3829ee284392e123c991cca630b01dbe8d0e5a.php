<?php

/* @HamsterHub/video/index.html.twig */
class __TwigTemplate_feb64388fb128579fa1eea4d4da6cc8c086ead88cb299f5cf6a87c6c9c64031a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/video/index.html.twig", 1);
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
        $__internal_a7cd32425f2475d51f857da013725a67db5025c55b6708c1408997b5c9b1534a = $this->env->getExtension("native_profiler");
        $__internal_a7cd32425f2475d51f857da013725a67db5025c55b6708c1408997b5c9b1534a->enter($__internal_a7cd32425f2475d51f857da013725a67db5025c55b6708c1408997b5c9b1534a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/video/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7cd32425f2475d51f857da013725a67db5025c55b6708c1408997b5c9b1534a->leave($__internal_a7cd32425f2475d51f857da013725a67db5025c55b6708c1408997b5c9b1534a_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1abbdc1ae66eb5b9d22ed0e3ade7cc1c8dab1bb7f0d9ef6f7501ff692c634f87 = $this->env->getExtension("native_profiler");
        $__internal_1abbdc1ae66eb5b9d22ed0e3ade7cc1c8dab1bb7f0d9ef6f7501ff692c634f87->enter($__internal_1abbdc1ae66eb5b9d22ed0e3ade7cc1c8dab1bb7f0d9ef6f7501ff692c634f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/comment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/delete_comment.js"), "html", null, true);
        echo "\"></script>
    <div id=\"content\" class=\"content\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 7
            echo "            <ul class=\"videos\">
                <li class=\"video_name\">Nom: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "name", array()), "html", null, true);
            echo "</li>
                <li class=\"video_img\">
                    <iframe width=\"250\" height=\"150\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\" allowfullscreen></iframe>
                </li>
                <li class=\"video_user\">Utilisateur: <span class=\"user\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "user", array()), "html", null, true);
            echo "</span></li>
                <li class=\"video_description\">Description: <span class=\"description\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "description", array()), "html", null, true);
            echo "</span></li>
                <li class=\"video_date\">Mise en ligne le ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    à ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "H:i:s"), "html", null, true);
            echo "</li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "            <form method=\"post\" id=\"form_com\">
                <span class=\"desc\">Commentaire: <textarea name=\"comment\" class=\"input_description\" id=\"comment\"
                                                          placeholder=\"Une petit commentaire ...\"></textarea></span><br>
                <input type=\"submit\" name=\"formComment\" value=\"Comment\" class=\"input_submit\">
            </form>
        ";
        }
        // line 25
        echo "        <ul class=\"comment\"></ul>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 27
            echo "            <ul class=\"comment\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
                <li class=\"video_user\">Utilisateur: <a href=\"/profile/show/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "idUser", array()), "html", null, true);
            echo "\"><span
                                class=\"user\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
            echo "</span></a></li>
                <li class=\"video_description\">Commentaire: <span class=\"description\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</span></li>
                <li class=\"video_date\">Mise en ligne le ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    à ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "H:i:s"), "html", null, true);
            echo "</li>
                ";
            // line 33
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
                // line 34
                echo "                    ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == $this->getAttribute($context["comment"], "user", array()))) {
                    // line 35
                    echo "                        <form method=\"post\" class=\"delete_comm\">
                            <input type=\"hidden\" name=\"id\" value=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\">
                            <input type=\"submit\" name=\"delete\" value=\"Supprimer\" class=\"input_submit\">
                        </form>
                    ";
                }
                // line 40
                echo "                ";
            }
            // line 41
            echo "            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
";
        
        $__internal_1abbdc1ae66eb5b9d22ed0e3ade7cc1c8dab1bb7f0d9ef6f7501ff692c634f87->leave($__internal_1abbdc1ae66eb5b9d22ed0e3ade7cc1c8dab1bb7f0d9ef6f7501ff692c634f87_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/video/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 43,  149 => 41,  146 => 40,  139 => 36,  136 => 35,  133 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 27,  102 => 26,  99 => 25,  91 => 19,  88 => 18,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  62 => 10,  57 => 8,  54 => 7,  50 => 6,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* {% block fos_user_content %}*/
/*     <script src="{{ asset("asset/comment.js") }}"></script>*/
/*     <script src="{{ asset("asset/delete_comment.js") }}"></script>*/
/*     <div id="content" class="content">*/
/*         {% for video in videos %}*/
/*             <ul class="videos">*/
/*                 <li class="video_name">Nom: {{ video.name }}</li>*/
/*                 <li class="video_img">*/
/*                     <iframe width="250" height="150" src="{{ video.url }}" allowfullscreen></iframe>*/
/*                 </li>*/
/*                 <li class="video_user">Utilisateur: <span class="user">{{ video.user }}</span></li>*/
/*                 <li class="video_description">Description: <span class="description">{{ video.description }}</span></li>*/
/*                 <li class="video_date">Mise en ligne le {{ video.date|date("d/m/Y") }}*/
/*                     à {{ video.date|date("H:i:s") }}</li>*/
/*             </ul>*/
/*         {% endfor %}*/
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             <form method="post" id="form_com">*/
/*                 <span class="desc">Commentaire: <textarea name="comment" class="input_description" id="comment"*/
/*                                                           placeholder="Une petit commentaire ..."></textarea></span><br>*/
/*                 <input type="submit" name="formComment" value="Comment" class="input_submit">*/
/*             </form>*/
/*         {% endif %}*/
/*         <ul class="comment"></ul>*/
/*         {% for comment in comments %}*/
/*             <ul class="comment" id="{{ comment.id }}">*/
/*                 <li class="video_user">Utilisateur: <a href="/profile/show/{{ comment.idUser }}"><span*/
/*                                 class="user">{{ comment.user }}</span></a></li>*/
/*                 <li class="video_description">Commentaire: <span class="description">{{ comment.content }}</span></li>*/
/*                 <li class="video_date">Mise en ligne le {{ comment.date|date("d/m/Y") }}*/
/*                     à {{ comment.date|date("H:i:s") }}</li>*/
/*                 {% if app.user.username is defined %}*/
/*                     {% if app.user.username == comment.user %}*/
/*                         <form method="post" class="delete_comm">*/
/*                             <input type="hidden" name="id" value="{{ comment.id }}">*/
/*                             <input type="submit" name="delete" value="Supprimer" class="input_submit">*/
/*                         </form>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             </ul>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
