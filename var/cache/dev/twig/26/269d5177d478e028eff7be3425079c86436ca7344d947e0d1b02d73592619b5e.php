<?php

/* SIECoreBundle:Default:header.html.twig */
class __TwigTemplate_0492c36be212e214a8bbcff4c3461d8e9bd92f33b309a365420e3fcb9eff6ff1 extends Twig_Template
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
        $__internal_c414db9000a3a2bddb6a3d6dda7599a85053da3539bb1b993014da37b59432fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c414db9000a3a2bddb6a3d6dda7599a85053da3539bb1b993014da37b59432fb->enter($__internal_c414db9000a3a2bddb6a3d6dda7599a85053da3539bb1b993014da37b59432fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:header.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["path_equipement"] = ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . "/web/app_dev.php/equipement");
        // line 3
        $context["path_central"] = ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . "/web/app_dev.php/central");
        // line 4
        $context["path_acceuil"] = ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . "/web/app_dev.php/");
        // line 5
        $context["path_acces"] = ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . "/web/app_dev.php/access");
        // line 6
        echo " 
 
";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "<title id=\"titre\">REFERENTIEL</title>
";
        // line 39
        echo " <header>
        
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
       
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["path_acceuil"]) ? $context["path_acceuil"] : $this->getContext($context, "path_acceuil")), "html", null, true);
        echo ">Réferenciel SIE</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <!--<li id=\"lien_menu_acceuil\"><a href=\"\">Acceuil</a></li>-->
                <li id=\"lien_menu_central\"><a href=";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["path_central"]) ? $context["path_central"] : $this->getContext($context, "path_central")), "html", null, true);
        echo ">Centrales</a></li>
            <li id=\"lien_menu_equipement\"  ><a href=";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["path_equipement"]) ? $context["path_equipement"] : $this->getContext($context, "path_equipement")), "html", null, true);
        echo ">Equipements</a></li>
            <li id=\"lien_menu_equipement\"  ><a href=";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["path_acces"]) ? $context["path_acces"] : $this->getContext($context, "path_acces")), "html", null, true);
        echo ">Acces</a></li>
          </ul>
        </div><!--/.nav-collapse -->
     
    </nav>
    </header>
</head>";
        
        $__internal_c414db9000a3a2bddb6a3d6dda7599a85053da3539bb1b993014da37b59432fb->leave($__internal_c414db9000a3a2bddb6a3d6dda7599a85053da3539bb1b993014da37b59432fb_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43e025793c8835cd32730f4f8db67207ea7e768c1e85c1303d9833ac62c76297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e025793c8835cd32730f4f8db67207ea7e768c1e85c1303d9833ac62c76297->enter($__internal_43e025793c8835cd32730f4f8db67207ea7e768c1e85c1303d9833ac62c76297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "66960f5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66960f5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/66960f5_setUp_1.js");
            // line 10
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "66960f5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_66960f5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/66960f5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dff4dbb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dff4dbb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/dff4dbb_front_page_1.js");
            // line 13
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "dff4dbb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dff4dbb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/dff4dbb.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 16
            echo "    ";
            // line 17
            echo "    ";
        } else {
            // asset "a5be7e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7.js");
            // line 16
            echo "    ";
            // line 17
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
 
    ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "454a49e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_454a49e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/454a49e_front_result_doc_1.js");
            // line 21
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>   
    ";
        } else {
            // asset "454a49e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_454a49e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/454a49e.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>   
    ";
        }
        unset($context["asset_url"]);
        // line 23
        echo " 
    ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af4783f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_af4783f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/af4783f_front_result_equipement_1.js");
            // line 25
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "af4783f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_af4783f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/af4783f.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a5be7e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7_front_result_central_1.js");
            // line 28
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "a5be7e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a5be7e7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a5be7e7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 31
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 
    ";
        } else {
            // asset "da82b2d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_da82b2d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/da82b2d.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script> 
    ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "       ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc7accb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7accb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fc7accb_front_result_equipement_access_1.js");
            // line 34
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        } else {
            // asset "fc7accb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7accb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fc7accb.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>          
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_43e025793c8835cd32730f4f8db67207ea7e768c1e85c1303d9833ac62c76297->leave($__internal_43e025793c8835cd32730f4f8db67207ea7e768c1e85c1303d9833ac62c76297_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 34,  229 => 33,  215 => 31,  210 => 30,  196 => 28,  191 => 27,  177 => 25,  173 => 24,  170 => 23,  156 => 21,  152 => 20,  148 => 18,  144 => 17,  142 => 16,  137 => 17,  135 => 16,  130 => 15,  116 => 13,  111 => 12,  97 => 10,  92 => 9,  86 => 8,  72 => 57,  68 => 56,  64 => 55,  56 => 50,  43 => 39,  40 => 37,  38 => 8,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% set path_equipement=app.request.scheme ~'://' ~ app.request.httpHost~\"/web/app_dev.php/equipement\"%}
{% set path_central=app.request.scheme ~'://' ~ app.request.httpHost~\"/web/app_dev.php/central\"%}
{% set path_acceuil=app.request.scheme ~'://' ~ app.request.httpHost~\"/web/app_dev.php/\"%}
{% set path_acces=app.request.scheme ~'://' ~ app.request.httpHost~\"/web/app_dev.php/access\"%}
 
 
{% block javascripts %}
    {% javascripts '@SIECoreBundle/Resources/public/js/setUp.js' %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    {% javascripts '@SIECentralBundle/Resources/public/js/front_page.js' %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    {% javascripts '@SIECentralBundle/Resources/public/js/front_result_central.js' %}
    {#<script src=\"{{ asset_url }}\"></script>#}
    {% endjavascripts %}

 
    {% javascripts '@SIEDocumentBundle/Resources/public/js/front_result_doc.js' %}
    <script src=\"{{ asset_url }}\"></script>   
    {% endjavascripts %}
 
    {% javascripts '@SIEEquipementBundle/Resources/public/js/front_result_equipement.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIECentralBundle/Resources/public/js/front_result_central.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
    {% javascripts '@SIECoreBundle/Resources/public/js/front_search.js' %}
    <script src=\"{{ asset_url }}\"></script> 
    {% endjavascripts %}
       {% javascripts '@SIEAccessBundle/Resources/public/js/front_result_equipement_access.js' %}
    <script src=\"{{ asset_url }}\"></script>          
    {% endjavascripts %}
{% endblock %}
<title id=\"titre\">REFERENTIEL</title>
{# <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>#}
 <header>
        
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
       
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href={{ path_acceuil}}>Réferenciel SIE</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <!--<li id=\"lien_menu_acceuil\"><a href=\"\">Acceuil</a></li>-->
                <li id=\"lien_menu_central\"><a href={{ path_central}}>Centrales</a></li>
            <li id=\"lien_menu_equipement\"  ><a href={{ path_equipement}}>Equipements</a></li>
            <li id=\"lien_menu_equipement\"  ><a href={{ path_acces}}>Acces</a></li>
          </ul>
        </div><!--/.nav-collapse -->
     
    </nav>
    </header>
</head>", "SIECoreBundle:Default:header.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CoreBundle/Resources/views/Default/header.html.twig");
    }
}
