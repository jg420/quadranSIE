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
        $__internal_cbf56084c290004a0f848f333a356cdb641968bf9938164574fef4eb2909f7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf56084c290004a0f848f333a356cdb641968bf9938164574fef4eb2909f7fd->enter($__internal_cbf56084c290004a0f848f333a356cdb641968bf9938164574fef4eb2909f7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cbf56084c290004a0f848f333a356cdb641968bf9938164574fef4eb2909f7fd->leave($__internal_cbf56084c290004a0f848f333a356cdb641968bf9938164574fef4eb2909f7fd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7865e1d9350dc8e27b22389645a71b375baf859f44a96fb77a456a5def55a05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7865e1d9350dc8e27b22389645a71b375baf859f44a96fb77a456a5def55a05e->enter($__internal_7865e1d9350dc8e27b22389645a71b375baf859f44a96fb77a456a5def55a05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7865e1d9350dc8e27b22389645a71b375baf859f44a96fb77a456a5def55a05e->leave($__internal_7865e1d9350dc8e27b22389645a71b375baf859f44a96fb77a456a5def55a05e_prof);

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
