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
        $__internal_3ee51582834a652ddb031cbd2f5f86a7683ed626af705afbce489026b00dd876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee51582834a652ddb031cbd2f5f86a7683ed626af705afbce489026b00dd876->enter($__internal_3ee51582834a652ddb031cbd2f5f86a7683ed626af705afbce489026b00dd876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee51582834a652ddb031cbd2f5f86a7683ed626af705afbce489026b00dd876->leave($__internal_3ee51582834a652ddb031cbd2f5f86a7683ed626af705afbce489026b00dd876_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac8109b5bb6f05bd7e2cd90213afe02b89c1f07493431347871bc14fc703c7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8109b5bb6f05bd7e2cd90213afe02b89c1f07493431347871bc14fc703c7ec->enter($__internal_ac8109b5bb6f05bd7e2cd90213afe02b89c1f07493431347871bc14fc703c7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac8109b5bb6f05bd7e2cd90213afe02b89c1f07493431347871bc14fc703c7ec->leave($__internal_ac8109b5bb6f05bd7e2cd90213afe02b89c1f07493431347871bc14fc703c7ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f609997e34cc76db6bca37b312f23f4d891d96df815e0e9f736c14d4f24c744c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f609997e34cc76db6bca37b312f23f4d891d96df815e0e9f736c14d4f24c744c->enter($__internal_f609997e34cc76db6bca37b312f23f4d891d96df815e0e9f736c14d4f24c744c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f609997e34cc76db6bca37b312f23f4d891d96df815e0e9f736c14d4f24c744c->leave($__internal_f609997e34cc76db6bca37b312f23f4d891d96df815e0e9f736c14d4f24c744c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cf95de71a2a576e85ef13a200694e10ac44eb6390e36f4e9fb64f8898b806eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf95de71a2a576e85ef13a200694e10ac44eb6390e36f4e9fb64f8898b806eb->enter($__internal_6cf95de71a2a576e85ef13a200694e10ac44eb6390e36f4e9fb64f8898b806eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6cf95de71a2a576e85ef13a200694e10ac44eb6390e36f4e9fb64f8898b806eb->leave($__internal_6cf95de71a2a576e85ef13a200694e10ac44eb6390e36f4e9fb64f8898b806eb_prof);

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
