<?php

/* @HamsterHub/Registration/register_content.html.twig */
class __TwigTemplate_f49c669f8ecc3326e2301db3c7f2dd7a6d271d8cba2d5366eb17ab5d29613884 extends Twig_Template
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
        $__internal_6e68b506c4861b5c9805d6ac4ffea5e8d68ef2481482000147a28ee54890f312 = $this->env->getExtension("native_profiler");
        $__internal_6e68b506c4861b5c9805d6ac4ffea5e8d68ef2481482000147a28ee54890f312->enter($__internal_6e68b506c4861b5c9805d6ac4ffea5e8d68ef2481482000147a28ee54890f312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Registration/register_content.html.twig"));

        // line 2
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("asset/register.js"), "html", null, true);
        echo "\"></script>

";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6e68b506c4861b5c9805d6ac4ffea5e8d68ef2481482000147a28ee54890f312->leave($__internal_6e68b506c4861b5c9805d6ac4ffea5e8d68ef2481482000147a28ee54890f312_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  37 => 7,  32 => 5,  28 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <script src="{{ asset("asset/register.js") }}"></script>*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
