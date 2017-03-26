<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6927d23bd0aec6ac0285a37b27871b313d5bb8879e1608d37293055e5d77ee94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62893c773c2c3fb422dfefb79e396dd90c2aa76be4ba50697a740e281ddb89ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62893c773c2c3fb422dfefb79e396dd90c2aa76be4ba50697a740e281ddb89ea->enter($__internal_62893c773c2c3fb422dfefb79e396dd90c2aa76be4ba50697a740e281ddb89ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_62893c773c2c3fb422dfefb79e396dd90c2aa76be4ba50697a740e281ddb89ea->leave($__internal_62893c773c2c3fb422dfefb79e396dd90c2aa76be4ba50697a740e281ddb89ea_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_93b96b506e63ee075674a928c2a7fadf6ae48a541f22cef7de633ae4474b5b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b96b506e63ee075674a928c2a7fadf6ae48a541f22cef7de633ae4474b5b0e->enter($__internal_93b96b506e63ee075674a928c2a7fadf6ae48a541f22cef7de633ae4474b5b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_93b96b506e63ee075674a928c2a7fadf6ae48a541f22cef7de633ae4474b5b0e->leave($__internal_93b96b506e63ee075674a928c2a7fadf6ae48a541f22cef7de633ae4474b5b0e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
