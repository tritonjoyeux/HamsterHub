<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d8b63de8bacda332cf5c446dd08e934d8fecb932f6df8facd0bebc1135dc87e extends Twig_Template
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
        $__internal_57292ab52c4110a7539aa9fc9c5e9cb23b0d3dbc3da1a1a607c107bb82dcec1f = $this->env->getExtension("native_profiler");
        $__internal_57292ab52c4110a7539aa9fc9c5e9cb23b0d3dbc3da1a1a607c107bb82dcec1f->enter($__internal_57292ab52c4110a7539aa9fc9c5e9cb23b0d3dbc3da1a1a607c107bb82dcec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_57292ab52c4110a7539aa9fc9c5e9cb23b0d3dbc3da1a1a607c107bb82dcec1f->leave($__internal_57292ab52c4110a7539aa9fc9c5e9cb23b0d3dbc3da1a1a607c107bb82dcec1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
