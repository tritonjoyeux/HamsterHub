<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_09760aae8ab81b9c06a5888368ef3ac880c037a71a58d115924869a930f72bf5 extends Twig_Template
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
        $__internal_9e578f6fcc28bcc106cd61651cbb1471d04863925affeda013c4ce07047a1725 = $this->env->getExtension("native_profiler");
        $__internal_9e578f6fcc28bcc106cd61651cbb1471d04863925affeda013c4ce07047a1725->enter($__internal_9e578f6fcc28bcc106cd61651cbb1471d04863925affeda013c4ce07047a1725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9e578f6fcc28bcc106cd61651cbb1471d04863925affeda013c4ce07047a1725->leave($__internal_9e578f6fcc28bcc106cd61651cbb1471d04863925affeda013c4ce07047a1725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
