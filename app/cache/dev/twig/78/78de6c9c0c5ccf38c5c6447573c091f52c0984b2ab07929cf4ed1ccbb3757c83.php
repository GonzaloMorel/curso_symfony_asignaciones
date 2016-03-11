<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d281111859fa50f5f92c2cbd543491f077fda77043fd9b761975d2bcbfb1583a extends Twig_Template
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
        $__internal_f7b9a40a09a8da9efd3c011bdb585f2a265ba9b189d4bf89b4143d78a9206072 = $this->env->getExtension("native_profiler");
        $__internal_f7b9a40a09a8da9efd3c011bdb585f2a265ba9b189d4bf89b4143d78a9206072->enter($__internal_f7b9a40a09a8da9efd3c011bdb585f2a265ba9b189d4bf89b4143d78a9206072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f7b9a40a09a8da9efd3c011bdb585f2a265ba9b189d4bf89b4143d78a9206072->leave($__internal_f7b9a40a09a8da9efd3c011bdb585f2a265ba9b189d4bf89b4143d78a9206072_prof);

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
