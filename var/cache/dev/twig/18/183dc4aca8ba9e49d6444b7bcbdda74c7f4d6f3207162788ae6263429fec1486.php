<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_827b0a5658353c3041c81adea433ed5e0a5cd31b0357123949e31d486d5c98fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d270239e4b85fbf259af7406b07b3e239c8b969434c63b97919d7afa1bb9764d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d270239e4b85fbf259af7406b07b3e239c8b969434c63b97919d7afa1bb9764d->enter($__internal_d270239e4b85fbf259af7406b07b3e239c8b969434c63b97919d7afa1bb9764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d270239e4b85fbf259af7406b07b3e239c8b969434c63b97919d7afa1bb9764d->leave($__internal_d270239e4b85fbf259af7406b07b3e239c8b969434c63b97919d7afa1bb9764d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd612071b788c37ad8af166dfb8e33e057fb768ab4794a4aa13e0b379b26c986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd612071b788c37ad8af166dfb8e33e057fb768ab4794a4aa13e0b379b26c986->enter($__internal_cd612071b788c37ad8af166dfb8e33e057fb768ab4794a4aa13e0b379b26c986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd612071b788c37ad8af166dfb8e33e057fb768ab4794a4aa13e0b379b26c986->leave($__internal_cd612071b788c37ad8af166dfb8e33e057fb768ab4794a4aa13e0b379b26c986_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff3546f948cb9279949cb034c24ed7f65fe5943f84410dd9ea9b0b2ff53aafe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3546f948cb9279949cb034c24ed7f65fe5943f84410dd9ea9b0b2ff53aafe9->enter($__internal_ff3546f948cb9279949cb034c24ed7f65fe5943f84410dd9ea9b0b2ff53aafe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ff3546f948cb9279949cb034c24ed7f65fe5943f84410dd9ea9b0b2ff53aafe9->leave($__internal_ff3546f948cb9279949cb034c24ed7f65fe5943f84410dd9ea9b0b2ff53aafe9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
