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
        $__internal_74c0a29fc604faed4e638c3c1d3c54d6be2e6b2e1d773b38cc770bbea472328b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c0a29fc604faed4e638c3c1d3c54d6be2e6b2e1d773b38cc770bbea472328b->enter($__internal_74c0a29fc604faed4e638c3c1d3c54d6be2e6b2e1d773b38cc770bbea472328b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_74c0a29fc604faed4e638c3c1d3c54d6be2e6b2e1d773b38cc770bbea472328b->leave($__internal_74c0a29fc604faed4e638c3c1d3c54d6be2e6b2e1d773b38cc770bbea472328b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_176c26ca62004bbd8160ed2eef768e11e3732f0581c35328821127055aa5b00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176c26ca62004bbd8160ed2eef768e11e3732f0581c35328821127055aa5b00c->enter($__internal_176c26ca62004bbd8160ed2eef768e11e3732f0581c35328821127055aa5b00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_176c26ca62004bbd8160ed2eef768e11e3732f0581c35328821127055aa5b00c->leave($__internal_176c26ca62004bbd8160ed2eef768e11e3732f0581c35328821127055aa5b00c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68ccd07623d87700f84cccb8be9285f2f0c4fee085e4404ebd3e05b85d2d034e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ccd07623d87700f84cccb8be9285f2f0c4fee085e4404ebd3e05b85d2d034e->enter($__internal_68ccd07623d87700f84cccb8be9285f2f0c4fee085e4404ebd3e05b85d2d034e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_68ccd07623d87700f84cccb8be9285f2f0c4fee085e4404ebd3e05b85d2d034e->leave($__internal_68ccd07623d87700f84cccb8be9285f2f0c4fee085e4404ebd3e05b85d2d034e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6db7e14f179e5e9d223fda22ec1232cd4bf6bbcb8bbd74df5cc67df5e2f8b099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db7e14f179e5e9d223fda22ec1232cd4bf6bbcb8bbd74df5cc67df5e2f8b099->enter($__internal_6db7e14f179e5e9d223fda22ec1232cd4bf6bbcb8bbd74df5cc67df5e2f8b099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6db7e14f179e5e9d223fda22ec1232cd4bf6bbcb8bbd74df5cc67df5e2f8b099->leave($__internal_6db7e14f179e5e9d223fda22ec1232cd4bf6bbcb8bbd74df5cc67df5e2f8b099_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c33c7c99d8a64076459c688f136471bc63bf6e4d1b243c5c4a6f4e32d53d8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c33c7c99d8a64076459c688f136471bc63bf6e4d1b243c5c4a6f4e32d53d8ec->enter($__internal_0c33c7c99d8a64076459c688f136471bc63bf6e4d1b243c5c4a6f4e32d53d8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0c33c7c99d8a64076459c688f136471bc63bf6e4d1b243c5c4a6f4e32d53d8ec->leave($__internal_0c33c7c99d8a64076459c688f136471bc63bf6e4d1b243c5c4a6f4e32d53d8ec_prof);

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
