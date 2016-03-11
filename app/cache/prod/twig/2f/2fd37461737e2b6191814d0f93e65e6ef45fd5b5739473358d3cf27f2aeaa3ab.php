<?php

/* base.html.twig */
class __TwigTemplate_b149a5ad1477256c5814c9a1cce888c7e79403b55bc6e349cf83966fddf3dc81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e13b7383bb3ae6734707592fbfd788166da78ad8870b05e44de06c2d3d84980 = $this->env->getExtension("native_profiler");
        $__internal_8e13b7383bb3ae6734707592fbfd788166da78ad8870b05e44de06c2d3d84980->enter($__internal_8e13b7383bb3ae6734707592fbfd788166da78ad8870b05e44de06c2d3d84980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8e13b7383bb3ae6734707592fbfd788166da78ad8870b05e44de06c2d3d84980->leave($__internal_8e13b7383bb3ae6734707592fbfd788166da78ad8870b05e44de06c2d3d84980_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f30e7624aa5a27f18acc90bf00c80b018c00b3e1abd09b660d868517b366950 = $this->env->getExtension("native_profiler");
        $__internal_1f30e7624aa5a27f18acc90bf00c80b018c00b3e1abd09b660d868517b366950->enter($__internal_1f30e7624aa5a27f18acc90bf00c80b018c00b3e1abd09b660d868517b366950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f30e7624aa5a27f18acc90bf00c80b018c00b3e1abd09b660d868517b366950->leave($__internal_1f30e7624aa5a27f18acc90bf00c80b018c00b3e1abd09b660d868517b366950_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb2573038c3dcbbe8dba6e384bdcbaac54e45492fbcdf1e54ba01d70b603b4af = $this->env->getExtension("native_profiler");
        $__internal_cb2573038c3dcbbe8dba6e384bdcbaac54e45492fbcdf1e54ba01d70b603b4af->enter($__internal_cb2573038c3dcbbe8dba6e384bdcbaac54e45492fbcdf1e54ba01d70b603b4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb2573038c3dcbbe8dba6e384bdcbaac54e45492fbcdf1e54ba01d70b603b4af->leave($__internal_cb2573038c3dcbbe8dba6e384bdcbaac54e45492fbcdf1e54ba01d70b603b4af_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5571f09897bcb640bb62c7d55ed0a6ce2ca8051119d350b4343f166c8bdcf2d = $this->env->getExtension("native_profiler");
        $__internal_c5571f09897bcb640bb62c7d55ed0a6ce2ca8051119d350b4343f166c8bdcf2d->enter($__internal_c5571f09897bcb640bb62c7d55ed0a6ce2ca8051119d350b4343f166c8bdcf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5571f09897bcb640bb62c7d55ed0a6ce2ca8051119d350b4343f166c8bdcf2d->leave($__internal_c5571f09897bcb640bb62c7d55ed0a6ce2ca8051119d350b4343f166c8bdcf2d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9c3662a42389900ea33a1a37b6a795f625e4df0b5dd72bfb0188c52fb53a7bc = $this->env->getExtension("native_profiler");
        $__internal_f9c3662a42389900ea33a1a37b6a795f625e4df0b5dd72bfb0188c52fb53a7bc->enter($__internal_f9c3662a42389900ea33a1a37b6a795f625e4df0b5dd72bfb0188c52fb53a7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9c3662a42389900ea33a1a37b6a795f625e4df0b5dd72bfb0188c52fb53a7bc->leave($__internal_f9c3662a42389900ea33a1a37b6a795f625e4df0b5dd72bfb0188c52fb53a7bc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
