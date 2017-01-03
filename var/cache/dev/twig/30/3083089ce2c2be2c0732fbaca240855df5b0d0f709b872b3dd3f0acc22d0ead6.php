<?php

/* @SIEAccess/Default/index.html.twig */
class __TwigTemplate_895b2db2e40722eb04b719c7d6c05918193cc2d6cc2ee99e35b3f743b48afaa7 extends Twig_Template
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
        $__internal_7889e59dbd4aae9dc07060754f115ffa7a3a209e32619b3b7278d2de776b2a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7889e59dbd4aae9dc07060754f115ffa7a3a209e32619b3b7278d2de776b2a7c->enter($__internal_7889e59dbd4aae9dc07060754f115ffa7a3a209e32619b3b7278d2de776b2a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIEAccess/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_7889e59dbd4aae9dc07060754f115ffa7a3a209e32619b3b7278d2de776b2a7c->leave($__internal_7889e59dbd4aae9dc07060754f115ffa7a3a209e32619b3b7278d2de776b2a7c_prof);

    }

    public function getTemplateName()
    {
        return "@SIEAccess/Default/index.html.twig";
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
", "@SIEAccess/Default/index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\AccessBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
