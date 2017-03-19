<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a204c890d17f70c014bf78ee9566acd4319d021ca9ee6631eaef655efc33a8f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_f371c6d90a7ee7cda174a26075145d22ed38122a19d82bfbf5c19e61c8f5fef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f371c6d90a7ee7cda174a26075145d22ed38122a19d82bfbf5c19e61c8f5fef2->enter($__internal_f371c6d90a7ee7cda174a26075145d22ed38122a19d82bfbf5c19e61c8f5fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f371c6d90a7ee7cda174a26075145d22ed38122a19d82bfbf5c19e61c8f5fef2->leave($__internal_f371c6d90a7ee7cda174a26075145d22ed38122a19d82bfbf5c19e61c8f5fef2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2c3e32691cb1ca2c90641eb294ce546399a6a4f0c564beb0f2f6e78c29e5330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c3e32691cb1ca2c90641eb294ce546399a6a4f0c564beb0f2f6e78c29e5330->enter($__internal_b2c3e32691cb1ca2c90641eb294ce546399a6a4f0c564beb0f2f6e78c29e5330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b2c3e32691cb1ca2c90641eb294ce546399a6a4f0c564beb0f2f6e78c29e5330->leave($__internal_b2c3e32691cb1ca2c90641eb294ce546399a6a4f0c564beb0f2f6e78c29e5330_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e42f8c9851e3fd5eaf9b151c574fb5a625adb4f091e2687ab6bcc8ca8b495323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42f8c9851e3fd5eaf9b151c574fb5a625adb4f091e2687ab6bcc8ca8b495323->enter($__internal_e42f8c9851e3fd5eaf9b151c574fb5a625adb4f091e2687ab6bcc8ca8b495323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e42f8c9851e3fd5eaf9b151c574fb5a625adb4f091e2687ab6bcc8ca8b495323->leave($__internal_e42f8c9851e3fd5eaf9b151c574fb5a625adb4f091e2687ab6bcc8ca8b495323_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
