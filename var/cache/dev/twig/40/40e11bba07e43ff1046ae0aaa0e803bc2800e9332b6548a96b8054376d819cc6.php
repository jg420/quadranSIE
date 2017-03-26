<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9a8ffb5c36ec40eed92406075373d213712a4a76d80237a0a08aea47a6c12edc extends Twig_Template
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
        $__internal_8ba74751d4e61fbb470f3f7018dc70ae95cfd4fbb61a645ddb5566a8ea6e7ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba74751d4e61fbb470f3f7018dc70ae95cfd4fbb61a645ddb5566a8ea6e7ddc->enter($__internal_8ba74751d4e61fbb470f3f7018dc70ae95cfd4fbb61a645ddb5566a8ea6e7ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8ba74751d4e61fbb470f3f7018dc70ae95cfd4fbb61a645ddb5566a8ea6e7ddc->leave($__internal_8ba74751d4e61fbb470f3f7018dc70ae95cfd4fbb61a645ddb5566a8ea6e7ddc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
