<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8aa6470ff0c36efa80f20be2b5cb7931ea8fd22f405b908bdefc0708f6e38133 extends Twig_Template
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
        $__internal_6fecb0fc78bb9f55e90a49f7419c0ca2a6660499fcdabdc94920a875fb834653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fecb0fc78bb9f55e90a49f7419c0ca2a6660499fcdabdc94920a875fb834653->enter($__internal_6fecb0fc78bb9f55e90a49f7419c0ca2a6660499fcdabdc94920a875fb834653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6fecb0fc78bb9f55e90a49f7419c0ca2a6660499fcdabdc94920a875fb834653->leave($__internal_6fecb0fc78bb9f55e90a49f7419c0ca2a6660499fcdabdc94920a875fb834653_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
