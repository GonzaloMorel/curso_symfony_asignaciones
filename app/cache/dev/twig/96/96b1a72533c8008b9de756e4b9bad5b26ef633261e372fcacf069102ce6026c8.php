<?php

/* :Emails:registration.html.twig */
class __TwigTemplate_f2655594473542d2524dc694010fd05fcb2fda18ad36b18b997b70c274af00b0 extends Twig_Template
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
        $__internal_9cc3142366cf5fb43c4065b8504e595e5cf8c138b85dd37714de64d3d4eabc75 = $this->env->getExtension("native_profiler");
        $__internal_9cc3142366cf5fb43c4065b8504e595e5cf8c138b85dd37714de64d3d4eabc75->enter($__internal_9cc3142366cf5fb43c4065b8504e595e5cf8c138b85dd37714de64d3d4eabc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:registration.html.twig"));

        // line 2
        echo "<h3>You did it! You registered!</h3>

";
        // line 5
        echo "To login, go to: <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("login");
        echo "\">...</a>.

Thanks!

";
        // line 10
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\">";
        
        $__internal_9cc3142366cf5fb43c4065b8504e595e5cf8c138b85dd37714de64d3d4eabc75->leave($__internal_9cc3142366cf5fb43c4065b8504e595e5cf8c138b85dd37714de64d3d4eabc75_prof);

    }

    public function getTemplateName()
    {
        return ":Emails:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  26 => 5,  22 => 2,);
    }
}
/* {# app/Resources/views/Emails/registration.html.twig #}*/
/* <h3>You did it! You registered!</h3>*/
/* */
/* {# example, assuming you have a route named "login" #}*/
/* To login, go to: <a href="{{ url('login') }}">...</a>.*/
/* */
/* Thanks!*/
/* */
/* {# Makes an absolute URL to the /images/logo.png file #}*/
/* <img src="{{ absolute_url(asset('images/logo.png')) }}">*/
