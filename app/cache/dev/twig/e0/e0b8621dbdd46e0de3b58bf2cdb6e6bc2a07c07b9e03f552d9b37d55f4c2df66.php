<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_86c00e8772880b473e5910a1fe5149a949b95687ae96375991094a15263cb1eb extends Twig_Template
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
        $__internal_0c9eafcbe57e64c2cff929cfb99cd1731b876da6f359b1ee2167102c4e6a9725 = $this->env->getExtension("native_profiler");
        $__internal_0c9eafcbe57e64c2cff929cfb99cd1731b876da6f359b1ee2167102c4e6a9725->enter($__internal_0c9eafcbe57e64c2cff929cfb99cd1731b876da6f359b1ee2167102c4e6a9725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0c9eafcbe57e64c2cff929cfb99cd1731b876da6f359b1ee2167102c4e6a9725->leave($__internal_0c9eafcbe57e64c2cff929cfb99cd1731b876da6f359b1ee2167102c4e6a9725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
