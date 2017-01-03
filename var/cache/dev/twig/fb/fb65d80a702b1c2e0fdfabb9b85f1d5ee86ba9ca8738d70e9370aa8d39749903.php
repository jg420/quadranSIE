<?php

/* @SIEDirection/Default/index.html.twig */
class __TwigTemplate_1a0df32cd91cbb65ede4fefc2b03504b3b7d745b87ff37b10256ef6298ff3ecb extends Twig_Template
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
        $__internal_d1e801310d3244a941efe55720267b64a8497703b856c2d03ca5f624678e5e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e801310d3244a941efe55720267b64a8497703b856c2d03ca5f624678e5e96->enter($__internal_d1e801310d3244a941efe55720267b64a8497703b856c2d03ca5f624678e5e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIEDirection/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d1e801310d3244a941efe55720267b64a8497703b856c2d03ca5f624678e5e96->leave($__internal_d1e801310d3244a941efe55720267b64a8497703b856c2d03ca5f624678e5e96_prof);

    }

    public function getTemplateName()
    {
        return "@SIEDirection/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "@SIEDirection/Default/index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\DirectionBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
