<?php

/* :central:new.html.twig */
class __TwigTemplate_60a7952662491a4d9bbdaa08351c83573cd7bece178a0fd072ae6ef1044091d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":central:new.html.twig", 1);
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
        $__internal_ea367b602b5cd987acb5d4a1a897d6dc3c226e1c0fe01ff9a05ff000e3008126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea367b602b5cd987acb5d4a1a897d6dc3c226e1c0fe01ff9a05ff000e3008126->enter($__internal_ea367b602b5cd987acb5d4a1a897d6dc3c226e1c0fe01ff9a05ff000e3008126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":central:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea367b602b5cd987acb5d4a1a897d6dc3c226e1c0fe01ff9a05ff000e3008126->leave($__internal_ea367b602b5cd987acb5d4a1a897d6dc3c226e1c0fe01ff9a05ff000e3008126_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dd511d0633d5e6fd05f021c6e3a4394fcddc17ff0ea845e8bd68eadf7d021e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd511d0633d5e6fd05f021c6e3a4394fcddc17ff0ea845e8bd68eadf7d021e8->enter($__internal_0dd511d0633d5e6fd05f021c6e3a4394fcddc17ff0ea845e8bd68eadf7d021e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dd511d0633d5e6fd05f021c6e3a4394fcddc17ff0ea845e8bd68eadf7d021e8->leave($__internal_0dd511d0633d5e6fd05f021c6e3a4394fcddc17ff0ea845e8bd68eadf7d021e8_prof);

    }

    public function getTemplateName()
    {
        return ":central:new.html.twig";
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
", ":central:new.html.twig", "E:\\DEV\\quadranSIE\\app/Resources\\views/central/new.html.twig");
    }
}
