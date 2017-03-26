<?php

/* @SIECentral/Default/detail_central.html.twig */
class __TwigTemplate_aac5364f812838913f889fc4c00fa4655f61416d3d4d8780e4f451ea5cf91c7c extends Twig_Template
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
        $__internal_676ed670bd64031bb7b4f68d38234aefcefc2b7cad13a49c476233f1d53b7fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676ed670bd64031bb7b4f68d38234aefcefc2b7cad13a49c476233f1d53b7fec->enter($__internal_676ed670bd64031bb7b4f68d38234aefcefc2b7cad13a49c476233f1d53b7fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIECentral/Default/detail_central.html.twig"));

        // line 2
        echo "
<div class=\"panel panel-default\" id=\"detail\" id=\"nav_detail\"  >
    <div class=\"panel-heading\"> <!-- panel heading -->

        <h3 class=\"panel-title\">Détails </h3> <!-- panel title -->
        <ul class=\"nav nav-tabs\">
            ";
        // line 9
        echo "            <li id=\"menu_information\" class=\"active\"><a  onClick=\"fc_css_select_details_centrale()\" data-toggle=\"tab\" href=\"#informations_centrale\">Global</a></li>
                ";
        // line 11
        echo "                ";
        // line 12
        echo "            <li  id=\"menu_equipement\"  ><a onClick=\"fc_css_select_equipement_centrale()\" data-toggle=\"#nav_detail\"   href=\"#equipement_centrale\">Equipements</a></li>
                ";
        // line 14
        echo "            <li  id=\"menu_prestataire\" class=\"\"><a onClick=\"fc_css_select_prestataire_centrale()\" data-toggle=\"#nav_detail\"  href=\"#schema_centrale\">Prestaire</a></li>
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
                ";
        // line 69
        echo "                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >

                        <tr><td>Libellé equipement</td><td><input type=\"text\" id=\"lib_equipement_centrale\" disabled=\"true\"></td></tr>
                        <tr><td>Constructeur</td><td><input type=\"text\" id=\"constructeur\" disabled=\"true\"> </td></tr>
                        <tr><td>Type</td><td><input type=\"text\" id=\"type\" disabled=\"true\"></td></tr>

                    </tbody>

                </table>
            </div>
            <div id=\"prestataire_centrale\" class=\"tab-pane fade\">
                <button id=\"btn_modif_presta_central\" class=\"btn_modifier\"   style=\" float: right;\">
                    ";
        // line 83
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 85
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
        // line 87
        echo "                </button>

                liste prestataire
                <button  id=\"btn_valid_modif_presta_central\" class=\"btn_valider\"    style=\"visibility: hidden\">
                    ";
        // line 91
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 92
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
        // line 94
        echo "                </button> 
                <button  id=\"btn_annule_modif_presta_central\" class=\"btn_annuler\"  style=\"visibility: hidden\"  >
                    ";
        // line 96
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 97
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            // line 97
            echo "
                    <img  class=\"img-background-button\"    src=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
                    ";
        }
        unset($context["asset_url"]);
        // line 100
        echo "                </button> 

            </div>
        </div>
    </div>




</div>
";
        
        $__internal_676ed670bd64031bb7b4f68d38234aefcefc2b7cad13a49c476233f1d53b7fec->leave($__internal_676ed670bd64031bb7b4f68d38234aefcefc2b7cad13a49c476233f1d53b7fec_prof);

    }

    public function getTemplateName()
    {
        return "@SIECentral/Default/detail_central.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 100,  223 => 98,  220 => 97,  213 => 98,  210 => 97,  206 => 96,  202 => 94,  188 => 92,  184 => 91,  178 => 87,  164 => 85,  160 => 83,  144 => 69,  130 => 51,  124 => 49,  121 => 48,  114 => 49,  111 => 48,  107 => 47,  103 => 45,  89 => 43,  85 => 42,  70 => 29,  56 => 27,  52 => 25,  41 => 16,  38 => 14,  35 => 12,  33 => 11,  30 => 9,  22 => 2,);
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
            <li id=\"menu_information\" class=\"active\"><a  onClick=\"fc_css_select_details_centrale()\" data-toggle=\"tab\" href=\"#informations_centrale\">Global</a></li>
                {#<button onClick=\"fc_css_select_details_centrale()\"> Glogal</button>#}
                {#<li id=\"menu_information\"><a onClick=\"fc_css_select_menu_informations_centrale();\" data-toggle=\"tab\" href=\"#informations_centrale\">Global</a></li>#}
            <li  id=\"menu_equipement\"  ><a onClick=\"fc_css_select_equipement_centrale()\" data-toggle=\"#nav_detail\"   href=\"#equipement_centrale\">Equipements</a></li>
                {#<li  id=\"menu_equipement\"  class=\"active\"><a data-toggle=\"tab\" onClick=\"fc_css_select_menu_equipement_centrale();\" href=\"#equipement_centrale\">Equipements</a></li>#}
            <li  id=\"menu_prestataire\" class=\"\"><a onClick=\"fc_css_select_prestataire_centrale()\" data-toggle=\"#nav_detail\"  href=\"#schema_centrale\">Prestaire</a></li>
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
                {#    <button id=\"btn_modif_equipement_central\" class=\"btn_modifier\"    style=\" float: right;\">
         {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
           %}
           <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
        {% endimage %}
        </button>#}
                <table class=\"table-condensed\">

                    <tbody class=\"content_tab\" >

                        <tr><td>Libellé equipement</td><td><input type=\"text\" id=\"lib_equipement_centrale\" disabled=\"true\"></td></tr>
                        <tr><td>Constructeur</td><td><input type=\"text\" id=\"constructeur\" disabled=\"true\"> </td></tr>
                        <tr><td>Type</td><td><input type=\"text\" id=\"type\" disabled=\"true\"></td></tr>

                    </tbody>

                </table>
            </div>
            <div id=\"prestataire_centrale\" class=\"tab-pane fade\">
                <button id=\"btn_modif_presta_central\" class=\"btn_modifier\"   style=\" float: right;\">
                    {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
                    %}
                    <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
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
", "@SIECentral/Default/detail_central.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\CentralBundle\\Resources\\views\\Default\\detail_central.html.twig");
    }
}
