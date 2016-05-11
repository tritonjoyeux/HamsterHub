<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e329876d7295d6b29e19be83bebafb4bf069c1ef3a69cf9853c5f3937b15c244 extends Twig_Template
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
        $__internal_6d55c64bf4da9258427e59b5b636ac8a3d2236cfbf3d41ab952ff5581923d8d7 = $this->env->getExtension("native_profiler");
        $__internal_6d55c64bf4da9258427e59b5b636ac8a3d2236cfbf3d41ab952ff5581923d8d7->enter($__internal_6d55c64bf4da9258427e59b5b636ac8a3d2236cfbf3d41ab952ff5581923d8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6d55c64bf4da9258427e59b5b636ac8a3d2236cfbf3d41ab952ff5581923d8d7->leave($__internal_6d55c64bf4da9258427e59b5b636ac8a3d2236cfbf3d41ab952ff5581923d8d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
