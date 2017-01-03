<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_9b066ffe990729d45d72fdecc8412e2d81ce4e104fa40104b0122f1a19fc83bf extends Twig_Template
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
        $__internal_7dd729fac8f8f1ea8ce4ffb0c6bb1f73d98a88fdc3959b6452ba898ca1b07796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd729fac8f8f1ea8ce4ffb0c6bb1f73d98a88fdc3959b6452ba898ca1b07796->enter($__internal_7dd729fac8f8f1ea8ce4ffb0c6bb1f73d98a88fdc3959b6452ba898ca1b07796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7dd729fac8f8f1ea8ce4ffb0c6bb1f73d98a88fdc3959b6452ba898ca1b07796->leave($__internal_7dd729fac8f8f1ea8ce4ffb0c6bb1f73d98a88fdc3959b6452ba898ca1b07796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
