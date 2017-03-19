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
        $__internal_694aeaaa9a164990b9b824d7b35fc59dacae5e13bf6b5d60a2375dcce257d856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694aeaaa9a164990b9b824d7b35fc59dacae5e13bf6b5d60a2375dcce257d856->enter($__internal_694aeaaa9a164990b9b824d7b35fc59dacae5e13bf6b5d60a2375dcce257d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694aeaaa9a164990b9b824d7b35fc59dacae5e13bf6b5d60a2375dcce257d856->leave($__internal_694aeaaa9a164990b9b824d7b35fc59dacae5e13bf6b5d60a2375dcce257d856_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24ae7a437ea820007702ef8d0417abdfb0d7d98502fd86def19f856b14c25af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ae7a437ea820007702ef8d0417abdfb0d7d98502fd86def19f856b14c25af6->enter($__internal_24ae7a437ea820007702ef8d0417abdfb0d7d98502fd86def19f856b14c25af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24ae7a437ea820007702ef8d0417abdfb0d7d98502fd86def19f856b14c25af6->leave($__internal_24ae7a437ea820007702ef8d0417abdfb0d7d98502fd86def19f856b14c25af6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_650433235b7d57741b0f7050788310cddce6eb04cf762a2690f5f196813c8f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650433235b7d57741b0f7050788310cddce6eb04cf762a2690f5f196813c8f02->enter($__internal_650433235b7d57741b0f7050788310cddce6eb04cf762a2690f5f196813c8f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_650433235b7d57741b0f7050788310cddce6eb04cf762a2690f5f196813c8f02->leave($__internal_650433235b7d57741b0f7050788310cddce6eb04cf762a2690f5f196813c8f02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93edf4dac36325cc935d95ba4967dcda7060f2988c1b5374dee4b7c894db6ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93edf4dac36325cc935d95ba4967dcda7060f2988c1b5374dee4b7c894db6ce7->enter($__internal_93edf4dac36325cc935d95ba4967dcda7060f2988c1b5374dee4b7c894db6ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93edf4dac36325cc935d95ba4967dcda7060f2988c1b5374dee4b7c894db6ce7->leave($__internal_93edf4dac36325cc935d95ba4967dcda7060f2988c1b5374dee4b7c894db6ce7_prof);

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
