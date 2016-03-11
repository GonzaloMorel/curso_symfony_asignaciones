<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_580d687c73029af27259b744758bce55a22d5bf30ca04c5ba67477a969a9bb56 extends Twig_Template
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
        $__internal_83f64fd99e68fa92db0d75ac4db8e2e104e38a74ecf3a303f8974a5c09da11d2 = $this->env->getExtension("native_profiler");
        $__internal_83f64fd99e68fa92db0d75ac4db8e2e104e38a74ecf3a303f8974a5c09da11d2->enter($__internal_83f64fd99e68fa92db0d75ac4db8e2e104e38a74ecf3a303f8974a5c09da11d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_83f64fd99e68fa92db0d75ac4db8e2e104e38a74ecf3a303f8974a5c09da11d2->leave($__internal_83f64fd99e68fa92db0d75ac4db8e2e104e38a74ecf3a303f8974a5c09da11d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
