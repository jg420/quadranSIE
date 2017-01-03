<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1c28cfe0384306603c3cb8223816baf7e38b8a09201361e3ae990174c5aef653 extends Twig_Template
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
        $__internal_d324d549d82da536ee6e1ddc4378317cdfc5470bac0213618e4aa181d8783c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d324d549d82da536ee6e1ddc4378317cdfc5470bac0213618e4aa181d8783c7f->enter($__internal_d324d549d82da536ee6e1ddc4378317cdfc5470bac0213618e4aa181d8783c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d324d549d82da536ee6e1ddc4378317cdfc5470bac0213618e4aa181d8783c7f->leave($__internal_d324d549d82da536ee6e1ddc4378317cdfc5470bac0213618e4aa181d8783c7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
