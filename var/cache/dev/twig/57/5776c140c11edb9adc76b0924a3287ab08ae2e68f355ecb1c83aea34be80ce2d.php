<?php

/* SIECoreBundle:Default:page_recherche_principale.html.twig */
class __TwigTemplate_bd1f36fc0f24ab3d2fb8d3e04e505b1314ad04122c46ed80b2f2102dd17b9ba9 extends Twig_Template
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
        $__internal_6141d2b6ec1f9c7ec08393bcfc0172122bccd89bc6571d0310b7b61bd96cee43 = $this->env->getExtension("native_profiler");
        $__internal_6141d2b6ec1f9c7ec08393bcfc0172122bccd89bc6571d0310b7b61bd96cee43->enter($__internal_6141d2b6ec1f9c7ec08393bcfc0172122bccd89bc6571d0310b7b61bd96cee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIECoreBundle:Default:page_recherche_principale.html.twig"));

        // line 2
        echo "  ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "da82b2d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d_front_search_1.js");
            // line 3
            echo "           ";
            // line 4
            echo "            ";
        } else {
            // asset "da82b2d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_da82b2d") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/da82b2d.js");
            // line 3
            echo "           ";
            // line 4
            echo "            ";
        }
        unset($context["asset_url"]);
        // line 5
        echo "<div id=\"bloc_recherche\" >
    <b class=\"titreSection\">Recherche</b>
    <br/>  
    <br/> 
    <b id=\"rubrique\">Nom de la central : </b>
    <br/>
    <div class=\"ui-widget\">
   <input  id=\"input_lib_central\"  />
   ";
        // line 14
        echo "  
    </div>
 ";
        
        $__internal_6141d2b6ec1f9c7ec08393bcfc0172122bccd89bc6571d0310b7b61bd96cee43->leave($__internal_6141d2b6ec1f9c7ec08393bcfc0172122bccd89bc6571d0310b7b61bd96cee43_prof);

    }

    public function getTemplateName()
    {
        return "SIECoreBundle:Default:page_recherche_principale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 5,  36 => 4,  34 => 3,  29 => 4,  27 => 3,  22 => 2,);
    }
}
/* {# SIE/CentralBundle/Resources/views/form/search.html.twig #}*/
/*   {% javascripts '@SIECoreBundle/Resources/public/js/front_search.js' %}*/
/*            {#     <script src="{{ asset_url }}"></script>          #}*/
/*             {% endjavascripts %}*/
/* <div id="bloc_recherche" >*/
/*     <b class="titreSection">Recherche</b>*/
/*     <br/>  */
/*     <br/> */
/*     <b id="rubrique">Nom de la central : </b>*/
/*     <br/>*/
/*     <div class="ui-widget">*/
/*    <input  id="input_lib_central"  />*/
/*    {#<input  ng-model="lib_central" id="input_lib_central"     type="text"   >#}*/
/*   */
/*     </div>*/
/*  */
