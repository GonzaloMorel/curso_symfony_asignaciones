<?php

/* ::base.html.twig */
class __TwigTemplate_23c17fe6f3137fc9106986a83603f417ee85a988fe5d65981a25983689e0cabf extends Twig_Template
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
        $__internal_e017ca03b6318959fb899dcb7de690f158e5cce9b416538ebb48c56fb7e860ff = $this->env->getExtension("native_profiler");
        $__internal_e017ca03b6318959fb899dcb7de690f158e5cce9b416538ebb48c56fb7e860ff->enter($__internal_e017ca03b6318959fb899dcb7de690f158e5cce9b416538ebb48c56fb7e860ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e017ca03b6318959fb899dcb7de690f158e5cce9b416538ebb48c56fb7e860ff->leave($__internal_e017ca03b6318959fb899dcb7de690f158e5cce9b416538ebb48c56fb7e860ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_329205ab6242b94fa724f3c9d75ee7329f78ba56ff71000c58703c127fb3bce3 = $this->env->getExtension("native_profiler");
        $__internal_329205ab6242b94fa724f3c9d75ee7329f78ba56ff71000c58703c127fb3bce3->enter($__internal_329205ab6242b94fa724f3c9d75ee7329f78ba56ff71000c58703c127fb3bce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_329205ab6242b94fa724f3c9d75ee7329f78ba56ff71000c58703c127fb3bce3->leave($__internal_329205ab6242b94fa724f3c9d75ee7329f78ba56ff71000c58703c127fb3bce3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5489e4c78782e50bca6c3da800aecdc2c03af5e7db5346f6f3f67677a459f06c = $this->env->getExtension("native_profiler");
        $__internal_5489e4c78782e50bca6c3da800aecdc2c03af5e7db5346f6f3f67677a459f06c->enter($__internal_5489e4c78782e50bca6c3da800aecdc2c03af5e7db5346f6f3f67677a459f06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5489e4c78782e50bca6c3da800aecdc2c03af5e7db5346f6f3f67677a459f06c->leave($__internal_5489e4c78782e50bca6c3da800aecdc2c03af5e7db5346f6f3f67677a459f06c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cce0b72fd017e400845fd8f321930605fdd1be3b37d1e1811e7e4c29a2c10de3 = $this->env->getExtension("native_profiler");
        $__internal_cce0b72fd017e400845fd8f321930605fdd1be3b37d1e1811e7e4c29a2c10de3->enter($__internal_cce0b72fd017e400845fd8f321930605fdd1be3b37d1e1811e7e4c29a2c10de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cce0b72fd017e400845fd8f321930605fdd1be3b37d1e1811e7e4c29a2c10de3->leave($__internal_cce0b72fd017e400845fd8f321930605fdd1be3b37d1e1811e7e4c29a2c10de3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b9058d7559a88557ac1239957df61ca41b184109d11e1e6eb194b03c41c271c = $this->env->getExtension("native_profiler");
        $__internal_3b9058d7559a88557ac1239957df61ca41b184109d11e1e6eb194b03c41c271c->enter($__internal_3b9058d7559a88557ac1239957df61ca41b184109d11e1e6eb194b03c41c271c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b9058d7559a88557ac1239957df61ca41b184109d11e1e6eb194b03c41c271c->leave($__internal_3b9058d7559a88557ac1239957df61ca41b184109d11e1e6eb194b03c41c271c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
