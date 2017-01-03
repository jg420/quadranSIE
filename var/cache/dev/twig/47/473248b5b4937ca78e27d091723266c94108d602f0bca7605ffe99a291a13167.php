<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4cf51a764d1033ab42f01265c4bf57f4ee42f0508f25f8b32854df026041fa90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcbd7591b5a11505c45590f74db47a8994fc74b441acc940a687d9e4ff0c54b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbd7591b5a11505c45590f74db47a8994fc74b441acc940a687d9e4ff0c54b8->enter($__internal_bcbd7591b5a11505c45590f74db47a8994fc74b441acc940a687d9e4ff0c54b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcbd7591b5a11505c45590f74db47a8994fc74b441acc940a687d9e4ff0c54b8->leave($__internal_bcbd7591b5a11505c45590f74db47a8994fc74b441acc940a687d9e4ff0c54b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4a3b3347e7963cf37943be4149f4b54b9d7dc52f8e993f115fc97cbc1c6127a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a3b3347e7963cf37943be4149f4b54b9d7dc52f8e993f115fc97cbc1c6127a->enter($__internal_e4a3b3347e7963cf37943be4149f4b54b9d7dc52f8e993f115fc97cbc1c6127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4a3b3347e7963cf37943be4149f4b54b9d7dc52f8e993f115fc97cbc1c6127a->leave($__internal_e4a3b3347e7963cf37943be4149f4b54b9d7dc52f8e993f115fc97cbc1c6127a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b3d9d3b7365d0baa7d7ed671d5e1b6a0bfec7658dfab5199efbeaa5e872ca8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3d9d3b7365d0baa7d7ed671d5e1b6a0bfec7658dfab5199efbeaa5e872ca8f->enter($__internal_2b3d9d3b7365d0baa7d7ed671d5e1b6a0bfec7658dfab5199efbeaa5e872ca8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b3d9d3b7365d0baa7d7ed671d5e1b6a0bfec7658dfab5199efbeaa5e872ca8f->leave($__internal_2b3d9d3b7365d0baa7d7ed671d5e1b6a0bfec7658dfab5199efbeaa5e872ca8f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab7e160f32a7b4f3974237bac8c49da141873a24753f1aa0ad393f3b9628a7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7e160f32a7b4f3974237bac8c49da141873a24753f1aa0ad393f3b9628a7dd->enter($__internal_ab7e160f32a7b4f3974237bac8c49da141873a24753f1aa0ad393f3b9628a7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab7e160f32a7b4f3974237bac8c49da141873a24753f1aa0ad393f3b9628a7dd->leave($__internal_ab7e160f32a7b4f3974237bac8c49da141873a24753f1aa0ad393f3b9628a7dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
