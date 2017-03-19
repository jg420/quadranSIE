<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ab835f306f5df8bd4586c755ea009fc411d4f2d184754ebc34bc22b6aaad729f extends Twig_Template
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
        $__internal_907ef4c869e1f95a6a89279554be749b384b96597722bfdd34bf8e1d6bccfe5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907ef4c869e1f95a6a89279554be749b384b96597722bfdd34bf8e1d6bccfe5e->enter($__internal_907ef4c869e1f95a6a89279554be749b384b96597722bfdd34bf8e1d6bccfe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_907ef4c869e1f95a6a89279554be749b384b96597722bfdd34bf8e1d6bccfe5e->leave($__internal_907ef4c869e1f95a6a89279554be749b384b96597722bfdd34bf8e1d6bccfe5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
