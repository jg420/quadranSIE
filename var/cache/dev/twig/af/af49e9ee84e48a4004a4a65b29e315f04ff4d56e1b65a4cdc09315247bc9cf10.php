<?php

/* SIECoreBundle:Default:head.html.twig */
class __TwigTemplate_01ba59f1b36519c7cc2d9dc891bd96f2000c215ca33e41ad7229bcbb97c96a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf411bee1ffa0063b58a3756f3b92652881d490cefa27807973587f09342b0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf411bee1ffa0063b58a3756f3b92652881d490cefa27807973587f09342b0ba->enter($__internal_bf411bee1ffa0063b58a3756f3b92652881d490cefa27807973587f09342b0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:head.html.twig"));

        // line 2
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\"  >
    <head>
       <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
     <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
         ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81f969e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81f969e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/81f969e_quadranStyle_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "81f969e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81f969e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/81f969e.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2db1e5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2db1e5c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2db1e5c_jquery-ui_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "2db1e5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2db1e5c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2db1e5c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        
        <link href=\"http://127.0.0.1/debug/sie-/web/logo.ico\" rel=\"icon\" type=\"image/x-icon\" />
        
        
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo " 
      
";
        // line 36
        $this->loadTemplate("SIECoreBundle:Default:header.html.twig", "SIECoreBundle:Default:head.html.twig", 36)->display($context);
        echo " ";
        
        $__internal_bf411bee1ffa0063b58a3756f3b92652881d490cefa27807973587f09342b0ba->leave($__internal_bf411bee1ffa0063b58a3756f3b92652881d490cefa27807973587f09342b0ba_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5eb5840c5b33e294adc98527398a666cc30e52ae19967e9ca6da822d7efa1dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb5840c5b33e294adc98527398a666cc30e52ae19967e9ca6da822d7efa1dd5->enter($__internal_5eb5840c5b33e294adc98527398a666cc30e52ae19967e9ca6da822d7efa1dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            ";
        // line 20
        echo "                ";
        // line 22
        echo "             ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a750637_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a750637_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a750637_jquery_1.js");
            // line 23
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a750637"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a750637") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a750637.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2994d72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2994d72_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2994d72_jquery-ui_1.js");
            // line 26
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "2994d72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2994d72") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2994d72.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "            ";
        // line 31
        echo "           
           
     
        ";
        
        $__internal_5eb5840c5b33e294adc98527398a666cc30e52ae19967e9ca6da822d7efa1dd5->leave($__internal_5eb5840c5b33e294adc98527398a666cc30e52ae19967e9ca6da822d7efa1dd5_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 31,  136 => 28,  122 => 26,  117 => 25,  103 => 23,  98 => 22,  96 => 20,  94 => 19,  88 => 18,  80 => 36,  76 => 34,  74 => 18,  68 => 14,  54 => 12,  49 => 11,  35 => 9,  31 => 8,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIECoreBundle/Resources/views/Default/head.html.twig #}
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\"  >
    <head>
       <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
     <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
         {% stylesheets '@SIECoreBundle/Resources/public/css/quadranStyle.css' filter='cssrewrite' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
        {% stylesheets '@SIECoreBundle/Resources/public/css/jquery-ui.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
        
        <link href=\"http://127.0.0.1/debug/sie-/web/logo.ico\" rel=\"icon\" type=\"image/x-icon\" />
        
        
        {% block javascripts %}
            {# javascripts '@SIECoreBundle/Resources/public/js/angular.js' #}
                {#<script src=\"{{ asset_url }}\"></script
            {% endjavascripts %}#}
             {% javascripts '@SIECoreBundle/Resources/public/js/jquery.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            {% javascripts '@SIECoreBundle/Resources/public/js/jquery-ui.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            {# javascripts '@SIECoreBundle/Resources/public/js/app.js' 
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}#}
           
           
     
        {% endblock %} 
      
{% include \"SIECoreBundle:Default:header.html.twig\" %} ", "SIECoreBundle:Default:head.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle/Resources/views/Default/head.html.twig");
    }
}
