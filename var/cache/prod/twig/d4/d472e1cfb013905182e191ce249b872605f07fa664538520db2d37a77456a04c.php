<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a00b734caecb3b128d7020deb044b77486b2d17094df42490222d110b1f1bef9 extends Twig_Template
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
        $__internal_8a04abe9a24bf53ce1b329c9529bcc26524e808d2f217013935d494bcf552410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a04abe9a24bf53ce1b329c9529bcc26524e808d2f217013935d494bcf552410->enter($__internal_8a04abe9a24bf53ce1b329c9529bcc26524e808d2f217013935d494bcf552410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a04abe9a24bf53ce1b329c9529bcc26524e808d2f217013935d494bcf552410->leave($__internal_8a04abe9a24bf53ce1b329c9529bcc26524e808d2f217013935d494bcf552410_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_389fb25bda4c26fafba8896b3a194bfc2fb9c5adec900487d1f892e1056bb346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389fb25bda4c26fafba8896b3a194bfc2fb9c5adec900487d1f892e1056bb346->enter($__internal_389fb25bda4c26fafba8896b3a194bfc2fb9c5adec900487d1f892e1056bb346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_389fb25bda4c26fafba8896b3a194bfc2fb9c5adec900487d1f892e1056bb346->leave($__internal_389fb25bda4c26fafba8896b3a194bfc2fb9c5adec900487d1f892e1056bb346_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f16bc2857719440ee0cbccfaaf43b442fe322d91edc23dc5f354fa341b50edc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16bc2857719440ee0cbccfaaf43b442fe322d91edc23dc5f354fa341b50edc8->enter($__internal_f16bc2857719440ee0cbccfaaf43b442fe322d91edc23dc5f354fa341b50edc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f16bc2857719440ee0cbccfaaf43b442fe322d91edc23dc5f354fa341b50edc8->leave($__internal_f16bc2857719440ee0cbccfaaf43b442fe322d91edc23dc5f354fa341b50edc8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_818ce8e59e90a0490ee163dac9f6088c5a66578a4e14c3c17d6ddfe014e95d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818ce8e59e90a0490ee163dac9f6088c5a66578a4e14c3c17d6ddfe014e95d2d->enter($__internal_818ce8e59e90a0490ee163dac9f6088c5a66578a4e14c3c17d6ddfe014e95d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_818ce8e59e90a0490ee163dac9f6088c5a66578a4e14c3c17d6ddfe014e95d2d->leave($__internal_818ce8e59e90a0490ee163dac9f6088c5a66578a4e14c3c17d6ddfe014e95d2d_prof);

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
