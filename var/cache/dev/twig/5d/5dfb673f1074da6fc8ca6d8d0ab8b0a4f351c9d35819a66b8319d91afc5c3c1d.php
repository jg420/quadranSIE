<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4eff1f5a0c772e8ddf7da6fa89a0f9b17a6b4789655a4b20ecc39cdc2b2cd5fa extends Twig_Template
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
        $__internal_b1e3dc8d2fad0cb08771d4e162d451745066f577253bdaec7e87a5f2d11f3363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e3dc8d2fad0cb08771d4e162d451745066f577253bdaec7e87a5f2d11f3363->enter($__internal_b1e3dc8d2fad0cb08771d4e162d451745066f577253bdaec7e87a5f2d11f3363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b1e3dc8d2fad0cb08771d4e162d451745066f577253bdaec7e87a5f2d11f3363->leave($__internal_b1e3dc8d2fad0cb08771d4e162d451745066f577253bdaec7e87a5f2d11f3363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
