<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6a877ee32fee1e8994320eed647fe2b4def1103691ce4f1c9570dc7778430540 extends Twig_Template
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
        $__internal_8174402b8f52340f709b68b52e9e83dcae036cb6c7295057d9b531c7a5bdb693 = $this->env->getExtension("native_profiler");
        $__internal_8174402b8f52340f709b68b52e9e83dcae036cb6c7295057d9b531c7a5bdb693->enter($__internal_8174402b8f52340f709b68b52e9e83dcae036cb6c7295057d9b531c7a5bdb693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8174402b8f52340f709b68b52e9e83dcae036cb6c7295057d9b531c7a5bdb693->leave($__internal_8174402b8f52340f709b68b52e9e83dcae036cb6c7295057d9b531c7a5bdb693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
