<?php

/* central/new.html.twig */
class __TwigTemplate_9c7be0bf042e05d7be5280249434b8c08324de78d5fa01cca17c272a1758395e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "central/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b74fbcc5af10cfe31d617e4d382e9f3d55eb8cb7c0ead6bd4efde1301380e22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74fbcc5af10cfe31d617e4d382e9f3d55eb8cb7c0ead6bd4efde1301380e22c->enter($__internal_b74fbcc5af10cfe31d617e4d382e9f3d55eb8cb7c0ead6bd4efde1301380e22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "central/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74fbcc5af10cfe31d617e4d382e9f3d55eb8cb7c0ead6bd4efde1301380e22c->leave($__internal_b74fbcc5af10cfe31d617e4d382e9f3d55eb8cb7c0ead6bd4efde1301380e22c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c1a958b0b2ff08423878f2d9bdd88a85847578193c5138e7381c93ac70f6526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1a958b0b2ff08423878f2d9bdd88a85847578193c5138e7381c93ac70f6526->enter($__internal_0c1a958b0b2ff08423878f2d9bdd88a85847578193c5138e7381c93ac70f6526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0c1a958b0b2ff08423878f2d9bdd88a85847578193c5138e7381c93ac70f6526->leave($__internal_0c1a958b0b2ff08423878f2d9bdd88a85847578193c5138e7381c93ac70f6526_prof);

    }

    public function getTemplateName()
    {
        return "central/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Central creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('central_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "central/new.html.twig", "E:\\DEV\\quadranSIE\\app\\Resources\\views\\central\\new.html.twig");
    }
}
