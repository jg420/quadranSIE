<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_61bc07ef81fc10535cbd0f1fda7c8f99dab3036e932624726f674eca5511851d extends Twig_Template
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
        $__internal_00d973a464f293c8dacb861c8253092942808cecebbbde3b86fd8b3cd549fd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d973a464f293c8dacb861c8253092942808cecebbbde3b86fd8b3cd549fd3d->enter($__internal_00d973a464f293c8dacb861c8253092942808cecebbbde3b86fd8b3cd549fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_00d973a464f293c8dacb861c8253092942808cecebbbde3b86fd8b3cd549fd3d->leave($__internal_00d973a464f293c8dacb861c8253092942808cecebbbde3b86fd8b3cd549fd3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
