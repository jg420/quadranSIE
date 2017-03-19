<?php

/* base.html.twig */
class __TwigTemplate_d882afd1a93f9c0ab75146974375dfc1598bf4dd5a50e9b1964af02f071ec680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaea16c30b97ba94a80cedc8dffd3a4ad4890cdc9edc8a15a8dbc91fa5039d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaea16c30b97ba94a80cedc8dffd3a4ad4890cdc9edc8a15a8dbc91fa5039d55->enter($__internal_eaea16c30b97ba94a80cedc8dffd3a4ad4890cdc9edc8a15a8dbc91fa5039d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_eaea16c30b97ba94a80cedc8dffd3a4ad4890cdc9edc8a15a8dbc91fa5039d55->leave($__internal_eaea16c30b97ba94a80cedc8dffd3a4ad4890cdc9edc8a15a8dbc91fa5039d55_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eb716a5cae5e12c89236152faf3ee44d18c5f1ad42f621a9cf79b28184e3e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb716a5cae5e12c89236152faf3ee44d18c5f1ad42f621a9cf79b28184e3e3b->enter($__internal_8eb716a5cae5e12c89236152faf3ee44d18c5f1ad42f621a9cf79b28184e3e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8eb716a5cae5e12c89236152faf3ee44d18c5f1ad42f621a9cf79b28184e3e3b->leave($__internal_8eb716a5cae5e12c89236152faf3ee44d18c5f1ad42f621a9cf79b28184e3e3b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc025e18dd04af46b6b76bd26d9d4224f50c45bcc252bed59a51d66cdb1d0118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc025e18dd04af46b6b76bd26d9d4224f50c45bcc252bed59a51d66cdb1d0118->enter($__internal_dc025e18dd04af46b6b76bd26d9d4224f50c45bcc252bed59a51d66cdb1d0118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc025e18dd04af46b6b76bd26d9d4224f50c45bcc252bed59a51d66cdb1d0118->leave($__internal_dc025e18dd04af46b6b76bd26d9d4224f50c45bcc252bed59a51d66cdb1d0118_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c035ffb5084d0930b85c3536ad86f1a3ea9aa8099d363b2c5f405462539ecba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c035ffb5084d0930b85c3536ad86f1a3ea9aa8099d363b2c5f405462539ecba->enter($__internal_4c035ffb5084d0930b85c3536ad86f1a3ea9aa8099d363b2c5f405462539ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c035ffb5084d0930b85c3536ad86f1a3ea9aa8099d363b2c5f405462539ecba->leave($__internal_4c035ffb5084d0930b85c3536ad86f1a3ea9aa8099d363b2c5f405462539ecba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce65742521fbb9fc131f8c54c91611c79de1385b100c1d4cce5b63ae79ce05d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce65742521fbb9fc131f8c54c91611c79de1385b100c1d4cce5b63ae79ce05d3->enter($__internal_ce65742521fbb9fc131f8c54c91611c79de1385b100c1d4cce5b63ae79ce05d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce65742521fbb9fc131f8c54c91611c79de1385b100c1d4cce5b63ae79ce05d3->leave($__internal_ce65742521fbb9fc131f8c54c91611c79de1385b100c1d4cce5b63ae79ce05d3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\DEV\\quadranSIE\\app\\Resources\\views\\base.html.twig");
    }
}
