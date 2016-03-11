<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_daada74bcf6c8a7587b5a0780da2dd71b0e61bf4d7fc62526d0815b205abe406 extends Twig_Template
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
        $__internal_fa1200d41f882761097b677c770a61d45fdf382b10ea9ba82f7288710af28020 = $this->env->getExtension("native_profiler");
        $__internal_fa1200d41f882761097b677c770a61d45fdf382b10ea9ba82f7288710af28020->enter($__internal_fa1200d41f882761097b677c770a61d45fdf382b10ea9ba82f7288710af28020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fa1200d41f882761097b677c770a61d45fdf382b10ea9ba82f7288710af28020->leave($__internal_fa1200d41f882761097b677c770a61d45fdf382b10ea9ba82f7288710af28020_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
