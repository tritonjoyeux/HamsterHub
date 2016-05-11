<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_da94e60b14a241dc0ee643214e801127755d592fae9e5f0cd7b7fdc84c554e3d extends Twig_Template
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
        $__internal_d2b72569d5a6f6feb2b68caff172d543c07de20f97463227b76674f68f14c6d4 = $this->env->getExtension("native_profiler");
        $__internal_d2b72569d5a6f6feb2b68caff172d543c07de20f97463227b76674f68f14c6d4->enter($__internal_d2b72569d5a6f6feb2b68caff172d543c07de20f97463227b76674f68f14c6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d2b72569d5a6f6feb2b68caff172d543c07de20f97463227b76674f68f14c6d4->leave($__internal_d2b72569d5a6f6feb2b68caff172d543c07de20f97463227b76674f68f14c6d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
