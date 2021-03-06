<?php

/* ::base.html.twig */
class __TwigTemplate_4997600898b0c2b7bca20ffe2ebe548fa38acb37ea083f7cb5c3142b86af50c7 extends Twig_Template
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
        $__internal_887cf8decf6c1ccfe8d31efffcfb5cd0b4714f1e1f9b2c8adad9e92a4314d790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887cf8decf6c1ccfe8d31efffcfb5cd0b4714f1e1f9b2c8adad9e92a4314d790->enter($__internal_887cf8decf6c1ccfe8d31efffcfb5cd0b4714f1e1f9b2c8adad9e92a4314d790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_887cf8decf6c1ccfe8d31efffcfb5cd0b4714f1e1f9b2c8adad9e92a4314d790->leave($__internal_887cf8decf6c1ccfe8d31efffcfb5cd0b4714f1e1f9b2c8adad9e92a4314d790_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_edf799d87a47efd9f1ae2bee69a50169a3899ebbbbd73b0a3eec6cc0ec4277c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf799d87a47efd9f1ae2bee69a50169a3899ebbbbd73b0a3eec6cc0ec4277c0->enter($__internal_edf799d87a47efd9f1ae2bee69a50169a3899ebbbbd73b0a3eec6cc0ec4277c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_edf799d87a47efd9f1ae2bee69a50169a3899ebbbbd73b0a3eec6cc0ec4277c0->leave($__internal_edf799d87a47efd9f1ae2bee69a50169a3899ebbbbd73b0a3eec6cc0ec4277c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec44d30f3b102518d933fe7eb74d9b85afa0c479e17027cc4187e666dd5531bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec44d30f3b102518d933fe7eb74d9b85afa0c479e17027cc4187e666dd5531bc->enter($__internal_ec44d30f3b102518d933fe7eb74d9b85afa0c479e17027cc4187e666dd5531bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec44d30f3b102518d933fe7eb74d9b85afa0c479e17027cc4187e666dd5531bc->leave($__internal_ec44d30f3b102518d933fe7eb74d9b85afa0c479e17027cc4187e666dd5531bc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9ed926786e747ca8ec71101ac0d38cbc7362e9d2b573de6bc41086ca0b6d314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ed926786e747ca8ec71101ac0d38cbc7362e9d2b573de6bc41086ca0b6d314->enter($__internal_f9ed926786e747ca8ec71101ac0d38cbc7362e9d2b573de6bc41086ca0b6d314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9ed926786e747ca8ec71101ac0d38cbc7362e9d2b573de6bc41086ca0b6d314->leave($__internal_f9ed926786e747ca8ec71101ac0d38cbc7362e9d2b573de6bc41086ca0b6d314_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc26604ee5d01b7db375840ab5d7a5c7f1c561026546fc80afc2702fa726abe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc26604ee5d01b7db375840ab5d7a5c7f1c561026546fc80afc2702fa726abe6->enter($__internal_dc26604ee5d01b7db375840ab5d7a5c7f1c561026546fc80afc2702fa726abe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc26604ee5d01b7db375840ab5d7a5c7f1c561026546fc80afc2702fa726abe6->leave($__internal_dc26604ee5d01b7db375840ab5d7a5c7f1c561026546fc80afc2702fa726abe6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "E:\\DEV\\quadranSIE\\app/Resources\\views/base.html.twig");
    }
}
