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
        $__internal_44e3b86d0043627caf4a9e268a08b9debfdd76f65c13bab9853b3995440658bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e3b86d0043627caf4a9e268a08b9debfdd76f65c13bab9853b3995440658bf->enter($__internal_44e3b86d0043627caf4a9e268a08b9debfdd76f65c13bab9853b3995440658bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_44e3b86d0043627caf4a9e268a08b9debfdd76f65c13bab9853b3995440658bf->leave($__internal_44e3b86d0043627caf4a9e268a08b9debfdd76f65c13bab9853b3995440658bf_prof);

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
