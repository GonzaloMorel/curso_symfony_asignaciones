<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3cafb3d5e52f7747b79a1878722dadec9b8088d4df13e912cd8d05c51af5dde7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e327d961c064435e2c10595312e8e42f1c1beb49a3b11b11672585bed90cdcbe = $this->env->getExtension("native_profiler");
        $__internal_e327d961c064435e2c10595312e8e42f1c1beb49a3b11b11672585bed90cdcbe->enter($__internal_e327d961c064435e2c10595312e8e42f1c1beb49a3b11b11672585bed90cdcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e327d961c064435e2c10595312e8e42f1c1beb49a3b11b11672585bed90cdcbe->leave($__internal_e327d961c064435e2c10595312e8e42f1c1beb49a3b11b11672585bed90cdcbe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb9ab91c5341af31ab99ac1d327df752198a1aed05aa9bd76af4dbfcc674fd70 = $this->env->getExtension("native_profiler");
        $__internal_bb9ab91c5341af31ab99ac1d327df752198a1aed05aa9bd76af4dbfcc674fd70->enter($__internal_bb9ab91c5341af31ab99ac1d327df752198a1aed05aa9bd76af4dbfcc674fd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bb9ab91c5341af31ab99ac1d327df752198a1aed05aa9bd76af4dbfcc674fd70->leave($__internal_bb9ab91c5341af31ab99ac1d327df752198a1aed05aa9bd76af4dbfcc674fd70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
