<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_db81924daf9581a86e1d59b0c635322b311210b63c193200fe37af7ec0428dff extends Twig_Template
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
        $__internal_f872d70fbc4ff2387cc24ea988cef9e2272b4c0dcbc1e919461d236e956381ce = $this->env->getExtension("native_profiler");
        $__internal_f872d70fbc4ff2387cc24ea988cef9e2272b4c0dcbc1e919461d236e956381ce->enter($__internal_f872d70fbc4ff2387cc24ea988cef9e2272b4c0dcbc1e919461d236e956381ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f872d70fbc4ff2387cc24ea988cef9e2272b4c0dcbc1e919461d236e956381ce->leave($__internal_f872d70fbc4ff2387cc24ea988cef9e2272b4c0dcbc1e919461d236e956381ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
