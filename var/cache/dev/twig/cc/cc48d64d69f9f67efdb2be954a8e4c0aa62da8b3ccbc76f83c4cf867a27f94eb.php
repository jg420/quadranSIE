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
        $__internal_aa388d88fae1d44892c12d7433e161bfd8546ccb7ae1430b8eda9370c0c2690f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa388d88fae1d44892c12d7433e161bfd8546ccb7ae1430b8eda9370c0c2690f->enter($__internal_aa388d88fae1d44892c12d7433e161bfd8546ccb7ae1430b8eda9370c0c2690f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_aa388d88fae1d44892c12d7433e161bfd8546ccb7ae1430b8eda9370c0c2690f->leave($__internal_aa388d88fae1d44892c12d7433e161bfd8546ccb7ae1430b8eda9370c0c2690f_prof);

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
