<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_13b43ac53ddff140edd0826ef607516124ef8af7ede90d17f7b8a515931425e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_25f430c21a5a535062dcf18aa41ccf61e0f45c8a762fb961de639e1004114b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f430c21a5a535062dcf18aa41ccf61e0f45c8a762fb961de639e1004114b91->enter($__internal_25f430c21a5a535062dcf18aa41ccf61e0f45c8a762fb961de639e1004114b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f430c21a5a535062dcf18aa41ccf61e0f45c8a762fb961de639e1004114b91->leave($__internal_25f430c21a5a535062dcf18aa41ccf61e0f45c8a762fb961de639e1004114b91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1db667f8f1e2e7b2cbd15a3a5cf28f60e85d1838121479ffca7c0816aa98a806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db667f8f1e2e7b2cbd15a3a5cf28f60e85d1838121479ffca7c0816aa98a806->enter($__internal_1db667f8f1e2e7b2cbd15a3a5cf28f60e85d1838121479ffca7c0816aa98a806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1db667f8f1e2e7b2cbd15a3a5cf28f60e85d1838121479ffca7c0816aa98a806->leave($__internal_1db667f8f1e2e7b2cbd15a3a5cf28f60e85d1838121479ffca7c0816aa98a806_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b77d9a577e3c9bc62394fc811019359c8cd232a40e6b7a609b884e03c0d3b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b77d9a577e3c9bc62394fc811019359c8cd232a40e6b7a609b884e03c0d3b6f->enter($__internal_7b77d9a577e3c9bc62394fc811019359c8cd232a40e6b7a609b884e03c0d3b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b77d9a577e3c9bc62394fc811019359c8cd232a40e6b7a609b884e03c0d3b6f->leave($__internal_7b77d9a577e3c9bc62394fc811019359c8cd232a40e6b7a609b884e03c0d3b6f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e08e334881be94d71553d9d2a33df7355a49023b8bec3ae6bf2ccf27889b4d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08e334881be94d71553d9d2a33df7355a49023b8bec3ae6bf2ccf27889b4d06->enter($__internal_e08e334881be94d71553d9d2a33df7355a49023b8bec3ae6bf2ccf27889b4d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e08e334881be94d71553d9d2a33df7355a49023b8bec3ae6bf2ccf27889b4d06->leave($__internal_e08e334881be94d71553d9d2a33df7355a49023b8bec3ae6bf2ccf27889b4d06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
