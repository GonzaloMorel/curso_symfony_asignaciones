<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_38ac2a9bb982a3ba99fc43a9d0e6b3dc996ee95a2becbeea4bf5e0336d06dc3c extends Twig_Template
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
        $__internal_361687a9b4a73c819bce459160f794afaa9ce9ffe1fd9ce8fb2868e11c5b7db8 = $this->env->getExtension("native_profiler");
        $__internal_361687a9b4a73c819bce459160f794afaa9ce9ffe1fd9ce8fb2868e11c5b7db8->enter($__internal_361687a9b4a73c819bce459160f794afaa9ce9ffe1fd9ce8fb2868e11c5b7db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_361687a9b4a73c819bce459160f794afaa9ce9ffe1fd9ce8fb2868e11c5b7db8->leave($__internal_361687a9b4a73c819bce459160f794afaa9ce9ffe1fd9ce8fb2868e11c5b7db8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
