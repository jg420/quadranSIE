<?php

/* SIEAccessBundle:Default:index.html.twig */
class __TwigTemplate_ebb801d950b1cf81e3ff2ce44e0358a173f6f9ec7171882ae3c7da5e44342f80 extends Twig_Template
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
        $__internal_006a66acacd7b698915df439f7d30ba3aba7411c1d421ba46615cd17677a692a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006a66acacd7b698915df439f7d30ba3aba7411c1d421ba46615cd17677a692a->enter($__internal_006a66acacd7b698915df439f7d30ba3aba7411c1d421ba46615cd17677a692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEAccessBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_006a66acacd7b698915df439f7d30ba3aba7411c1d421ba46615cd17677a692a->leave($__internal_006a66acacd7b698915df439f7d30ba3aba7411c1d421ba46615cd17677a692a_prof);

    }

    public function getTemplateName()
    {
        return "SIEAccessBundle:Default:index.html.twig";
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
", "SIEAccessBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\AccessBundle/Resources/views/Default/index.html.twig");
    }
}
