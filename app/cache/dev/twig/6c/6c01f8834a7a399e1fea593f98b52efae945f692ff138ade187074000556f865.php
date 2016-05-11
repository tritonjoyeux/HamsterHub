<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7635f7a4dcf15d30f5fd7a6475c550edbfe8e1816296127984bedb66a6882626 extends Twig_Template
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
        $__internal_c85275e98700e89e9dc64ce1b22c88bd471d62662c614fc01d57378abfd55028 = $this->env->getExtension("native_profiler");
        $__internal_c85275e98700e89e9dc64ce1b22c88bd471d62662c614fc01d57378abfd55028->enter($__internal_c85275e98700e89e9dc64ce1b22c88bd471d62662c614fc01d57378abfd55028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c85275e98700e89e9dc64ce1b22c88bd471d62662c614fc01d57378abfd55028->leave($__internal_c85275e98700e89e9dc64ce1b22c88bd471d62662c614fc01d57378abfd55028_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
