<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_368adaadb692c1c499b0e3d38b5feb16705b2f9d0a6cea10322dbf8764a538c8 extends Twig_Template
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
        $__internal_27ad62cf372047e8a71a576a3a1c08a3af24dff0347d5703651d61e0d7bd8d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ad62cf372047e8a71a576a3a1c08a3af24dff0347d5703651d61e0d7bd8d13->enter($__internal_27ad62cf372047e8a71a576a3a1c08a3af24dff0347d5703651d61e0d7bd8d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_27ad62cf372047e8a71a576a3a1c08a3af24dff0347d5703651d61e0d7bd8d13->leave($__internal_27ad62cf372047e8a71a576a3a1c08a3af24dff0347d5703651d61e0d7bd8d13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
