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
        $__internal_c2c885d575ecfab565939cf92a1571963a760748c96bfac8da1ac4f2c001f2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c885d575ecfab565939cf92a1571963a760748c96bfac8da1ac4f2c001f2b3->enter($__internal_c2c885d575ecfab565939cf92a1571963a760748c96bfac8da1ac4f2c001f2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c885d575ecfab565939cf92a1571963a760748c96bfac8da1ac4f2c001f2b3->leave($__internal_c2c885d575ecfab565939cf92a1571963a760748c96bfac8da1ac4f2c001f2b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86e15affc8136519c28f96ed7cede7f9da67637d3ef16a0b4d318d27ec34c793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e15affc8136519c28f96ed7cede7f9da67637d3ef16a0b4d318d27ec34c793->enter($__internal_86e15affc8136519c28f96ed7cede7f9da67637d3ef16a0b4d318d27ec34c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86e15affc8136519c28f96ed7cede7f9da67637d3ef16a0b4d318d27ec34c793->leave($__internal_86e15affc8136519c28f96ed7cede7f9da67637d3ef16a0b4d318d27ec34c793_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d1c068bce8cd8a88a090798e478fa96778008e10862e1b4793b5e6b8f54127c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1c068bce8cd8a88a090798e478fa96778008e10862e1b4793b5e6b8f54127c->enter($__internal_4d1c068bce8cd8a88a090798e478fa96778008e10862e1b4793b5e6b8f54127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d1c068bce8cd8a88a090798e478fa96778008e10862e1b4793b5e6b8f54127c->leave($__internal_4d1c068bce8cd8a88a090798e478fa96778008e10862e1b4793b5e6b8f54127c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc2af1c21e496dc63381fe0b80d6683ee079543b06e2d260dc96544ddeab9589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2af1c21e496dc63381fe0b80d6683ee079543b06e2d260dc96544ddeab9589->enter($__internal_cc2af1c21e496dc63381fe0b80d6683ee079543b06e2d260dc96544ddeab9589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cc2af1c21e496dc63381fe0b80d6683ee079543b06e2d260dc96544ddeab9589->leave($__internal_cc2af1c21e496dc63381fe0b80d6683ee079543b06e2d260dc96544ddeab9589_prof);

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
