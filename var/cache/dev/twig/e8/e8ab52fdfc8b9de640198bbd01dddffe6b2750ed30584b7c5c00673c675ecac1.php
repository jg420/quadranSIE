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
        $__internal_9096d865011f737df31b9e96d8ab780c6cf94c59133dab89a0253246c2dc7ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9096d865011f737df31b9e96d8ab780c6cf94c59133dab89a0253246c2dc7ef4->enter($__internal_9096d865011f737df31b9e96d8ab780c6cf94c59133dab89a0253246c2dc7ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9096d865011f737df31b9e96d8ab780c6cf94c59133dab89a0253246c2dc7ef4->leave($__internal_9096d865011f737df31b9e96d8ab780c6cf94c59133dab89a0253246c2dc7ef4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d6958c5fca8f480bfcb96b1b8bef9fd6616100a3c07ab8de320de1baf2b23a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6958c5fca8f480bfcb96b1b8bef9fd6616100a3c07ab8de320de1baf2b23a5->enter($__internal_2d6958c5fca8f480bfcb96b1b8bef9fd6616100a3c07ab8de320de1baf2b23a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d6958c5fca8f480bfcb96b1b8bef9fd6616100a3c07ab8de320de1baf2b23a5->leave($__internal_2d6958c5fca8f480bfcb96b1b8bef9fd6616100a3c07ab8de320de1baf2b23a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d5ef4c51d4de33c76a4f9def8c785972280522077c7d14da62ef5bba13df39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5ef4c51d4de33c76a4f9def8c785972280522077c7d14da62ef5bba13df39b->enter($__internal_3d5ef4c51d4de33c76a4f9def8c785972280522077c7d14da62ef5bba13df39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3d5ef4c51d4de33c76a4f9def8c785972280522077c7d14da62ef5bba13df39b->leave($__internal_3d5ef4c51d4de33c76a4f9def8c785972280522077c7d14da62ef5bba13df39b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c63299b549cb42f34d7bd1e5870bf2c9af8f97d6350b9e94a0b3f46f2e88215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c63299b549cb42f34d7bd1e5870bf2c9af8f97d6350b9e94a0b3f46f2e88215->enter($__internal_5c63299b549cb42f34d7bd1e5870bf2c9af8f97d6350b9e94a0b3f46f2e88215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c63299b549cb42f34d7bd1e5870bf2c9af8f97d6350b9e94a0b3f46f2e88215->leave($__internal_5c63299b549cb42f34d7bd1e5870bf2c9af8f97d6350b9e94a0b3f46f2e88215_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_963963969570de5b837d346952e96d5170bb5ca7f027c646cbc6099e39a590a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963963969570de5b837d346952e96d5170bb5ca7f027c646cbc6099e39a590a8->enter($__internal_963963969570de5b837d346952e96d5170bb5ca7f027c646cbc6099e39a590a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_963963969570de5b837d346952e96d5170bb5ca7f027c646cbc6099e39a590a8->leave($__internal_963963969570de5b837d346952e96d5170bb5ca7f027c646cbc6099e39a590a8_prof);

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
