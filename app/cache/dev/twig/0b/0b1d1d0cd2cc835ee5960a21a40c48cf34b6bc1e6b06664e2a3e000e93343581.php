<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6e18e8b91887eddfcd2225424a42bc639e2cce84694ba5f295a92a5b75806e89 extends Twig_Template
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
        $__internal_c278a7bc19a91148f83bd9756c0c9830591ea399eefe58f9d51494479710c699 = $this->env->getExtension("native_profiler");
        $__internal_c278a7bc19a91148f83bd9756c0c9830591ea399eefe58f9d51494479710c699->enter($__internal_c278a7bc19a91148f83bd9756c0c9830591ea399eefe58f9d51494479710c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c278a7bc19a91148f83bd9756c0c9830591ea399eefe58f9d51494479710c699->leave($__internal_c278a7bc19a91148f83bd9756c0c9830591ea399eefe58f9d51494479710c699_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
