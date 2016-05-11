<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9718f87595695eb92d9a147f05dc796598f9c867c945e68f87b74273e9b3a1e4 extends Twig_Template
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
        $__internal_df09e493e225b7b9df102df90e9423d2153bec33ed0841908cba804cadf46a27 = $this->env->getExtension("native_profiler");
        $__internal_df09e493e225b7b9df102df90e9423d2153bec33ed0841908cba804cadf46a27->enter($__internal_df09e493e225b7b9df102df90e9423d2153bec33ed0841908cba804cadf46a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_df09e493e225b7b9df102df90e9423d2153bec33ed0841908cba804cadf46a27->leave($__internal_df09e493e225b7b9df102df90e9423d2153bec33ed0841908cba804cadf46a27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
