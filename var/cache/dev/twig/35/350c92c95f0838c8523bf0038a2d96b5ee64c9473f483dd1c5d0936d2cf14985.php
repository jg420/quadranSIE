<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f4efb4501aca8640bf138cfdf27161f2c8881ba1a251e8fadd9b48ff5f213070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b67f9c43dda93f79462fa69d3af96d3dea8a916ba929452b845bc9f698864747 = $this->env->getExtension("native_profiler");
        $__internal_b67f9c43dda93f79462fa69d3af96d3dea8a916ba929452b845bc9f698864747->enter($__internal_b67f9c43dda93f79462fa69d3af96d3dea8a916ba929452b845bc9f698864747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b67f9c43dda93f79462fa69d3af96d3dea8a916ba929452b845bc9f698864747->leave($__internal_b67f9c43dda93f79462fa69d3af96d3dea8a916ba929452b845bc9f698864747_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc4acb3d68f11db19ca70ec17baa1886191daab9755ce9ae4445322a44014788 = $this->env->getExtension("native_profiler");
        $__internal_cc4acb3d68f11db19ca70ec17baa1886191daab9755ce9ae4445322a44014788->enter($__internal_cc4acb3d68f11db19ca70ec17baa1886191daab9755ce9ae4445322a44014788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc4acb3d68f11db19ca70ec17baa1886191daab9755ce9ae4445322a44014788->leave($__internal_cc4acb3d68f11db19ca70ec17baa1886191daab9755ce9ae4445322a44014788_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3388a137438f75236c4b4ca8235bfb1e3455881f0ce1c5dbab39922372706f89 = $this->env->getExtension("native_profiler");
        $__internal_3388a137438f75236c4b4ca8235bfb1e3455881f0ce1c5dbab39922372706f89->enter($__internal_3388a137438f75236c4b4ca8235bfb1e3455881f0ce1c5dbab39922372706f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3388a137438f75236c4b4ca8235bfb1e3455881f0ce1c5dbab39922372706f89->leave($__internal_3388a137438f75236c4b4ca8235bfb1e3455881f0ce1c5dbab39922372706f89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4697b8452406634631e1151b65073164331dbd09456909523d8235ed8aa31e82 = $this->env->getExtension("native_profiler");
        $__internal_4697b8452406634631e1151b65073164331dbd09456909523d8235ed8aa31e82->enter($__internal_4697b8452406634631e1151b65073164331dbd09456909523d8235ed8aa31e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4697b8452406634631e1151b65073164331dbd09456909523d8235ed8aa31e82->leave($__internal_4697b8452406634631e1151b65073164331dbd09456909523d8235ed8aa31e82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
