<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f67072849b099ee42dacabe1038645a1c44f793a9ea3081d158c2231b40ebb45 extends Twig_Template
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
        $__internal_d6f7848dcc170876ad92df290cf389c4bee1830d64450a0d254ac044960bf112 = $this->env->getExtension("native_profiler");
        $__internal_d6f7848dcc170876ad92df290cf389c4bee1830d64450a0d254ac044960bf112->enter($__internal_d6f7848dcc170876ad92df290cf389c4bee1830d64450a0d254ac044960bf112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d6f7848dcc170876ad92df290cf389c4bee1830d64450a0d254ac044960bf112->leave($__internal_d6f7848dcc170876ad92df290cf389c4bee1830d64450a0d254ac044960bf112_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
