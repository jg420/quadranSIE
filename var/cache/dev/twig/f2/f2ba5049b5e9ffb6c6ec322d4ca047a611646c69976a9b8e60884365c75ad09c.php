<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0a7fe936ccd169309515b24503ae6b4b1e4d2ecfb02611f052bf4c9638660e1b extends Twig_Template
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
        $__internal_813dc4b7f65684bb0de9cc3d61937d52b2dcaf63272b1bef6e0af49fa6635266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813dc4b7f65684bb0de9cc3d61937d52b2dcaf63272b1bef6e0af49fa6635266->enter($__internal_813dc4b7f65684bb0de9cc3d61937d52b2dcaf63272b1bef6e0af49fa6635266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_813dc4b7f65684bb0de9cc3d61937d52b2dcaf63272b1bef6e0af49fa6635266->leave($__internal_813dc4b7f65684bb0de9cc3d61937d52b2dcaf63272b1bef6e0af49fa6635266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
