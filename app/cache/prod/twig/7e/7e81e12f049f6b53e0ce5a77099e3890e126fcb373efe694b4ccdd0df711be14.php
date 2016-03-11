<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a8cc37df5e73ee92d0ce0da7b8c17c3d9f35ceb65075ab060bb2b7c156ddfe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1978ff68999e38ab2d2229ec5f385d8e4dec31f6ce125966f9eab5c9fa2f67cf = $this->env->getExtension("native_profiler");
        $__internal_1978ff68999e38ab2d2229ec5f385d8e4dec31f6ce125966f9eab5c9fa2f67cf->enter($__internal_1978ff68999e38ab2d2229ec5f385d8e4dec31f6ce125966f9eab5c9fa2f67cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1978ff68999e38ab2d2229ec5f385d8e4dec31f6ce125966f9eab5c9fa2f67cf->leave($__internal_1978ff68999e38ab2d2229ec5f385d8e4dec31f6ce125966f9eab5c9fa2f67cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e6b27d6d2344c220cae22a0f100d59818d323a0d92c95092143201cef2b4c7a = $this->env->getExtension("native_profiler");
        $__internal_1e6b27d6d2344c220cae22a0f100d59818d323a0d92c95092143201cef2b4c7a->enter($__internal_1e6b27d6d2344c220cae22a0f100d59818d323a0d92c95092143201cef2b4c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e6b27d6d2344c220cae22a0f100d59818d323a0d92c95092143201cef2b4c7a->leave($__internal_1e6b27d6d2344c220cae22a0f100d59818d323a0d92c95092143201cef2b4c7a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e318bde83aba180a1a240145e3dcff6357d649529943320d75f10e1d230559c = $this->env->getExtension("native_profiler");
        $__internal_1e318bde83aba180a1a240145e3dcff6357d649529943320d75f10e1d230559c->enter($__internal_1e318bde83aba180a1a240145e3dcff6357d649529943320d75f10e1d230559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e318bde83aba180a1a240145e3dcff6357d649529943320d75f10e1d230559c->leave($__internal_1e318bde83aba180a1a240145e3dcff6357d649529943320d75f10e1d230559c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e361fbc5baf5828e5dd9c34fa7c191f14b4843f460a9643ea413e1f5c35c5957 = $this->env->getExtension("native_profiler");
        $__internal_e361fbc5baf5828e5dd9c34fa7c191f14b4843f460a9643ea413e1f5c35c5957->enter($__internal_e361fbc5baf5828e5dd9c34fa7c191f14b4843f460a9643ea413e1f5c35c5957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e361fbc5baf5828e5dd9c34fa7c191f14b4843f460a9643ea413e1f5c35c5957->leave($__internal_e361fbc5baf5828e5dd9c34fa7c191f14b4843f460a9643ea413e1f5c35c5957_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
