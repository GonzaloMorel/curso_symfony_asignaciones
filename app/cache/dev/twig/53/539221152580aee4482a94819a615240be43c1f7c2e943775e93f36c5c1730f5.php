<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_92d3c5f18bf51aa829e7fc902cde5ff1f9a4b0e02142952ecd650de3537c08e3 extends Twig_Template
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
        $__internal_a236dde23d62d9d77eb390a2aab1a120cb566cbc5ff3dc310d9bdf4df46e8572 = $this->env->getExtension("native_profiler");
        $__internal_a236dde23d62d9d77eb390a2aab1a120cb566cbc5ff3dc310d9bdf4df46e8572->enter($__internal_a236dde23d62d9d77eb390a2aab1a120cb566cbc5ff3dc310d9bdf4df46e8572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a236dde23d62d9d77eb390a2aab1a120cb566cbc5ff3dc310d9bdf4df46e8572->leave($__internal_a236dde23d62d9d77eb390a2aab1a120cb566cbc5ff3dc310d9bdf4df46e8572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
