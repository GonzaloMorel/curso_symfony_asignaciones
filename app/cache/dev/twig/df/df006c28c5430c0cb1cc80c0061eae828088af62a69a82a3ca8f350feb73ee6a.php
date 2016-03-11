<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_afe21bdd5f699efac50944cd92d1551f932c4df124f84a5d16cc3b7c4490c4b2 extends Twig_Template
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
        $__internal_4c9ad7d7167f31454cea4053589de2c6bdb6853921244a11cafb50e240f18407 = $this->env->getExtension("native_profiler");
        $__internal_4c9ad7d7167f31454cea4053589de2c6bdb6853921244a11cafb50e240f18407->enter($__internal_4c9ad7d7167f31454cea4053589de2c6bdb6853921244a11cafb50e240f18407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4c9ad7d7167f31454cea4053589de2c6bdb6853921244a11cafb50e240f18407->leave($__internal_4c9ad7d7167f31454cea4053589de2c6bdb6853921244a11cafb50e240f18407_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
