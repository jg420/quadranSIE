<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1c29fb53736e183387c7db79af19e9e31e2aceac1ede0b8cdd9d0bbcd5aec002 extends Twig_Template
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
        $__internal_1b8ee1f6f33028a266ccc0c0bc80b9aad2bd45d97f9a1c701182ceb9fa668883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8ee1f6f33028a266ccc0c0bc80b9aad2bd45d97f9a1c701182ceb9fa668883->enter($__internal_1b8ee1f6f33028a266ccc0c0bc80b9aad2bd45d97f9a1c701182ceb9fa668883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1b8ee1f6f33028a266ccc0c0bc80b9aad2bd45d97f9a1c701182ceb9fa668883->leave($__internal_1b8ee1f6f33028a266ccc0c0bc80b9aad2bd45d97f9a1c701182ceb9fa668883_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
