<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_972dff722e1f8d5c33efb6ab4cc79a0688a7bd61b82d82569f2255fa20c72df5 extends Twig_Template
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
        $__internal_7d015bbfcc3d4a32c7b87ed1e7ed45da8c68edaa8159c1775693e9e52a8f514c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d015bbfcc3d4a32c7b87ed1e7ed45da8c68edaa8159c1775693e9e52a8f514c->enter($__internal_7d015bbfcc3d4a32c7b87ed1e7ed45da8c68edaa8159c1775693e9e52a8f514c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7d015bbfcc3d4a32c7b87ed1e7ed45da8c68edaa8159c1775693e9e52a8f514c->leave($__internal_7d015bbfcc3d4a32c7b87ed1e7ed45da8c68edaa8159c1775693e9e52a8f514c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
