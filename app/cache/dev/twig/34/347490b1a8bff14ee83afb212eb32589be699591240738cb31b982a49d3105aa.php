<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ad0ead844d0189c6d41567b1594d708553a532ce0843ed6252ea70bbb3b81bfa extends Twig_Template
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
        $__internal_7a754ab235919f5b264c43075bb9610f113d7da26a5f8d4e05c3f2244d2dd420 = $this->env->getExtension("native_profiler");
        $__internal_7a754ab235919f5b264c43075bb9610f113d7da26a5f8d4e05c3f2244d2dd420->enter($__internal_7a754ab235919f5b264c43075bb9610f113d7da26a5f8d4e05c3f2244d2dd420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7a754ab235919f5b264c43075bb9610f113d7da26a5f8d4e05c3f2244d2dd420->leave($__internal_7a754ab235919f5b264c43075bb9610f113d7da26a5f8d4e05c3f2244d2dd420_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
