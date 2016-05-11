<?php

/* HamsterHubBundle:Someone:index.html.twig */
class __TwigTemplate_310b975c7233a19c30e2e100058b0f0e6772dfb68313e05f23adb715a67d6f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle::layout.html.twig", "HamsterHubBundle:Someone:index.html.twig", 1);
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
        $__internal_d199334311941d830acb194fd39aed2bf8597f71bd6efd324037ff41cec6e4ac = $this->env->getExtension("native_profiler");
        $__internal_d199334311941d830acb194fd39aed2bf8597f71bd6efd324037ff41cec6e4ac->enter($__internal_d199334311941d830acb194fd39aed2bf8597f71bd6efd324037ff41cec6e4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Someone:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d199334311941d830acb194fd39aed2bf8597f71bd6efd324037ff41cec6e4ac->leave($__internal_d199334311941d830acb194fd39aed2bf8597f71bd6efd324037ff41cec6e4ac_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_382994340e2d0c1a1593b1f14d889593590ed2d46934d6a3f86891ab1919d476 = $this->env->getExtension("native_profiler");
        $__internal_382994340e2d0c1a1593b1f14d889593590ed2d46934d6a3f86891ab1919d476->enter($__internal_382994340e2d0c1a1593b1f14d889593590ed2d46934d6a3f86891ab1919d476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_382994340e2d0c1a1593b1f14d889593590ed2d46934d6a3f86891ab1919d476->leave($__internal_382994340e2d0c1a1593b1f14d889593590ed2d46934d6a3f86891ab1919d476_prof);

    }

    // line 24
    public function block_current_page($context, array $blocks = array())
    {
        $__internal_5c2f3faa4a0b9b6f71c6117c7113661324a75f62ba8b44931f29fd695543e1ac = $this->env->getExtension("native_profiler");
        $__internal_5c2f3faa4a0b9b6f71c6117c7113661324a75f62ba8b44931f29fd695543e1ac->enter($__internal_5c2f3faa4a0b9b6f71c6117c7113661324a75f62ba8b44931f29fd695543e1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        // line 25
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo " <img class=\"profil_picture\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["picture"]) ? $context["picture"] : $this->getContext($context, "picture"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "\">
";
        
        $__internal_5c2f3faa4a0b9b6f71c6117c7113661324a75f62ba8b44931f29fd695543e1ac->leave($__internal_5c2f3faa4a0b9b6f71c6117c7113661324a75f62ba8b44931f29fd695543e1ac_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Someone:index.html.twig";
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
