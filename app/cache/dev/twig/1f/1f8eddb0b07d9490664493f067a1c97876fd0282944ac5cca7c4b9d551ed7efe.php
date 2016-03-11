<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_768562ae14023af3f365f15318ff44b5bb5c46e78ea4f0faef81d7c2779f90ac extends Twig_Template
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
        $__internal_370eded40d53931486e4f8b90ad14f442e040f7edcc2333d0f41593cc175add9 = $this->env->getExtension("native_profiler");
        $__internal_370eded40d53931486e4f8b90ad14f442e040f7edcc2333d0f41593cc175add9->enter($__internal_370eded40d53931486e4f8b90ad14f442e040f7edcc2333d0f41593cc175add9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_370eded40d53931486e4f8b90ad14f442e040f7edcc2333d0f41593cc175add9->leave($__internal_370eded40d53931486e4f8b90ad14f442e040f7edcc2333d0f41593cc175add9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
