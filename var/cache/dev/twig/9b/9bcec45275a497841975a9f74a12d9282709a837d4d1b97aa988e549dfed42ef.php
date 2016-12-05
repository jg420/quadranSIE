<?php

/* SIEEquipementBundle:Default:index.html.twig */
class __TwigTemplate_e677295ef1b572fa88233e4b3643e5b5503b7ed7186861177476bb763d477b2f extends Twig_Template
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
        $__internal_9f33007c9b17a044a181729d3cc191c71fc0dbb39acb939bbe38976391b6b714 = $this->env->getExtension("native_profiler");
        $__internal_9f33007c9b17a044a181729d3cc191c71fc0dbb39acb939bbe38976391b6b714->enter($__internal_9f33007c9b17a044a181729d3cc191c71fc0dbb39acb939bbe38976391b6b714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEEquipementBundle:Default:index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("SIECoreBundle:Default:head.html.twig", "SIEEquipementBundle:Default:index.html.twig", 2)->display($context);
        echo " 
";
        // line 3
        $this->loadTemplate("SIECoreBundle:Default:search_central.html.twig", "SIEEquipementBundle:Default:index.html.twig", 3)->display($context);
        echo " 
<title id=\"titre\">EQUIPEMENTS</title>
nombre equiment : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nbEquipement"]) ? $context["nbEquipement"] : $this->getContext($context, "nbEquipement")), "html", null, true);
        echo "

<table id=\"table_equipement\">
    <th id=\"KeyParam1\">Nom</th>
    <th id=\"KeyParam2\">Centrale</th>
    <th id=\"KeyParam3\">Constructeur</th>
    <th id=\"KeyParam4\">Login</th>
    <th id=\"KeyParam5\">Mot de passe</th>
    <th id=\"KeyParam6\">Access</th>
";
        // line 14
        $context["nb"] = ((isset($context["nbEquipement"]) ? $context["nbEquipement"] : $this->getContext($context, "nbEquipement")) + 0);
        echo " 
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbEquipement"]) ? $context["nbEquipement"] : $this->getContext($context, "nbEquipement"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "    <tr>
        <td id=\"ValParam1\"";
            // line 17
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "><input type=\"text\"/></td>
        <td id=\"ValParam2\"";
            // line 18
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "><input type=\"text\"/></td>
        <td id=\"ValParam3\"";
            // line 19
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "><input type=\"text\"/></td>
        <td id=\"ValParam4\"";
            // line 20
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "><input type=\"text\"/></td>
        <td id=\"ValParam5\"";
            // line 21
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "><input type=\"text\"/></td>
        <td id=\"ValParam6\"";
            // line 22
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "><input type=\"text\"/></td>
       
    </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
</table>";
        
        $__internal_9f33007c9b17a044a181729d3cc191c71fc0dbb39acb939bbe38976391b6b714->leave($__internal_9f33007c9b17a044a181729d3cc191c71fc0dbb39acb939bbe38976391b6b714_prof);

    }

    public function getTemplateName()
    {
        return "SIEEquipementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  54 => 16,  50 => 15,  46 => 14,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {% include "SIECoreBundle:Default:head.html.twig" %} */
/* {% include "SIECoreBundle:Default:search_central.html.twig" %} */
/* <title id="titre">EQUIPEMENTS</title>*/
/* nombre equiment : {{nbEquipement}}*/
/* */
/* <table id="table_equipement">*/
/*     <th id="KeyParam1">Nom</th>*/
/*     <th id="KeyParam2">Centrale</th>*/
/*     <th id="KeyParam3">Constructeur</th>*/
/*     <th id="KeyParam4">Login</th>*/
/*     <th id="KeyParam5">Mot de passe</th>*/
/*     <th id="KeyParam6">Access</th>*/
/* {% set nb = nbEquipement + 0 %} */
/* {% for i in range(0,nbEquipement) %}*/
/*     <tr>*/
/*         <td id="ValParam1"{{i}}><input type="text"/></td>*/
/*         <td id="ValParam2"{{i}}><input type="text"/></td>*/
/*         <td id="ValParam3"{{i}}><input type="text"/></td>*/
/*         <td id="ValParam4"{{i}}><input type="text"/></td>*/
/*         <td id="ValParam5"{{i}}><input type="text"/></td>*/
/*         <td id="ValParam6"{{i}}><input type="text"/></td>*/
/*        */
/*     </tr>*/
/*  {% endfor%}    */
/* </table>*/
