<?php

/* @HamsterHub/Someone/index.html.twig */
class __TwigTemplate_96206207424acdf2713ac36943b1b96d7acbef74159ae3ad8814a8e3a0db9050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "@HamsterHub/Someone/index.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'current_page' => array($this, 'block_current_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_934f0e802bd9f3b4e077d3e282a5d94cd80637a02d7812216a8276cb50e339d1 = $this->env->getExtension("native_profiler");
        $__internal_934f0e802bd9f3b4e077d3e282a5d94cd80637a02d7812216a8276cb50e339d1->enter($__internal_934f0e802bd9f3b4e077d3e282a5d94cd80637a02d7812216a8276cb50e339d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Someone/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934f0e802bd9f3b4e077d3e282a5d94cd80637a02d7812216a8276cb50e339d1->leave($__internal_934f0e802bd9f3b4e077d3e282a5d94cd80637a02d7812216a8276cb50e339d1_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0933899e1d86fc536cb3ef7c1e484a2daab0f67888701bc65858b3650e9661f3 = $this->env->getExtension("native_profiler");
        $__internal_0933899e1d86fc536cb3ef7c1e484a2daab0f67888701bc65858b3650e9661f3->enter($__internal_0933899e1d86fc536cb3ef7c1e484a2daab0f67888701bc65858b3650e9661f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <div id=\"content\" class=\"content\">
        <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/script.js"), "html", null, true);
        echo "\"></script>

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
                    <a href=\"/video/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "id", array()), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\">
                    </a>
                </li>
                <li class=\"video_user\">Utilisateur: <span class=\"user\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "user", array()), "html", null, true);
            echo "</span></li>
                <li class=\"video_description\">Description: <span class=\"description\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "description", array()), "html", null, true);
            echo "</span></li>
                <li class=\"video_date\">Mise en ligne le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    à ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["video"], "date", array()), "H:i:s"), "html", null, true);
            echo "</li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

";
        
        $__internal_0933899e1d86fc536cb3ef7c1e484a2daab0f67888701bc65858b3650e9661f3->leave($__internal_0933899e1d86fc536cb3ef7c1e484a2daab0f67888701bc65858b3650e9661f3_prof);

    }

    // line 24
    public function block_current_page($context, array $blocks = array())
    {
        $__internal_9aede5d0e20d9163ae8f68984e2ece2588aa23c56c145c2f51b161ddb64b9785 = $this->env->getExtension("native_profiler");
        $__internal_9aede5d0e20d9163ae8f68984e2ece2588aa23c56c145c2f51b161ddb64b9785->enter($__internal_9aede5d0e20d9163ae8f68984e2ece2588aa23c56c145c2f51b161ddb64b9785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        // line 25
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo " <img class=\"profil_picture\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["picture"]) ? $context["picture"] : $this->getContext($context, "picture"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "\">
";
        
        $__internal_9aede5d0e20d9163ae8f68984e2ece2588aa23c56c145c2f51b161ddb64b9785->leave($__internal_9aede5d0e20d9163ae8f68984e2ece2588aa23c56c145c2f51b161ddb64b9785_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Someone/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  101 => 24,  92 => 20,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  65 => 11,  61 => 10,  56 => 8,  53 => 7,  49 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends ("HamsterHubBundle::layout.html.twig") %}*/
/* {% block fos_user_content %}*/
/*     <div id="content" class="content">*/
/*         <script src="{{ asset("asset/script.js") }}"></script>*/
/* */
/*         {% for video in videos %}*/
/*             <ul class="videos">*/
/*                 <li class="video_name">Nom: {{ video.name }}</li>*/
/*                 <li class="video_img">*/
/*                     <a href="/video/{{ video.id }}">*/
/*                         <img src="{{ video.url }}">*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="video_user">Utilisateur: <span class="user">{{ video.user }}</span></li>*/
/*                 <li class="video_description">Description: <span class="description">{{ video.description }}</span></li>*/
/*                 <li class="video_date">Mise en ligne le {{ video.date|date("d/m/Y") }}*/
/*                     à {{ video.date|date("H:i:s") }}</li>*/
/*             </ul>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block current_page %}*/
/* {{ user }} <img class="profil_picture" src="{{ asset(picture) }}" alt="{{ user }}">*/
/* {% endblock current_page %}*/
