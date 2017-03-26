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
        $__internal_f2efffecd9d1ee075eca5915eea56ed1a9c4268dbb31c78f3f0f57770f96c3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2efffecd9d1ee075eca5915eea56ed1a9c4268dbb31c78f3f0f57770f96c3ba->enter($__internal_f2efffecd9d1ee075eca5915eea56ed1a9c4268dbb31c78f3f0f57770f96c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f2efffecd9d1ee075eca5915eea56ed1a9c4268dbb31c78f3f0f57770f96c3ba->leave($__internal_f2efffecd9d1ee075eca5915eea56ed1a9c4268dbb31c78f3f0f57770f96c3ba_prof);

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
