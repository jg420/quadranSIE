<?php

/* SIEEquipementBundle:Default:detail_equipement.html.twig */
class __TwigTemplate_70daeb2ff85d4ac171368071dd8b3cb1efb7dbf148c18c4a89f040af543bbf06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e77738c7f221dfe6be133d168db1edf36e9bd735c5a75674940e2c01d2e75ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e77738c7f221dfe6be133d168db1edf36e9bd735c5a75674940e2c01d2e75ba->enter($__internal_5e77738c7f221dfe6be133d168db1edf36e9bd735c5a75674940e2c01d2e75ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEEquipementBundle:Default:detail_equipement.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\" id=\"detail\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Propriétés </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <ul class=\"nav nav-tabs\">
            <li id=\"menu_details\" class=\"active\"><a id=\"lien_detail_equipement\"   data-toggle=\"tab\" href=\"#detail_equipement\">Détails équipements</a></li>
            <li  id=\"menu_acces\"><a id=\"lien_acces_equipement\" data-toggle=\"tab\"  href=\"#access_equipement\">Accés</a></li>
            <li  id=\"menu_config\"><a id=\"lien_config_equipement\" data-toggle=\"tab\"    href=\"#config_equipement\">Config</a></li>
        </ul>
        <div class=\"tab-content\" >
            <div id=\"details_equipement\" class=\"tab-pane fade in active\">

                <button  id=\"btn_modif_details_equipement\" class=\"btn_modifier\"  style=\" float: right;\">
                    ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 20
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "                </button>

                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >
                        <tr><td>Libellé</td><td><input type=\"text\" id=\"lib_equipement\" disabled=\"true\"> 
                        <tr><td>Numéro de série</td><td><input type=\"text\" id=\"num_serie\" disabled=\"true\"> 
                        <tr><td>Constructeur</td><td><input type=\"text\" id=\"lib_constructeur\" disabled=\"true\"> 
                        <tr><td>Adresse ip local</td><td><input type=\"text\" id=\"adresse_ip_local\" disabled=\"true\"> 
                        <tr><td>Adresse ip vpn</td><td><input type=\"text\" id=\"adresse_ip_vpn\" disabled=\"true\"> 
                        <tr><td>Adresse Mac</td><td><input type=\"text\" id=\"adresse_mac\" disabled=\"true\"> 
                        <tr><td>Version firmware</td><td><input type=\"text\" id=\"version_firmware\" disabled=\"true\"> 
                        <tr><td>
                                <button  id=\"btn_valid_modif_details_equipement\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 37
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "                                </button> 
                                <button  id=\"btn_annule_modif_details_equipement\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    ";
        // line 41
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 42
            echo "
                                    <img  class=\"img-background-button\"    src=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 42
            echo "
                                    <img  class=\"img-background-button\"    src=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "                                </button> 

                    </tbody>

                </table>
                <br/>



            </div>
            <div id=\"acces_equipement\" class=\"tab-pane fade\">
                <button   id=\"btn_modif_acces_equipement\" class=\"btn_modifier\"  style=\" float: right;\" >
                    ";
        // line 57
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 59
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 61
        echo "                </button>
                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >

                        <tr><td>Libellé acces </td><td> <input type=\"text\" id=\"lib_acces\" disabled=\"true\"> 
                        <tr><td>Adresse ip </td><td><input type=\"text\" id=\"adresse_ip\" disabled=\"true\">  
                        <tr><td>Login </td><td><input type=\"text\" id=\"login\" disabled=\"true\">  
                        <tr><td>Password </td><td><input type=\"text\" id=\"password\" disabled=\"true\">
                        <tr><td>Port </td><td><input type=\"text\" id=\"port\" disabled=\"true\">  
                        <tr><td>Protocol</td><td><input type=\"text\" id=\"protocol\" disabled=\"true\">      
                        <tr><td>
                                <button  id=\"btn_valid_modif_acces_equipement\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    ";
        // line 74
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 75
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 77
        echo "                                </button> 
                                <button  id=\"btn_annule_modif_acces_equipement\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    ";
        // line 79
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 80
            echo "
                                    <img  class=\"img-background-button\"    src=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 80
            echo "
                                    <img  class=\"img-background-button\"    src=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 83
        echo "                                </button> 
                    </tbody>

                </table>
            </div>
            <div id=\"config_equipement\" class=\"tab-pane fade\">
                <button  id=\"btn_ajout_config_equipement\" class=\"btn_ajout\"   style=\" float: right;\">
                    ";
        // line 90
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 92
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 94
        echo "                </button> 
                <table class=\"table-condensed\"  >

                    <tbody class=\"content_tab\" >
                        <tr><td>Libellé config </td><td> <input type=\"text\" id=\"lib_acces\" disabled=\"true\"> </td><td> <a href=\"\">Lien config</a></td>


                        <tr>   <td><div id=\"titre_nouvelle_config\" style=\"visibility: hidden\">nouvelle config</div> </td>
                            <td> <input type=\"text\" id=\"lib_config\" disabled=\"true\" style=\"visibility: hidden\"> </td>
                            <td> <button id=\"btn_parcourir_config\" style=\"visibility: hidden\"  >Parcourir</button>
                                <button  id=\"btn_valid_ajout_config\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    ";
        // line 105
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 107
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 109
        echo "                                </button> 
                                <button  id=\"btn_annule_ajout_config\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    ";
        // line 111
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 113
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            echo "                                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 115
        echo "                                </button> 

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>




</div>
";
        
        $__internal_5e77738c7f221dfe6be133d168db1edf36e9bd735c5a75674940e2c01d2e75ba->leave($__internal_5e77738c7f221dfe6be133d168db1edf36e9bd735c5a75674940e2c01d2e75ba_prof);

    }

    public function getTemplateName()
    {
        return "SIEEquipementBundle:Default:detail_equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 115,  277 => 113,  273 => 111,  269 => 109,  255 => 107,  251 => 105,  238 => 94,  224 => 92,  220 => 90,  211 => 83,  205 => 81,  202 => 80,  195 => 81,  192 => 80,  188 => 79,  184 => 77,  170 => 75,  166 => 74,  151 => 61,  137 => 59,  133 => 57,  119 => 45,  113 => 43,  110 => 42,  103 => 43,  100 => 42,  96 => 41,  92 => 39,  78 => 37,  74 => 36,  58 => 22,  44 => 20,  40 => 18,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIEEquipementBundle/Resources/views/form/detail_equipement.html.twig #}

<div class=\"panel panel-default\" id=\"detail\" >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Propriétés </h3> <!-- panel title -->
    </div>
    <div class=\"panel-body\"  > 
        <ul class=\"nav nav-tabs\">
            <li id=\"menu_details\" class=\"active\"><a id=\"lien_detail_equipement\"   data-toggle=\"tab\" href=\"#detail_equipement\">Détails équipements</a></li>
            <li  id=\"menu_acces\"><a id=\"lien_acces_equipement\" data-toggle=\"tab\"  href=\"#access_equipement\">Accés</a></li>
            <li  id=\"menu_config\"><a id=\"lien_config_equipement\" data-toggle=\"tab\"    href=\"#config_equipement\">Config</a></li>
        </ul>
        <div class=\"tab-content\" >
            <div id=\"details_equipement\" class=\"tab-pane fade in active\">

                <button  id=\"btn_modif_details_equipement\" class=\"btn_modifier\"  style=\" float: right;\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button>

                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >
                        <tr><td>Libellé</td><td><input type=\"text\" id=\"lib_equipement\" disabled=\"true\"> 
                        <tr><td>Numéro de série</td><td><input type=\"text\" id=\"num_serie\" disabled=\"true\"> 
                        <tr><td>Constructeur</td><td><input type=\"text\" id=\"lib_constructeur\" disabled=\"true\"> 
                        <tr><td>Adresse ip local</td><td><input type=\"text\" id=\"adresse_ip_local\" disabled=\"true\"> 
                        <tr><td>Adresse ip vpn</td><td><input type=\"text\" id=\"adresse_ip_vpn\" disabled=\"true\"> 
                        <tr><td>Adresse Mac</td><td><input type=\"text\" id=\"adresse_mac\" disabled=\"true\"> 
                        <tr><td>Version firmware</td><td><input type=\"text\" id=\"version_firmware\" disabled=\"true\"> 
                        <tr><td>
                                <button  id=\"btn_valid_modif_details_equipement\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'%}
                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 
                                <button  id=\"btn_annule_modif_details_equipement\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'%}

                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 

                    </tbody>

                </table>
                <br/>



            </div>
            <div id=\"acces_equipement\" class=\"tab-pane fade\">
                <button   id=\"btn_modif_acces_equipement\" class=\"btn_modifier\"  style=\" float: right;\" >
                    {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button>
                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >

                        <tr><td>Libellé acces </td><td> <input type=\"text\" id=\"lib_acces\" disabled=\"true\"> 
                        <tr><td>Adresse ip </td><td><input type=\"text\" id=\"adresse_ip\" disabled=\"true\">  
                        <tr><td>Login </td><td><input type=\"text\" id=\"login\" disabled=\"true\">  
                        <tr><td>Password </td><td><input type=\"text\" id=\"password\" disabled=\"true\">
                        <tr><td>Port </td><td><input type=\"text\" id=\"port\" disabled=\"true\">  
                        <tr><td>Protocol</td><td><input type=\"text\" id=\"protocol\" disabled=\"true\">      
                        <tr><td>
                                <button  id=\"btn_valid_modif_acces_equipement\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'%}
                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 
                                <button  id=\"btn_annule_modif_acces_equipement\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'%}

                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 
                    </tbody>

                </table>
            </div>
            <div id=\"config_equipement\" class=\"tab-pane fade\">
                <button  id=\"btn_ajout_config_equipement\" class=\"btn_ajout\"   style=\" float: right;\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button> 
                <table class=\"table-condensed\"  >

                    <tbody class=\"content_tab\" >
                        <tr><td>Libellé config </td><td> <input type=\"text\" id=\"lib_acces\" disabled=\"true\"> </td><td> <a href=\"\">Lien config</a></td>


                        <tr>   <td><div id=\"titre_nouvelle_config\" style=\"visibility: hidden\">nouvelle config</div> </td>
                            <td> <input type=\"text\" id=\"lib_config\" disabled=\"true\" style=\"visibility: hidden\"> </td>
                            <td> <button id=\"btn_parcourir_config\" style=\"visibility: hidden\"  >Parcourir</button>
                                <button  id=\"btn_valid_ajout_config\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'
                                    %}
                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 
                                <button  id=\"btn_annule_ajout_config\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'
                                    %}
                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>




</div>
", "SIEEquipementBundle:Default:detail_equipement.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\EquipementBundle/Resources/views/Default/detail_equipement.html.twig");
    }
}
