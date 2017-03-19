<?php

/* @SIEEquipement/Default/result_equipement.html.twig */
class __TwigTemplate_f17ea6ed342aec8f3b100df486a02706b60431d63df028f598be97f7de508768 extends Twig_Template
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
        $__internal_df6cd3208fa1298f06568c0a36d1576f03fc4713327b53adaa2eb80d431cdf7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6cd3208fa1298f06568c0a36d1576f03fc4713327b53adaa2eb80d431cdf7f->enter($__internal_df6cd3208fa1298f06568c0a36d1576f03fc4713327b53adaa2eb80d431cdf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SIEEquipement/Default/result_equipement.html.twig"));

        // line 2
        echo "
 ";
        // line 3
        $context["lien_equipement"] = "http://127.0.0.1/debug/sie-/web/app_dev.php/equipement";
        echo " 
<div id=\"bloc_resultat_equipement\" class=\"bloc_resultat_details\" ng-controller=\"result_equipement_controller\">
    <a id=\"lien_page_equipement\" href= ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["lien_equipement"]) ? $context["lien_equipement"] : $this->getContext($context, "lien_equipement")), "html", null, true);
        echo "><b class=\"titreSection\">Equipements</b></a>
    <p id=\"lib_central_equipement\" class=\"lib_central\"></p>
    <!--Affichage
    <input id=\"chck_auto_refresh_equipement\" type=\"checkbox\"/>-->
    <!--<input id=\"btn_last_equipement\" type=\"button\" value=\"prec\"/>-->
    <button ng-model=\"btn_ajout_equipement\" id=\"btn_ajout_equipement\" class=\"btn_ajout\"  >
        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 13
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    </button>
   
    ";
        // line 24
        echo "    <br/>
    ";
        // line 33
        echo "
    <button ng-model=\"btn_modif_equipement\" id=\"btn_modif_equipement\" class=\"btn_modifier\"  >
        ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 37
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
        ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "    </button>
    
    ";
        // line 49
        echo "    <br/>
    <button id=\"btn_valid_modif_equipement\"  class=\"btn_suivant\"  value=\"valider\" style=\"visibility: hidden\">
        ";
        // line 51
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 53
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"valider\"/>
        ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"valider\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 55
        echo "    </button>


    <button   id=\"btn_annuler_modif_equipement\" class=\"btn_annuler\" style=\"visibility: hidden\">
        ";
        // line 59
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 61
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"annuler\"/>
        ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee.jpeg");
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"annuler\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 62
        echo "    
    </button>
    <br/>

    <div id='output_resumeResultat'>

    </div>
    <br/>

    <b>Equipement :</b>
    <br/>                     
    <select  id=\"select_equipement\"   >
    </select>
    <br/>
    <br/>
    <br/>
    <b>Constructeur :</b>
    <br/>
    <select   id=\"constructeur\" disabled='disabled' >
    </select>

    <br/>
    <b>Type :</b>
    </br>
    <select id=\"type_equipement\" disabled=\"disabled\" >
    </select>
     </br>       
    <b>Nom : </b>
    <br/>
    <input  id=\"lib_equipement\" type=\"text\" disabled='disabled'>
    <br/>
    ";
        // line 97
        echo "
    <b>Version : </b><br/>
    <input  id=\"version_equipement\" type=\"text\" disabled='disabled'>
    <br/>
    
    <b>Numéro de série : </b><br/>
    <input   id=\"num_serie_equipement\" type=\"text\" disabled='disabled'>
    <br/>

    <input id=\"id_equipement\" type=\"hidden\"/>
</div>



";
        
        $__internal_df6cd3208fa1298f06568c0a36d1576f03fc4713327b53adaa2eb80d431cdf7f->leave($__internal_df6cd3208fa1298f06568c0a36d1576f03fc4713327b53adaa2eb80d431cdf7f_prof);

    }

    public function getTemplateName()
    {
        return "@SIEEquipement/Default/result_equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 97,  136 => 62,  122 => 61,  118 => 59,  112 => 55,  98 => 53,  94 => 51,  90 => 49,  86 => 39,  72 => 37,  68 => 35,  64 => 33,  61 => 24,  57 => 15,  43 => 13,  39 => 11,  30 => 5,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIE/EquipementBundle/Resources/views/form/result_equipement.html.twig #}

 {% set lien_equipement = \"http://127.0.0.1/debug/sie-/web/app_dev.php/equipement\" %} 
<div id=\"bloc_resultat_equipement\" class=\"bloc_resultat_details\" ng-controller=\"result_equipement_controller\">
    <a id=\"lien_page_equipement\" href= {{lien_equipement }}><b class=\"titreSection\">Equipements</b></a>
    <p id=\"lib_central_equipement\" class=\"lib_central\"></p>
    <!--Affichage
    <input id=\"chck_auto_refresh_equipement\" type=\"checkbox\"/>-->
    <!--<input id=\"btn_last_equipement\" type=\"button\" value=\"prec\"/>-->
    <button ng-model=\"btn_ajout_equipement\" id=\"btn_ajout_equipement\" class=\"btn_ajout\"  >
        {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'
        %}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
        {% endimage %}
    </button>
   
    {#<button ng-model=\"btn_sup_equipement\" id=\"btn_sup_equipement\" class=\"btn_sup\"  >
        {% image '@SIECoreBundle/Resources/public/images/btn_supr.png'
        %}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Supr\"/>
        {% endimage %}
    </button>
    #}
    <br/>
    {#
    <button ng-model=\"btn_last_equipement\" id=\"btn_last_equipement\" class=\"btn_precedent\" >
        {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'
        %}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Precedent\"/>
        {% endimage %}       
    </button>
    #}

    <button ng-model=\"btn_modif_equipement\" id=\"btn_modif_equipement\" class=\"btn_modifier\"  >
        {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
        %}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
        {% endimage %}
    </button>
    
    {#
    <button ng-model=\"btn_next_equipement\" id=\"btn_next_equipement\"  class=\"btn_suivant\"  value=\"suivant\" >
        {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'
        %}
        <img class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Suivant\"/>
        {% endimage %}
    </button> 
    #}
    <br/>
    <button id=\"btn_valid_modif_equipement\"  class=\"btn_suivant\"  value=\"valider\" style=\"visibility: hidden\">
        {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'
        %}
        <img class=\"img-background-button\"   src=\"{{ asset_url }}\"  alt=\"valider\"/>
        {% endimage %}
    </button>


    <button   id=\"btn_annuler_modif_equipement\" class=\"btn_annuler\" style=\"visibility: hidden\">
        {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'
        %}
        <img class=\"img-background-button\"   src=\"{{ asset_url }}\"  alt=\"annuler\"/>
        {% endimage %}    
    </button>
    <br/>

    <div id='output_resumeResultat'>

    </div>
    <br/>

    <b>Equipement :</b>
    <br/>                     
    <select  id=\"select_equipement\"   >
    </select>
    <br/>
    <br/>
    <br/>
    <b>Constructeur :</b>
    <br/>
    <select   id=\"constructeur\" disabled='disabled' >
    </select>

    <br/>
    <b>Type :</b>
    </br>
    <select id=\"type_equipement\" disabled=\"disabled\" >
    </select>
     </br>       
    <b>Nom : </b>
    <br/>
    <input  id=\"lib_equipement\" type=\"text\" disabled='disabled'>
    <br/>
    {#
    <b>adresse mac : </b><br/>
    <input ng-model=\"mac_equipement\" id=\"mac_equipement\" type=\"text\" disabled='disabled'>
    <br/>#}

    <b>Version : </b><br/>
    <input  id=\"version_equipement\" type=\"text\" disabled='disabled'>
    <br/>
    
    <b>Numéro de série : </b><br/>
    <input   id=\"num_serie_equipement\" type=\"text\" disabled='disabled'>
    <br/>

    <input id=\"id_equipement\" type=\"hidden\"/>
</div>



", "@SIEEquipement/Default/result_equipement.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\EquipementBundle\\Resources\\views\\Default\\result_equipement.html.twig");
    }
}
