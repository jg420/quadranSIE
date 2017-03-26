<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_47ae31c7a8ac227bdcc8caacae588605386c28c611c0d08e2740f4f9877c2e71 extends Twig_Template
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
        $__internal_d1a9441c79290719c3a034ff7864ce85d5efbd4fc743e0f7d7e304cfaefb39bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a9441c79290719c3a034ff7864ce85d5efbd4fc743e0f7d7e304cfaefb39bc->enter($__internal_d1a9441c79290719c3a034ff7864ce85d5efbd4fc743e0f7d7e304cfaefb39bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d1a9441c79290719c3a034ff7864ce85d5efbd4fc743e0f7d7e304cfaefb39bc->leave($__internal_d1a9441c79290719c3a034ff7864ce85d5efbd4fc743e0f7d7e304cfaefb39bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
