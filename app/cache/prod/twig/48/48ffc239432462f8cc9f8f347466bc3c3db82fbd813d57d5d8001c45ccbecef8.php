<?php

/* base.html.twig */
class __TwigTemplate_dca6aa1406b627cb69ffa9ba0f1a7c8394837bfc86bbdb3d98a3d8a40a52f45a extends Twig_Template
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
        $__internal_082b1288765b647e5270930d20b09c89cb22d05700bf11586dff61cdefdd6aaa = $this->env->getExtension("native_profiler");
        $__internal_082b1288765b647e5270930d20b09c89cb22d05700bf11586dff61cdefdd6aaa->enter($__internal_082b1288765b647e5270930d20b09c89cb22d05700bf11586dff61cdefdd6aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_082b1288765b647e5270930d20b09c89cb22d05700bf11586dff61cdefdd6aaa->leave($__internal_082b1288765b647e5270930d20b09c89cb22d05700bf11586dff61cdefdd6aaa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc393135c15e14b2aacbe6d0ea2cdea61e8d1fe30e1fba759c341175071be04e = $this->env->getExtension("native_profiler");
        $__internal_bc393135c15e14b2aacbe6d0ea2cdea61e8d1fe30e1fba759c341175071be04e->enter($__internal_bc393135c15e14b2aacbe6d0ea2cdea61e8d1fe30e1fba759c341175071be04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc393135c15e14b2aacbe6d0ea2cdea61e8d1fe30e1fba759c341175071be04e->leave($__internal_bc393135c15e14b2aacbe6d0ea2cdea61e8d1fe30e1fba759c341175071be04e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b86c5a3643d246c5e87af18732bed1d26415b72f41d8ec1d2ae6cd5828ccb89c = $this->env->getExtension("native_profiler");
        $__internal_b86c5a3643d246c5e87af18732bed1d26415b72f41d8ec1d2ae6cd5828ccb89c->enter($__internal_b86c5a3643d246c5e87af18732bed1d26415b72f41d8ec1d2ae6cd5828ccb89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b86c5a3643d246c5e87af18732bed1d26415b72f41d8ec1d2ae6cd5828ccb89c->leave($__internal_b86c5a3643d246c5e87af18732bed1d26415b72f41d8ec1d2ae6cd5828ccb89c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_457713e3fd4ed1a547a56c2e3203e168e85cb58f5d7faf6ce47f731dad5f79b3 = $this->env->getExtension("native_profiler");
        $__internal_457713e3fd4ed1a547a56c2e3203e168e85cb58f5d7faf6ce47f731dad5f79b3->enter($__internal_457713e3fd4ed1a547a56c2e3203e168e85cb58f5d7faf6ce47f731dad5f79b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_457713e3fd4ed1a547a56c2e3203e168e85cb58f5d7faf6ce47f731dad5f79b3->leave($__internal_457713e3fd4ed1a547a56c2e3203e168e85cb58f5d7faf6ce47f731dad5f79b3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b834d9fce5f532e3a8216659d459f2cbc6fa1d5e876de597df120a1ec9f71e83 = $this->env->getExtension("native_profiler");
        $__internal_b834d9fce5f532e3a8216659d459f2cbc6fa1d5e876de597df120a1ec9f71e83->enter($__internal_b834d9fce5f532e3a8216659d459f2cbc6fa1d5e876de597df120a1ec9f71e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b834d9fce5f532e3a8216659d459f2cbc6fa1d5e876de597df120a1ec9f71e83->leave($__internal_b834d9fce5f532e3a8216659d459f2cbc6fa1d5e876de597df120a1ec9f71e83_prof);

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
