<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_136c5d4c784d4f5e4413b478c1cfa7ba689db86e7a8b53e654181d515ee6af80 extends Twig_Template
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
        $__internal_6b89535df05bb2931280279a3c5223e5780477021ba82d0a170ec2cb792be444 = $this->env->getExtension("native_profiler");
        $__internal_6b89535df05bb2931280279a3c5223e5780477021ba82d0a170ec2cb792be444->enter($__internal_6b89535df05bb2931280279a3c5223e5780477021ba82d0a170ec2cb792be444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6b89535df05bb2931280279a3c5223e5780477021ba82d0a170ec2cb792be444->leave($__internal_6b89535df05bb2931280279a3c5223e5780477021ba82d0a170ec2cb792be444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
