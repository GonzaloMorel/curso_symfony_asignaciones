<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_69d1cb2921784988f71d16ee4b27d8d1de04b9e5f0db6b3e44d1536dfd76cf7c extends Twig_Template
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
        $__internal_7d8429453aa8d59bd68ec8903e9112bd5a5c3cc40504bf66dd62ffd1e5d2a799 = $this->env->getExtension("native_profiler");
        $__internal_7d8429453aa8d59bd68ec8903e9112bd5a5c3cc40504bf66dd62ffd1e5d2a799->enter($__internal_7d8429453aa8d59bd68ec8903e9112bd5a5c3cc40504bf66dd62ffd1e5d2a799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7d8429453aa8d59bd68ec8903e9112bd5a5c3cc40504bf66dd62ffd1e5d2a799->leave($__internal_7d8429453aa8d59bd68ec8903e9112bd5a5c3cc40504bf66dd62ffd1e5d2a799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
