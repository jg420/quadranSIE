<?php

/* SIECoreBundle:Default:search_central.html.twig */
class __TwigTemplate_9430c32817269171e7ba10dd037d3e98d189c89ae4b8f86feb5d92415924fdf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "SIECoreBundle:Default:search_central.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SIECoreBundle:Default:search.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a85143d3a8479bf2c1841b97550b1bb6aee1edf48939e95606602a1a1c2c3b = $this->env->getExtension("native_profiler");
        $__internal_d7a85143d3a8479bf2c1841b97550b1bb6aee1edf48939e95606602a1a1c2c3b->enter($__internal_d7a85143d3a8479bf2c1841b97550b1bb6aee1edf48939e95606602a1a1c2c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:search_central.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a85143d3a8479bf2c1841b97550b1bb6aee1edf48939e95606602a1a1c2c3b->leave($__internal_d7a85143d3a8479bf2c1841b97550b1bb6aee1edf48939e95606602a1a1c2c3b_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:search_central.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* {# SIE/CoreBundle/Resources/views/form/search_central.html.twig #}*/
/* {% extends 'SIECoreBundle:Default:search.html.twig' %}*/
/* */
/*  */
