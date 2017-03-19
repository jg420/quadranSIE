<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_320217e270dd190dc937978f204a654403e76fef7833de576126f35ff266d41b extends Twig_Template
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
        $__internal_5fa7676c5d2ad8727f59253560d67fd07a7ee66eb188d64eba86cc2296afbfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa7676c5d2ad8727f59253560d67fd07a7ee66eb188d64eba86cc2296afbfde->enter($__internal_5fa7676c5d2ad8727f59253560d67fd07a7ee66eb188d64eba86cc2296afbfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5fa7676c5d2ad8727f59253560d67fd07a7ee66eb188d64eba86cc2296afbfde->leave($__internal_5fa7676c5d2ad8727f59253560d67fd07a7ee66eb188d64eba86cc2296afbfde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
