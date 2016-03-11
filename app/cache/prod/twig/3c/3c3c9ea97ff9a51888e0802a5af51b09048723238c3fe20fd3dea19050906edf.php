<?php

/* usuario/new.html.twig */
class __TwigTemplate_4807d5debe695bded950bc717b691c267b3e23ff1fb0d0ffd94b4ee18aa72ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4294f987d99e113b2d1bbefd9212b72342b2deb2fb5d442701d0d549459f0140 = $this->env->getExtension("native_profiler");
        $__internal_4294f987d99e113b2d1bbefd9212b72342b2deb2fb5d442701d0d549459f0140->enter($__internal_4294f987d99e113b2d1bbefd9212b72342b2deb2fb5d442701d0d549459f0140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4294f987d99e113b2d1bbefd9212b72342b2deb2fb5d442701d0d549459f0140->leave($__internal_4294f987d99e113b2d1bbefd9212b72342b2deb2fb5d442701d0d549459f0140_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_548bc1380c7364ead0f6e3da1f36a0a4d97ca7a0ad7b5e138579d577d14aaafe = $this->env->getExtension("native_profiler");
        $__internal_548bc1380c7364ead0f6e3da1f36a0a4d97ca7a0ad7b5e138579d577d14aaafe->enter($__internal_548bc1380c7364ead0f6e3da1f36a0a4d97ca7a0ad7b5e138579d577d14aaafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_548bc1380c7364ead0f6e3da1f36a0a4d97ca7a0ad7b5e138579d577d14aaafe->leave($__internal_548bc1380c7364ead0f6e3da1f36a0a4d97ca7a0ad7b5e138579d577d14aaafe_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuario creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuario_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
