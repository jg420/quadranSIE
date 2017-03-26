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
        $__internal_cf11b1020b077a2577a9fcb860cc52707419226ffb7755b63d6c4d42a671e27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf11b1020b077a2577a9fcb860cc52707419226ffb7755b63d6c4d42a671e27f->enter($__internal_cf11b1020b077a2577a9fcb860cc52707419226ffb7755b63d6c4d42a671e27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cf11b1020b077a2577a9fcb860cc52707419226ffb7755b63d6c4d42a671e27f->leave($__internal_cf11b1020b077a2577a9fcb860cc52707419226ffb7755b63d6c4d42a671e27f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04de59e0c5eeb06dea8174dba54d4beffd224cf5e93b69c742866f306041f7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04de59e0c5eeb06dea8174dba54d4beffd224cf5e93b69c742866f306041f7e4->enter($__internal_04de59e0c5eeb06dea8174dba54d4beffd224cf5e93b69c742866f306041f7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_04de59e0c5eeb06dea8174dba54d4beffd224cf5e93b69c742866f306041f7e4->leave($__internal_04de59e0c5eeb06dea8174dba54d4beffd224cf5e93b69c742866f306041f7e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02083a567e4a21991a9a538d1cb6059a6b2d6531cbfd084aca7c28e8a62a38f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02083a567e4a21991a9a538d1cb6059a6b2d6531cbfd084aca7c28e8a62a38f8->enter($__internal_02083a567e4a21991a9a538d1cb6059a6b2d6531cbfd084aca7c28e8a62a38f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_02083a567e4a21991a9a538d1cb6059a6b2d6531cbfd084aca7c28e8a62a38f8->leave($__internal_02083a567e4a21991a9a538d1cb6059a6b2d6531cbfd084aca7c28e8a62a38f8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cd4b939404a6861ddd59ae636f6c42b276079066ba3a5e0c8fda06c0757b528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd4b939404a6861ddd59ae636f6c42b276079066ba3a5e0c8fda06c0757b528->enter($__internal_1cd4b939404a6861ddd59ae636f6c42b276079066ba3a5e0c8fda06c0757b528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1cd4b939404a6861ddd59ae636f6c42b276079066ba3a5e0c8fda06c0757b528->leave($__internal_1cd4b939404a6861ddd59ae636f6c42b276079066ba3a5e0c8fda06c0757b528_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_344fe189fba2a02602d5f9fa0ded2590af9c4e88cc82aaa2c6ac6e23ddf22f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344fe189fba2a02602d5f9fa0ded2590af9c4e88cc82aaa2c6ac6e23ddf22f7d->enter($__internal_344fe189fba2a02602d5f9fa0ded2590af9c4e88cc82aaa2c6ac6e23ddf22f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_344fe189fba2a02602d5f9fa0ded2590af9c4e88cc82aaa2c6ac6e23ddf22f7d->leave($__internal_344fe189fba2a02602d5f9fa0ded2590af9c4e88cc82aaa2c6ac6e23ddf22f7d_prof);

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
