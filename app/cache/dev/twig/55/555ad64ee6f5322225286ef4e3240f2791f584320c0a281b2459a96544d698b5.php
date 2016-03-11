<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ce591c28f86d2990338da890da5050090cc194dd12941089019d9a0d0f7434ed extends Twig_Template
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
        $__internal_34c01c0f9c533c12415361ae64b425dad8b46c6b0e283599074d2fcf493203c7 = $this->env->getExtension("native_profiler");
        $__internal_34c01c0f9c533c12415361ae64b425dad8b46c6b0e283599074d2fcf493203c7->enter($__internal_34c01c0f9c533c12415361ae64b425dad8b46c6b0e283599074d2fcf493203c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_34c01c0f9c533c12415361ae64b425dad8b46c6b0e283599074d2fcf493203c7->leave($__internal_34c01c0f9c533c12415361ae64b425dad8b46c6b0e283599074d2fcf493203c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
