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
        $__internal_31c25c21994e6258b8cfb1a240486cc8f515c97d111b6126ceb6d4f049bc946b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c25c21994e6258b8cfb1a240486cc8f515c97d111b6126ceb6d4f049bc946b->enter($__internal_31c25c21994e6258b8cfb1a240486cc8f515c97d111b6126ceb6d4f049bc946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_31c25c21994e6258b8cfb1a240486cc8f515c97d111b6126ceb6d4f049bc946b->leave($__internal_31c25c21994e6258b8cfb1a240486cc8f515c97d111b6126ceb6d4f049bc946b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_58df6a7bb8015f840f5cdf79d3e6a03aef8e919ae605e56c15c10b8e0d55a6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58df6a7bb8015f840f5cdf79d3e6a03aef8e919ae605e56c15c10b8e0d55a6b6->enter($__internal_58df6a7bb8015f840f5cdf79d3e6a03aef8e919ae605e56c15c10b8e0d55a6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_58df6a7bb8015f840f5cdf79d3e6a03aef8e919ae605e56c15c10b8e0d55a6b6->leave($__internal_58df6a7bb8015f840f5cdf79d3e6a03aef8e919ae605e56c15c10b8e0d55a6b6_prof);

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
