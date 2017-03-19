<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_651241fcf7a4cb07588f7d83aeea8b2a3c754865a0598336884782e705521a48 extends Twig_Template
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
        $__internal_30bcb4cb148a6459d5d28bf9c156adbfec5aa58e8311f4370c918f715dda5a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bcb4cb148a6459d5d28bf9c156adbfec5aa58e8311f4370c918f715dda5a73->enter($__internal_30bcb4cb148a6459d5d28bf9c156adbfec5aa58e8311f4370c918f715dda5a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_30bcb4cb148a6459d5d28bf9c156adbfec5aa58e8311f4370c918f715dda5a73->leave($__internal_30bcb4cb148a6459d5d28bf9c156adbfec5aa58e8311f4370c918f715dda5a73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
