<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cbe61fbec5759fa755712289ae01819db4c3dbe207c9fcb18a510b2aacd05720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9a11a204dc10a1d4754cab09ae4312c9933602f7fb4d72105191f2da26bb36a0 = $this->env->getExtension("native_profiler");
        $__internal_9a11a204dc10a1d4754cab09ae4312c9933602f7fb4d72105191f2da26bb36a0->enter($__internal_9a11a204dc10a1d4754cab09ae4312c9933602f7fb4d72105191f2da26bb36a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a11a204dc10a1d4754cab09ae4312c9933602f7fb4d72105191f2da26bb36a0->leave($__internal_9a11a204dc10a1d4754cab09ae4312c9933602f7fb4d72105191f2da26bb36a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f51dd8e40a60a69920e4ff45cb44a2a63461aafc1dcc15a1335568c1424f99c = $this->env->getExtension("native_profiler");
        $__internal_5f51dd8e40a60a69920e4ff45cb44a2a63461aafc1dcc15a1335568c1424f99c->enter($__internal_5f51dd8e40a60a69920e4ff45cb44a2a63461aafc1dcc15a1335568c1424f99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f51dd8e40a60a69920e4ff45cb44a2a63461aafc1dcc15a1335568c1424f99c->leave($__internal_5f51dd8e40a60a69920e4ff45cb44a2a63461aafc1dcc15a1335568c1424f99c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c74d0e4e56108a648df77c4a4a21aff5dcc24ca1fffa8ae63075942afa7deed0 = $this->env->getExtension("native_profiler");
        $__internal_c74d0e4e56108a648df77c4a4a21aff5dcc24ca1fffa8ae63075942afa7deed0->enter($__internal_c74d0e4e56108a648df77c4a4a21aff5dcc24ca1fffa8ae63075942afa7deed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c74d0e4e56108a648df77c4a4a21aff5dcc24ca1fffa8ae63075942afa7deed0->leave($__internal_c74d0e4e56108a648df77c4a4a21aff5dcc24ca1fffa8ae63075942afa7deed0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
