<?php

/* @SIEDocument/Default/index.html.twig */
class __TwigTemplate_d2c26a7c914c84aeb81bc0b593a309254ebf5cc48fc4f5d4195bf6f6621f96b6 extends Twig_Template
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
        $__internal_629ae89b04041ed182cb196a8beffacde45f526dc56bc7694349a530f93807cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629ae89b04041ed182cb196a8beffacde45f526dc56bc7694349a530f93807cd->enter($__internal_629ae89b04041ed182cb196a8beffacde45f526dc56bc7694349a530f93807cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIEDocument/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_629ae89b04041ed182cb196a8beffacde45f526dc56bc7694349a530f93807cd->leave($__internal_629ae89b04041ed182cb196a8beffacde45f526dc56bc7694349a530f93807cd_prof);

    }

    public function getTemplateName()
    {
        return "@SIEDocument/Default/index.html.twig";
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
", "@SIEDocument/Default/index.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\DocumentBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
