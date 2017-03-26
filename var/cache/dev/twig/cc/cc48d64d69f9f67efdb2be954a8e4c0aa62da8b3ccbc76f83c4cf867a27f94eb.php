<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_bf92e76cb61effa27898bb26b6c332d0162e97ea48f4f1c2c7278a7dd591f9d1 extends Twig_Template
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
        $__internal_4725be5de87afe6633fa528d1ff02ef9cd5a82382fe33f4e6f429f6841d367a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4725be5de87afe6633fa528d1ff02ef9cd5a82382fe33f4e6f429f6841d367a1->enter($__internal_4725be5de87afe6633fa528d1ff02ef9cd5a82382fe33f4e6f429f6841d367a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4725be5de87afe6633fa528d1ff02ef9cd5a82382fe33f4e6f429f6841d367a1->leave($__internal_4725be5de87afe6633fa528d1ff02ef9cd5a82382fe33f4e6f429f6841d367a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
