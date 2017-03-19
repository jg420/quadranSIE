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
        $__internal_0f936b027824fdda2715c087a1913d5c214874a986164079b5b4df25f4d443fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f936b027824fdda2715c087a1913d5c214874a986164079b5b4df25f4d443fc->enter($__internal_0f936b027824fdda2715c087a1913d5c214874a986164079b5b4df25f4d443fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f936b027824fdda2715c087a1913d5c214874a986164079b5b4df25f4d443fc->leave($__internal_0f936b027824fdda2715c087a1913d5c214874a986164079b5b4df25f4d443fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d23bea1e21a8580038b7f2910c081ba693658d005388d49b718db9e5c14f6201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23bea1e21a8580038b7f2910c081ba693658d005388d49b718db9e5c14f6201->enter($__internal_d23bea1e21a8580038b7f2910c081ba693658d005388d49b718db9e5c14f6201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d23bea1e21a8580038b7f2910c081ba693658d005388d49b718db9e5c14f6201->leave($__internal_d23bea1e21a8580038b7f2910c081ba693658d005388d49b718db9e5c14f6201_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fc57dc399cbccd1555bdabd6cf0836c2f435f4e6d4c88014943a407a900a94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc57dc399cbccd1555bdabd6cf0836c2f435f4e6d4c88014943a407a900a94f->enter($__internal_0fc57dc399cbccd1555bdabd6cf0836c2f435f4e6d4c88014943a407a900a94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0fc57dc399cbccd1555bdabd6cf0836c2f435f4e6d4c88014943a407a900a94f->leave($__internal_0fc57dc399cbccd1555bdabd6cf0836c2f435f4e6d4c88014943a407a900a94f_prof);

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
