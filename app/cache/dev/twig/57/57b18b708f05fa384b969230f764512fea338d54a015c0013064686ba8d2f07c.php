<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_37f794dd9e2e80ffe29a4cfb94b0ce8f3fd1a1a2098f239dc9e122023b9c83e3 extends Twig_Template
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
        $__internal_b6925352579d83822ac1f559c4808cb7b6a0e0f2bee50812d91c61087b272d41 = $this->env->getExtension("native_profiler");
        $__internal_b6925352579d83822ac1f559c4808cb7b6a0e0f2bee50812d91c61087b272d41->enter($__internal_b6925352579d83822ac1f559c4808cb7b6a0e0f2bee50812d91c61087b272d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b6925352579d83822ac1f559c4808cb7b6a0e0f2bee50812d91c61087b272d41->leave($__internal_b6925352579d83822ac1f559c4808cb7b6a0e0f2bee50812d91c61087b272d41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
