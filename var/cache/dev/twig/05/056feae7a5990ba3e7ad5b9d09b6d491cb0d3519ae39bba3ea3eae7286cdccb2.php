<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4bdffca6c2c1e8d4e8435745246c17e4bf681ecd30649d5ecbc1bba885dd0682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_dfd631b9b68cd327d5b66be7c21c9824eb6bbc07b1e2ee0de2cea2be6b066a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd631b9b68cd327d5b66be7c21c9824eb6bbc07b1e2ee0de2cea2be6b066a7d->enter($__internal_dfd631b9b68cd327d5b66be7c21c9824eb6bbc07b1e2ee0de2cea2be6b066a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd631b9b68cd327d5b66be7c21c9824eb6bbc07b1e2ee0de2cea2be6b066a7d->leave($__internal_dfd631b9b68cd327d5b66be7c21c9824eb6bbc07b1e2ee0de2cea2be6b066a7d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c75d1cda7d6fc9ecd688ce5c012c041231764745ea056ca4c886aed83a83db66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75d1cda7d6fc9ecd688ce5c012c041231764745ea056ca4c886aed83a83db66->enter($__internal_c75d1cda7d6fc9ecd688ce5c012c041231764745ea056ca4c886aed83a83db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c75d1cda7d6fc9ecd688ce5c012c041231764745ea056ca4c886aed83a83db66->leave($__internal_c75d1cda7d6fc9ecd688ce5c012c041231764745ea056ca4c886aed83a83db66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e5a8facd0dad40db61160aee22ce6e63bd4a942ec68f0b988d6fb710c46f837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5a8facd0dad40db61160aee22ce6e63bd4a942ec68f0b988d6fb710c46f837->enter($__internal_7e5a8facd0dad40db61160aee22ce6e63bd4a942ec68f0b988d6fb710c46f837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e5a8facd0dad40db61160aee22ce6e63bd4a942ec68f0b988d6fb710c46f837->leave($__internal_7e5a8facd0dad40db61160aee22ce6e63bd4a942ec68f0b988d6fb710c46f837_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56dca7a9907708573c9470f265f9f30778b33b30419c482d8faed464ed980180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dca7a9907708573c9470f265f9f30778b33b30419c482d8faed464ed980180->enter($__internal_56dca7a9907708573c9470f265f9f30778b33b30419c482d8faed464ed980180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56dca7a9907708573c9470f265f9f30778b33b30419c482d8faed464ed980180->leave($__internal_56dca7a9907708573c9470f265f9f30778b33b30419c482d8faed464ed980180_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
