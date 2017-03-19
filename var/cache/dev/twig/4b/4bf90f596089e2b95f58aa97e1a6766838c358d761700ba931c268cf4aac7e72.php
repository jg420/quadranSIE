<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fc6b39d9ceab1c95bba6fcbb8c9d595d976628918d2d45c4bc69039a78123824 extends Twig_Template
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
        $__internal_9d585ee92c2b3a1498629c66ec8172da0b699b190f0b87dacbf713db9b01ff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d585ee92c2b3a1498629c66ec8172da0b699b190f0b87dacbf713db9b01ff66->enter($__internal_9d585ee92c2b3a1498629c66ec8172da0b699b190f0b87dacbf713db9b01ff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9d585ee92c2b3a1498629c66ec8172da0b699b190f0b87dacbf713db9b01ff66->leave($__internal_9d585ee92c2b3a1498629c66ec8172da0b699b190f0b87dacbf713db9b01ff66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
