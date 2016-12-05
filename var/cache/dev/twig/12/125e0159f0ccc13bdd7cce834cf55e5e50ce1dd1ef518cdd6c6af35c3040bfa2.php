<?php

/* SIEEquipementBundle:Default:result_equipement.html.twig */
class __TwigTemplate_69f020714e69f191ca0403128fa20ce42e05178cdb7e3b8a142b5059c4082813 extends Twig_Template
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
        $__internal_99f25245d980a12e4517ddcd27867e18d4f3fcddf41fdee02ad941d15bd16ff0 = $this->env->getExtension("native_profiler");
        $__internal_99f25245d980a12e4517ddcd27867e18d4f3fcddf41fdee02ad941d15bd16ff0->enter($__internal_99f25245d980a12e4517ddcd27867e18d4f3fcddf41fdee02ad941d15bd16ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEEquipementBundle:Default:result_equipement.html.twig"));

        // line 2
        echo "
 ";
        // line 3
        $context["lien_equipement"] = "http://127.0.0.1/debug/sie-/web/app_dev.php/equipement";
        echo " 
<div id=\"bloc_resultat_equipement\" class=\"bloc_resultat_details\" ng-controller=\"result_equipement_controller\">
    <a href= ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["lien_equipement"]) ? $context["lien_equipement"] : $this->getContext($context, "lien_equipement")), "html", null, true);
        echo "><b class=\"titreSection\">Equipements</b></a>
    <p id=\"lib_central_equipement\" class=\"lib_central\"></p>
    <!--Affichage
    <input id=\"chck_auto_refresh_equipement\" type=\"checkbox\"/>-->

 
    
    <br/>
    <br/>
    <!--<input id=\"btn_last_equipement\" type=\"button\" value=\"prec\"/>-->
    <button ng-model=\"btn_ajout_equipement\" id=\"btn_ajout_equipement\" class=\"btn_ajout\"  >
        ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 18
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    </button>
   
    ";
        // line 29
        echo "    <br/>
    ";
        // line 38
        echo "
    <button ng-model=\"btn_modif_equipement\" id=\"btn_modif_equipement\" class=\"btn_modifier\"  >
        ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 42
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
        ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 44
        echo "    </button>
    
    ";
        // line 54
        echo "    <br/>
    <button ng-model=\"btn_valid_modif_equipement\" id=\"btn_valid_modif_equipement\"  class=\"btn_suivant\"  value=\"valider\" style=\"visibility: hidden\">
        ";
        // line 56
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aef7376_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 58
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"valider\"/>
        ";
        } else {
            // asset "aef7376"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aef7376") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/aef7376.jpeg");
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"valider\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 60
        echo "    </button>


    <button ng-model=\"btn_annuler_modif_equipement\" id=\"btn_annuler_modif_equipement\" class=\"btn_annuler\" style=\"visibility: hidden\">
        ";
        // line 64
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 66
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"annuler\"/>
        ";
        } else {
            // asset "02f85ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02f85ee") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/02f85ee.jpeg");
            echo "        <img class=\"img-background-button\"   src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"annuler\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 67
        echo "    
    </button>
    <br/>

    <div id='output_resumeResultat'>

    </div>
    <br/>

    <b>Equipement :</b>
    <br/>                     
    <select ng-model=\"equipement\" id=\"select_equipement\"   >
    </select>
    <br/>
    <br/>
    <br/>
    <b>Constructeur :</b>
    <br/>
    <select ng-model=\"constructeur\" id=\"constructeur\" disabled='disabled' >
    </select>

    <br/>
    <b>Type :</b>
    </br>
    <select disabled=\"disabled\" id=\"type_equipement\">
    </select>
     </br>       
    <b>Nom : </b>
    <br/>
    <input ng-model=\"lib_equipement\" id=\"lib_equipement\" type=\"text\" disabled='disabled'>
    <br/>
    ";
        // line 102
        echo "
    <b>Version : </b><br/>
    <input ng-model=\"version_equipement\" id=\"version_equipement\" type=\"text\" disabled='disabled'>
    <br/>
    
    <b>Numéro de série : </b><br/>
    <input ng-model=\"num_serie_equipement\" id=\"num_serie_equipement\" type=\"text\" disabled='disabled'>
    <br/>

    <input id=\"id_equipement\" type=\"hidden\"/>
</div>



";
        
        $__internal_99f25245d980a12e4517ddcd27867e18d4f3fcddf41fdee02ad941d15bd16ff0->leave($__internal_99f25245d980a12e4517ddcd27867e18d4f3fcddf41fdee02ad941d15bd16ff0_prof);

    }

    public function getTemplateName()
    {
        return "SIEEquipementBundle:Default:result_equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 102,  141 => 67,  127 => 66,  123 => 64,  117 => 60,  103 => 58,  99 => 56,  95 => 54,  91 => 44,  77 => 42,  73 => 40,  69 => 38,  66 => 29,  62 => 20,  48 => 18,  44 => 16,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {# SIE/EquipementBundle/Resources/views/form/result_equipement.html.twig #}*/
/* */
/*  {% set lien_equipement = "http://127.0.0.1/debug/sie-/web/app_dev.php/equipement" %} */
/* <div id="bloc_resultat_equipement" class="bloc_resultat_details" ng-controller="result_equipement_controller">*/
/*     <a href= {{lien_equipement }}><b class="titreSection">Equipements</b></a>*/
/*     <p id="lib_central_equipement" class="lib_central"></p>*/
/*     <!--Affichage*/
/*     <input id="chck_auto_refresh_equipement" type="checkbox"/>-->*/
/* */
/*  */
/*     */
/*     <br/>*/
/*     <br/>*/
/*     <!--<input id="btn_last_equipement" type="button" value="prec"/>-->*/
/*     <button ng-model="btn_ajout_equipement" id="btn_ajout_equipement" class="btn_ajout"  >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="AJout"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*    */
/*     {#<button ng-model="btn_sup_equipement" id="btn_sup_equipement" class="btn_sup"  >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_supr.png'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Supr"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*     #}*/
/*     <br/>*/
/*     {#*/
/*     <button ng-model="btn_last_equipement" id="btn_last_equipement" class="btn_precedent" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Precedent"/>*/
/*         {% endimage %}       */
/*     </button>*/
/*     #}*/
/* */
/*     <button ng-model="btn_modif_equipement" id="btn_modif_equipement" class="btn_modifier"  >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'*/
/*         %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Modif"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*     */
/*     {#*/
/*     <button ng-model="btn_next_equipement" id="btn_next_equipement"  class="btn_suivant"  value="suivant" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'*/
/*         %}*/
/*         <img class="img-background-button"    src="{{ asset_url }}"  alt="Suivant"/>*/
/*         {% endimage %}*/
/*     </button> */
/*     #}*/
/*     <br/>*/
/*     <button ng-model="btn_valid_modif_equipement" id="btn_valid_modif_equipement"  class="btn_suivant"  value="valider" style="visibility: hidden">*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'*/
/*         %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="valider"/>*/
/*         {% endimage %}*/
/*     </button>*/
/* */
/* */
/*     <button ng-model="btn_annuler_modif_equipement" id="btn_annuler_modif_equipement" class="btn_annuler" style="visibility: hidden">*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'*/
/*         %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="annuler"/>*/
/*         {% endimage %}    */
/*     </button>*/
/*     <br/>*/
/* */
/*     <div id='output_resumeResultat'>*/
/* */
/*     </div>*/
/*     <br/>*/
/* */
/*     <b>Equipement :</b>*/
/*     <br/>                     */
/*     <select ng-model="equipement" id="select_equipement"   >*/
/*     </select>*/
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/*     <b>Constructeur :</b>*/
/*     <br/>*/
/*     <select ng-model="constructeur" id="constructeur" disabled='disabled' >*/
/*     </select>*/
/* */
/*     <br/>*/
/*     <b>Type :</b>*/
/*     </br>*/
/*     <select disabled="disabled" id="type_equipement">*/
/*     </select>*/
/*      </br>       */
/*     <b>Nom : </b>*/
/*     <br/>*/
/*     <input ng-model="lib_equipement" id="lib_equipement" type="text" disabled='disabled'>*/
/*     <br/>*/
/*     {#*/
/*     <b>adresse mac : </b><br/>*/
/*     <input ng-model="mac_equipement" id="mac_equipement" type="text" disabled='disabled'>*/
/*     <br/>#}*/
/* */
/*     <b>Version : </b><br/>*/
/*     <input ng-model="version_equipement" id="version_equipement" type="text" disabled='disabled'>*/
/*     <br/>*/
/*     */
/*     <b>Numéro de série : </b><br/>*/
/*     <input ng-model="num_serie_equipement" id="num_serie_equipement" type="text" disabled='disabled'>*/
/*     <br/>*/
/* */
/*     <input id="id_equipement" type="hidden"/>*/
/* </div>*/
/* */
/* */
/* */
/* */
