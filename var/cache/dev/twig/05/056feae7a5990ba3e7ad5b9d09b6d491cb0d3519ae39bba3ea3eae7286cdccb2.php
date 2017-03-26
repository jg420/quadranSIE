<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4bdffca6c2c1e8d4e8435745246c17e4bf681ecd30649d5ecbc1bba885dd0682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00ecda45faf7a257af2ecf5c6560591c05705fa595c00a9acf27719802ad43bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ecda45faf7a257af2ecf5c6560591c05705fa595c00a9acf27719802ad43bb->enter($__internal_00ecda45faf7a257af2ecf5c6560591c05705fa595c00a9acf27719802ad43bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ecda45faf7a257af2ecf5c6560591c05705fa595c00a9acf27719802ad43bb->leave($__internal_00ecda45faf7a257af2ecf5c6560591c05705fa595c00a9acf27719802ad43bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c6200ebaa810ac906073655f1e3f398fdf26b620530c4c2cb46fcb6687f9aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6200ebaa810ac906073655f1e3f398fdf26b620530c4c2cb46fcb6687f9aed->enter($__internal_2c6200ebaa810ac906073655f1e3f398fdf26b620530c4c2cb46fcb6687f9aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c6200ebaa810ac906073655f1e3f398fdf26b620530c4c2cb46fcb6687f9aed->leave($__internal_2c6200ebaa810ac906073655f1e3f398fdf26b620530c4c2cb46fcb6687f9aed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7cd4d48c835c275d884ac5b7f22fbcc31d52c1e7c3eb8a455b82da01498b220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cd4d48c835c275d884ac5b7f22fbcc31d52c1e7c3eb8a455b82da01498b220->enter($__internal_e7cd4d48c835c275d884ac5b7f22fbcc31d52c1e7c3eb8a455b82da01498b220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e7cd4d48c835c275d884ac5b7f22fbcc31d52c1e7c3eb8a455b82da01498b220->leave($__internal_e7cd4d48c835c275d884ac5b7f22fbcc31d52c1e7c3eb8a455b82da01498b220_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae2b256518ea92d4523bc8dec77313b8f694285032b6a33ab3516c54ef0554b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2b256518ea92d4523bc8dec77313b8f694285032b6a33ab3516c54ef0554b2->enter($__internal_ae2b256518ea92d4523bc8dec77313b8f694285032b6a33ab3516c54ef0554b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae2b256518ea92d4523bc8dec77313b8f694285032b6a33ab3516c54ef0554b2->leave($__internal_ae2b256518ea92d4523bc8dec77313b8f694285032b6a33ab3516c54ef0554b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
