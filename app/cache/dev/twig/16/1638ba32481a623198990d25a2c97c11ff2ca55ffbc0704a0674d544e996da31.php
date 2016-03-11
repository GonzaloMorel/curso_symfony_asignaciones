<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_50caac32f2c0f65c526a6ebd3468bef9631aff5359528705a995cbda2389bda0 extends Twig_Template
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
        $__internal_46faaab14042052182a1f07fd94367a16137ff32c832395334d738c92b9f7ce9 = $this->env->getExtension("native_profiler");
        $__internal_46faaab14042052182a1f07fd94367a16137ff32c832395334d738c92b9f7ce9->enter($__internal_46faaab14042052182a1f07fd94367a16137ff32c832395334d738c92b9f7ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_46faaab14042052182a1f07fd94367a16137ff32c832395334d738c92b9f7ce9->leave($__internal_46faaab14042052182a1f07fd94367a16137ff32c832395334d738c92b9f7ce9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
