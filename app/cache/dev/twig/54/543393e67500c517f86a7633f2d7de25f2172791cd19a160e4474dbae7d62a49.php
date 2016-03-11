<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a432c9cb7d920459add80137eefe5fe6f8e4007654fe7161ff31377abd5de5d8 extends Twig_Template
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
        $__internal_b47127f3509a6662affb7cdbc743a0da1f8560dc74fd468f5704c8875e3e13a9 = $this->env->getExtension("native_profiler");
        $__internal_b47127f3509a6662affb7cdbc743a0da1f8560dc74fd468f5704c8875e3e13a9->enter($__internal_b47127f3509a6662affb7cdbc743a0da1f8560dc74fd468f5704c8875e3e13a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b47127f3509a6662affb7cdbc743a0da1f8560dc74fd468f5704c8875e3e13a9->leave($__internal_b47127f3509a6662affb7cdbc743a0da1f8560dc74fd468f5704c8875e3e13a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
