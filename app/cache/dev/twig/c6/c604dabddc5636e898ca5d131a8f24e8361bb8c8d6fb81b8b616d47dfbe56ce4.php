<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d16b3d311ffc3ceaac006c842822a1fdf1ec47c4b3228460c418b060ccb36e9c extends Twig_Template
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
        $__internal_51404b4eecdfcecae5f54e24b6a888f6d39c099d859fe4438b687e744e2bd434 = $this->env->getExtension("native_profiler");
        $__internal_51404b4eecdfcecae5f54e24b6a888f6d39c099d859fe4438b687e744e2bd434->enter($__internal_51404b4eecdfcecae5f54e24b6a888f6d39c099d859fe4438b687e744e2bd434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_51404b4eecdfcecae5f54e24b6a888f6d39c099d859fe4438b687e744e2bd434->leave($__internal_51404b4eecdfcecae5f54e24b6a888f6d39c099d859fe4438b687e744e2bd434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
