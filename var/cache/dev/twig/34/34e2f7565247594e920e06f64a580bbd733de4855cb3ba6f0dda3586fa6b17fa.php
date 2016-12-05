<?php

/* SIEDocumentBundle:Default:result_document.html.twig */
class __TwigTemplate_f74254c30a0e5cfdc514e523cbe6a2fc8332721e704a1042ae42faf4f121c2b2 extends Twig_Template
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
        $__internal_b3a1ee093aa0178fc9c64a54e99cc8e57672e8b83ca5fcbc872f8c44de6b4160 = $this->env->getExtension("native_profiler");
        $__internal_b3a1ee093aa0178fc9c64a54e99cc8e57672e8b83ca5fcbc872f8c44de6b4160->enter($__internal_b3a1ee093aa0178fc9c64a54e99cc8e57672e8b83ca5fcbc872f8c44de6b4160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEDocumentBundle:Default:result_document.html.twig"));

        // line 2
        echo " ";
        $context["lien_document"] = "http://127.0.0.1/debug/sie-/web/app_dev.php/equipement";
        echo " 

<div  id=\"bloc_resultat_document\" ng-controller=\"result_document_controller\">
   <a href=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["lien_document"]) ? $context["lien_document"] : $this->getContext($context, "lien_document")), "html", null, true);
        echo "> <b class=\"titreSection\" id='titreDocument'>Documents</b></a>
    <p id=\"lib_central_document\" class=\"lib_central\"></p>
    

    <br/>
    <br/>
    <br/>
<button ng-model=\"btn_ajout_document\" id=\"btn_ajout_document\" class=\"btn_ajout\"  >
     ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 15
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
    ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a935514") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "    </button>
    
    ";
        // line 26
        echo "    
    <br/>
    <button ng-model=\"btn_last_document\" id=\"btn_last_document\" class=\"btn_precedent\" >
        ";
        // line 29
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67d988a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_67d988a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/67d988a_btn_gauche_1.jpeg");
            // line 31
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Precedent\"/>
        ";
        } else {
            // asset "67d988a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_67d988a") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/67d988a.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Precedent\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "       
    </button>
    
   
    
    <button ng-model=\"btn_modif_document\" id=\"btn_modif_document\" class=\"btn_modifier\"  >
     ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 40
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
    ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cae2646") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "    </button>
    
    <button ng-model=\"btn_next_document\" id=\"btn_next_document\"  class=\"btn_suivant\"  value=\"suivant\" >
        ";
        // line 45
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "34537ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_34537ea_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/34537ea_droite_1.jpeg");
            // line 47
            echo "        <img class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Suivant\"/>
        ";
        } else {
            // asset "34537ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_34537ea") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/34537ea.jpeg");
            echo "        <img class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Suivant\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 49
        echo "    </button>
    <br/>
    
    
    <button ng-model=\"btn_valid_modif_document\" id=\"btn_valid_modif_document\"  class=\"btn_suivant\"  style=\"visibility: hidden\">
        ";
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aef7376_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 56
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
        // line 58
        echo "    </button>
    
    
    <button ng-model=\"btn_annuler_modif_document\" id=\"btn_annuler_document\" class=\"btn_annuler\" style=\"visibility: hidden\">
     ";
        // line 62
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 64
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
        // line 65
        echo "    
    </button>
    <form id=\"form_doc\" method='POST'>
    <br/>
    <br/>
    <b>Nom :</b>
    <br/><input id=\"lib_document\" type=\"text\" disabled=\"disabled\">
    <br/>
    <br/>
    <b>Lien :</b>
    <br/>
    <a id=\"lien_document\" href=\"..\"></a>
    <br/>
    <br/>
     <br/>
    <br/>
     
    <input  name=\"file_document\"   id=\"file_document\" type=\"file\" disabled=\"disabled\"> 
    <br/>
    <br/>
    <br/>
     
    <input id='id_document' type='hidden'>
    </form>
</div>    ";
        
        $__internal_b3a1ee093aa0178fc9c64a54e99cc8e57672e8b83ca5fcbc872f8c44de6b4160->leave($__internal_b3a1ee093aa0178fc9c64a54e99cc8e57672e8b83ca5fcbc872f8c44de6b4160_prof);

    }

    public function getTemplateName()
    {
        return "SIEDocumentBundle:Default:result_document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 65,  169 => 64,  165 => 62,  159 => 58,  145 => 56,  141 => 54,  134 => 49,  120 => 47,  116 => 45,  111 => 42,  97 => 40,  93 => 38,  85 => 32,  71 => 31,  67 => 29,  62 => 26,  58 => 17,  44 => 15,  40 => 13,  29 => 5,  22 => 2,);
    }
}
/* {# SIE/DocumentBundle/Resources/views/form/result_document.html.twig #}*/
/*  {% set lien_document = "http://127.0.0.1/debug/sie-/web/app_dev.php/equipement" %} */
/* */
/* <div  id="bloc_resultat_document" ng-controller="result_document_controller">*/
/*    <a href={{lien_document}}> <b class="titreSection" id='titreDocument'>Documents</b></a>*/
/*     <p id="lib_central_document" class="lib_central"></p>*/
/*     */
/* */
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/* <button ng-model="btn_ajout_document" id="btn_ajout_document" class="btn_ajout"  >*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'*/
/*        %}*/
/*        <img  class="img-background-button"    src="{{ asset_url }}"  alt="AJout"/>*/
/*     {% endimage %}*/
/*     </button>*/
/*     */
/*     {#*/
/*     <button ng-model="btn_sup_document" id="btn_sup_document" class="btn_sup"  >*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_supr.png'*/
/*        %}*/
/*        <img  class="img-background-button"    src="{{ asset_url }}"  alt="Supr"/>*/
/*     {% endimage %}*/
/*     </button>#}*/
/*     */
/*     <br/>*/
/*     <button ng-model="btn_last_document" id="btn_last_document" class="btn_precedent" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'*/
/*        %}*/
/*         <img  class="img-background-button"    src="{{ asset_url }}"  alt="Precedent"/>*/
/*         {% endimage %}       */
/*     </button>*/
/*     */
/*    */
/*     */
/*     <button ng-model="btn_modif_document" id="btn_modif_document" class="btn_modifier"  >*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'*/
/*        %}*/
/*        <img  class="img-background-button"    src="{{ asset_url }}"  alt="Modif"/>*/
/*     {% endimage %}*/
/*     </button>*/
/*     */
/*     <button ng-model="btn_next_document" id="btn_next_document"  class="btn_suivant"  value="suivant" >*/
/*         {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'*/
/*        %}*/
/*         <img class="img-background-button"    src="{{ asset_url }}"  alt="Suivant"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*     <br/>*/
/*     */
/*     */
/*     <button ng-model="btn_valid_modif_document" id="btn_valid_modif_document"  class="btn_suivant"  style="visibility: hidden">*/
/*         {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'*/
/*        %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="valider"/>*/
/*         {% endimage %}*/
/*     </button>*/
/*     */
/*     */
/*     <button ng-model="btn_annuler_modif_document" id="btn_annuler_document" class="btn_annuler" style="visibility: hidden">*/
/*      {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'*/
/*        %}*/
/*         <img class="img-background-button"   src="{{ asset_url }}"  alt="annuler"/>*/
/*         {% endimage %}    */
/*     </button>*/
/*     <form id="form_doc" method='POST'>*/
/*     <br/>*/
/*     <br/>*/
/*     <b>Nom :</b>*/
/*     <br/><input id="lib_document" type="text" disabled="disabled">*/
/*     <br/>*/
/*     <br/>*/
/*     <b>Lien :</b>*/
/*     <br/>*/
/*     <a id="lien_document" href=".."></a>*/
/*     <br/>*/
/*     <br/>*/
/*      <br/>*/
/*     <br/>*/
/*      */
/*     <input  name="file_document"   id="file_document" type="file" disabled="disabled"> */
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/*      */
/*     <input id='id_document' type='hidden'>*/
/*     </form>*/
/* </div>    */
