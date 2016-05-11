<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2d829153812f2c44bef0397f347379034b4677f10d9970b8a402fd77900b4286 extends Twig_Template
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
        $__internal_33321da42646d4a2fe14102bf36663bb8f30cb312f0a3cd89ab119e375684369 = $this->env->getExtension("native_profiler");
        $__internal_33321da42646d4a2fe14102bf36663bb8f30cb312f0a3cd89ab119e375684369->enter($__internal_33321da42646d4a2fe14102bf36663bb8f30cb312f0a3cd89ab119e375684369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_33321da42646d4a2fe14102bf36663bb8f30cb312f0a3cd89ab119e375684369->leave($__internal_33321da42646d4a2fe14102bf36663bb8f30cb312f0a3cd89ab119e375684369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
