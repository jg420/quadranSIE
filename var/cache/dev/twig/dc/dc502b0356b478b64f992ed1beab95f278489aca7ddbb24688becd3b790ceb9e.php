<?php

/* @SIECore/Default/head_sous_menu.html.twig */
class __TwigTemplate_2297b7933e30f9d13b83284240f640344a5e597293dda380e816492ca11e90ee extends Twig_Template
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
        $__internal_189d22bc0abbbcff59bd2dd0dbb16249557f9b66fa3fb0a91685af28208329c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189d22bc0abbbcff59bd2dd0dbb16249557f9b66fa3fb0a91685af28208329c3->enter($__internal_189d22bc0abbbcff59bd2dd0dbb16249557f9b66fa3fb0a91685af28208329c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECore/Default/head_sous_menu.html.twig"));

        // line 2
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" ng-app=\"app_ref_sie\">
    <head>
       <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
     <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
         ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81f969e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81f969e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/81f969e_quadranStyle_1.css");
            // line 10
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
        // line 12
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2db1e5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2db1e5c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/2db1e5c_jquery-ui_1.css");
            // line 13
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
        // line 15
        echo "        
        <link href=\"http://127.0.0.1/debug/sie-/web/logo.ico\" rel=\"icon\" type=\"image/x-icon\" />
        
        
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo " 
      
";
        // line 37
        $this->loadTemplate("SIECoreBundle:Default:header_sous_menu.html.twig", "@SIECore/Default/head_sous_menu.html.twig", 37)->display($context);
        echo " ";
        
        $__internal_189d22bc0abbbcff59bd2dd0dbb16249557f9b66fa3fb0a91685af28208329c3->leave($__internal_189d22bc0abbbcff59bd2dd0dbb16249557f9b66fa3fb0a91685af28208329c3_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_441aaee2e15d74ffea9a75438ed01a9a492c3c42ed12fd8816b496e5b02f397c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441aaee2e15d74ffea9a75438ed01a9a492c3c42ed12fd8816b496e5b02f397c->enter($__internal_441aaee2e15d74ffea9a75438ed01a9a492c3c42ed12fd8816b496e5b02f397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            ";
        // line 21
        echo "                ";
        // line 23
        echo "             ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a750637_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a750637_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a750637_jquery_1.js");
            // line 24
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
        // line 26
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2994d72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2994d72_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2994d72_jquery-ui_1.js");
            // line 27
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
        // line 29
        echo "            ";
        // line 32
        echo "           
           
     
        ";
        
        $__internal_441aaee2e15d74ffea9a75438ed01a9a492c3c42ed12fd8816b496e5b02f397c->leave($__internal_441aaee2e15d74ffea9a75438ed01a9a492c3c42ed12fd8816b496e5b02f397c_prof);

    }

    public function getTemplateName()
    {
        return "@SIECore/Default/head_sous_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  137 => 29,  123 => 27,  118 => 26,  104 => 24,  99 => 23,  97 => 21,  95 => 20,  89 => 19,  81 => 37,  77 => 35,  75 => 19,  69 => 15,  55 => 13,  50 => 12,  36 => 10,  32 => 9,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIECoreBundle/Resources/views/Default/head_page.html.twig #}
<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" ng-app=\"app_ref_sie\">
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
      
{% include \"SIECoreBundle:Default:header_sous_menu.html.twig\" %} ", "@SIECore/Default/head_sous_menu.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle\\Resources\\views\\Default\\head_sous_menu.html.twig");
    }
}
