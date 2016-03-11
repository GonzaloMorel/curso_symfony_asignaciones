<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b498642620eb9c6bbbe601113b170b98d284a471cc61937b8b929da024c08ba7 extends Twig_Template
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
        $__internal_c1576306134740b154a1526ab7df67f492a67148fc471542bf7f1baf2a7b7e0b = $this->env->getExtension("native_profiler");
        $__internal_c1576306134740b154a1526ab7df67f492a67148fc471542bf7f1baf2a7b7e0b->enter($__internal_c1576306134740b154a1526ab7df67f492a67148fc471542bf7f1baf2a7b7e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c1576306134740b154a1526ab7df67f492a67148fc471542bf7f1baf2a7b7e0b->leave($__internal_c1576306134740b154a1526ab7df67f492a67148fc471542bf7f1baf2a7b7e0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
