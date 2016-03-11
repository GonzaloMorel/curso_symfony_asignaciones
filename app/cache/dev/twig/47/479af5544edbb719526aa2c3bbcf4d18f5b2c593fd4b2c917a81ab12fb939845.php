<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1b9336b0254cb0b661c64eb1ba75b220dd435a872eb7b630c20f14d6f203576a extends Twig_Template
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
        $__internal_8645ae8fcc7e507f7a4600a3a395767919fcb759a005a244a2d66089370385ac = $this->env->getExtension("native_profiler");
        $__internal_8645ae8fcc7e507f7a4600a3a395767919fcb759a005a244a2d66089370385ac->enter($__internal_8645ae8fcc7e507f7a4600a3a395767919fcb759a005a244a2d66089370385ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8645ae8fcc7e507f7a4600a3a395767919fcb759a005a244a2d66089370385ac->leave($__internal_8645ae8fcc7e507f7a4600a3a395767919fcb759a005a244a2d66089370385ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
