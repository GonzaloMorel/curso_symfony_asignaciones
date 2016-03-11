<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a47fda62036a94f81ea62704bcf2c39c41b4075931c9f3d8070313bc1625de2f extends Twig_Template
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
        $__internal_94af3a98ec745c73afc9ff6f0d620a66eb53a25f7301149a9c5b4d7dfd9fee62 = $this->env->getExtension("native_profiler");
        $__internal_94af3a98ec745c73afc9ff6f0d620a66eb53a25f7301149a9c5b4d7dfd9fee62->enter($__internal_94af3a98ec745c73afc9ff6f0d620a66eb53a25f7301149a9c5b4d7dfd9fee62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_94af3a98ec745c73afc9ff6f0d620a66eb53a25f7301149a9c5b4d7dfd9fee62->leave($__internal_94af3a98ec745c73afc9ff6f0d620a66eb53a25f7301149a9c5b4d7dfd9fee62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
