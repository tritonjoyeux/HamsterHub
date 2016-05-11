<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0def8dcc611ce934613b2425f5d9d559a41d04490a8965daeab90cff711fa667 extends Twig_Template
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
        $__internal_9977cf00e41b800a31343130b75aacf68661ce528918409493f330a156672307 = $this->env->getExtension("native_profiler");
        $__internal_9977cf00e41b800a31343130b75aacf68661ce528918409493f330a156672307->enter($__internal_9977cf00e41b800a31343130b75aacf68661ce528918409493f330a156672307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9977cf00e41b800a31343130b75aacf68661ce528918409493f330a156672307->leave($__internal_9977cf00e41b800a31343130b75aacf68661ce528918409493f330a156672307_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
