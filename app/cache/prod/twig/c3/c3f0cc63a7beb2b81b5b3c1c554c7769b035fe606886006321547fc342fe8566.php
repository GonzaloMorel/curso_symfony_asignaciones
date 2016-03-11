<?php

/* usuario/index.html.twig */
class __TwigTemplate_291cc1634c5cdfe8d3c8c239ff2abbc7a72665b36e6fe6fc01f29304bfa910f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Usuario list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Rut</th>
                <th>Dv</th>
                <th>Nombres</th>
                <th>Appat</th>
                <th>Apmat</th>
                <th>Password</th>
                <th>Email</th>
                <th>Imagen</th>
                <th>Imagentipo</th>
                <th>Path</th>
                <th>Isactive</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rut", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "dv", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombres", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apPat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apMat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "imagen", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "imagenTipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["usuario"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["usuario"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["usuario"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 60,  150 => 55,  138 => 49,  132 => 46,  123 => 42,  117 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  63 => 29,  60 => 28,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuario list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Rut</th>*/
/*                 <th>Dv</th>*/
/*                 <th>Nombres</th>*/
/*                 <th>Appat</th>*/
/*                 <th>Apmat</th>*/
/*                 <th>Password</th>*/
/*                 <th>Email</th>*/
/*                 <th>Imagen</th>*/
/*                 <th>Imagentipo</th>*/
/*                 <th>Path</th>*/
/*                 <th>Isactive</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for usuario in usuarios %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('usuario_show', { 'id': usuario.id }) }}">{{ usuario.id }}</a></td>*/
/*                 <td>{{ usuario.rut }}</td>*/
/*                 <td>{{ usuario.dv }}</td>*/
/*                 <td>{{ usuario.nombres }}</td>*/
/*                 <td>{{ usuario.apPat }}</td>*/
/*                 <td>{{ usuario.apMat }}</td>*/
/*                 <td>{{ usuario.password }}</td>*/
/*                 <td>{{ usuario.email }}</td>*/
/*                 <td>{{ usuario.imagen }}</td>*/
/*                 <td>{{ usuario.imagenTipo }}</td>*/
/*                 <td>{{ usuario.path }}</td>*/
/*                 <td>{% if usuario.isActive %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if usuario.createdAt %}{{ usuario.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if usuario.updatedAt %}{{ usuario.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('usuario_show', { 'id': usuario.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('usuario_edit', { 'id': usuario.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuario_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
