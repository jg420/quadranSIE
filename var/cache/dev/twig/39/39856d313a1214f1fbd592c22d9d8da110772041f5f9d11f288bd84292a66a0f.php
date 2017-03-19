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
        $__internal_d353cde1a5ae3d8d64c5b2cfe859ca5d406d8a79f2ee11228ce8cab1775c8b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d353cde1a5ae3d8d64c5b2cfe859ca5d406d8a79f2ee11228ce8cab1775c8b9f->enter($__internal_d353cde1a5ae3d8d64c5b2cfe859ca5d406d8a79f2ee11228ce8cab1775c8b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d353cde1a5ae3d8d64c5b2cfe859ca5d406d8a79f2ee11228ce8cab1775c8b9f->leave($__internal_d353cde1a5ae3d8d64c5b2cfe859ca5d406d8a79f2ee11228ce8cab1775c8b9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7bbcd8a633f43665edcf2d398eaf73afdd3b97e34c9811a389c51134d8098e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bbcd8a633f43665edcf2d398eaf73afdd3b97e34c9811a389c51134d8098e0->enter($__internal_a7bbcd8a633f43665edcf2d398eaf73afdd3b97e34c9811a389c51134d8098e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a7bbcd8a633f43665edcf2d398eaf73afdd3b97e34c9811a389c51134d8098e0->leave($__internal_a7bbcd8a633f43665edcf2d398eaf73afdd3b97e34c9811a389c51134d8098e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_06fa0499ce24e03c040ca239108f6a11474df4efdbe94cd1102aaa9f3560cdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fa0499ce24e03c040ca239108f6a11474df4efdbe94cd1102aaa9f3560cdbe->enter($__internal_06fa0499ce24e03c040ca239108f6a11474df4efdbe94cd1102aaa9f3560cdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_06fa0499ce24e03c040ca239108f6a11474df4efdbe94cd1102aaa9f3560cdbe->leave($__internal_06fa0499ce24e03c040ca239108f6a11474df4efdbe94cd1102aaa9f3560cdbe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62767610cd5274c31db2ada86b5aac624e680ca8bc5c3f27f86f7db338866e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62767610cd5274c31db2ada86b5aac624e680ca8bc5c3f27f86f7db338866e3b->enter($__internal_62767610cd5274c31db2ada86b5aac624e680ca8bc5c3f27f86f7db338866e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_62767610cd5274c31db2ada86b5aac624e680ca8bc5c3f27f86f7db338866e3b->leave($__internal_62767610cd5274c31db2ada86b5aac624e680ca8bc5c3f27f86f7db338866e3b_prof);

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
