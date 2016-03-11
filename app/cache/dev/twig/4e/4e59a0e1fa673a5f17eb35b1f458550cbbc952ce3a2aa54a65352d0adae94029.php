<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0e8304997e907dabaee9785a8f556401e4b47e9db29030df844d7bf158444403 extends Twig_Template
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
        $__internal_b9bccf57ef99ca6bea33e00b745cc7de326bafc5aa5c32be9414e901d08b56fb = $this->env->getExtension("native_profiler");
        $__internal_b9bccf57ef99ca6bea33e00b745cc7de326bafc5aa5c32be9414e901d08b56fb->enter($__internal_b9bccf57ef99ca6bea33e00b745cc7de326bafc5aa5c32be9414e901d08b56fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b9bccf57ef99ca6bea33e00b745cc7de326bafc5aa5c32be9414e901d08b56fb->leave($__internal_b9bccf57ef99ca6bea33e00b745cc7de326bafc5aa5c32be9414e901d08b56fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
