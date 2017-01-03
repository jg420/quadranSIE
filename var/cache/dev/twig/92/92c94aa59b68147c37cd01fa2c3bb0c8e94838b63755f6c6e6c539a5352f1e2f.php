<?php

/* central/show.html.twig */
class __TwigTemplate_b228924ff758a62b1d9e8275efd8fefc399b3a9ce652cd1066b6a2610998f65f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "central/show.html.twig", 1);
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
        $__internal_c8e71c0cafb6b189c56cea72efc59eb7a67264057b29c8683b3e685e91b255ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e71c0cafb6b189c56cea72efc59eb7a67264057b29c8683b3e685e91b255ba->enter($__internal_c8e71c0cafb6b189c56cea72efc59eb7a67264057b29c8683b3e685e91b255ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "central/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e71c0cafb6b189c56cea72efc59eb7a67264057b29c8683b3e685e91b255ba->leave($__internal_c8e71c0cafb6b189c56cea72efc59eb7a67264057b29c8683b3e685e91b255ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f82c50beb59513e0c096874c728d7ca7be9af5a3c09bc53aa08a50945ef10673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82c50beb59513e0c096874c728d7ca7be9af5a3c09bc53aa08a50945ef10673->enter($__internal_f82c50beb59513e0c096874c728d7ca7be9af5a3c09bc53aa08a50945ef10673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central</h1>

    <table>
        <tbody>
            <tr>
                <th>Libcentral</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "libCentral", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etenduecentral</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "etendueCentral", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codeanalytique</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "codeAnalytique", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcentral</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "idCentral", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_edit", array("id" => $this->getAttribute((isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), "idCentral", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f82c50beb59513e0c096874c728d7ca7be9af5a3c09bc53aa08a50945ef10673->leave($__internal_f82c50beb59513e0c096874c728d7ca7be9af5a3c09bc53aa08a50945ef10673_prof);

    }

    public function getTemplateName()
    {
        return "central/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Central</h1>

    <table>
        <tbody>
            <tr>
                <th>Libcentral</th>
                <td>{{ central.libCentral }}</td>
            </tr>
            <tr>
                <th>Etenduecentral</th>
                <td>{{ central.etendueCentral }}</td>
            </tr>
            <tr>
                <th>Codeanalytique</th>
                <td>{{ central.codeAnalytique }}</td>
            </tr>
            <tr>
                <th>Idcentral</th>
                <td>{{ central.idCentral }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('central_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('central_edit', { 'id': central.idCentral }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "central/show.html.twig", "E:\\DEV\\quadranSIE\\app\\Resources\\views\\central\\show.html.twig");
    }
}
