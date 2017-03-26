<?php

/* SIECentralBundle:Default:detail_central.html.twig */
class __TwigTemplate_c7da8a66f015861207aae59f836d5ff7809fd628d9b445e0947896d177e08599 extends Twig_Template
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
        $__internal_33163ef07192a2585725347c22f2274f62d3b681cee8d93d05b3291504b9a34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33163ef07192a2585725347c22f2274f62d3b681cee8d93d05b3291504b9a34d->enter($__internal_33163ef07192a2585725347c22f2274f62d3b681cee8d93d05b3291504b9a34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECentralBundle:Default:detail_central.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\" id=\"detail\" id=\"nav_detail\"  >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Détails </h3> <!-- panel title -->
        <ul class=\"nav nav-tabs\">
            ";
        // line 9
        echo "            <li id=\"menu_information\" class=\"active\"><a  onClick=\"fc_css_select_details_centrale()\" data-toggle=\"tab\" >Global</a></li>
                ";
        // line 11
        echo "                ";
        // line 12
        echo "            <li  id=\"menu_equipement\"  ><a onClick=\"fc_css_select_equipement_centrale()\" data-toggle=\"#nav_detail\"  >Equipements</a></li>
                ";
        // line 14
        echo "            <li  id=\"menu_prestataire\" class=\"\"><a onClick=\"fc_css_select_prestataire_centrale()\" data-toggle=\"#nav_detail\"  >Prestaire</a></li>
                ";
        // line 16
        echo "        </ul>
    </div>

    <div class=\"panel-body\"  > 

        <div class=\"tab-content\" >
            <div id=\"informations_centrale\" class=\"tab-pane fade active in\">

                <button id=\"btn_modif_info_central\" class=\"btn_modifier\"     style=\" float: right;\">
                    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 27
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
        // line 29
        echo "                </button>
                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >
                        <tr><td>Nom</td><td><input type=\"text\" id=\"lib_central\" disabled=\"true\"></td></tr>
                        <tr><td>Code analytique</td><td><input type=\"text\" id=\"code_ana\" disabled=\"true\"></td></tr>
                        <tr><td>Direction</td><td><input type=\"text\" id=\"direction\" disabled=\"true\"></td></tr>
                        <tr><td>Chargé d'exploitation</td><td><input type=\"text\" id=\"cex\" disabled=\"true\"></td></tr>
                        <tr><td>Type</td><td><input type=\"text\" id=\"type_central\" disabled=\"true\"></td></tr>
                        <tr><td>Societe</td><td><input type=\"text\" id=\"societe_principale\" disabled=\"true\"></td></tr>
                        <tr><td>Puissance</td><td><input type=\"text\" id=\"puissance_estimee\" disabled=\"true\"></td></tr>
                        <tr><td>
                                <button  id=\"btn_valid_modif_details_central\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    ";
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 43
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
        // line 45
        echo "                                </button> 
                                <button  id=\"btn_annule_modif_details_central\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    ";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 48
            echo "
                                    <img  class=\"img-background-button\"    src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 48
            echo "
                                    <img  class=\"img-background-button\"    src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                                    ";
        }
        unset($context["asset_url"]);
        // line 51
        echo "                                </button> 


                    </tbody>

                </table>
                <br/>



            </div>
            <div id=\"equipement_centrale\" class=\"tab-pane fade\">
              
                <button  id=\"btn_ajout_equipement_central\" class=\"btn_ajout\"   style=\" float: right;\">
                    ";
        // line 65
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 67
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
                    ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 69
        echo "                </button>
                <table class=\"table-condensed\">


                    <tbody class=\"content_tab\" id='tab_equipement_central' charset=\"UTF-8\">

                        <tr> <td> Nom de l'équipment </td>
                            <td> Constructeur </td>
                            <td> Type </td>
                            <td> Modif </td>
                        </tr>
                        <tr>
                            
                            <td><input type=\"text\" id=\"lib_equipement_centrale\" disabled=\"true\"></td>


                            <td><input type=\"text\" id=\"lib_constructeur\" disabled=\"true\"> </td>


                            <td><input type=\"text\" id=\"lib_type\" disabled=\"true\"></td>


                            
                        </tr>


                    </tbody>
                    <input type=\"hidden\" id=\"id_equipement_centrale\" disabled=\"true\"> 
                    <input type=\"hidden\" id=\"id_constructeur\" disabled=\"true\"> 
                    <input type=\"hidden\" id=\"id_type\" disabled=\"true\"> 
                    
                </table>
                <button  id=\"btn_valid_modif_equipement_central\" class=\"btn_valider\"    style=\"visibility: hidden\">
                    ";
        // line 102
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 103
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 105
        echo "                </button> 
                <button  id=\"btn_annule_modif_equipement_central\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                    ";
        // line 107
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 108
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 108
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 111
        echo "                </button> 
            </div>
            <div id=\"prestataire_centrale\" class=\"tab-pane fade\">
                <button id=\"btn_ajout_presta_central\" class=\"btn_modifier\"   style=\" float: right;\">
                    ";
        // line 115
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 117
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
        // line 119
        echo "                </button>
                <button  id=\"btn_ajout_presta_central\" class=\"btn_ajout\"   style=\" float: right;\">
                    ";
        // line 121
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 123
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
                    ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 125
        echo "                </button>

                liste prestataire
                <button  id=\"btn_valid_modif_presta_central\" class=\"btn_valider\"    style=\"visibility: hidden\">
                    ";
        // line 129
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 130
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "                    <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 132
        echo "                </button> 
                <button  id=\"btn_annule_modif_presta_central\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                    ";
        // line 134
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 135
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 135
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 138
        echo "                </button> 

            </div>
        </div>
    </div>




</div>
";
        
        $__internal_33163ef07192a2585725347c22f2274f62d3b681cee8d93d05b3291504b9a34d->leave($__internal_33163ef07192a2585725347c22f2274f62d3b681cee8d93d05b3291504b9a34d_prof);

    }

    public function getTemplateName()
    {
        return "SIECentralBundle:Default:detail_central.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 138,  335 => 136,  332 => 135,  325 => 136,  322 => 135,  318 => 134,  314 => 132,  300 => 130,  296 => 129,  290 => 125,  276 => 123,  272 => 121,  268 => 119,  254 => 117,  250 => 115,  244 => 111,  238 => 109,  235 => 108,  228 => 109,  225 => 108,  221 => 107,  217 => 105,  203 => 103,  199 => 102,  164 => 69,  150 => 67,  146 => 65,  130 => 51,  124 => 49,  121 => 48,  114 => 49,  111 => 48,  107 => 47,  103 => 45,  89 => 43,  85 => 42,  70 => 29,  56 => 27,  52 => 25,  41 => 16,  38 => 14,  35 => 12,  33 => 11,  30 => 9,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIECentralBundle/Resources/views/form/detail_centrale.html.twig #}

<div class=\"panel panel-default\" id=\"detail\" id=\"nav_detail\"  >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Détails </h3> <!-- panel title -->
        <ul class=\"nav nav-tabs\">
            {#<li id=\"menu_information\" class=\"\"><a data-toggle=\"#informations_centrale\" href=\"#informations_centrale\">Global</a></li>#}
            <li id=\"menu_information\" class=\"active\"><a  onClick=\"fc_css_select_details_centrale()\" data-toggle=\"tab\" >Global</a></li>
                {#<button onClick=\"fc_css_select_details_centrale()\"> Glogal</button>#}
                {#<li id=\"menu_information\"><a onClick=\"fc_css_select_menu_informations_centrale();\" data-toggle=\"tab\" href=\"#informations_centrale\">Global</a></li>#}
            <li  id=\"menu_equipement\"  ><a onClick=\"fc_css_select_equipement_centrale()\" data-toggle=\"#nav_detail\"  >Equipements</a></li>
                {#<li  id=\"menu_equipement\"  class=\"active\"><a data-toggle=\"tab\" onClick=\"fc_css_select_menu_equipement_centrale();\" href=\"#equipement_centrale\">Equipements</a></li>#}
            <li  id=\"menu_prestataire\" class=\"\"><a onClick=\"fc_css_select_prestataire_centrale()\" data-toggle=\"#nav_detail\"  >Prestaire</a></li>
                {#<li  id=\"menu_schema\"><a data-toggle=\"tab\" onClick=\"fc_css_select_menu_schema_centrale();\"  href=\"#\">Schémas</a></li>#}
        </ul>
    </div>

    <div class=\"panel-body\"  > 

        <div class=\"tab-content\" >
            <div id=\"informations_centrale\" class=\"tab-pane fade active in\">

                <button id=\"btn_modif_info_central\" class=\"btn_modifier\"     style=\" float: right;\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button>
                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >
                        <tr><td>Nom</td><td><input type=\"text\" id=\"lib_central\" disabled=\"true\"></td></tr>
                        <tr><td>Code analytique</td><td><input type=\"text\" id=\"code_ana\" disabled=\"true\"></td></tr>
                        <tr><td>Direction</td><td><input type=\"text\" id=\"direction\" disabled=\"true\"></td></tr>
                        <tr><td>Chargé d'exploitation</td><td><input type=\"text\" id=\"cex\" disabled=\"true\"></td></tr>
                        <tr><td>Type</td><td><input type=\"text\" id=\"type_central\" disabled=\"true\"></td></tr>
                        <tr><td>Societe</td><td><input type=\"text\" id=\"societe_principale\" disabled=\"true\"></td></tr>
                        <tr><td>Puissance</td><td><input type=\"text\" id=\"puissance_estimee\" disabled=\"true\"></td></tr>
                        <tr><td>
                                <button  id=\"btn_valid_modif_details_central\" class=\"btn_valider\"    style=\"visibility: hidden\">
                                    {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'%}
                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 
                                <button  id=\"btn_annule_modif_details_central\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                                    {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'%}

                                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                                    {% endimage %}
                                </button> 


                    </tbody>

                </table>
                <br/>



            </div>
            <div id=\"equipement_centrale\" class=\"tab-pane fade\">
              
                <button  id=\"btn_ajout_equipement_central\" class=\"btn_ajout\"   style=\" float: right;\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
                    {% endimage %}
                </button>
                <table class=\"table-condensed\">


                    <tbody class=\"content_tab\" id='tab_equipement_central' charset=\"UTF-8\">

                        <tr> <td> Nom de l'équipment </td>
                            <td> Constructeur </td>
                            <td> Type </td>
                            <td> Modif </td>
                        </tr>
                        <tr>
                            
                            <td><input type=\"text\" id=\"lib_equipement_centrale\" disabled=\"true\"></td>


                            <td><input type=\"text\" id=\"lib_constructeur\" disabled=\"true\"> </td>


                            <td><input type=\"text\" id=\"lib_type\" disabled=\"true\"></td>


                            
                        </tr>


                    </tbody>
                    <input type=\"hidden\" id=\"id_equipement_centrale\" disabled=\"true\"> 
                    <input type=\"hidden\" id=\"id_constructeur\" disabled=\"true\"> 
                    <input type=\"hidden\" id=\"id_type\" disabled=\"true\"> 
                    
                </table>
                <button  id=\"btn_valid_modif_equipement_central\" class=\"btn_valider\"    style=\"visibility: hidden\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'%}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button> 
                <button  id=\"btn_annule_modif_equipement_central\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                    {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'%}

                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button> 
            </div>
            <div id=\"prestataire_centrale\" class=\"tab-pane fade\">
                <button id=\"btn_ajout_presta_central\" class=\"btn_modifier\"   style=\" float: right;\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button>
                <button  id=\"btn_ajout_presta_central\" class=\"btn_ajout\"   style=\" float: right;\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
                    {% endimage %}
                </button>

                liste prestataire
                <button  id=\"btn_valid_modif_presta_central\" class=\"btn_valider\"    style=\"visibility: hidden\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'%}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button> 
                <button  id=\"btn_annule_modif_presta_central\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                    {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'%}

                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
                    {% endimage %}
                </button> 

            </div>
        </div>
    </div>




</div>
", "SIECentralBundle:Default:detail_central.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle/Resources/views/Default/detail_central.html.twig");
    }
}
