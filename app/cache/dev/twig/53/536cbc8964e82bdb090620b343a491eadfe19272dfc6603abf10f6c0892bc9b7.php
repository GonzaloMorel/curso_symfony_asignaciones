<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bf9b484daff410ed3fdb56d29da9891d26a46fd81686e526a62b1084b46a7a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_769b8e347aea004acdd23a1f37605f1baeb9490e77ff907b71b04e0f7cfaeae8 = $this->env->getExtension("native_profiler");
        $__internal_769b8e347aea004acdd23a1f37605f1baeb9490e77ff907b71b04e0f7cfaeae8->enter($__internal_769b8e347aea004acdd23a1f37605f1baeb9490e77ff907b71b04e0f7cfaeae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_769b8e347aea004acdd23a1f37605f1baeb9490e77ff907b71b04e0f7cfaeae8->leave($__internal_769b8e347aea004acdd23a1f37605f1baeb9490e77ff907b71b04e0f7cfaeae8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f232034b70cb108dad6e595af43a87b12aa810cc4fbdf56ba3a90e81c271752f = $this->env->getExtension("native_profiler");
        $__internal_f232034b70cb108dad6e595af43a87b12aa810cc4fbdf56ba3a90e81c271752f->enter($__internal_f232034b70cb108dad6e595af43a87b12aa810cc4fbdf56ba3a90e81c271752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f232034b70cb108dad6e595af43a87b12aa810cc4fbdf56ba3a90e81c271752f->leave($__internal_f232034b70cb108dad6e595af43a87b12aa810cc4fbdf56ba3a90e81c271752f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7c74ee9a7af924becbd7fac111d76872237498a7ee86d6bbc59791266012d1f = $this->env->getExtension("native_profiler");
        $__internal_d7c74ee9a7af924becbd7fac111d76872237498a7ee86d6bbc59791266012d1f->enter($__internal_d7c74ee9a7af924becbd7fac111d76872237498a7ee86d6bbc59791266012d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7c74ee9a7af924becbd7fac111d76872237498a7ee86d6bbc59791266012d1f->leave($__internal_d7c74ee9a7af924becbd7fac111d76872237498a7ee86d6bbc59791266012d1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39b1e2496e635565c6f66ec7ba28d596ce826dd05bb59118c20f123b516ee1e4 = $this->env->getExtension("native_profiler");
        $__internal_39b1e2496e635565c6f66ec7ba28d596ce826dd05bb59118c20f123b516ee1e4->enter($__internal_39b1e2496e635565c6f66ec7ba28d596ce826dd05bb59118c20f123b516ee1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39b1e2496e635565c6f66ec7ba28d596ce826dd05bb59118c20f123b516ee1e4->leave($__internal_39b1e2496e635565c6f66ec7ba28d596ce826dd05bb59118c20f123b516ee1e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
