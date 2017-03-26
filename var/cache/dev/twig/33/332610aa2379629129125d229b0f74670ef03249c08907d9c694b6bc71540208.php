<?php

/* @SIECore/Default/view.html.twig */
class __TwigTemplate_62d851a6e6b5fd9aae9d5ff122bc8a648798b0ef43c292b5cab5395a7ff0902a extends Twig_Template
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
        $__internal_3855c7e04a43265d33602dd5592dbb8272b53aa71f8e206f20d3186ac6354fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3855c7e04a43265d33602dd5592dbb8272b53aa71f8e206f20d3186ac6354fde->enter($__internal_3855c7e04a43265d33602dd5592dbb8272b53aa71f8e206f20d3186ac6354fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECore/Default/view.html.twig"));

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
        
        $__internal_3855c7e04a43265d33602dd5592dbb8272b53aa71f8e206f20d3186ac6354fde->leave($__internal_3855c7e04a43265d33602dd5592dbb8272b53aa71f8e206f20d3186ac6354fde_prof);

    }

    public function getTemplateName()
    {
        return "@SIECore/Default/view.html.twig";
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
", "@SIECore/Default/view.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle\\Resources\\views\\Default\\view.html.twig");
    }
}
