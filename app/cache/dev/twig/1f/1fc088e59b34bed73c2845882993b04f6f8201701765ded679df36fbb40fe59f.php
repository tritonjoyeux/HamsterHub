<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c8f992577d651a717073c98bb6432db9636b3ce83bfee01eced6f04f384ea962 extends Twig_Template
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
        $__internal_e8eb936ef566755205ce0c5cad0fe56569aa83936569e39e9bf3b4a7e17f2cea = $this->env->getExtension("native_profiler");
        $__internal_e8eb936ef566755205ce0c5cad0fe56569aa83936569e39e9bf3b4a7e17f2cea->enter($__internal_e8eb936ef566755205ce0c5cad0fe56569aa83936569e39e9bf3b4a7e17f2cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e8eb936ef566755205ce0c5cad0fe56569aa83936569e39e9bf3b4a7e17f2cea->leave($__internal_e8eb936ef566755205ce0c5cad0fe56569aa83936569e39e9bf3b4a7e17f2cea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
