<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d1f96ff9aa7190b3a945640a27650c23a53a6b0b11101a220f1430966427e778 extends Twig_Template
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
        $__internal_d5e30c3e5bd5ec0c50fc7873f6ac865285aa33d5b65a44a76c0f121f0a0ce86f = $this->env->getExtension("native_profiler");
        $__internal_d5e30c3e5bd5ec0c50fc7873f6ac865285aa33d5b65a44a76c0f121f0a0ce86f->enter($__internal_d5e30c3e5bd5ec0c50fc7873f6ac865285aa33d5b65a44a76c0f121f0a0ce86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d5e30c3e5bd5ec0c50fc7873f6ac865285aa33d5b65a44a76c0f121f0a0ce86f->leave($__internal_d5e30c3e5bd5ec0c50fc7873f6ac865285aa33d5b65a44a76c0f121f0a0ce86f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
