<?php

/* SIECoreBundle:Default:search_central.html.twig */
class __TwigTemplate_117252ffe0af69fddac00d953200d5987dfb97f85d56930b4f9276310543410b extends Twig_Template
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
        $__internal_5b886e7b6c01a4402499c779e8755976895fc9d9d2127ab8c70ea3493fa7ef2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b886e7b6c01a4402499c779e8755976895fc9d9d2127ab8c70ea3493fa7ef2a->enter($__internal_5b886e7b6c01a4402499c779e8755976895fc9d9d2127ab8c70ea3493fa7ef2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:search_central.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b886e7b6c01a4402499c779e8755976895fc9d9d2127ab8c70ea3493fa7ef2a->leave($__internal_5b886e7b6c01a4402499c779e8755976895fc9d9d2127ab8c70ea3493fa7ef2a_prof);

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

 ", "SIECoreBundle:Default:search_central.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle/Resources/views/Default/search_central.html.twig");
    }
}
