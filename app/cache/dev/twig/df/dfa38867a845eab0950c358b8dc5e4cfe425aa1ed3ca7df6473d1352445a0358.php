<?php

/* :usuario:edit.html.twig */
class __TwigTemplate_1f048b64d7d724f82bafeb4b71a6071d7c60aeb3c5752b4914fd88f14f54a033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:edit.html.twig", 1);
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
        $__internal_73d7ccb3be25b8da3f9801cd6ad86462554c51771644e7c068e76128c0e50b1b = $this->env->getExtension("native_profiler");
        $__internal_73d7ccb3be25b8da3f9801cd6ad86462554c51771644e7c068e76128c0e50b1b->enter($__internal_73d7ccb3be25b8da3f9801cd6ad86462554c51771644e7c068e76128c0e50b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d7ccb3be25b8da3f9801cd6ad86462554c51771644e7c068e76128c0e50b1b->leave($__internal_73d7ccb3be25b8da3f9801cd6ad86462554c51771644e7c068e76128c0e50b1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_788251feae4b4b5fcc65b013f5546db52b46c7b90d1fe9afbc82d1fc86c340fe = $this->env->getExtension("native_profiler");
        $__internal_788251feae4b4b5fcc65b013f5546db52b46c7b90d1fe9afbc82d1fc86c340fe->enter($__internal_788251feae4b4b5fcc65b013f5546db52b46c7b90d1fe9afbc82d1fc86c340fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_788251feae4b4b5fcc65b013f5546db52b46c7b90d1fe9afbc82d1fc86c340fe->leave($__internal_788251feae4b4b5fcc65b013f5546db52b46c7b90d1fe9afbc82d1fc86c340fe_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuario edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuario_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
