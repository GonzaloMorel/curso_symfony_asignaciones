<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c696d3e5c6b3a1fbf7d212f04413ca6ce322bb6bfb42e99768bcb7f08289053c extends Twig_Template
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
        $__internal_b75dcdc162df39ba8f60d286adf1428f55a18dc27489203811d92c1caef18ecc = $this->env->getExtension("native_profiler");
        $__internal_b75dcdc162df39ba8f60d286adf1428f55a18dc27489203811d92c1caef18ecc->enter($__internal_b75dcdc162df39ba8f60d286adf1428f55a18dc27489203811d92c1caef18ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b75dcdc162df39ba8f60d286adf1428f55a18dc27489203811d92c1caef18ecc->leave($__internal_b75dcdc162df39ba8f60d286adf1428f55a18dc27489203811d92c1caef18ecc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
