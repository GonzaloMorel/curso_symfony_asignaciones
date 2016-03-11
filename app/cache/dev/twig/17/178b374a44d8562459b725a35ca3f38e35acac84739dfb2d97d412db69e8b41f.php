<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_190d835c59605fc5f658b6e4848f40723667fbb8bdbbca927c4da9143fb5bf01 extends Twig_Template
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
        $__internal_3084c66713beeeb845f76ef00f6db68581bf30f6228b03da3e4c4257f046e852 = $this->env->getExtension("native_profiler");
        $__internal_3084c66713beeeb845f76ef00f6db68581bf30f6228b03da3e4c4257f046e852->enter($__internal_3084c66713beeeb845f76ef00f6db68581bf30f6228b03da3e4c4257f046e852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3084c66713beeeb845f76ef00f6db68581bf30f6228b03da3e4c4257f046e852->leave($__internal_3084c66713beeeb845f76ef00f6db68581bf30f6228b03da3e4c4257f046e852_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
