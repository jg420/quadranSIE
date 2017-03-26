<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1fc31d80c3d2d92d118be7c99eba078eea216feef7a94f3f28d6c0bb265408d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6af51d37c176435658cc3137d99741f4d8a50eb527a3bd21ced32f24266f654a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af51d37c176435658cc3137d99741f4d8a50eb527a3bd21ced32f24266f654a->enter($__internal_6af51d37c176435658cc3137d99741f4d8a50eb527a3bd21ced32f24266f654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af51d37c176435658cc3137d99741f4d8a50eb527a3bd21ced32f24266f654a->leave($__internal_6af51d37c176435658cc3137d99741f4d8a50eb527a3bd21ced32f24266f654a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bbe90304b99c93f3f9a6d0fab96ef22b909e67c70a299ee7f7cde4299d317e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe90304b99c93f3f9a6d0fab96ef22b909e67c70a299ee7f7cde4299d317e36->enter($__internal_bbe90304b99c93f3f9a6d0fab96ef22b909e67c70a299ee7f7cde4299d317e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bbe90304b99c93f3f9a6d0fab96ef22b909e67c70a299ee7f7cde4299d317e36->leave($__internal_bbe90304b99c93f3f9a6d0fab96ef22b909e67c70a299ee7f7cde4299d317e36_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17750655fc8c06f1b500a1ebbbb17dab04db10683faba7af2ea7c72ba4fa6f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17750655fc8c06f1b500a1ebbbb17dab04db10683faba7af2ea7c72ba4fa6f3f->enter($__internal_17750655fc8c06f1b500a1ebbbb17dab04db10683faba7af2ea7c72ba4fa6f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17750655fc8c06f1b500a1ebbbb17dab04db10683faba7af2ea7c72ba4fa6f3f->leave($__internal_17750655fc8c06f1b500a1ebbbb17dab04db10683faba7af2ea7c72ba4fa6f3f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0144ded300eadfbd0a8d1d349674a650bc28e2d816ca0593c87e573917388953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0144ded300eadfbd0a8d1d349674a650bc28e2d816ca0593c87e573917388953->enter($__internal_0144ded300eadfbd0a8d1d349674a650bc28e2d816ca0593c87e573917388953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0144ded300eadfbd0a8d1d349674a650bc28e2d816ca0593c87e573917388953->leave($__internal_0144ded300eadfbd0a8d1d349674a650bc28e2d816ca0593c87e573917388953_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
