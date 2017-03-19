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
        $__internal_5a29eb1eddadd9376225941d6efb82ec99503431e131f8d3a756aa01bb1a97d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a29eb1eddadd9376225941d6efb82ec99503431e131f8d3a756aa01bb1a97d1->enter($__internal_5a29eb1eddadd9376225941d6efb82ec99503431e131f8d3a756aa01bb1a97d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5a29eb1eddadd9376225941d6efb82ec99503431e131f8d3a756aa01bb1a97d1->leave($__internal_5a29eb1eddadd9376225941d6efb82ec99503431e131f8d3a756aa01bb1a97d1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c2f58e2f5eb35568bd0ffc715cb828bbd521d48e69eb5264d76343804d68627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2f58e2f5eb35568bd0ffc715cb828bbd521d48e69eb5264d76343804d68627->enter($__internal_9c2f58e2f5eb35568bd0ffc715cb828bbd521d48e69eb5264d76343804d68627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9c2f58e2f5eb35568bd0ffc715cb828bbd521d48e69eb5264d76343804d68627->leave($__internal_9c2f58e2f5eb35568bd0ffc715cb828bbd521d48e69eb5264d76343804d68627_prof);

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
