<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e6316a257575e50f99a7cecf0749964d1634989cd4f710a9d73d505f6f8d4608 extends Twig_Template
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
        $__internal_9ca801d6f7a52512b3cf9802111c4a15683c7a36fca213eab6b4c8acd85ec9d9 = $this->env->getExtension("native_profiler");
        $__internal_9ca801d6f7a52512b3cf9802111c4a15683c7a36fca213eab6b4c8acd85ec9d9->enter($__internal_9ca801d6f7a52512b3cf9802111c4a15683c7a36fca213eab6b4c8acd85ec9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9ca801d6f7a52512b3cf9802111c4a15683c7a36fca213eab6b4c8acd85ec9d9->leave($__internal_9ca801d6f7a52512b3cf9802111c4a15683c7a36fca213eab6b4c8acd85ec9d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
