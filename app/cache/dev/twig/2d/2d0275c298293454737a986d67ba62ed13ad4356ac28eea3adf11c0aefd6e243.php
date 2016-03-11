<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b77cd230856111c39275e657b3cd650945425e55628fcdb2bb4099ebf13eb720 extends Twig_Template
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
        $__internal_15ba85b183fd794162fdcd8ac9d379cf48be44bea8ed15730ff9c88fe101714d = $this->env->getExtension("native_profiler");
        $__internal_15ba85b183fd794162fdcd8ac9d379cf48be44bea8ed15730ff9c88fe101714d->enter($__internal_15ba85b183fd794162fdcd8ac9d379cf48be44bea8ed15730ff9c88fe101714d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_15ba85b183fd794162fdcd8ac9d379cf48be44bea8ed15730ff9c88fe101714d->leave($__internal_15ba85b183fd794162fdcd8ac9d379cf48be44bea8ed15730ff9c88fe101714d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
