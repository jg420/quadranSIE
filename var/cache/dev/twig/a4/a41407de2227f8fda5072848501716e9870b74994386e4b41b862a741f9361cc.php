<?php

/* SIEDirectionBundle:Default:index.html.twig */
class __TwigTemplate_ec83b6c4c33501e980ce9ec29c3c1b13da4a19fbab40da2b292a8b36aafd65b5 extends Twig_Template
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
        $__internal_76f767cb20a6a19ef89d7601f049fe0f576259ebf6ad01902bf64b92e5602ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f767cb20a6a19ef89d7601f049fe0f576259ebf6ad01902bf64b92e5602ca8->enter($__internal_76f767cb20a6a19ef89d7601f049fe0f576259ebf6ad01902bf64b92e5602ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEDirectionBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_76f767cb20a6a19ef89d7601f049fe0f576259ebf6ad01902bf64b92e5602ca8->leave($__internal_76f767cb20a6a19ef89d7601f049fe0f576259ebf6ad01902bf64b92e5602ca8_prof);

    }

    public function getTemplateName()
    {
        return "SIEDirectionBundle:Default:index.html.twig";
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
", "SIEDirectionBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\DirectionBundle/Resources/views/Default/index.html.twig");
    }
}
