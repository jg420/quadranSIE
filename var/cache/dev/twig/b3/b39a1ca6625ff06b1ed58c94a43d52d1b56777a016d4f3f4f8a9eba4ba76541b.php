<?php

/* :central:edit.html.twig */
class __TwigTemplate_730055604b7f3c221f8d330b3f84a1e3c198acc49adf53002a5e6e490e59307d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":central:edit.html.twig", 1);
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
        $__internal_e05a1438bf5aef159aa7210e43b88c0486a0b5baedcad899dc947a4ba84b872b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05a1438bf5aef159aa7210e43b88c0486a0b5baedcad899dc947a4ba84b872b->enter($__internal_e05a1438bf5aef159aa7210e43b88c0486a0b5baedcad899dc947a4ba84b872b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05a1438bf5aef159aa7210e43b88c0486a0b5baedcad899dc947a4ba84b872b->leave($__internal_e05a1438bf5aef159aa7210e43b88c0486a0b5baedcad899dc947a4ba84b872b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5875f1d56699f98cf50a9f555b4f99cf9d17afd6c742cf8beb9998f7d60468f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5875f1d56699f98cf50a9f555b4f99cf9d17afd6c742cf8beb9998f7d60468f7->enter($__internal_5875f1d56699f98cf50a9f555b4f99cf9d17afd6c742cf8beb9998f7d60468f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5875f1d56699f98cf50a9f555b4f99cf9d17afd6c742cf8beb9998f7d60468f7->leave($__internal_5875f1d56699f98cf50a9f555b4f99cf9d17afd6c742cf8beb9998f7d60468f7_prof);

    }

    public function getTemplateName()
    {
        return ":central:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Central edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('central_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":central:edit.html.twig", "E:\\DEV\\quadranSIE\\app/Resources\\views/central/edit.html.twig");
    }
}
