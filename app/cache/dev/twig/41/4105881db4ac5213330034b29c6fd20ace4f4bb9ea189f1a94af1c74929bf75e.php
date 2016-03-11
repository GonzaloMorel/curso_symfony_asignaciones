<?php

/* :usuario:file.html.twig */
class __TwigTemplate_e59d6acefdcc91410adf906ec63a8d587d776e6d918c552cac95c23f87fa271e extends Twig_Template
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
        $__internal_f5d3bc3912069528f02926a183a09951c8e7678c97fae5523296cc4952b43dc0 = $this->env->getExtension("native_profiler");
        $__internal_f5d3bc3912069528f02926a183a09951c8e7678c97fae5523296cc4952b43dc0->enter($__internal_f5d3bc3912069528f02926a183a09951c8e7678c97fae5523296cc4952b43dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:file.html.twig"));

        // line 1
        echo " 
\$enlace = \$path_a_tu_doc.\"/\".\$id; 
header (\"Content-Disposition: attachment; filename=\".\$id.\"nn\"); 
header (\"Content-Type: application/octet-stream\"); 
header (\"Content-Length: \".filesize(\$enlace)); 
readfile(\$enlace); 
ls";
        
        $__internal_f5d3bc3912069528f02926a183a09951c8e7678c97fae5523296cc4952b43dc0->leave($__internal_f5d3bc3912069528f02926a183a09951c8e7678c97fae5523296cc4952b43dc0_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*  */
/* $enlace = $path_a_tu_doc."/".$id; */
/* header ("Content-Disposition: attachment; filename=".$id."nn"); */
/* header ("Content-Type: application/octet-stream"); */
/* header ("Content-Length: ".filesize($enlace)); */
/* readfile($enlace); */
/* ls*/
