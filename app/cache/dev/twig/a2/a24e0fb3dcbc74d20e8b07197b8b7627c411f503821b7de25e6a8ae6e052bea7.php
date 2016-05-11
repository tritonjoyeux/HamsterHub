<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9e1a6763c4c10768101aaeec54855bd7b21283d41186df86f0f30166eef801ef extends Twig_Template
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
        $__internal_26408642cfa652c7f0fa0b04816b80f8bbe82aafbbb8d116998fc33dc9fe3a15 = $this->env->getExtension("native_profiler");
        $__internal_26408642cfa652c7f0fa0b04816b80f8bbe82aafbbb8d116998fc33dc9fe3a15->enter($__internal_26408642cfa652c7f0fa0b04816b80f8bbe82aafbbb8d116998fc33dc9fe3a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_26408642cfa652c7f0fa0b04816b80f8bbe82aafbbb8d116998fc33dc9fe3a15->leave($__internal_26408642cfa652c7f0fa0b04816b80f8bbe82aafbbb8d116998fc33dc9fe3a15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
