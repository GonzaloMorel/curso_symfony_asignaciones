<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_24ba875b26be6bd335f46b02a4d24e8b1e94b237d388d85fc83c293005d9b413 extends Twig_Template
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
        $__internal_90a1ccccf015468de0b8dea25f8ff21a003b81c7364d88592edd7b730aa1e342 = $this->env->getExtension("native_profiler");
        $__internal_90a1ccccf015468de0b8dea25f8ff21a003b81c7364d88592edd7b730aa1e342->enter($__internal_90a1ccccf015468de0b8dea25f8ff21a003b81c7364d88592edd7b730aa1e342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_90a1ccccf015468de0b8dea25f8ff21a003b81c7364d88592edd7b730aa1e342->leave($__internal_90a1ccccf015468de0b8dea25f8ff21a003b81c7364d88592edd7b730aa1e342_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
