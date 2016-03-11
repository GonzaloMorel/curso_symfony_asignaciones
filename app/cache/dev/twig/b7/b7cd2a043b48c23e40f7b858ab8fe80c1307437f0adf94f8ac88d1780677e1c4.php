<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c9f42f1a2599b1f8acdf909a66e8b931ac2be0d2f6edf207b57e478843773424 extends Twig_Template
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
        $__internal_d7a5f803f9280eb6c9dab3fed3b7e682e7f504c37c774ba1ed14caba59522d9f = $this->env->getExtension("native_profiler");
        $__internal_d7a5f803f9280eb6c9dab3fed3b7e682e7f504c37c774ba1ed14caba59522d9f->enter($__internal_d7a5f803f9280eb6c9dab3fed3b7e682e7f504c37c774ba1ed14caba59522d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d7a5f803f9280eb6c9dab3fed3b7e682e7f504c37c774ba1ed14caba59522d9f->leave($__internal_d7a5f803f9280eb6c9dab3fed3b7e682e7f504c37c774ba1ed14caba59522d9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
