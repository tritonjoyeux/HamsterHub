<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f782d1e3ebb9ccfc797b5b23a4e4d238144431bafad77bc23b0f3073a166f215 extends Twig_Template
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
        $__internal_429fe46573176a7479eafcf502ab244f0fdb18ab1e0a1f3071e221f914b599f7 = $this->env->getExtension("native_profiler");
        $__internal_429fe46573176a7479eafcf502ab244f0fdb18ab1e0a1f3071e221f914b599f7->enter($__internal_429fe46573176a7479eafcf502ab244f0fdb18ab1e0a1f3071e221f914b599f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_429fe46573176a7479eafcf502ab244f0fdb18ab1e0a1f3071e221f914b599f7->leave($__internal_429fe46573176a7479eafcf502ab244f0fdb18ab1e0a1f3071e221f914b599f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
