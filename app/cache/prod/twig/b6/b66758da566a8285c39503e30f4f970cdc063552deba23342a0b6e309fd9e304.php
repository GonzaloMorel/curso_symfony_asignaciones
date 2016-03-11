<?php

/* usuario/index.html.twig */
class __TwigTemplate_492ca6d8d67d7f20151570c4dde33e9f64064058730692d387e66307e721e0ac extends Twig_Template
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
        $__internal_ed6a8036c6e20c699768279ec32dcc33898a0cfd8aa463522236523314372301 = $this->env->getExtension("native_profiler");
        $__internal_ed6a8036c6e20c699768279ec32dcc33898a0cfd8aa463522236523314372301->enter($__internal_ed6a8036c6e20c699768279ec32dcc33898a0cfd8aa463522236523314372301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6a8036c6e20c699768279ec32dcc33898a0cfd8aa463522236523314372301->leave($__internal_ed6a8036c6e20c699768279ec32dcc33898a0cfd8aa463522236523314372301_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ecf18eab5f8282e5f5f576600c431a5f7de465ec6d3814940fd1f79f9e5377c = $this->env->getExtension("native_profiler");
        $__internal_2ecf18eab5f8282e5f5f576600c431a5f7de465ec6d3814940fd1f79f9e5377c->enter($__internal_2ecf18eab5f8282e5f5f576600c431a5f7de465ec6d3814940fd1f79f9e5377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario list</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <span class=\"alert-success\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </br>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    
    ";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nombres"), "method") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "apPat"), "method")) . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "apMat"), "method")), "html", null, true);
        echo "
    <table>
        <thead>
            <a href=\"data:application/pdf;base64,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ODg5IDY2NyAxOTEgMzMzIDMzMyAzODkgNTg0IDI3OCAzMzMgMjc4IDI3OCA1NTYgNTU2IDU1NiA1NTYgNTU2IDU1NiA1NTYgNTU2IDU1NiA1NTYgMjc4IDI3OCA1ODQgNTg0IDU4NCA1NTYgMTAxNSA2NjcgNjY3IDcyMiA3MjIgNjY3IDYxMSA3NzggNzIyIDI3OCA1MDAgNjY3IDU1NiA4MzMgNzIyIDc3OCA2NjcgNzc4IDcyMiA2NjcgNjExIDcyMiA2NjcgOTQ0IDY2NyA2NjcgNjExIDI3OCAyNzggMjc4IDQ2OSA1NTYgMzMzIDU1NiA1NTYgNTAwIDU1NiA1NTYgMjc4IDU1NiA1NTYgMjIyIDIyMiA1MDAgMjIyIDgzMyA1NTYgNTU2IDU1NiA1NTYgMzMzIDUwMCAyNzggNTU2IDUwMCA3MjIgNTAwIDUwMCA1MDAgMzM0IDI2MCAzMzQgNTg0IDUwMCA1NTYgNTAwIDIyMiA1NTYgMzMzIDEwMDAgNTU2IDU1NiAzMzMgMTAwMCA2NjcgMzMzIDEwMDAgNTAwIDYxMSA1MDAgNTAwIDIyMiAyMjIgMzMzIDMzMyAzNTAgNTU2IDEwMDAgMzMzIDEwMDAgNTAwIDMzMyA5NDQgNTAwIDUwMCA2NjcgNTAwIDMzMyA1NTYgNTU2IDU1NiA1NTYgMjYwIDU1NiAzMzMgNzM3IDM3MCA1NTYgNTg0IDUwMCA3MzcgNTUyIDQwMCA1NDkgMzMzIDMzMyAzMzMgNTc2IDUzNyAzMzMgMzMzIDMzMyAzNjUgNTU2IDgzNCA4MzQgODM0IDYxMSA2NjcgNjY3IDY2NyA2NjcgNjY3IDY2NyAxMDAwIDcyMiA2NjcgNjY3IDY2NyA2NjcgMjc4IDI3OCAyNzggMjc4IDcyMiA3MjIgNzc4IDc3OCA3NzggNzc4IDc3OCA1ODQgNzc4IDcyMiA3MjIgNzIyIDcyMiA2NjcgNjY3IDYxMSA1NTYgNTU2IDU1NiA1NTYgNTU2IDU1NiA4ODkgNTAwIDU1NiA1NTYgNTU2IDU1NiAyNzggMjc4IDI3OCAyNzggNTU2IDU1NiA1NTYgNTU2IDU1NiA1NTYgNTU2IDU0OSA2MTEgNTU2IDU1NiA1NTYgNTU2IDUwMCA1NTYgNTAwIApdCmVuZG9iago2IDAgb2JqCiBbCjIwICBbNTU2XQoyNSAgWzU1Nl0KMjQgIFs1NTZdCjE5ICBbNTU2XQoyMyAgWzU1Nl0KMTUgIFsyNzhdCjIyICBbNTU2XQoyOCAgWzU1Nl0KMjcgIFs1NTZdCjI2ICBbNTU2XQoyMSAgWzU1Nl0KMTMxICBbNDAwXQpdCmVuZG9iagoxIDAgb2JqCjw8IC9UeXBlIC9PQ0cgL05hbWUgKDApCj4+CmVuZG9iagoxMSAwIG9iago8PCAvVHlwZSAvUGFnZSAvUGFyZW50IDEwIDAgUiAvTWVkaWFCb3ggWzAgMCA4NDIgNTk1XSAvQ29udGVudHMgWzMgMCBSCjcgMCBSCjkgMCBSCl0gL1JvdGF0ZSAyNzAgCiAvVlAgWwo8PCAgL01lYXN1cmUKPDwgIC9TdWJ0eXBlIC9STAogL0EgWwo8PCAgL0MgMSAvVSAoICkKPj5dCiAvRCBbCjw8ICAvQyAxIC9VICggKQo+Pl0KIC9YIFsKPDwgIC9DIDMuOTY4MzcgL1UgKCApCj4+XQogL1IgKCApIC9UeXBlIC9NZWFzdXJlCj4+IC9UeXBlIC9WaWV3cG9ydCAvQkJveCBbNDggODggMjkwIDU4Ml0KPj5dIC9SZXNvdXJjZXMKPDwgIC9Qcm9jU2V0IFsgL1BERiAvVGV4dF0KIC9Gb250Cjw8ICAvRjEgNSAwIFIgL0YyIDggMCBSCj4+CiAvUHJvcGVydGllcwo8PCAgL29jMSAxIDAgUgo+Pgo+Pgo+PgplbmRvYmoKMTAgMCBvYmoKPDwgL1R5cGUgL1BhZ2VzIC9LaWRzIFsxMSAwIFIKXSAvQ291bnQgMQo+PgplbmRvYmoKMTIgMCBvYmoKPDwgL1R5cGUgL0NhdGFsb2cgL1BhZ2VzIDEwIDAgUiAvT0NQcm9wZXJ0aWVzCjw8ICAvT0NHcyBbIDEgMCBSXSAgL0QKPDwgIC9PcmRlciBbIDEgMCBSXSAvT0ZGIFtdCj4+Cj4+IC9QYWdlTW9kZSAvVXNlT0MgL1BhZ2VMYXlvdXQgL1NpbmdsZVBhZ2UKPj4KZW5kb2JqCjEzIDAgb2JqCjw8ICAvQ3JlYXRvciAoQXV0b0NBRCAyMDEwIDIwMTAgKDE4LjBzIChMTVMgVGVjaCkpKSAvVGl0bGUgKE1vZGVsKSAvUHJvZHVjZXIgKHBkZnBsb3QxMC5oZGkgMTAuMC41NS4wKSAvQ3JlYXRpb25EYXRlIChEOjIwMTUwNTI2MTA1NzEwKSAvTW9kRGF0ZSAoRDoyMDE1MDUyNjEwNTcxMCkKPj4KZW5kb2JqCnhyZWYKMCAxNAowMDAwMDAwMDAwIDY1NTM1IGYgCjAwMDAwMDM3MzQgMDAwMDAgbiAKMDAwMDAwMjY2OSAwMDAwMCBuIAowMDAwMDAwMDE1IDAwMDAwIG4gCjAwMDAwMDA2ODcgMDAwMDAgbiAKMDAwMDAwMDkwNSAwMDAwMCBuIAowMDAwMDAzNTkzIDAwMDAwIG4gCjAwMDAwMDEwNzcgMDAwMDAgbiAKMDAwMDAwMTgyMSAwMDAwMCBuIAowMDAwMDAyMTA0IDAwMDAwIG4gCjAwMDAwMDQxODggMDAwMDAgbiAKMDAwMDAwMzc3NiAwMDAwMCBuIAowMDAwMDA0MjQ4IDAwMDAwIG4gCjAwMDAwMDQ0MTEgMDAwMDAgbiAKdHJhaWxlcgo8PCAgL1NpemUgMTQgL1Jvb3QgMTIgMCBSIC9JbmZvIDEzIDAgUgo+PgpzdGFydHhyZWYKNDU5NAolJUVPRg0=\" target=\"_blank\">Descarga</a>
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 36
            echo "            <tr>
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rut", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "dv", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombres", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apPat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apMat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "imagen", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "imagenTipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            if ($this->getAttribute($context["usuario"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 49
            if ($this->getAttribute($context["usuario"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["usuario"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 57
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
        // line 63
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2ecf18eab5f8282e5f5f576600c431a5f7de465ec6d3814940fd1f79f9e5377c->leave($__internal_2ecf18eab5f8282e5f5f576600c431a5f7de465ec6d3814940fd1f79f9e5377c_prof);

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
        return array (  190 => 68,  183 => 63,  171 => 57,  165 => 54,  156 => 50,  150 => 49,  142 => 48,  138 => 47,  134 => 46,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  96 => 37,  93 => 36,  89 => 35,  63 => 12,  60 => 11,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuario list</h1>*/
/*     {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <span class="alert-success">*/
/*             {{ flashMessage }}*/
/*             </br>*/
/*         </span>*/
/*     {% endfor %}*/
/*     */
/*     {{ app.session.get('nombres') ~ app.session.get('apPat') ~ app.session.get('apMat') }}*/
/*     <table>*/
/*         <thead>*/
/*             <a href="data:application/pdf;base64,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ODg5IDY2NyAxOTEgMzMzIDMzMyAzODkgNTg0IDI3OCAzMzMgMjc4IDI3OCA1NTYgNTU2IDU1NiA1NTYgNTU2IDU1NiA1NTYgNTU2IDU1NiA1NTYgMjc4IDI3OCA1ODQgNTg0IDU4NCA1NTYgMTAxNSA2NjcgNjY3IDcyMiA3MjIgNjY3IDYxMSA3NzggNzIyIDI3OCA1MDAgNjY3IDU1NiA4MzMgNzIyIDc3OCA2NjcgNzc4IDcyMiA2NjcgNjExIDcyMiA2NjcgOTQ0IDY2NyA2NjcgNjExIDI3OCAyNzggMjc4IDQ2OSA1NTYgMzMzIDU1NiA1NTYgNTAwIDU1NiA1NTYgMjc4IDU1NiA1NTYgMjIyIDIyMiA1MDAgMjIyIDgzMyA1NTYgNTU2IDU1NiA1NTYgMzMzIDUwMCAyNzggNTU2IDUwMCA3MjIgNTAwIDUwMCA1MDAgMzM0IDI2MCAzMzQgNTg0IDUwMCA1NTYgNTAwIDIyMiA1NTYgMzMzIDEwMDAgNTU2IDU1NiAzMzMgMTAwMCA2NjcgMzMzIDEwMDAgNTAwIDYxMSA1MDAgNTAwIDIyMiAyMjIgMzMzIDMzMyAzNTAgNTU2IDEwMDAgMzMzIDEwMDAgNTAwIDMzMyA5NDQgNTAwIDUwMCA2NjcgNTAwIDMzMyA1NTYgNTU2IDU1NiA1NTYgMjYwIDU1NiAzMzMgNzM3IDM3MCA1NTYgNTg0IDUwMCA3MzcgNTUyIDQwMCA1NDkgMzMzIDMzMyAzMzMgNTc2IDUzNyAzMzMgMzMzIDMzMyAzNjUgNTU2IDgzNCA4MzQgODM0IDYxMSA2NjcgNjY3IDY2NyA2NjcgNjY3IDY2NyAxMDAwIDcyMiA2NjcgNjY3IDY2NyA2NjcgMjc4IDI3OCAyNzggMjc4IDcyMiA3MjIgNzc4IDc3OCA3NzggNzc4IDc3OCA1ODQgNzc4IDcyMiA3MjIgNzIyIDcyMiA2NjcgNjY3IDYxMSA1NTYgNTU2IDU1NiA1NTYgNTU2IDU1NiA4ODkgNTAwIDU1NiA1NTYgNTU2IDU1NiAyNzggMjc4IDI3OCAyNzggNTU2IDU1NiA1NTYgNTU2IDU1NiA1NTYgNTU2IDU0OSA2MTEgNTU2IDU1NiA1NTYgNTU2IDUwMCA1NTYgNTAwIApdCmVuZG9iago2IDAgb2JqCiBbCjIwICBbNTU2XQoyNSAgWzU1Nl0KMjQgIFs1NTZdCjE5ICBbNTU2XQoyMyAgWzU1Nl0KMTUgIFsyNzhdCjIyICBbNTU2XQoyOCAgWzU1Nl0KMjcgIFs1NTZdCjI2ICBbNTU2XQoyMSAgWzU1Nl0KMTMxICBbNDAwXQpdCmVuZG9iagoxIDAgb2JqCjw8IC9UeXBlIC9PQ0cgL05hbWUgKDApCj4+CmVuZG9iagoxMSAwIG9iago8PCAvVHlwZSAvUGFnZSAvUGFyZW50IDEwIDAgUiAvTWVkaWFCb3ggWzAgMCA4NDIgNTk1XSAvQ29udGVudHMgWzMgMCBSCjcgMCBSCjkgMCBSCl0gL1JvdGF0ZSAyNzAgCiAvVlAgWwo8PCAgL01lYXN1cmUKPDwgIC9TdWJ0eXBlIC9STAogL0EgWwo8PCAgL0MgMSAvVSAoICkKPj5dCiAvRCBbCjw8ICAvQyAxIC9VICggKQo+Pl0KIC9YIFsKPDwgIC9DIDMuOTY4MzcgL1UgKCApCj4+XQogL1IgKCApIC9UeXBlIC9NZWFzdXJlCj4+IC9UeXBlIC9WaWV3cG9ydCAvQkJveCBbNDggODggMjkwIDU4Ml0KPj5dIC9SZXNvdXJjZXMKPDwgIC9Qcm9jU2V0IFsgL1BERiAvVGV4dF0KIC9Gb250Cjw8ICAvRjEgNSAwIFIgL0YyIDggMCBSCj4+CiAvUHJvcGVydGllcwo8PCAgL29jMSAxIDAgUgo+Pgo+Pgo+PgplbmRvYmoKMTAgMCBvYmoKPDwgL1R5cGUgL1BhZ2VzIC9LaWRzIFsxMSAwIFIKXSAvQ291bnQgMQo+PgplbmRvYmoKMTIgMCBvYmoKPDwgL1R5cGUgL0NhdGFsb2cgL1BhZ2VzIDEwIDAgUiAvT0NQcm9wZXJ0aWVzCjw8ICAvT0NHcyBbIDEgMCBSXSAgL0QKPDwgIC9PcmRlciBbIDEgMCBSXSAvT0ZGIFtdCj4+Cj4+IC9QYWdlTW9kZSAvVXNlT0MgL1BhZ2VMYXlvdXQgL1NpbmdsZVBhZ2UKPj4KZW5kb2JqCjEzIDAgb2JqCjw8ICAvQ3JlYXRvciAoQXV0b0NBRCAyMDEwIDIwMTAgKDE4LjBzIChMTVMgVGVjaCkpKSAvVGl0bGUgKE1vZGVsKSAvUHJvZHVjZXIgKHBkZnBsb3QxMC5oZGkgMTAuMC41NS4wKSAvQ3JlYXRpb25EYXRlIChEOjIwMTUwNTI2MTA1NzEwKSAvTW9kRGF0ZSAoRDoyMDE1MDUyNjEwNTcxMCkKPj4KZW5kb2JqCnhyZWYKMCAxNAowMDAwMDAwMDAwIDY1NTM1IGYgCjAwMDAwMDM3MzQgMDAwMDAgbiAKMDAwMDAwMjY2OSAwMDAwMCBuIAowMDAwMDAwMDE1IDAwMDAwIG4gCjAwMDAwMDA2ODcgMDAwMDAgbiAKMDAwMDAwMDkwNSAwMDAwMCBuIAowMDAwMDAzNTkzIDAwMDAwIG4gCjAwMDAwMDEwNzcgMDAwMDAgbiAKMDAwMDAwMTgyMSAwMDAwMCBuIAowMDAwMDAyMTA0IDAwMDAwIG4gCjAwMDAwMDQxODggMDAwMDAgbiAKMDAwMDAwMzc3NiAwMDAwMCBuIAowMDAwMDA0MjQ4IDAwMDAwIG4gCjAwMDAwMDQ0MTEgMDAwMDAgbiAKdHJhaWxlcgo8PCAgL1NpemUgMTQgL1Jvb3QgMTIgMCBSIC9JbmZvIDEzIDAgUgo+PgpzdGFydHhyZWYKNDU5NAolJUVPRg0=" target="_blank">Descarga</a>*/
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
