<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2593e01cba87306a8322adfac0b2cfc9b3936c07558f90619505e78872fe350b extends Twig_Template
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
        $__internal_ce0daf6ab6f7bb3fda6e513f9b91c8483e3fb53a09df3d2d5b3f019bc285c30a = $this->env->getExtension("native_profiler");
        $__internal_ce0daf6ab6f7bb3fda6e513f9b91c8483e3fb53a09df3d2d5b3f019bc285c30a->enter($__internal_ce0daf6ab6f7bb3fda6e513f9b91c8483e3fb53a09df3d2d5b3f019bc285c30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ce0daf6ab6f7bb3fda6e513f9b91c8483e3fb53a09df3d2d5b3f019bc285c30a->leave($__internal_ce0daf6ab6f7bb3fda6e513f9b91c8483e3fb53a09df3d2d5b3f019bc285c30a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
