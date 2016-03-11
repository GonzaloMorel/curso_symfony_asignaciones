<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ad0d9963b53546da74a8addc50a1df2bd11e81d19403c7373a9c1aefcd4da80c extends Twig_Template
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
        $__internal_851360eafff5f98df7d6832f07cd4f63a6d6241bf069dc55e32792d9dad5370a = $this->env->getExtension("native_profiler");
        $__internal_851360eafff5f98df7d6832f07cd4f63a6d6241bf069dc55e32792d9dad5370a->enter($__internal_851360eafff5f98df7d6832f07cd4f63a6d6241bf069dc55e32792d9dad5370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_851360eafff5f98df7d6832f07cd4f63a6d6241bf069dc55e32792d9dad5370a->leave($__internal_851360eafff5f98df7d6832f07cd4f63a6d6241bf069dc55e32792d9dad5370a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
