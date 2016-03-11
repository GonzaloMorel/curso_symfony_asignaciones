<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_28e00d0a382a48f8a3edcf343c5b024d8be0230a581015bd3b9b3c0c9d2dc41a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_dfbc8e3cd5d678dc69bd051d0a6bdd296038d3303638e76d9e76b793084618fe = $this->env->getExtension("native_profiler");
        $__internal_dfbc8e3cd5d678dc69bd051d0a6bdd296038d3303638e76d9e76b793084618fe->enter($__internal_dfbc8e3cd5d678dc69bd051d0a6bdd296038d3303638e76d9e76b793084618fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbc8e3cd5d678dc69bd051d0a6bdd296038d3303638e76d9e76b793084618fe->leave($__internal_dfbc8e3cd5d678dc69bd051d0a6bdd296038d3303638e76d9e76b793084618fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de311cb5bfaef447503e0161e0624f338baf0b89588a4b2ea05e1cfec7f5c2ea = $this->env->getExtension("native_profiler");
        $__internal_de311cb5bfaef447503e0161e0624f338baf0b89588a4b2ea05e1cfec7f5c2ea->enter($__internal_de311cb5bfaef447503e0161e0624f338baf0b89588a4b2ea05e1cfec7f5c2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de311cb5bfaef447503e0161e0624f338baf0b89588a4b2ea05e1cfec7f5c2ea->leave($__internal_de311cb5bfaef447503e0161e0624f338baf0b89588a4b2ea05e1cfec7f5c2ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b9b0cbb8f5f74012f7946c781823fcf4f1efc95e6dc0294ebd263487f5059c3 = $this->env->getExtension("native_profiler");
        $__internal_8b9b0cbb8f5f74012f7946c781823fcf4f1efc95e6dc0294ebd263487f5059c3->enter($__internal_8b9b0cbb8f5f74012f7946c781823fcf4f1efc95e6dc0294ebd263487f5059c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b9b0cbb8f5f74012f7946c781823fcf4f1efc95e6dc0294ebd263487f5059c3->leave($__internal_8b9b0cbb8f5f74012f7946c781823fcf4f1efc95e6dc0294ebd263487f5059c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd1f6d3fa0fe3129bf8234e7129a13ec62f1b7dbd0143d591a1e526ac5bc1252 = $this->env->getExtension("native_profiler");
        $__internal_cd1f6d3fa0fe3129bf8234e7129a13ec62f1b7dbd0143d591a1e526ac5bc1252->enter($__internal_cd1f6d3fa0fe3129bf8234e7129a13ec62f1b7dbd0143d591a1e526ac5bc1252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cd1f6d3fa0fe3129bf8234e7129a13ec62f1b7dbd0143d591a1e526ac5bc1252->leave($__internal_cd1f6d3fa0fe3129bf8234e7129a13ec62f1b7dbd0143d591a1e526ac5bc1252_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
