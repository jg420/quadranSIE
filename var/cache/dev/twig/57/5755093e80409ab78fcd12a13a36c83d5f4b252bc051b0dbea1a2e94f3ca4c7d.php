<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a204c890d17f70c014bf78ee9566acd4319d021ca9ee6631eaef655efc33a8f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_37ac96db13b4f8350e6dbf18b7acbacfdb0a48c54bb153adaf009e7c57d117c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ac96db13b4f8350e6dbf18b7acbacfdb0a48c54bb153adaf009e7c57d117c9->enter($__internal_37ac96db13b4f8350e6dbf18b7acbacfdb0a48c54bb153adaf009e7c57d117c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ac96db13b4f8350e6dbf18b7acbacfdb0a48c54bb153adaf009e7c57d117c9->leave($__internal_37ac96db13b4f8350e6dbf18b7acbacfdb0a48c54bb153adaf009e7c57d117c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06105fc8e0cf30a9a5344e738287cb7ff7b4992c4be6255ded757202e6687ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06105fc8e0cf30a9a5344e738287cb7ff7b4992c4be6255ded757202e6687ce4->enter($__internal_06105fc8e0cf30a9a5344e738287cb7ff7b4992c4be6255ded757202e6687ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_06105fc8e0cf30a9a5344e738287cb7ff7b4992c4be6255ded757202e6687ce4->leave($__internal_06105fc8e0cf30a9a5344e738287cb7ff7b4992c4be6255ded757202e6687ce4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2dec35ecdceec8c00232c19883b9b41df51912b3f1f7fc256a85bba58009788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dec35ecdceec8c00232c19883b9b41df51912b3f1f7fc256a85bba58009788->enter($__internal_e2dec35ecdceec8c00232c19883b9b41df51912b3f1f7fc256a85bba58009788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e2dec35ecdceec8c00232c19883b9b41df51912b3f1f7fc256a85bba58009788->leave($__internal_e2dec35ecdceec8c00232c19883b9b41df51912b3f1f7fc256a85bba58009788_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
