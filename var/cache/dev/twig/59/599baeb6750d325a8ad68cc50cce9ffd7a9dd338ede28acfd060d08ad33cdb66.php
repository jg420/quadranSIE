<?php

/* SIEDocumentBundle:Default:index.html.twig */
class __TwigTemplate_03e3d0076ce09d43737bbe58854a628445d22199d5364b851521f6ca56ef9020 extends Twig_Template
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
        $__internal_83e20a0eca159a4207e16b044bea2ef106cc9148284cd171b5abe676d8502a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e20a0eca159a4207e16b044bea2ef106cc9148284cd171b5abe676d8502a71->enter($__internal_83e20a0eca159a4207e16b044bea2ef106cc9148284cd171b5abe676d8502a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEDocumentBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_83e20a0eca159a4207e16b044bea2ef106cc9148284cd171b5abe676d8502a71->leave($__internal_83e20a0eca159a4207e16b044bea2ef106cc9148284cd171b5abe676d8502a71_prof);

    }

    public function getTemplateName()
    {
        return "SIEDocumentBundle:Default:index.html.twig";
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
", "SIEDocumentBundle:Default:index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\DocumentBundle/Resources/views/Default/index.html.twig");
    }
}
