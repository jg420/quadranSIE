<?php

/* central/index.html.twig */
class __TwigTemplate_0e68d1dff1355cd8e5d23634a70bb3359fefa86d857048850392c8dca3cb3c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "central/index.html.twig", 1);
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
        $__internal_d4335d1a88755adfb63bfb4ea6b6ce07757534f43358142a9b6f5b7b352ac08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4335d1a88755adfb63bfb4ea6b6ce07757534f43358142a9b6f5b7b352ac08a->enter($__internal_d4335d1a88755adfb63bfb4ea6b6ce07757534f43358142a9b6f5b7b352ac08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "central/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4335d1a88755adfb63bfb4ea6b6ce07757534f43358142a9b6f5b7b352ac08a->leave($__internal_d4335d1a88755adfb63bfb4ea6b6ce07757534f43358142a9b6f5b7b352ac08a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b6c0712baeb5d4d75079967247a9f19d5fcdcfba0eb8376927d1087fe4e6462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6c0712baeb5d4d75079967247a9f19d5fcdcfba0eb8376927d1087fe4e6462->enter($__internal_5b6c0712baeb5d4d75079967247a9f19d5fcdcfba0eb8376927d1087fe4e6462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Central list</h1>

    <table>
        <thead>
            <tr>
                <th>Libcentral</th>
                <th>Etenduecentral</th>
                <th>Codeanalytique</th>
                <th>Idcentral</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["centrals"]) ? $context["centrals"] : $this->getContext($context, "centrals")));
        foreach ($context['_seq'] as $context["_key"] => $context["central"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_show", array("id" => $this->getAttribute($context["central"], "idCentral", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "libCentral", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "etendueCentral", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "codeAnalytique", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["central"], "idCentral", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_show", array("id" => $this->getAttribute($context["central"], "idCentral", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_edit", array("id" => $this->getAttribute($context["central"], "idCentral", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['central'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("central_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_5b6c0712baeb5d4d75079967247a9f19d5fcdcfba0eb8376927d1087fe4e6462->leave($__internal_5b6c0712baeb5d4d75079967247a9f19d5fcdcfba0eb8376927d1087fe4e6462_prof);

    }

    public function getTemplateName()
    {
        return "central/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Central list</h1>

    <table>
        <thead>
            <tr>
                <th>Libcentral</th>
                <th>Etenduecentral</th>
                <th>Codeanalytique</th>
                <th>Idcentral</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for central in centrals %}
            <tr>
                <td><a href=\"{{ path('central_show', { 'id': central.idCentral }) }}\">{{ central.libCentral }}</a></td>
                <td>{{ central.etendueCentral }}</td>
                <td>{{ central.codeAnalytique }}</td>
                <td>{{ central.idCentral }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('central_show', { 'id': central.idCentral }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('central_edit', { 'id': central.idCentral }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('central_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "central/index.html.twig", "E:\\DEV\\quadranSIE\\app\\Resources\\views\\central\\index.html.twig");
    }
}
