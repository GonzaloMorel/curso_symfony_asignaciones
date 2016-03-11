<?php

/* usuario/new.html.twig */
class __TwigTemplate_9dc8362791ea332f39dd4ac35dc657cf1533ff4732a36e6b5ce9a0453cb00b70 extends Twig_Template
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
        $__internal_7c3d6acadc4d60b5051f82d29257f79d9e74c6089f4d7f75a5545481dea388d7 = $this->env->getExtension("native_profiler");
        $__internal_7c3d6acadc4d60b5051f82d29257f79d9e74c6089f4d7f75a5545481dea388d7->enter($__internal_7c3d6acadc4d60b5051f82d29257f79d9e74c6089f4d7f75a5545481dea388d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c3d6acadc4d60b5051f82d29257f79d9e74c6089f4d7f75a5545481dea388d7->leave($__internal_7c3d6acadc4d60b5051f82d29257f79d9e74c6089f4d7f75a5545481dea388d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b896167bae9eddb66dda57e4a6d8cbfdb5ad8cd165d875db4e60fa22e1968558 = $this->env->getExtension("native_profiler");
        $__internal_b896167bae9eddb66dda57e4a6d8cbfdb5ad8cd165d875db4e60fa22e1968558->enter($__internal_b896167bae9eddb66dda57e4a6d8cbfdb5ad8cd165d875db4e60fa22e1968558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b896167bae9eddb66dda57e4a6d8cbfdb5ad8cd165d875db4e60fa22e1968558->leave($__internal_b896167bae9eddb66dda57e4a6d8cbfdb5ad8cd165d875db4e60fa22e1968558_prof);

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
