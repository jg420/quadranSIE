<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bc610e4698e94a7f25955eaa63dfe4806764d302fd7a28efec45f24423362046 extends Twig_Template
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
        $__internal_b230ff983b3e44b9434ed61b84ed5cb1650d1a38723b1d6423a9a29dc62b8411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b230ff983b3e44b9434ed61b84ed5cb1650d1a38723b1d6423a9a29dc62b8411->enter($__internal_b230ff983b3e44b9434ed61b84ed5cb1650d1a38723b1d6423a9a29dc62b8411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b230ff983b3e44b9434ed61b84ed5cb1650d1a38723b1d6423a9a29dc62b8411->leave($__internal_b230ff983b3e44b9434ed61b84ed5cb1650d1a38723b1d6423a9a29dc62b8411_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
