<?php

/* :usuario:new.html.twig */
class __TwigTemplate_fe9ac4f491abd6cb45923f35e6116f3e3cad81fb514f7b926076752dac7f45ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:new.html.twig", 1);
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
        $__internal_4e72584014fd04f855eea5ae28d9ed8cb8c8ea959ae0e4aeb1caefb1ee709315 = $this->env->getExtension("native_profiler");
        $__internal_4e72584014fd04f855eea5ae28d9ed8cb8c8ea959ae0e4aeb1caefb1ee709315->enter($__internal_4e72584014fd04f855eea5ae28d9ed8cb8c8ea959ae0e4aeb1caefb1ee709315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e72584014fd04f855eea5ae28d9ed8cb8c8ea959ae0e4aeb1caefb1ee709315->leave($__internal_4e72584014fd04f855eea5ae28d9ed8cb8c8ea959ae0e4aeb1caefb1ee709315_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d3d97e1f27c957b3cc0dbb2a313fd65d4d1e47d72c63be1e459762ed2599fe1 = $this->env->getExtension("native_profiler");
        $__internal_5d3d97e1f27c957b3cc0dbb2a313fd65d4d1e47d72c63be1e459762ed2599fe1->enter($__internal_5d3d97e1f27c957b3cc0dbb2a313fd65d4d1e47d72c63be1e459762ed2599fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d3d97e1f27c957b3cc0dbb2a313fd65d4d1e47d72c63be1e459762ed2599fe1->leave($__internal_5d3d97e1f27c957b3cc0dbb2a313fd65d4d1e47d72c63be1e459762ed2599fe1_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:new.html.twig";
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
