<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9a368fe43234da0432a2c2b540e02f9602d94dc90313d6969c8bf4c80a3c79ea extends Twig_Template
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
        $__internal_f0b0360e5cb55146a7997e6a5a68c3238b6171472b309df625d9f56708e778b2 = $this->env->getExtension("native_profiler");
        $__internal_f0b0360e5cb55146a7997e6a5a68c3238b6171472b309df625d9f56708e778b2->enter($__internal_f0b0360e5cb55146a7997e6a5a68c3238b6171472b309df625d9f56708e778b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0b0360e5cb55146a7997e6a5a68c3238b6171472b309df625d9f56708e778b2->leave($__internal_f0b0360e5cb55146a7997e6a5a68c3238b6171472b309df625d9f56708e778b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a6550a11e5f893468a7d26be0dbcf5d41359307aacc175ee98cbe158d57df2b = $this->env->getExtension("native_profiler");
        $__internal_7a6550a11e5f893468a7d26be0dbcf5d41359307aacc175ee98cbe158d57df2b->enter($__internal_7a6550a11e5f893468a7d26be0dbcf5d41359307aacc175ee98cbe158d57df2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7a6550a11e5f893468a7d26be0dbcf5d41359307aacc175ee98cbe158d57df2b->leave($__internal_7a6550a11e5f893468a7d26be0dbcf5d41359307aacc175ee98cbe158d57df2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aba7e96937cb2bb26fc1f554cdcf9bfb1cdb9b960a06b77b8b68ae5bcb2c772 = $this->env->getExtension("native_profiler");
        $__internal_1aba7e96937cb2bb26fc1f554cdcf9bfb1cdb9b960a06b77b8b68ae5bcb2c772->enter($__internal_1aba7e96937cb2bb26fc1f554cdcf9bfb1cdb9b960a06b77b8b68ae5bcb2c772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1aba7e96937cb2bb26fc1f554cdcf9bfb1cdb9b960a06b77b8b68ae5bcb2c772->leave($__internal_1aba7e96937cb2bb26fc1f554cdcf9bfb1cdb9b960a06b77b8b68ae5bcb2c772_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ff793659662d3660ef8c55c33f47f93e2b4bf686fc523b36e4b19156930b59 = $this->env->getExtension("native_profiler");
        $__internal_a8ff793659662d3660ef8c55c33f47f93e2b4bf686fc523b36e4b19156930b59->enter($__internal_a8ff793659662d3660ef8c55c33f47f93e2b4bf686fc523b36e4b19156930b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a8ff793659662d3660ef8c55c33f47f93e2b4bf686fc523b36e4b19156930b59->leave($__internal_a8ff793659662d3660ef8c55c33f47f93e2b4bf686fc523b36e4b19156930b59_prof);

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
