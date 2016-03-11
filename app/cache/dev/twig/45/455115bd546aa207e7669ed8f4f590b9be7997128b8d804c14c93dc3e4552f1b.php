<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e5a34cdbe82eed7959dafb338353880ea7502a6320d3d59401cf43f366b0612d extends Twig_Template
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
        $__internal_fb8807b5cacd844116bea23b6868ce4342531f6e6be8954a9af2ed9cbef58fe2 = $this->env->getExtension("native_profiler");
        $__internal_fb8807b5cacd844116bea23b6868ce4342531f6e6be8954a9af2ed9cbef58fe2->enter($__internal_fb8807b5cacd844116bea23b6868ce4342531f6e6be8954a9af2ed9cbef58fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fb8807b5cacd844116bea23b6868ce4342531f6e6be8954a9af2ed9cbef58fe2->leave($__internal_fb8807b5cacd844116bea23b6868ce4342531f6e6be8954a9af2ed9cbef58fe2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
