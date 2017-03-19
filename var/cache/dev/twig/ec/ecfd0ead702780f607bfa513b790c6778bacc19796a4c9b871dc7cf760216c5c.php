<?php

/* @SIECore/Default/search_central.html.twig */
class __TwigTemplate_0a3cfe92485cbd4f77b0a1e0edb751e1951713a4dec6519391fb8a26e878fbea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SIECoreBundle:Default:search.html.twig", "@SIECore/Default/search_central.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SIECoreBundle:Default:search.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30064360c403a3cb5999691000713b1a66fb1ffbcc41cfbe2b0689f9bb7828b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30064360c403a3cb5999691000713b1a66fb1ffbcc41cfbe2b0689f9bb7828b0->enter($__internal_30064360c403a3cb5999691000713b1a66fb1ffbcc41cfbe2b0689f9bb7828b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECore/Default/search_central.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30064360c403a3cb5999691000713b1a66fb1ffbcc41cfbe2b0689f9bb7828b0->leave($__internal_30064360c403a3cb5999691000713b1a66fb1ffbcc41cfbe2b0689f9bb7828b0_prof);

    }

    public function getTemplateName()
    {
        return "@SIECore/Default/search_central.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIE/CoreBundle/Resources/views/form/search_central.html.twig #}
{% extends 'SIECoreBundle:Default:search.html.twig' %}

 ", "@SIECore/Default/search_central.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle\\Resources\\views\\Default\\search_central.html.twig");
    }
}
