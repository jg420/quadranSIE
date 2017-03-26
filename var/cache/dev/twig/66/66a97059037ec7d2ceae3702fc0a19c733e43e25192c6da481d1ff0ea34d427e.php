<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1ff37939d01b4234181124a18ddf8e2d4a515057409ba562160e8a8e1749dbad extends Twig_Template
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
        $__internal_9abb19f2f6e8ff3c4985b465eef2d535a91e65a6a2a1b8f5ef7e372cf52d248f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abb19f2f6e8ff3c4985b465eef2d535a91e65a6a2a1b8f5ef7e372cf52d248f->enter($__internal_9abb19f2f6e8ff3c4985b465eef2d535a91e65a6a2a1b8f5ef7e372cf52d248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9abb19f2f6e8ff3c4985b465eef2d535a91e65a6a2a1b8f5ef7e372cf52d248f->leave($__internal_9abb19f2f6e8ff3c4985b465eef2d535a91e65a6a2a1b8f5ef7e372cf52d248f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "E:\\DEV\\quadranSIE\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
