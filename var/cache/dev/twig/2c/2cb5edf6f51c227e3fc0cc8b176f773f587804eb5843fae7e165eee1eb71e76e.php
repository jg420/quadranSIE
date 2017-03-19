<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9e6cab2f7c46bcdbb2901c4aa1e8b84cb5d7c6fe19f963344363a4081a8f81bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9f045980e19599345d2d1aee5c71cc936e071f0934b1bf154456834d2cd49d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f045980e19599345d2d1aee5c71cc936e071f0934b1bf154456834d2cd49d1->enter($__internal_a9f045980e19599345d2d1aee5c71cc936e071f0934b1bf154456834d2cd49d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a9f045980e19599345d2d1aee5c71cc936e071f0934b1bf154456834d2cd49d1->leave($__internal_a9f045980e19599345d2d1aee5c71cc936e071f0934b1bf154456834d2cd49d1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_383097593813d9e11ca79068dfe06d4dab9f65f1ee63e68323ce515bcf81be35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383097593813d9e11ca79068dfe06d4dab9f65f1ee63e68323ce515bcf81be35->enter($__internal_383097593813d9e11ca79068dfe06d4dab9f65f1ee63e68323ce515bcf81be35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_383097593813d9e11ca79068dfe06d4dab9f65f1ee63e68323ce515bcf81be35->leave($__internal_383097593813d9e11ca79068dfe06d4dab9f65f1ee63e68323ce515bcf81be35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
