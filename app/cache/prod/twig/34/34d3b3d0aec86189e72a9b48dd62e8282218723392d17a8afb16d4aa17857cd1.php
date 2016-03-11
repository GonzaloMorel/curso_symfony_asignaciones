<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70631bb2c43f73a98746f8be64a379fc20fec7b1dd62bad548d9fb92403ba4d0 extends Twig_Template
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
        $__internal_d4695455b032fb53f29aa326afb8b40c041b3143459b38c3485f9cd3db36b00c = $this->env->getExtension("native_profiler");
        $__internal_d4695455b032fb53f29aa326afb8b40c041b3143459b38c3485f9cd3db36b00c->enter($__internal_d4695455b032fb53f29aa326afb8b40c041b3143459b38c3485f9cd3db36b00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4695455b032fb53f29aa326afb8b40c041b3143459b38c3485f9cd3db36b00c->leave($__internal_d4695455b032fb53f29aa326afb8b40c041b3143459b38c3485f9cd3db36b00c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89ea2c7a04d57f7a6de0612ff3450b18992ed27cf46177d86a56220affbdbb72 = $this->env->getExtension("native_profiler");
        $__internal_89ea2c7a04d57f7a6de0612ff3450b18992ed27cf46177d86a56220affbdbb72->enter($__internal_89ea2c7a04d57f7a6de0612ff3450b18992ed27cf46177d86a56220affbdbb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89ea2c7a04d57f7a6de0612ff3450b18992ed27cf46177d86a56220affbdbb72->leave($__internal_89ea2c7a04d57f7a6de0612ff3450b18992ed27cf46177d86a56220affbdbb72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2ec4a035125d875124eb04f0f63b8874b64c2aee331944273b638894dc03ce0 = $this->env->getExtension("native_profiler");
        $__internal_a2ec4a035125d875124eb04f0f63b8874b64c2aee331944273b638894dc03ce0->enter($__internal_a2ec4a035125d875124eb04f0f63b8874b64c2aee331944273b638894dc03ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2ec4a035125d875124eb04f0f63b8874b64c2aee331944273b638894dc03ce0->leave($__internal_a2ec4a035125d875124eb04f0f63b8874b64c2aee331944273b638894dc03ce0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf8b5d19099280347a7a64a4b850972d54678464e8c9c01094d8ad6b8dbcfdd1 = $this->env->getExtension("native_profiler");
        $__internal_cf8b5d19099280347a7a64a4b850972d54678464e8c9c01094d8ad6b8dbcfdd1->enter($__internal_cf8b5d19099280347a7a64a4b850972d54678464e8c9c01094d8ad6b8dbcfdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cf8b5d19099280347a7a64a4b850972d54678464e8c9c01094d8ad6b8dbcfdd1->leave($__internal_cf8b5d19099280347a7a64a4b850972d54678464e8c9c01094d8ad6b8dbcfdd1_prof);

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
