<?php

/* SIEContratBundle:Default:index.html.twig */
class __TwigTemplate_61bd6355c2d64f12237b5274f9fdd79fd4547870032dd60d03f79e11ca11116f extends Twig_Template
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
        $__internal_25a2d50db4cc55f9929544864e82146640289af29a84611c95e4108ebbe790c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a2d50db4cc55f9929544864e82146640289af29a84611c95e4108ebbe790c2->enter($__internal_25a2d50db4cc55f9929544864e82146640289af29a84611c95e4108ebbe790c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEContratBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_25a2d50db4cc55f9929544864e82146640289af29a84611c95e4108ebbe790c2->leave($__internal_25a2d50db4cc55f9929544864e82146640289af29a84611c95e4108ebbe790c2_prof);

    }

    public function getTemplateName()
    {
        return "SIEContratBundle:Default:index.html.twig";
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
", "SIEContratBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\ContratBundle/Resources/views/Default/index.html.twig");
    }
}
