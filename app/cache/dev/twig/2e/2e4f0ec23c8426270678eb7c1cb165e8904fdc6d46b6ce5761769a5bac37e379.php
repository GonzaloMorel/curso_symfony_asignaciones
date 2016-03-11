<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fd30a991f3d795e570f7446f70bdf90a6f039b4e28263bd6e91172c789854bdd extends Twig_Template
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
        $__internal_9a0de3422baebc5287474a9198c129c63bd4f3aad5d0bee0ee03c993126448af = $this->env->getExtension("native_profiler");
        $__internal_9a0de3422baebc5287474a9198c129c63bd4f3aad5d0bee0ee03c993126448af->enter($__internal_9a0de3422baebc5287474a9198c129c63bd4f3aad5d0bee0ee03c993126448af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9a0de3422baebc5287474a9198c129c63bd4f3aad5d0bee0ee03c993126448af->leave($__internal_9a0de3422baebc5287474a9198c129c63bd4f3aad5d0bee0ee03c993126448af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
