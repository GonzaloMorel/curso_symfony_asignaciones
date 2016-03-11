<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e6c4bf826bceee124f875340119cbf4ad2bc2962caee7892743e81f34f1ff6ee extends Twig_Template
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
        $__internal_5ad84e0533c1a7e82c94081aeea88f2843832c93e1b4c8c076d9247b434c9df3 = $this->env->getExtension("native_profiler");
        $__internal_5ad84e0533c1a7e82c94081aeea88f2843832c93e1b4c8c076d9247b434c9df3->enter($__internal_5ad84e0533c1a7e82c94081aeea88f2843832c93e1b4c8c076d9247b434c9df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5ad84e0533c1a7e82c94081aeea88f2843832c93e1b4c8c076d9247b434c9df3->leave($__internal_5ad84e0533c1a7e82c94081aeea88f2843832c93e1b4c8c076d9247b434c9df3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
