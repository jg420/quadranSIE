<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1fc5e2e82a15c700463b097760c3ed5cb450f53bc94b6f4b06d3f55217fb2cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66634709842e5ecbb784d3710b80e16382c536fb930e0b0c0559ca9bddcec11e = $this->env->getExtension("native_profiler");
        $__internal_66634709842e5ecbb784d3710b80e16382c536fb930e0b0c0559ca9bddcec11e->enter($__internal_66634709842e5ecbb784d3710b80e16382c536fb930e0b0c0559ca9bddcec11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66634709842e5ecbb784d3710b80e16382c536fb930e0b0c0559ca9bddcec11e->leave($__internal_66634709842e5ecbb784d3710b80e16382c536fb930e0b0c0559ca9bddcec11e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_095fce1788b63afa4e5df02dd5823b3ff48ba1a3543c5bd76804ca307d352dd1 = $this->env->getExtension("native_profiler");
        $__internal_095fce1788b63afa4e5df02dd5823b3ff48ba1a3543c5bd76804ca307d352dd1->enter($__internal_095fce1788b63afa4e5df02dd5823b3ff48ba1a3543c5bd76804ca307d352dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_095fce1788b63afa4e5df02dd5823b3ff48ba1a3543c5bd76804ca307d352dd1->leave($__internal_095fce1788b63afa4e5df02dd5823b3ff48ba1a3543c5bd76804ca307d352dd1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ee75a6e5d88e936d271a21458dbca398c18e3c7c19e10d0f4b5164d136a1dfa = $this->env->getExtension("native_profiler");
        $__internal_1ee75a6e5d88e936d271a21458dbca398c18e3c7c19e10d0f4b5164d136a1dfa->enter($__internal_1ee75a6e5d88e936d271a21458dbca398c18e3c7c19e10d0f4b5164d136a1dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ee75a6e5d88e936d271a21458dbca398c18e3c7c19e10d0f4b5164d136a1dfa->leave($__internal_1ee75a6e5d88e936d271a21458dbca398c18e3c7c19e10d0f4b5164d136a1dfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd2baab87222105ef83451fd605315c2deec8699d2136f259c20a371ef74c25 = $this->env->getExtension("native_profiler");
        $__internal_edd2baab87222105ef83451fd605315c2deec8699d2136f259c20a371ef74c25->enter($__internal_edd2baab87222105ef83451fd605315c2deec8699d2136f259c20a371ef74c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_edd2baab87222105ef83451fd605315c2deec8699d2136f259c20a371ef74c25->leave($__internal_edd2baab87222105ef83451fd605315c2deec8699d2136f259c20a371ef74c25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
