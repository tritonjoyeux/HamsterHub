<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b1087c5fbcd965e912d9ba01fd6330c1e8c6a585b833b1658de2c530ce6c211f extends Twig_Template
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
        $__internal_cd8dfd02870f5781d5ae3401b6ff4d211ff00986389ee8421d754665800765ef = $this->env->getExtension("native_profiler");
        $__internal_cd8dfd02870f5781d5ae3401b6ff4d211ff00986389ee8421d754665800765ef->enter($__internal_cd8dfd02870f5781d5ae3401b6ff4d211ff00986389ee8421d754665800765ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cd8dfd02870f5781d5ae3401b6ff4d211ff00986389ee8421d754665800765ef->leave($__internal_cd8dfd02870f5781d5ae3401b6ff4d211ff00986389ee8421d754665800765ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
