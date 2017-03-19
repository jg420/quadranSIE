<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_18066e50a7fa316a1c1c0a5afe39ec39a6cedae752b8d0fb139bc94b858ca0e9 extends Twig_Template
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
        $__internal_0945494f7e97b70821a2a30ea31189e1a302ac54fa8ed65bb017e99ebf5c4605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0945494f7e97b70821a2a30ea31189e1a302ac54fa8ed65bb017e99ebf5c4605->enter($__internal_0945494f7e97b70821a2a30ea31189e1a302ac54fa8ed65bb017e99ebf5c4605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0945494f7e97b70821a2a30ea31189e1a302ac54fa8ed65bb017e99ebf5c4605->leave($__internal_0945494f7e97b70821a2a30ea31189e1a302ac54fa8ed65bb017e99ebf5c4605_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
