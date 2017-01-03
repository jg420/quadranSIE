<?php

/* SIEDocumentBundle:Default:result_document.html.twig */
class __TwigTemplate_dd36d6e769ecb4de8ee21dd9e6fcf2f842d580d10231cb54244e10d1d6b5d344 extends Twig_Template
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
        $__internal_47163f3d4fcc60a151887df6b9cf744ecd51cc600b0bbca47238d8605a39e68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47163f3d4fcc60a151887df6b9cf744ecd51cc600b0bbca47238d8605a39e68a->enter($__internal_47163f3d4fcc60a151887df6b9cf744ecd51cc600b0bbca47238d8605a39e68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIEDocumentBundle:Default:result_document.html.twig"));

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

<button ng-model=\"btn_ajout_document\" id=\"btn_ajout_document\" class=\"btn_ajout\"  >
     ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a935514_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514_btn_ajout_1.jpeg");
            // line 11
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
    ";
        } else {
            // asset "a935514"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a935514") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a935514.jpeg");
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"AJout\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    </button>
    
    ";
        // line 22
        echo "    
    <br/>
    <button ng-model=\"btn_last_document\" id=\"btn_last_document\" class=\"btn_precedent\" >
        ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67d988a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_67d988a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/67d988a_btn_gauche_1.jpeg");
            // line 27
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Precedent\"/>
        ";
        } else {
            // asset "67d988a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_67d988a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/67d988a.jpeg");
            echo "        <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Precedent\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "       
    </button>
    
   
    
    <button ng-model=\"btn_modif_document\" id=\"btn_modif_document\" class=\"btn_modifier\"  >
     ";
        // line 34
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cae2646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646_btn_modif_1.jpeg");
            // line 36
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
    ";
        } else {
            // asset "cae2646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cae2646") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/cae2646.jpeg");
            echo "       <img  class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Modif\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 38
        echo "    </button>
    
    <button ng-model=\"btn_next_document\" id=\"btn_next_document\"  class=\"btn_suivant\"  value=\"suivant\" >
        ";
        // line 41
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "34537ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_34537ea_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/34537ea_droite_1.jpeg");
            // line 43
            echo "        <img class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Suivant\"/>
        ";
        } else {
            // asset "34537ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_34537ea") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/34537ea.jpeg");
            echo "        <img class=\"img-background-button\"    src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"  alt=\"Suivant\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "    </button>
    <br/>
    
    
    <button ng-model=\"btn_valid_modif_document\" id=\"btn_valid_modif_document\"  class=\"btn_suivant\"  style=\"visibility: hidden\">
        ";
        // line 50
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aef7376_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aef7376_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/aef7376_btn_valider_1.jpeg");
            // line 52
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
        // line 54
        echo "    </button>
    
    
    <button ng-model=\"btn_annuler_modif_document\" id=\"btn_annuler_document\" class=\"btn_annuler\" style=\"visibility: hidden\">
     ";
        // line 58
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "02f85ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02f85ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/02f85ee_btn_annuler_1.jpeg");
            // line 60
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
        // line 61
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
        
        $__internal_47163f3d4fcc60a151887df6b9cf744ecd51cc600b0bbca47238d8605a39e68a->leave($__internal_47163f3d4fcc60a151887df6b9cf744ecd51cc600b0bbca47238d8605a39e68a_prof);

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
        return array (  179 => 61,  165 => 60,  161 => 58,  155 => 54,  141 => 52,  137 => 50,  130 => 45,  116 => 43,  112 => 41,  107 => 38,  93 => 36,  89 => 34,  81 => 28,  67 => 27,  63 => 25,  58 => 22,  54 => 13,  40 => 11,  36 => 9,  29 => 5,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# SIE/DocumentBundle/Resources/views/form/result_document.html.twig #}
 {% set lien_document = \"http://127.0.0.1/debug/sie-/web/app_dev.php/equipement\" %} 

<div  id=\"bloc_resultat_document\" ng-controller=\"result_document_controller\">
   <a href={{lien_document}}> <b class=\"titreSection\" id='titreDocument'>Documents</b></a>
    <p id=\"lib_central_document\" class=\"lib_central\"></p>

<button ng-model=\"btn_ajout_document\" id=\"btn_ajout_document\" class=\"btn_ajout\"  >
     {% image '@SIECoreBundle/Resources/public/images/btn_ajout.jpeg'
       %}
       <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"AJout\"/>
    {% endimage %}
    </button>
    
    {#
    <button ng-model=\"btn_sup_document\" id=\"btn_sup_document\" class=\"btn_sup\"  >
     {% image '@SIECoreBundle/Resources/public/images/btn_supr.png'
       %}
       <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Supr\"/>
    {% endimage %}
    </button>#}
    
    <br/>
    <button ng-model=\"btn_last_document\" id=\"btn_last_document\" class=\"btn_precedent\" >
        {% image '@SIECoreBundle/Resources/public/images/btn_gauche.jpeg'
       %}
        <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Precedent\"/>
        {% endimage %}       
    </button>
    
   
    
    <button ng-model=\"btn_modif_document\" id=\"btn_modif_document\" class=\"btn_modifier\"  >
     {% image '@SIECoreBundle/Resources/public/images/btn_modif.jpeg'
       %}
       <img  class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Modif\"/>
    {% endimage %}
    </button>
    
    <button ng-model=\"btn_next_document\" id=\"btn_next_document\"  class=\"btn_suivant\"  value=\"suivant\" >
        {% image '@SIECoreBundle/Resources/public/images/droite.jpeg'
       %}
        <img class=\"img-background-button\"    src=\"{{ asset_url }}\"  alt=\"Suivant\"/>
        {% endimage %}
    </button>
    <br/>
    
    
    <button ng-model=\"btn_valid_modif_document\" id=\"btn_valid_modif_document\"  class=\"btn_suivant\"  style=\"visibility: hidden\">
        {% image '@SIECoreBundle/Resources/public/images/btn_valider.jpeg'
       %}
        <img class=\"img-background-button\"   src=\"{{ asset_url }}\"  alt=\"valider\"/>
        {% endimage %}
    </button>
    
    
    <button ng-model=\"btn_annuler_modif_document\" id=\"btn_annuler_document\" class=\"btn_annuler\" style=\"visibility: hidden\">
     {% image '@SIECoreBundle/Resources/public/images/btn_annuler.jpeg'
       %}
        <img class=\"img-background-button\"   src=\"{{ asset_url }}\"  alt=\"annuler\"/>
        {% endimage %}    
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
</div>    ", "SIEDocumentBundle:Default:result_document.html.twig", "E:\\DEV\\quadranSIE\\src\\SIE\\DocumentBundle/Resources/views/Default/result_document.html.twig");
    }
}
