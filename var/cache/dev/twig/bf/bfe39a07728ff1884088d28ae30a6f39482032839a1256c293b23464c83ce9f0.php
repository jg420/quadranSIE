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
        $__internal_cb267620626c03271b15fd94344ac10ee0338cea4d857a3bfb0377a7050512ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb267620626c03271b15fd94344ac10ee0338cea4d857a3bfb0377a7050512ca->enter($__internal_cb267620626c03271b15fd94344ac10ee0338cea4d857a3bfb0377a7050512ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_cb267620626c03271b15fd94344ac10ee0338cea4d857a3bfb0377a7050512ca->leave($__internal_cb267620626c03271b15fd94344ac10ee0338cea4d857a3bfb0377a7050512ca_prof);

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
