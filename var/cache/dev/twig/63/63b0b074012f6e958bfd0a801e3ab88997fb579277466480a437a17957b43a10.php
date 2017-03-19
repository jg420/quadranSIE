<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8b2ec1ed88124c649bb38889ae930444e24d1fa929a6f36c7b61baceb2d247fb extends Twig_Template
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
        $__internal_f89542baa6bc46c4aef76e36d255dec2d1a9e00735ec95e2c90ee64f331e7a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89542baa6bc46c4aef76e36d255dec2d1a9e00735ec95e2c90ee64f331e7a30->enter($__internal_f89542baa6bc46c4aef76e36d255dec2d1a9e00735ec95e2c90ee64f331e7a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f89542baa6bc46c4aef76e36d255dec2d1a9e00735ec95e2c90ee64f331e7a30->leave($__internal_f89542baa6bc46c4aef76e36d255dec2d1a9e00735ec95e2c90ee64f331e7a30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
