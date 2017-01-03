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
        $__internal_ed540bb9bd4f535213eeb42d7342fff2f4926bf21af4d9feae53409653a04928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed540bb9bd4f535213eeb42d7342fff2f4926bf21af4d9feae53409653a04928->enter($__internal_ed540bb9bd4f535213eeb42d7342fff2f4926bf21af4d9feae53409653a04928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ed540bb9bd4f535213eeb42d7342fff2f4926bf21af4d9feae53409653a04928->leave($__internal_ed540bb9bd4f535213eeb42d7342fff2f4926bf21af4d9feae53409653a04928_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bce4b29397cc111aeed98ddf2e54c2fe13549ce7ba783976cee66fd692cbbf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce4b29397cc111aeed98ddf2e54c2fe13549ce7ba783976cee66fd692cbbf7b->enter($__internal_bce4b29397cc111aeed98ddf2e54c2fe13549ce7ba783976cee66fd692cbbf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bce4b29397cc111aeed98ddf2e54c2fe13549ce7ba783976cee66fd692cbbf7b->leave($__internal_bce4b29397cc111aeed98ddf2e54c2fe13549ce7ba783976cee66fd692cbbf7b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98d8f219f6884301cf0be70d2c4bda5157d080c90b19d9efd269f081f761dae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d8f219f6884301cf0be70d2c4bda5157d080c90b19d9efd269f081f761dae8->enter($__internal_98d8f219f6884301cf0be70d2c4bda5157d080c90b19d9efd269f081f761dae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98d8f219f6884301cf0be70d2c4bda5157d080c90b19d9efd269f081f761dae8->leave($__internal_98d8f219f6884301cf0be70d2c4bda5157d080c90b19d9efd269f081f761dae8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_51ab062a573e28af81c09365bf6bcb3f65b0d1cf4c515d86c0bf5c0b470e34f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ab062a573e28af81c09365bf6bcb3f65b0d1cf4c515d86c0bf5c0b470e34f7->enter($__internal_51ab062a573e28af81c09365bf6bcb3f65b0d1cf4c515d86c0bf5c0b470e34f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_51ab062a573e28af81c09365bf6bcb3f65b0d1cf4c515d86c0bf5c0b470e34f7->leave($__internal_51ab062a573e28af81c09365bf6bcb3f65b0d1cf4c515d86c0bf5c0b470e34f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0f0549332c1aee4c4a86b4edd7b8f1149f20103f4e9b10d9aa0d248ac8a31ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f0549332c1aee4c4a86b4edd7b8f1149f20103f4e9b10d9aa0d248ac8a31ae->enter($__internal_d0f0549332c1aee4c4a86b4edd7b8f1149f20103f4e9b10d9aa0d248ac8a31ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d0f0549332c1aee4c4a86b4edd7b8f1149f20103f4e9b10d9aa0d248ac8a31ae->leave($__internal_d0f0549332c1aee4c4a86b4edd7b8f1149f20103f4e9b10d9aa0d248ac8a31ae_prof);

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
