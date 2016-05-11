<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_eb6f12df8050d029c76deb8c3fe60deb506213008dd2e68dd1be174c9f2da73c extends Twig_Template
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
        $__internal_9a44e4ae9fa52c5a1638556cf2f1d306a4b124dbdf13612f1dbd814eb0ac0f1a = $this->env->getExtension("native_profiler");
        $__internal_9a44e4ae9fa52c5a1638556cf2f1d306a4b124dbdf13612f1dbd814eb0ac0f1a->enter($__internal_9a44e4ae9fa52c5a1638556cf2f1d306a4b124dbdf13612f1dbd814eb0ac0f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9a44e4ae9fa52c5a1638556cf2f1d306a4b124dbdf13612f1dbd814eb0ac0f1a->leave($__internal_9a44e4ae9fa52c5a1638556cf2f1d306a4b124dbdf13612f1dbd814eb0ac0f1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
