<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b4ee05119ddcffb80d4156dbf9f473dfe184d9a7597254655d17c3d40b807e0a extends Twig_Template
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
        $__internal_6c479be2517564ab65cf8c82364bc1af16e9396d0f0c33785094e1f62aebee48 = $this->env->getExtension("native_profiler");
        $__internal_6c479be2517564ab65cf8c82364bc1af16e9396d0f0c33785094e1f62aebee48->enter($__internal_6c479be2517564ab65cf8c82364bc1af16e9396d0f0c33785094e1f62aebee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6c479be2517564ab65cf8c82364bc1af16e9396d0f0c33785094e1f62aebee48->leave($__internal_6c479be2517564ab65cf8c82364bc1af16e9396d0f0c33785094e1f62aebee48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
