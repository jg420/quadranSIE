<?php

/* @SIECore/Default/head.html.twig */
class __TwigTemplate_20b27a51c35379d619ef5262388b065e9fad4fcf7340fe15407c54df58857069 extends Twig_Template
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
        $__internal_3205d944d7cc48d0236843efc1afefbcfca49e39bc62502b0f5b2b5b12a2de6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3205d944d7cc48d0236843efc1afefbcfca49e39bc62502b0f5b2b5b12a2de6b->enter($__internal_3205d944d7cc48d0236843efc1afefbcfca49e39bc62502b0f5b2b5b12a2de6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECore/Default/head.html.twig"));

        // line 2
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" ng-app=\"app_ref_sie\">
    <head>
       
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
        
        $__internal_3205d944d7cc48d0236843efc1afefbcfca49e39bc62502b0f5b2b5b12a2de6b->leave($__internal_3205d944d7cc48d0236843efc1afefbcfca49e39bc62502b0f5b2b5b12a2de6b_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccfa064d0fff6173f0648c0d18e5f4000d9ad411a236cbea46819a79e93f74a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfa064d0fff6173f0648c0d18e5f4000d9ad411a236cbea46819a79e93f74a6->enter($__internal_ccfa064d0fff6173f0648c0d18e5f4000d9ad411a236cbea46819a79e93f74a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d4574a7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d4574a7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/d4574a7_angular_1.js");
            // line 20
            echo "                ";
            // line 21
            echo "            ";
        } else {
            // asset "d4574a7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d4574a7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/d4574a7.js");
            // line 20
            echo "                ";
            // line 21
            echo "            ";
        }
        unset($context["asset_url"]);
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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "584d851_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_584d851_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/584d851_app_1.js");
            // line 29
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "584d851"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_584d851") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/584d851.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "           
           
     
        ";
        
        $__internal_ccfa064d0fff6173f0648c0d18e5f4000d9ad411a236cbea46819a79e93f74a6->leave($__internal_ccfa064d0fff6173f0648c0d18e5f4000d9ad411a236cbea46819a79e93f74a6_prof);

    }

    public function getTemplateName()
    {
        return "@SIECore/Default/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 31,  152 => 29,  147 => 28,  133 => 26,  128 => 25,  114 => 23,  109 => 22,  105 => 21,  103 => 20,  98 => 21,  96 => 20,  91 => 19,  85 => 18,  76 => 34,  74 => 18,  68 => 14,  54 => 12,  49 => 11,  35 => 9,  31 => 8,  23 => 2,);
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
<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" ng-app=\"app_ref_sie\">
    <head>
       
        {% stylesheets '@SIECoreBundle/Resources/public/css/quadranStyle.css' filter='cssrewrite' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
        {% stylesheets '@SIECoreBundle/Resources/public/css/jquery-ui.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %}
        
        <link href=\"http://127.0.0.1/debug/sie-/web/logo.ico\" rel=\"icon\" type=\"image/x-icon\" />
        
        
        {% block javascripts %}
            {% javascripts '@SIECoreBundle/Resources/public/js/angular.js' %}
                {#<script src=\"{{ asset_url }}\"></script#}
            {% endjavascripts %}
             {% javascripts '@SIECoreBundle/Resources/public/js/jquery.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            {% javascripts '@SIECoreBundle/Resources/public/js/jquery-ui.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
            {% javascripts '@SIECoreBundle/Resources/public/js/app.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
           
           
     
        {% endblock %} 
      
", "@SIECore/Default/head.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle\\Resources\\views\\Default\\head.html.twig");
    }
}
