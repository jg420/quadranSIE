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
        $__internal_c22778d6054a9e4b6c6bd543680d1b2a931f8be32b2e59387c204b4cf3d09e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22778d6054a9e4b6c6bd543680d1b2a931f8be32b2e59387c204b4cf3d09e34->enter($__internal_c22778d6054a9e4b6c6bd543680d1b2a931f8be32b2e59387c204b4cf3d09e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c22778d6054a9e4b6c6bd543680d1b2a931f8be32b2e59387c204b4cf3d09e34->leave($__internal_c22778d6054a9e4b6c6bd543680d1b2a931f8be32b2e59387c204b4cf3d09e34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a1fbe451ac9012a0f5ea63615c44df1a85d1c707755c4666f9ee677efaa4036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1fbe451ac9012a0f5ea63615c44df1a85d1c707755c4666f9ee677efaa4036->enter($__internal_9a1fbe451ac9012a0f5ea63615c44df1a85d1c707755c4666f9ee677efaa4036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a1fbe451ac9012a0f5ea63615c44df1a85d1c707755c4666f9ee677efaa4036->leave($__internal_9a1fbe451ac9012a0f5ea63615c44df1a85d1c707755c4666f9ee677efaa4036_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a2585b5ff227706c9c5e42278d83b97b3f27bcfd1e38da4980f87e99e26cfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2585b5ff227706c9c5e42278d83b97b3f27bcfd1e38da4980f87e99e26cfcf->enter($__internal_5a2585b5ff227706c9c5e42278d83b97b3f27bcfd1e38da4980f87e99e26cfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a2585b5ff227706c9c5e42278d83b97b3f27bcfd1e38da4980f87e99e26cfcf->leave($__internal_5a2585b5ff227706c9c5e42278d83b97b3f27bcfd1e38da4980f87e99e26cfcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6db5d33c7dd7caf460ab54fa756a1ef6c3588432b9766b996260c6bb3d4b1e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db5d33c7dd7caf460ab54fa756a1ef6c3588432b9766b996260c6bb3d4b1e77->enter($__internal_6db5d33c7dd7caf460ab54fa756a1ef6c3588432b9766b996260c6bb3d4b1e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6db5d33c7dd7caf460ab54fa756a1ef6c3588432b9766b996260c6bb3d4b1e77->leave($__internal_6db5d33c7dd7caf460ab54fa756a1ef6c3588432b9766b996260c6bb3d4b1e77_prof);

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
