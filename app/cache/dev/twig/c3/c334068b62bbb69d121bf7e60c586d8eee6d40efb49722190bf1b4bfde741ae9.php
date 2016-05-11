<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fa31fc094185b2670ff8d129330b7fbffbafa42749634edf93c35ff15edaf79a extends Twig_Template
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
        $__internal_f496efd39dab510a1872742447e14886d4de3121603d6b5f51a1c4c6fff6124f = $this->env->getExtension("native_profiler");
        $__internal_f496efd39dab510a1872742447e14886d4de3121603d6b5f51a1c4c6fff6124f->enter($__internal_f496efd39dab510a1872742447e14886d4de3121603d6b5f51a1c4c6fff6124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f496efd39dab510a1872742447e14886d4de3121603d6b5f51a1c4c6fff6124f->leave($__internal_f496efd39dab510a1872742447e14886d4de3121603d6b5f51a1c4c6fff6124f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
