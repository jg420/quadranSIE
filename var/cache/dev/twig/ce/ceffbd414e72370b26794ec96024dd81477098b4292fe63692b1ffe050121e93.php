<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0aa31cc7f7a3e86df6e2c3fc59576a16fd9cb6c1849ce855f863fb9e60204930 extends Twig_Template
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
        $__internal_3b196ecf2bf03dd8ccf19396e83c91f9ef82d0ee7dc33006dc58be7e4804b1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b196ecf2bf03dd8ccf19396e83c91f9ef82d0ee7dc33006dc58be7e4804b1a8->enter($__internal_3b196ecf2bf03dd8ccf19396e83c91f9ef82d0ee7dc33006dc58be7e4804b1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3b196ecf2bf03dd8ccf19396e83c91f9ef82d0ee7dc33006dc58be7e4804b1a8->leave($__internal_3b196ecf2bf03dd8ccf19396e83c91f9ef82d0ee7dc33006dc58be7e4804b1a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
