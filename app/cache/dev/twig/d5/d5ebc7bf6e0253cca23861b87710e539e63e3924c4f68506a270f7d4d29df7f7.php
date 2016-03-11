<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3fd12eab54c4424614be3953e8888f3cd21fb1b4090b67a08d76bc63af6d00a4 extends Twig_Template
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
        $__internal_d7f45a71e80eda6d24bb40d8f16709f3c330120a96cfe52bb4c963b95dce41fc = $this->env->getExtension("native_profiler");
        $__internal_d7f45a71e80eda6d24bb40d8f16709f3c330120a96cfe52bb4c963b95dce41fc->enter($__internal_d7f45a71e80eda6d24bb40d8f16709f3c330120a96cfe52bb4c963b95dce41fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d7f45a71e80eda6d24bb40d8f16709f3c330120a96cfe52bb4c963b95dce41fc->leave($__internal_d7f45a71e80eda6d24bb40d8f16709f3c330120a96cfe52bb4c963b95dce41fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
