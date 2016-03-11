<?php

/* :usuario:show.html.twig */
class __TwigTemplate_c6066dcbaecb268c36960488467e5a4db3cd77e299b5dc8bff65fe7678ad6530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:show.html.twig", 1);
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
        $__internal_73fd56937bc9d42da658eb24f71e4b17c20413b2fec4b5602f501b995ceb12a5 = $this->env->getExtension("native_profiler");
        $__internal_73fd56937bc9d42da658eb24f71e4b17c20413b2fec4b5602f501b995ceb12a5->enter($__internal_73fd56937bc9d42da658eb24f71e4b17c20413b2fec4b5602f501b995ceb12a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fd56937bc9d42da658eb24f71e4b17c20413b2fec4b5602f501b995ceb12a5->leave($__internal_73fd56937bc9d42da658eb24f71e4b17c20413b2fec4b5602f501b995ceb12a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9b96065e22b32b190aea489272ca16517ae0542b79d28324ac91a0074c0ee5 = $this->env->getExtension("native_profiler");
        $__internal_bb9b96065e22b32b190aea489272ca16517ae0542b79d28324ac91a0074c0ee5->enter($__internal_bb9b96065e22b32b190aea489272ca16517ae0542b79d28324ac91a0074c0ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rut</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rut", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dv</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "dv", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombres</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Appat</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apPat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apmat</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apMat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagen</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "imagen", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagentipo</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "imagenTipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "isActive", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 58
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 62
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bb9b96065e22b32b190aea489272ca16517ae0542b79d28324ac91a0074c0ee5->leave($__internal_bb9b96065e22b32b190aea489272ca16517ae0542b79d28324ac91a0074c0ee5_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 77,  169 => 75,  163 => 72,  157 => 69,  145 => 62,  136 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuario</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ usuario.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Rut</th>*/
/*                 <td>{{ usuario.rut }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dv</th>*/
/*                 <td>{{ usuario.dv }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombres</th>*/
/*                 <td>{{ usuario.nombres }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Appat</th>*/
/*                 <td>{{ usuario.apPat }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apmat</th>*/
/*                 <td>{{ usuario.apMat }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password</th>*/
/*                 <td>{{ usuario.password }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ usuario.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imagen</th>*/
/*                 <td>{{ usuario.imagen }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imagentipo</th>*/
/*                 <td>{{ usuario.imagenTipo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Path</th>*/
/*                 <td>{{ usuario.path }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Isactive</th>*/
/*                 <td>{% if usuario.isActive %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Createdat</th>*/
/*                 <td>{% if usuario.createdAt %}{{ usuario.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updatedat</th>*/
/*                 <td>{% if usuario.updatedAt %}{{ usuario.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuario_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('usuario_edit', { 'id': usuario.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
