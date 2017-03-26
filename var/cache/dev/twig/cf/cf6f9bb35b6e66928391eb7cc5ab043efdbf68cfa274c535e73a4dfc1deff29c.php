<?php

/* SIECoreBundle:Default:view.html.twig */
class __TwigTemplate_92f6c3da8305127d01eda7e6c5916ece99570349a9f98171c1085c5e2ff7d8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f4da66ec7a3483591f04bc3019688640c48a1a5e72f3ee27eacae4eb82ca359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4da66ec7a3483591f04bc3019688640c48a1a5e72f3ee27eacae4eb82ca359->enter($__internal_5f4da66ec7a3483591f04bc3019688640c48a1a5e72f3ee27eacae4eb82ca359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:view.html.twig"));

        // line 1
        echo " 
";
        // line 3
        echo "


    <div class=\"well\">
      ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_5f4da66ec7a3483591f04bc3019688640c48a1a5e72f3ee27eacae4eb82ca359->leave($__internal_5f4da66ec7a3483591f04bc3019688640c48a1a5e72f3ee27eacae4eb82ca359_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" 
{# src/SIE/CoreBundle/Resources/views/Default/form.html.twig #}



    <div class=\"well\">
      {{ form(form) }}
    </div>
", "SIECoreBundle:Default:view.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle/Resources/views/Default/view.html.twig");
    }
}
